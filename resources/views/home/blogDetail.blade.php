@extends('layouts.app')
@section('title','')
@section('desc','')
@section('content')
    <section id="page-title" class="page-title-center text-light"
             style="background-image:url({{Storage::url("images/userfiles/". $cData->data->files[0]->file)}});background-position: center center;background-size: cover;background-repeat: no-repeat">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="page-title">
                @isset($cData->data->title) <h1>{{$cData->data->title}}</h1> @endisset
                @isset($cData->data->created_at)<div class="small m-b-20">{{ $cData->data->created_at->format('M d, Y') }} | <a href="#">by Prosper Global Consulting</a></div> @endisset
            </div>
        </div>
    </section>

    <section id="page-content" class="sidebar-right m-t-50">
        <div class="container">
            <div id="blog" class="single-post col-lg-10 center">
                <!-- Post single item-->
                <div class="post-item">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                @isset($cData->data->files[0]->file)<img alt="" src="{{Storage::url("images/userfiles/". $cData->data->files[0]->file)}}"> @endisset
                            </a>
                        </div>
                        <div class="post-item-description">
                            @isset($cData->data->description )  {!! $cData->data->description !!} @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
