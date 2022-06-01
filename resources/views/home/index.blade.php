@extends('layouts.app')
@section('title','')
@section('desc','')
@section('content')
    @php
        use App\Http\Controllers\HomepageController
    @endphp
    <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">
        <!-- Slide 1 -->
        @isset($cData->place[1])
            @foreach($cData->place[1] as $key=>$val)
                <div class="slide kenburns"
                     @isset($val->files[0]->file) @if(pathinfo($val->files[0]->file, PATHINFO_EXTENSION) == 'mp4')  data-bg-video="{{Storage::url("images/userfiles/". $val->files[0]->file)}}"
                     @else data-bg-image="{{Storage::url("images/userfiles/". $val->files[0]->file)}}" @endif @endisset>
                    <div class="bg-overlay"></div>

                    <div class="container">
                        <div class="slide-captions text-center text-light">
                            @isset($val->title)
                                <h1 class="slider-head" data-animate="fadeInUp" data-animate-delay="600">
                                    {!! $val->title !!}
                                </h1>
                            @endisset

                        </div>
                    </div>
                </div>
        @endforeach
    @endisset
    <!-- end: Slide 1 -->
    </div>

    <section class="m-t-50">
        <div class="container">
            <!-- <div class="text-center ">
                 <div class="heading-text heading-line text-center text-uppercase">
                     <h4>Ne yapıyoruz?</h4>
                 </div>
             </div>-->
            <div class="row">
            <!-- <div class="col-lg-4 p-t-50">
                    @foreach($cData->neyapiyoruz as $key=>$val)
                @if($loop->iteration % 2 == 0)
                    <div class="icon-box icon-box-right effect medium border small animated fadeInLeft visible"
                         data-animate="fadeInLeft" data-animate-delay="200">
@if($val->tag)
                        <div class="icon">
                            <a href="#"><i class="{!! $val->tag !!}"> </i></a>
                                    </div>
                                @endif
                        <h3>{!! $val->title !!}</h3>
                                <p>{!! $val->shortdescription !!}</p>
                            </div>
                        @endif
            @endforeach
                </div> -->
                <div class="col-lg-12 text-center animated fadeInUp visible" data-animate="fadeInUp"
                     data-animate-delay="100">
                    @isset($cData->place[2])
                        @foreach($cData->place[2] as $key=>$val)
                            <img alt="img" class="center-block" width="100%"
                                 src="{{Storage::url("images/userfiles/". $val->files[0]->file)}}">
                        @endforeach
                    @endisset
                </div>
            <!--  <div class="col-lg-4 p-t-80">
                    @foreach($cData->neyapiyoruz as $key=>$val)
                @if($loop->iteration % 2 == 1)
                    <div class="icon-box effect medium border small animated fadeInRight visible"
                         data-animate="fadeInRight" data-animate-delay="200">
