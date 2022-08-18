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
                        <form role="form" action="{{ route('management.bases.table.fields.insert' , ['id' , $table_id])  }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $table_id }}" name="table_id">
                            <div class="item">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">عنوان </label>
                                        <input type="text" maxlength="500" name="field_mean[]" class="form-control" id="exampleInputEmail1" placeholder="عنوان
" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">نام فیلد
                                        </label>
                                        <input type="text" maxlength="50" name="field_name[]" class="form-control" id="exampleInputEmail1" placeholder="نام فیلد

" required>
                                    </div>
                                    <div class="form-group">
                                        <label>نوع</label>
                                        <select name="type_id[]" class="form-control">
                                            @foreach($management_table_fields_types as $m_t_f_t)
                                                <option value="{{ $m_t_f_t->id }}">{{ $m_t_f_t->type_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">ارسال</button>
                                <button type="button" class="btn btn-success btn-add-item">افزودن</button>
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
    <script>
        var types = `                                            @foreach($management_table_fields_types as $m_t_f_t)
        <option value="{{ $m_t_f_t->id }}">{{ $m_t_f_t->type_name }}</option>
                                            @endforeach`
    </script>
    <script src="{{ asset('adminpanel/js/fields.js') }}"></script>
@endsection
