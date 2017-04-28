@extends('admin.base.base')
@section('title')
    Cập nhật tin
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tin tức
                <small>quản lý</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="administrator/dashboard"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
                <li><a href="administrator/article/insert"><i class="fa fa-dashboard"></i>Tin</a></li>
                <li class="active">Cập nhật</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title"><span style="color: green" class="glyphicon glyphicon-plus"></span>
                                Cập nhật tin tức</h3>
                        </div>
                        <form class="form-horizontal" method="post" id="formProduct" action="administrator/article/update}"
                              enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <div class="box-body">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Danh mục</label>
                                    <div class="col-sm-4">
                                        <select name="selCategory" id="selCategory" class="form-control">

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="txtCode">Tiêu đề</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="txtTitle" id="txtTitle" placeholder="Nhập tên tiêu đề">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-8">
                                        <button type="submit" class="btn btn-success" id="btn_category"><i class="fa fa-fw fa-edit"></i>Cập nhật</button>
                                        <a id="btn-refresh" style="margin-left: 10px; margin-right: 10px" type="submit"
                                           class="btn btn-info"><i class="fa fa-refresh"></i> Làm mới</a>
                                        <a id="btn-cancel" class="btn btn-danger"><i class="fa fa-fw fa-minus"></i> Hủy</a>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <!-- /.box-body -->
                    </div>
                </div>

                <!-- /.col (right) -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
@endsection
@section('javascript')
    <!-- Bootstrap WYSIHTML5 -->
    <script src="admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Select2 -->
    <script src="admin-lte/plugins/select2/select2.full.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="admin-lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
@endsection
