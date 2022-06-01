@extends('layouts.app')
@section('title', '')
@section('desc','')
@section('content')

    @php
        use App\Http\Controllers\HomepageController
    @endphp

    <section id="page-title"
             @isset($cData->category->files[0]->file)  style="background-image:url({{Storage::url("images/userfiles/".  $cData->category->files[0]->file)}});
                 background-size: cover;background-repeat: no-repeat;background-position: center center;" @endisset>
        <div class="container">
            <div class="page-title">
                @isset($cData->data->link)  <span class="post-meta-category text-light"><a
                        href="">{!! $cData->data->link !!}</a></span>@endisset

                <div data-animate="fadeIn">
                    @isset($cData->data->title)<h1>{!! $cData->data->title !!}</h1> @endisset
                </div>
                <div class="portfolio-attributes style1">
                    <div class="attribute" data-animate="fadeInUp" data-animate-delay="1200">
                        {{ $cData->data->created_at->format('M d, Y') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Page title -->
    <!-- Content -->
    <section id="page-content" class="p-b-0">
        <div class="container">
            @isset($cData->data->shortdescription)
                <div class="row m-b-40">
                    <div class="col-lg-12">
                        <div class="text-center m-b-60">
                            <div class="heading-text heading-line text-center text-uppercase">
                                <h4>Proje Detayı</h4>
                            </div>
                            <p>{!! $cData->data->shortdescription !!}</p>
                        </div>
                    </div>
                </div>
            @endisset
            <div class="grid-layout grid-2-columns" data-item="grid-item" data-margin="30"
                 data-lightbox="gallery">
                @if($cData->data)
                    @if(count($cData->data->files)>1)
                        @foreach($cData->data->files as $fKey=>$fVal)
                            <div class="grid-item">
                                <a title="{{$fVal->title}}" data-lightbox="gallery-image"
                                   href="{{Storage::url("images/userfiles/". $fVal->file)}}">
                                    <img src="{{Storage::url("images/userfiles/". $fVal->file)}}">
                                </a>
                            </div>
                        @endforeach
                    @else
                        <div class="grid-item large-width">
                            <a title="{{$cData->data->title}}" data-lightbox="gallery-image"
                               href="{{Storage::url("images/userfiles/". $cData->data->files[0]->file)}}">
                                <img src="{{Storage::url("images/userfiles/". $cData->data->files[0]->file)}}">
                            </a>
                        </div>
                    @endif
                @endif
            </div>
        </div>
        <div class="post-navigation">
            @if($cData->previous)
                <a href="/projects/{{str_slug($cData->previous->title,"-")}}/{{$cData->previous->id}}"
                   class="post-prev">
                    <div class="post-prev-title"><span>Önceki</span>{!! $cData->previous->title !!}</div>
                </a>
            @endif
            @if($cData->next)
                <a href="/projects/{{str_slug($cData->next->title,"-")}}/{{$cData->next->id}}" class="post-next">
                    <div class="post-next-title"><span>Sonraki</span>{!! $cData->next->title !!}</div>
                </a>
            @endif
        </div>

    </section> <!-- end: Content -->

@endsection
