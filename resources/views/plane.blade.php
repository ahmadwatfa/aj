@extends('layouts.index')
@include('layouts.header')

@section('content')



   <body data-new-gr-c-s-check-loaded="14.1031.0" data-gr-ext-installed="" style="">

    <div class="center">
    
                    <!-- /Ads -->

                    <div class="float-R width-900">





                        <div class="topTitle">

                            <span class="BGred height-36 width-12 visible float-R M-L15"></span>

                            <h2 class="FN-Z20 float-R FNred "> خطتنا الاستراتيجية</h2>

                            <div class="clear M-B20"></div>

                            <div class="width-900 float-R FNGreta  FN-Z16 FNgray" style=" line-height: 28px;">

                                <div class="clear"></div>

                            @foreach ($plane as $plan)
                                
                           
                                    <p class="FNGreta FN-Z16 FNgray textAlg-J textDesc">{!!$plan->plane!!}</p>
                                    @endforeach
                                    <div class="clear"></div>

                            </div>

                            <div class="clear"></div>

                        </div>



                        <div class="clear"></div>

                        <!-- /topTitle -->







                    </div>

                    <!-- /.float-R -->



                

                    <div class="clear M-B20"></div>







                </div>

           <div class="clear"></div>

@endsection