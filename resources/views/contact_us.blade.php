@extends('layouts.index')
@include('layouts.header')

@section('content')

    <body class="rtl page-template page-template-contact-us page-template-contact-us-php page page-id-175"
        data-new-gr-c-s-check-loaded="14.1029.0" data-gr-ext-installed="">
        <main id="content" class="narrowcolumn">
            <div class="container-fluid">

                <div id="contact">

                    <div class="row">
                        <div class="center">
                            <div class="col-md-12 pad-r no-pad-l">
                                <p style="
                                        font-size: 23px;
                                        font-weight: 800;
                                        text-align: center;
                                        color: darkred;
                                    ">اتصل بنا </p>

                                <div class="contact-content">
                                    <div class="col-md-7">
                                        {{-- <address class="vcard" style="
                                                margin-top: 44px;"> --}}
                                             
                                               
                                                 
                                                
                                            <p>المقر الرئيسي : غزة، حي الشعف، شارع الأيبكي – عمارة جندية، الطابق الثاني. </p>
                                            <p style=" padding-left: 45px !important;">مركز فرح : غزة، حي الشعف، عمارة الجمال، الطابق الأرضي. </p>
                                            <p> حاضنة الاعمال : غزة، تل الهوا، بالقرب من مطعم سيدار، عمارة أبو يوسف النجار، الطابق 3 </p>
                                            <p><span style="direction: ltr;display: inline-block;"> تليفون :  82839559</span></p>
                                            <p><span style="direction: ltr;display: inline-block;"> جوال :  0599575591</span></p>
                                            <p><span style="direction: ltr;display: inline-block;">  e.ajyal@gmail.com : البريد الإلكتروني</span></p>
                                            <p><span style="direction: ltr;display: inline-block;">  complaints.ajyal@gmail.com : بريد الشكاوى</span></p>
                                          
                                          
                                        </address>
                                        <!-- /.address -->
                                        <div class="social">
                                            <a href="https://www.facebook.com/Ajyal.aacd/" target="_blank">


                                                <i class="fa fa-facebook cycle" aria-hidden="true"></i>
                                            </a>

                                          
                                          

                                           
                                        </div>
                                    

                                    </div>
                                    <!-- /.col-md-7 -->
                                    <div class="col-md-5 forms">
                                        <div role="form" class="wpcf7" id="wpcf7-f174-p175-o1" lang="ar" dir="rtl">

                                            <form action="{{ route('contact.store') }}" method="post"
                                                class="wpcf7-form">
                                                @csrf

                                                <div class="form-group">
                                                    <label><br>
                                                        الاسم<span>*</span><br>
                                                    </label><br>
                                                    <span class="wpcf7-form-control-wrap your-name"><input type="text"
                                                            name="name" value="" size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                            id="focusedInput" aria-required="true" aria-invalid="false"
                                                            placeholder="الاسم ..."></span>
                                                </div>
                                                <div class="form-group ">
                                                    <label><br>
                                                        البريد الإلكتروني<span>*</span><br>
                                                    </label><br>
                                                    <span class="wpcf7-form-control-wrap your-email"><input type="email"
                                                            name="email" value="" size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
                                                            id="email" aria-required="true" aria-invalid="false"
                                                            placeholder="example@example.com"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label><br>
                                                        الموضوع<span>*</span><br>
                                                    </label><br>
                                                    <span class="wpcf7-form-control-wrap your-subject"><input type="text"
                                                            name="subject" value="" size="40"
                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                            id="focusedInput2" aria-required="true" aria-invalid="false"
                                                            placeholder="الموضوع ..."></span>
                                                </div>
                                                <div class="form-group">
                                                    <label><br>
                                                        الرسالة<span>*</span><br>
                                                    </label><br>
                                                    <span class="wpcf7-form-control-wrap your-message">
                                                        <textarea name="message" cols="40" rows="10"
                                                            class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control"
                                                            id="comment" aria-required="true" aria-invalid="false"
                                                            placeholder="الرسالة..."
                                                            style="color = 'black'"></textarea></span>
                                                </div>

                                                <p> <input type="submit" value="ارسال"
                                                        class="wpcf7-form-control wpcf7-submit btn-default nice"><br>
                                                    <!-- input:submit -->
                                                </p>

                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.col-md-5 -->
                                </div>
                                <!-- /.contact-content -->
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row-fluid -->
                    </div>
                    <!-- #contact -->
                </div>
                <!-- /.container-fluid -->
                <!-- /.container-fluid -->
        </main>
        <!-- /#content -->




        {{-- <style>
 p {
        font-size: 22px;
    color: darkred;
    font-weight: 700;
    text-align: center;
    }
</style> --}}


    @endsection
