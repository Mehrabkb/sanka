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
                <div class="col-xs-12" style="padding: 1%; box-sizing: border-box;">
                    <a href="{{ route('management.bases.create') }}" class="btn btn-primary ">افزودن</a>
                </div>
                <div class="col-xs-12">


                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">جدول داده مثال ۲</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="data-table table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>عنوان اطلاعات پایه</th>
                                    <th> نام تیبل </th>
                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($management_table as $m_t)
                                <tr>
                                    <td>{{ $m_t->table_mean }}</td>
                                    <td>{{ $m_t->table_name }}</td>
                                    <td>
                                        <a href="{{ route('management.bases.edit' , ['id' => $m_t->id]) }}" class="btn btn-info">ویرایش</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.box-body -->
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

@endsection
