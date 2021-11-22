<link rel="shortcut icon" href="{{ asset('image/icon.png') }}" type="image/x-icon">

<header>
    <div class="bgmenu BGwhite"></div>
    <div class="bgslide BGdred opacity90"></div>




    {{-- <div class="linetatrez opacity80"></div> --}}
    <div class="slidebg"></div>
    <div class="center">

        <ul id="menu" class="FN-Z15 FNBold">
            <li href="home" class="logo"> <img id="logo-img" src="{{ asset('/image/logo.png') }}" /></li>
            <li><a href="{{ route('index') }}">الرئيسية</a></li>
            <li><a href="{{ route('about') }}">عن أجيال</a></li>
            <li><a href="{{ route('plane') }}">الخطة الاستراتيجية</a></li>
            <li><a href="{{ route('report') }}">التقارير</a></li>
            <li><a href="{{ route('staff') }}">هيكلية المؤسسة</a></li>
            <li><a href="{{ route('contact') }}">إتصل بنا</a></li>
        </ul>

        <div id="slide" style="top: 212px">
            @foreach ($main_slider as $m_sl)


                <a href="{{ route('active', $m_sl->id) }}" class="s1">
                    <h2 class="FNBold FN-Z18">{{ $m_sl->title }}</h2>
                    <!--<div class="bgcolor"></div>-->
                    <img src="{{ asset('storage/' . $m_sl->image) }}" alt="{{ $m_sl->title }}"
                        title="{{ $m_sl->title }}" width="600" height="336">
                </a>
            @endforeach
            <div class="s2">
                @foreach ($slider as $sl)
                    <a href="{{ route('active', $sl->id) }}" class="s3">
                        <h2 class=" FN-Z18">{{ $sl->title }}</h2>
                        <!--<div class="bgcolor2"></div>--> <img src="{{ asset('storage/' . $sl->image) }}"
                            alt="{{ $sl->title }}" title="{{ $sl->title }}" width="250" height="168">
                    </a>
                @endforeach
                <a class="s3">
                    <h2 class="FNGreta FN-Z18"></h2>
                    <!--<div class="bgcolor2"></div>-->
                </a>
            </div>
            <div class="s2">
                @foreach ($last_slider as $l_sl)
                    <a href="{{ route('active',  $l_sl->id) }}" class="s3">
                        <h2 class=" FN-Z18">{{ $l_sl->title }}</h2>
                        <!--<div class="bgcolor2"></div>--> <img src="{{ asset('storage/' . $l_sl->image) }}"
                            alt="{{ $l_sl->title }}" title="{{ $l_sl->title }}" width="250" height="168">
                    </a>
                @endforeach
                <a class="s3">
                    <h2 class="FNGreta FN-Z18"></h2>
                    <!--<div class="bgcolor2"></div>-->
                </a>
            </div>


{{-- 
            <div class="s4 float-R M-R10">
                @foreach ($last_slider as $l_sl)
                    <a href="{{ route('active', $l_sl->id) }}"><img src="{{ asset('storage/' . $l_sl->image) }}"
                            width="200" height="169"></a>
                @endforeach
            </div> --}}
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

    .container-fluid {
        padding-right: 0px !important;
    }

    * {
        text-align: right
    }

</style>
<div class="headerpicdown"></div>
<div class="center">
