@extends('layouts.index')


@section('content')

    <body class="rtl home blog hfeed" data-new-gr-c-s-check-loaded="14.1029.0" data-gr-ext-installed="" style="zoom: 1;" >
        <!-- .wrap -->
        <div id="wrap">
            <!-- #header -->
            <header id="header" >
                <div id="top-bar">
                </div>
                <!-- #top-bar -->
                <div class="header-content">
                    <div class="container-fluid">
                        @include('layouts.slide')
                    </div>
                    <!-- /.Container-fluid -->
                </div>

            </header>
            <!-- /#header -->


            <div id="top-latest-news">

                <div class="container-fluid pad-r pad-l">



                    <!-- /.latest-content -->

                </div>

                <!-- /.container-fluid -->

            </div>


            <!-- #top-latest-news -->



            <!-- #content -->

            <main id="content" class="narrowcolumn">

                <div class="container-fluid">

                    <div class="row">
                        
                            
                       
                        <div class="col-md-12 pad-r no-pad-l">




                            <!-- /.Slider -->

                            <section class="botom-latest-news">

                                <div class="nice-box">

                                    <div class="light-boxt"></div>

                                    <div class="dark-boxt"></div>

                                    <div class="light-box"></div>

                                    <div class="dark-box"></div>

                                </div>

                                <!-- /.noce-box -->

                                <div class="title-bar">

                                    <h3>اخر الأخبار</h3>

                                </div>

                                <!-- /.title-bar -->
                                @foreach ($activities as $active)

                                <div class="news-box">

                                    <div class="row">

                                        <div class="col-sm-3 col-xs-12">

                                            <img height="200" style="max-width: 100%" src="{{asset('storage/' . $active->image)}}">

                                        </div>

                                        <!-- col-md-3 -->

                                        <div class="col-sm-8 col-xs-12" style="overflow: hidden">

                                           

                                                <h4>{{$active->title}}</h4>

                                          

                                            <p >{!! \Illuminate\Support\Str::limit($active->description ,  200 , '...') !!}</p>

                                            <a href="{{route('active' , $active->id)}}"
                                             class="pull-left nice" >

                                                إقرأ المزيد

                                            </a>

                                        </div>
                                        
                                        <!-- /.col-md-8 -->

                                    </div>

                                    <!-- /.row -->

                                </div>

                                <!-- /.news-box -->

                                @endforeach
                                
                                <div style="float: left; overflow:hidden ;" > {{ $activities->links() }} </div>
                                <div class="clear"></div>
                            </section>
                            <!-- /.botom-latest-news -->

                            <section class="doners">

                                <div class="nice-box">

                                    <div class="light-boxt"></div>

                                    <div class="dark-boxt"></div>

                                    <div class="light-box"></div>

                                    <div class="dark-box"></div>

                                </div>

                                <!-- /.noce-box -->

                                <div class="title-bar">

                                    <h3>الشركاء</h3>
                                </div>

                                <div class="doner-logo">
                                    
                                   @include('partner')

                                </div>

                                <!-- /.doner-logo -->

                            </section>
                            <!-- /.doners -->


                          



                            <!-- /.subscribe -->

                        </div>
                        
                    </div>

                    <!-- /.row-fluid -->

                </div>

                <!-- /.container-fluid -->

            </main>

            <!-- /#content -->
            <!-- /#footer -->
        </div>
    </body>
    <grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

    </html>


@endsection
