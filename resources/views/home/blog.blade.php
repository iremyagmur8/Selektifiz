@extends('layouts.app', ['dark' => 1])
@section('content')

    @php
        use App\Http\Controllers\HomepageController
    @endphp
    <section id="page-content">
        <div class="container">
            <div class="page-title m-b-50">
                <h1>Blog</h1>
            </div>
            <div id="blog" class="grid-layout post-2-columns m-b-30" data-item="post-item">
                @foreach($cData->posts as $key=>$val)
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image"><a href="/blog/{{str_slug($val->title,"-")}}/{{$val->id}}"><img alt="" src="{{Storage::url("images/userfiles/". $val->files[0]->file)}}"></a></div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{$val->publishtime}}</span>
                                <h2><a href="/blog/{{str_slug($val->title,"-")}}/{{$val->id}}">{!! $val->title !!}</a></h2>
                                <p>{!! $val->shortdescription !!}</p>
                                <a href="/blog/{{str_slug($val->title,"-")}}/{{$val->id}}" class="item-link">Devamını Oku <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> <!-- end: Content -->
@endsection
