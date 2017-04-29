@extends('admin.base.base')
@section('title')
    Thêm user
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                user
                <small>quản lý</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i>user</a></li>
                <li class="active">Thêm</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title"><span style="color: green" class="glyphicon glyphicon-plus"></span>
                                Thêm user</h3>
                        </div>
                        <form class="form-horizontal" method="post" id="formProduct" action="administrator/user/insert"
                              enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <div class="box-body">

                                <div class="form-group {{ empty($errors->messages()['txtName']) ? '' : 'has-error' }}">
                                    <label class="col-sm-2 control-label" for="txtName">Họ tên</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="txtName" placeholder="Nhập họ tên">
                                        <span class="help-block">{{ empty($errors->messages()['txtName']) ? '' : showError($errors->messages()['txtName']) }}</span>
                                    </div>
                                </div>
                                <div class="form-group {{ empty($errors->messages()['txtEmail']) ? '' : 'has-error' }}">
                                    <label class="col-sm-2 control-label" for="txtEmail">Email</label>
                                    <div class="col-sm-4">
                                        <input type="email" class="form-control" name="txtEmail" placeholder="Nhập email">
                                        <span class="help-block">{{ empty($errors->messages()['txtEmail']) ? '' : showError($errors->messages()['txtEmail']) }}</span>
                                    </div>
                                </div>
                                <div class="form-group {{ empty($errors->messages()['txtUsername']) ? '' : 'has-error' }}">
                                    <label class="col-sm-2 control-label" for="txtUsername">Username</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="txtUsername" placeholder="Nhập Username">
                                        <span class="help-block">{{ empty($errors->messages()['txtUsername']) ? '' : showError($errors->messages()['txtUsername']) }}</span>
                                    </div>
                                </div>
                                <div class="form-group {{ empty($errors->messages()['txtPassword']) ? '' : 'has-error' }}">
                                    <label class="col-sm-2 control-label" for="txtPassword">Password</label>
                                    <div class="col-sm-4">
                                        <input type="password" class="form-control" name="txtPassword" placeholder="Nhập Password">
                                        <span class="help-block">{{ empty($errors->messages()['txtPassword']) ? '' : showError($errors->messages()['txtPassword']) }}</span>
                                    </div>
                                </div>
                                <div class="form-group {{ empty($errors->messages()['txtPasswordAgain']) ? '' : 'has-error' }}">
                                    <label class="col-sm-2 control-label" for="txtPasswordAgain">Nhập lại password</label>
                                    <div class="col-sm-4">
                                        <input type="password" class="form-control" name="txtPasswordAgain" placeholder="Nhập lại password">
                                        <span class="help-block">{{ empty($errors->messages()['txtPasswordAgain']) ? '' : showError($errors->messages()['txtPasswordAgain']) }}</span>
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

