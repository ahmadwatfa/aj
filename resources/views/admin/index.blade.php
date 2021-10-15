@extends('admin.layout.admin')


@section('main')
    <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 166px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>

                لوحة التحكم
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <style>
                .info-box-text {
                    font-size: 14px;
                    margin-top: 12px;
                    font-weight: bold;
                }

                .info-box-number {
                    font-size: 24px;
                }

            </style>
            <!-- Info Boxes Style 2 -->
           





            <!-- Main row -->
            <div class="row">
                <!-- Left col -->

                <section class="col-lg-12 connectedSortable ui-sortable">

                    <div class="box box-navy">
                        <div class="box-header with-border ui-sortable-handle" style="cursor: move;">
                            <i class="fa fa-tasks"></i>
                            <h3 class="box-title">قائمة الرسائل </h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                    <thead>
                                        <tr>
                                            <th>رقم </th>
                                            <th>الاسم</th>
                                            <th>البريد الالكتروني</th>
                                            <th>العنوان</th>
                                            <th>النص</th>



                                        </tr>
                                    </thead>
                                     <tbody>
                                    @php
                                     $i = 1   
                                    @endphp
                                        @foreach (App\Models\contact::latest()->get() as $messages)
                                            
                                        
                                          <tr>
                                              <td>{{$i++}}</td>
                                              <td>{{$messages->name}}</td>
                                              <td>{{$messages->email}}</td>
                                              <td>{{$messages->subject}}</td>
                                              <td>{{$messages->message}}</td>
                                          </tr>
                                          @endforeach
                                        



                                      </tbody> 

                                </table>
                            </div><!-- /.table-responsive -->


                        </div><!-- /.box-body -->
                    </div>



                </section><!-- right col -->

                
            </div><!-- /.row (main row) -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection
