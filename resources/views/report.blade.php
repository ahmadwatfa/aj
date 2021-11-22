@extends('layouts.index')
@include('layouts.header')

@section('content')


            <div class="center">

                  <div class="float-R width-900">
                <div class="topTitle">
                    <span class="BGred height-36 width-12 visible float-R M-L15"></span>
                    <h2 class="FN-Z20 float-R FNred">التقارير السنوية</h2>
                    <div class="clear M-B20"></div>

                        @foreach ($report as $rep)
                            
                        
                           <div class="float-R M-B15 M-L10 border-B1" style="width: 48.5%;background-color: #FBFBFB;"> 
                             <img class="float-R M-L10" src="{{asset('image/logo.png')}}" width="120" height="120" alt="" title="">
                             <a target="_blank" href="{{route('file' , $rep->id )}}">
                                <h3 class="FN-Z14 FNRegular FNred" style="padding: 6px;">{{$rep->name}}</h3>
                            </a><center>
                                <a target="_blank" href="{{route('file' , $rep->id )}}">
                                    <img style="padding-top: 10px;" src="{{asset('image/download-icon.png')}}" width="64" height="64" alt="">
                                </a></center>
                            </div>
                            @endforeach
                           

                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <!-- /topTitle -->

    <div class="pagination" style="text-align: center; margin: 10px; color: #333; font-weight: bold;">

    {{-- <a class="btn2 FNBold FN-Z12" style="padding: 5px; margin: 1px; ">1</a> --}}
{{-- 
    <a class="btn FNBold FN-Z12" style="padding: 5px; margin: 1px; " href="reports/2/2">التالي</a>
    <a class="btn FNBold FN-Z12" style="padding: 5px; margin: 1px;  " href="reports/2/3">الأخيرة</a> --}}
      <br><br>
      </div>

            </div>






            <!-- /.float-R -->

           
            <div class="clear M-B20"></div>



        </div>
       &#xFEFF;  <div class="clear"></div>












@endsection
