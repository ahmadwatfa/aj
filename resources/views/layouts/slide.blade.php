<header>
    <div class="bgmenu BGwhite"></div>
    <div class="bgslide BGdred opacity90"></div>
    <div class="linetatrez opacity80"></div>
    <div class="slidebg"></div>
    <div class="center">
       {{-- <a href="home">	<div id="logo"><h1>طاقم شؤون المرأة</h1></div></a> --}}
        <!-- /#logo -->
        <div id="Ssocial">
         
            <div class="media">
                <a href="https://twitter.com/WATCPal" class="twitter" title="Twitter"></a>
                <a href="https://www.facebook.com/WATCPAL/?fref=ts>" class="facebook" title="Facebook"></a>
                <a href="https://plus.google.com/u/0/115401034300149826013/posts" class="google" title="Google+"></a>
                <a href="https://www.youtube.com/channel/UCpTuMfNmIdUPDd-6xk_yzgQ/videos" class="youtube" title="YouTube"></a>
                <a href="https://soundcloud.com/user-262418958" class="sound" title="SoundCloud"></a>
            </div>

        </div>
        <!-- /#Ssocial -->


        <ul id="menu" class="FN-Z15 FNBold">
            <li><a href="{{route('index')}}">الرئيسية</a></li>
            <li><a href="{{route('about')}}">عن أجيال</a></li>
            <li><a href="{{route('plane')}}">الخطة الاستراتيجية</a></li>
            <li><a href="{{route('report')}}">التقارير</a></li>
            <li><a href="{{route('staff')}}">هيكلية المؤسسة</a></li>
            <li><a href="{{route('contact')}}">إتصل بنا</a></li>
        </ul>
        
        <div id="slide" style="top: 212px">
            @foreach ($main_slider as $m_sl)
                
           
                       <a href="" class="s1">
                            <h2 class="FNBold FN-Z18">{{$m_sl->title}}</h2>
                            <!--<div class="bgcolor"></div>-->
                       <img src="{{asset('storage/' . $m_sl->image)}}" alt="{{$m_sl->title}}" title="{{$m_sl->title}}" width="600" height="336">
                        </a>
                        @endforeach
                                      <div class="s2">
                                        @foreach ($slider as $sl)
                        <a href="" class="s3">
                            <h2 class=" FN-Z18">{{$sl->title}}</h2>
                            <!--<div class="bgcolor2"></div>-->    <img src="{{asset('storage/' . $sl->image)}}" alt="{{$sl->title}}" title="{{$sl->title}}" width="300" height="168">     </a>
                            @endforeach
                        <a  class="s3">
                            <h2 class="FNGreta FN-Z18"></h2>
                            <!--<div class="bgcolor2"></div>-->        </a>
                                     </div>



            <div class="s4 float-R M-R10">
                @foreach ($last_slider as $l_sl)
                <a target="" href=""><img src="{{asset('storage/' . $l_sl->image)}}" width="222" height="169"></a>
                @endforeach
            </div>
            <div class="clear"></div>
        </div>
        <!-- /slide -->
    </div>
    <!-- /.center -->

</header>
<style>
    #menu li a {
        display: block;
        padding: 5px 10px;
        color: #231f20;
        font-weight: 900;
        font-size: 18px;
        font-family: 'Cairo';
    }
    .container-fluid{
        padding-right: 0px !important ;
    }
    *{text-align: right}
    </style>
<div class="headerpicdown"></div>&#xFEFF;	<div class="center">
