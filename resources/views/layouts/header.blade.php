<link rel="shortcut icon" href="{{asset('image/icon.png')}}" type="image/x-icon">
<header style="min-height: 212px">


    <div>
        
        <ul id="menu" class="FN-Z15 FNBold">
            <li href="home" class="logo"> <img id="logo-img" src="{{ asset('/image/logo.png') }}" /></li>

            <li><a href="{{ route('index') }}">الرئيسية</a></li>
            <li><a href="{{ route('about') }}">عن أجيال</a></li>
            <li><a href="{{ route('plane') }}">الخطة الاستراتيجية</a></li>
            <li><a href="{{ route('report') }}">التقارير</a></li>
            <li><a href="{{ route('staff') }}">هيكلية المؤسسة</a></li>
            <li><a href="{{ route('contact') }}">إتصل بنا</a></li>
        </ul>
        
    </div>
    <!-- /.center -->
    <style>
        #menu li a {
            display: block;
            padding: 5px 10px;
            color: #231f20;
            font-weight: 900;
            font-size: 18px;
            font-family: 'Cairo';
        }

        h2 {
            font-family: 'Cairo';
        }

    </style>
</header>
