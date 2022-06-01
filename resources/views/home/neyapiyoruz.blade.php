@extends('layouts.app', ['dark' => 1])
@section('content')

    @php
        use App\Http\Controllers\HomepageController
    @endphp

    <section id="page-title"
             @isset($cData->category->files[0]->file) data-bg-parallax="{{Storage::url("images/userfiles/". $cData->category->files[0]->file)}}" @endisset>
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="page-title">
                @isset($cData->category->title)<h1
                    class="text-uppercase text-medium">{!! $cData->category->title !!}</h1>@endisset
            </div>
        </div>
    </section>
    <div class="container m-t-50">
        <div class="text-center text-medium">
            @isset($cData->category->shortdescription)
                <p>
                    {!! $cData->category->shortdescription !!}
                </p>
            @endisset
        </div>
    </div>
    <div class="container">
        @isset($cData->place[3])
            @foreach($cData->place[3] as $key=>$val)
                <img src="{{Storage::url('/images/userfiles/' . $val->files[0]->file)}}" width="100%" alt="">
            @endforeach
        @endisset
    </div>
    <section class="box-fancy section-fullwidth text-light">
        <div class="row">
            @php($f=0)
            @foreach($cData->posts as $key=>$val)
                @php($f++)
                @if($loop->iteration % 2 == 0)
                    <div style="background-color: #3D4045" class="col-lg-4">
                        <h1 class="text-lg text-uppercase">0{{$f}}</h1>
                        <h3>{!! $val->title !!}</h3>
                        <span>{!! $val->description !!}</span>
                    </div>
                @else

                    <div style="background-color: #505358" class="col-lg-4">
                        <h1 class="text-lg text-uppercase">0{{$f}}</h1>
                        <h3>{!! $val->title !!}</h3>
                        <span>{!! $val->description !!}</span>
                    </div>
                @endif
            @endforeach
        </div>
    </section>

@endsection
