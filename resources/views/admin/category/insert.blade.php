@extends('admin.base.base')
@section('title')
    Thêm tin
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
                <li><a href="#"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i>Tin</a></li>
                <li class="active">Thêm</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title"><span style="color: green" class="glyphicon glyphicon-plus"></span>
                                Thêm tin tức</h3>
                        </div>
                        <form class="form-horizontal" method="post" id="formProduct" action="administrator/category/insert"
                              enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <div class="box-body">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Danh mục</label>
                                    <div class="col-sm-4">
                                        <select name="selCategory" id="selCategory" class="form-control">
                                            <option value="0">Chọn danh mục</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group {{ empty($errors->messages()['txtName']) ? '' : 'has-error' }}">
                                    <label class="col-sm-2 control-label" for="txtName">Tên loại tin</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="txtName" placeholder="Nhập tên loại tin">
                                        <span class="help-block">{{ empty($errors->messages()['txtName']) ? '' : showError($errors->messages()['txtName']) }}</span>
                                    </div>
                                </div>
                                <div class="form-group {{ empty($errors->messages()['txtDescription']) ? '' : 'has-error' }}">
                                    <label class="col-sm-2 control-label" for="txtDescription">Mô tả</label>
                                    <div class="col-sm-4">
                                        <textarea type="text" class="form-control" name="txtDescription" placeholder="Nhập mô tả" rows="5"></textarea>
                                        <span class="help-block">{{ empty($errors->messages()['txtDescription']) ? '' : showError($errors->messages()['txtDescription']) }}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="txtCode">Hiển thị</label>
                                    <div class="col-sm-4">
                                        <input type="checkbox"name="txtStatus" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-8">
                                        <button type="submit" class="btn btn-primary" id="btn_category"><i
                                                    class="fa fa-fw fa-plus"></i> Thêm
                                        </button>
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