@if($val->tag)
                        <div class="icon">
                            <a href="#"><i class="{!! $val->tag !!}"> </i></a>
                                    </div>
                                @endif
                        <h3>{!! $val->title !!}</h3>
                                <p>{!! $val->shortdescription !!}</p>
                            </div>
                        @endif
            @endforeach
                </div>
                                   -->

            </div>
        </div>
    </section>
    @isset($cData->place[4])
        @foreach($cData->place[4] as $key=>$val)
            <container>
                <img src="{{Storage::url('/images/userfiles/' . $val->files[0]->file)}}" alt="" width="100%">
            </container>

        @endforeach
    @endisset
    <div class="post-video mt-5">
        @isset($cData->place[5])
            @foreach($cData->place[5] as $key=>$val)
                <iframe width="560" height="315" src="https://www.youtube.com/embed/{!! $val->video !!}"
                        frameborder="0" allowfullscreen></iframe>
            @endforeach
        @endisset
    </div>


    <div class="seperator"><i class="icon-arrow-down"> </i></div>

    <!-- ABOUT -->
    <section id="nasil-yapiyoruz" class="background-image "
             @if($cData->nasilyapiyoruz->files[0]->file) style="background-image:url({{Storage::url("images/userfiles/". $cData->nasilyapiyoruz->files[0]->file)}});" @endif>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-6" data-animate="fadeIn">
                    <div class="m-b-60">
                        <div class="heading-text heading-line text-uppercase">
                            @isset($cData->nasilyapiyoruz->title)
                                <h4>{!! $cData->nasilyapiyoruz->title !!}</h4>
                            @endisset
                        </div>
                    </div>
                    @isset($cData->nasilyapiyoruz->description)
                        <p>
                            {!! $cData->nasilyapiyoruz->description !!}
                        </p>
                    @endisset
                </div>

            </div>
        </div>
    </section>
    <div class="seperator"><i class="icon-arrow-down"> </i></div>

    <section class="m-t-50" id="biz-kimiz">
        <div class="container text-center">
            <div class="text-center m-b-60">
                <div class="heading-text heading-line text-center text-uppercase">
                    @isset($cData->bizkimiz->title)
                        <h4>{!! $cData->bizkimiz->title !!}</h4>
                    @endisset
                </div>
            </div>
            @isset($cData->bizkimiz->description)
                <p class="lead text-center">
                    {!! $cData->bizkimiz->description !!}</p>
            @endisset
        </div>
    </section>
    <div class="seperator"><i class="icon-arrow-down"> </i></div>

    <!-- <section id="section3" style="padding-top:300px;padding-bottom:300px"
              data-bg-parallax="https://selektifiz.com/wp-content/uploads/2020/09/yaraticilik-gorseli.jpg">
         <div class="parallax-container img-loaded"
              data-bg="https://selektifiz.com/wp-content/uploads/2020/09/yaraticilik-gorseli.jpg" data-velocity="-.140"
              style="background: url(&quot;https://selektifiz.com/wp-content/uploads/2020/09/yaraticilik-gorseli.jpg;) -364.98px;"
              data-ll-status="loaded"></div>

     </section> -->

    <section class="p-b-0" id="portfolyomuz">
        <div class="heading-text heading-line text-center text-uppercase">
            <h4>Portfolyomuz</h4>
        </div>
        <div class="container-fluid">
            <div class="portfolio">

                <!-- Portfolio Filter -->
                <nav class="grid-filter gf-creative" data-layout="#portfolio">
                    <ul>
                        <li class="active"><a href="#" data-category="*">Tümü</a></li>
                        <li><a href="#" data-category=".dergigazete">Dergiler & Gazeteler</a></li>
                        <li><a href="#" data-category=".euro2012">Euro 2012</a></li>
                        <li><a href="#" data-category=".icedergi">ICE Dergi</a></li>
                        <li><a href="#" data-category=".ayliksayi">iFest Aylık Sayılar</a></li>
                        <li><a href="#" data-category=".filmfestival">iFest Film Festivali</a></li>
                        <li><a href="#" data-category=".muzikfestival">iFest Müzik Festivali</a></li>
                        <li><a href="#" data-category=".sabancimuze">Sabancı Müzesi</a></li>

                    </ul>
                </nav>
                <!-- Portfolio -->
                <div id="portfolio" class="grid-layout portfolio-4-columns grid-loaded" data-margin="20"
                     style="margin: 0px -20px -20px 0px; position: relative; height: 843.547px;">
                    @if($cData->portfolyo)
                        @foreach($cData->portfolyo as $key=>$val)
                            <div class="portfolio-item {{$val->tag}}"
                                 onclick="location.href='/projects/{{str_slug($val->title,"-")}}/{{$val->id}}'"
                                 style="padding: 0px 20px 20px 0px; position: absolute; left: 315.5px; top: 0px;">
                                <div class="portfolio-item-wrap">
                                    @if(count($val->files)>1)
                                        <div class="portfolio-slider">
                                            <div class="carousel dots-inside-bottom arrows-only arrows-light dots-light"
                                                 data-items="1" data-loop="true" data-autoplay="true"
                                                 data-autoplay="1800">
                                                @foreach($val->files as $fKey=>$fVal)
                                                    <a href="/projects/{{str_slug($val->title,"-")}}/{{$val->id}}"><img
                                                            src="{{Storage::url("images/userfiles/". $fVal->file)}}"
                                                            alt=""></a>
                                                @endforeach

                                            </div>
                                        </div>
                                    @else
                                        <div class="portfolio-image">
                                            <a href="/projects/{{str_slug($val->title,"-")}}/{{$val->id}}"><img
                                                    src="{{Storage::url("images/userfiles/". $val->files[0]->file)}}"
                                                    alt=""></a>
                                        </div>
                                    @endif
                                    <div class="portfolio-description">
                                        <a href="">
                                            <h3>{!! $val->title !!}</h3>
                                            <span>{!! $val->link !!}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif


                    <div class="grid-loader"></div>
                </div>
                <!-- end: Portfolio -->
            </div>
        </div>
    </section>


@endsection
