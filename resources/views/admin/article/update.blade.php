@extends('admin.base.base')
@section('title')
    Cập nhật tin
@endsection
@section('css')
    <link rel="stylesheet" href="adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
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
                <li class="active">Cập nhật</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title"><span style="color: green" class="glyphicon glyphicon-plus"></span>
                                Cập nhật tin tức</h3>
                        </div>
                        <form class="form-horizontal" method="post" id="formProduct" action="administrator/article/update/{{ $art->id }}"
                              enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <div class="box-body">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Danh mục</label>
                                    <div class="col-sm-4">
                                        <select name="selCategory" id="selCategory" class="form-control">
                                            <option value="0">Chọn danh mục</option>
                                            @foreach($categories as $category)
                                                @if($category->id == $art->id)
                                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                                @else
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group {{ empty($errors->messages()['txtTitle']) ? '' : 'has-error' }}">
                                    <label class="col-sm-2 control-label" for="txtTitle">Tiêu đề</label>
                                    <div class="col-sm-4">
                                        <input value="{{ $art->title }}" type="text" class="form-control" name="txtTitle" placeholder="Nhập tiêu đề">
                                        <span class="help-block">{{ empty($errors->messages()['txtTitle']) ? '' : showError($errors->messages()['txtTitle']) }}</span>
                                    </div>
                                </div>
                                <div class="form-group {{ empty($errors->messages()['txtTag']) ? '' : 'has-error' }}">
                                    <label class="col-sm-2 control-label" for="txtTag">Tag</label>
                                    <div class="col-sm-4">
                                        <input value="{{ $art->tag }}" type="text" class="form-control" name="txtTag" placeholder="Nhập tên loại tin">
                                        <span class="help-block">{{ empty($errors->messages()['txtTag']) ? '' : showError($errors->messages()['txtTag']) }}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="Nom22"></label>
                                    <div class="col-md-4">
                                        <img src="upload/articles/{{ $art->image }}" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="Nom22">Ảnh đại diện</label>
                                    <div class="col-md-4">
                                        <input type="file" class="file" name="fImage">
                                    </div>
                                </div>
                                <div class="form-group {{ empty($errors->messages()['txtDescription']) ? '' : 'has-error' }}">
                                    <label class="col-sm-2 control-label" for="txtDescription">Mô tả</label>
                                    <div class="col-sm-4">
                                        <textarea type="text" class="form-control" name="txtDescription" placeholder="Nhập mô tả" rows="5">{{ $art->description }}</textarea>
                                        <span class="help-block">{{ empty($errors->messages()['txtDescription']) ? '' : showError($errors->messages()['txtDescription']) }}</span>
                                    </div>
                                </div>
                                <div class="form-group {{ empty($errors->messages()['txtContent']) ? '' : 'has-error' }}">
                                    <label class="col-sm-2 control-label" for="txtContent"></label>
                                    <div class="col-sm-7">
                                        <textarea type="text" class="form-control" name="txtContent" placeholder="Nhập nội dung" rows="10">{{ $art->content }}</textarea>
                                        <span class="help-block">{{ empty($errors->messages()['txtContent']) ? '' : showError($errors->messages()['txtContent']) }}</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="txtCode">Hiển thị</label>
                                    <div class="col-sm-4">
                                        <input type="checkbox"name="txtStatus" {{ $art->status == 1 ? 'checked' : '' }}>
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
    <script src="adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
        $(function () {
            $("textarea[name = 'txtContent']").wysihtml5();
        });
    </script>
@endsection

