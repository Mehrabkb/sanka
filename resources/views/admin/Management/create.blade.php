@extends('admin/master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                داشبرد
                <small>کنترل پنل</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
                <li class="active">داشبرد</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
{{--                <div class="col-xs-12" style="padding: 1%; box-sizing: border-box;">--}}
{{--                    <a href="{{ route('management.bases.create') }}" class="btn btn-primary ">افزودن</a>--}}
{{--                </div>--}}
                <div class="col-xs-12">


                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">مثال ساده</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('management.bases.create.table.insert') }}" method="POST">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">عنوان اطلاعات پایه</label>
                                    <input type="text" maxlength="500" name="table_mean" class="form-control" id="exampleInputEmail1" placeholder="عنوان اطلاعات پایه
">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">نام تیبل
                                    </label>
                                    <input type="text" maxlength="50" name="table_name" class="form-control" id="exampleInputEmail1" placeholder="نام تیبل

">
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">ارسال</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('scripts')
    <script src="{{ asset('adminpanel') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('adminpanel') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script >
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endsection
