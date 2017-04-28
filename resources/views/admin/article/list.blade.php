@extends('admin.base.base')
@section('title')
    Danh sách tin
@endsection
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="admin-lte/plugins/datatables/dataTables.bootstrap.css">
@endsection
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh mục
                <small>quản lý</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="administrator/dashboard"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
                <li><a href="administrator/article/list">Tin</a></li>
                <li class="active">Danh sách</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <i class="fa fa-fw fa-th"></i>
                            <h3 class="box-title">Danh sách Tin</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Danh mục</th>
                                    <th>Tiêu đề</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>asdsa</td>
                                            <td>asdsad</td>
                                            <td class="centered text-center">
                                                <a class="btn btn-primary btn-xs"
                                                   href="#">
                                                    <span class="glyphicon glyphicon-pencil"></span>
                                                </a>
                                                <a class="btn btn-danger btn-xs"
                                                   href="#">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </a>
                                            </td>
                                        </tr>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Danh mục</th>
                                    <th>Tiêu đề</th>
                                    <th></th>
                                </tr>
                                </tfoot>
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

@endsection
@section('javascript')
    <!-- DataTables -->
    <script src="admin-lte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="admin-lte/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="admin-lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script>
        $(function () {
            var table = $("#example1").DataTable();
        });
    </script>
@endsection
