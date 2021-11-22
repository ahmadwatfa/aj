@extends('layouts.index')
@include('layouts.header')

@section('content')



   <body data-new-gr-c-s-check-loaded="14.1031.0" data-gr-ext-installed="" style="">

    <div class="center">
    
                    <!-- /Ads -->

                 
        <div class="float-R width-900">

           

            <div class="topTitle">
                <span class="BGred height-36 width-12 visible float-R M-L15"></span>
                <h2 class="FN-Z20 FNBold float-R FNred">عن أجيال</h2>
                <div class="clear M-B20"></div>
                <div class="width-900 float-R FNGreta  FN-Z16 FNgray" style=" line-height: 28px;">

                    @foreach ($about as $ab)
                    <div class="clear"></div>
                    <div class="float-L width-440 M-B15 M-R20">

                        <img src="{{ asset('storage/' . $ab->image) }}" width="350px" height="350px" />
                    </div>
                    <p class="FNGreta FN-Z16 FNgray textAlg-J textDesc"> {!! $ab->description !!}</p>


                    @endforeach
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <!-- /topTitle -->



        </div>







                </div>

           <div class="clear"></div>

@endsection