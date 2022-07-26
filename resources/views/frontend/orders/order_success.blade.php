@extends('frontend.app')
@section('content')
<style>
    body {
        font-family: 'Varela Round', sans-serif;
    }

    .modal-confirm {
        color: #636363;
        width: 70%;
        font-size: 14px;
    }

    .modal-confirm .modal-content {
        padding: 120px 20px 50px 20px;
        border-radius: 5px;
        border: none;
    }

    .modal-confirm .modal-header {
        border-bottom: none;
        position: relative;
    }

    .modal-confirm h4 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -15px;
    }

    .modal-confirm .form-control,
    .modal-confirm .btn {
        min-height: 40px;
        border-radius: 3px;
    }



    .modal-confirm .modal-footer {
        border: none;
        text-align: center;
        border-radius: 5px;
        font-size: 13px;
    }

    .modal-confirm .icon-box {
        color: #fff;
        position: absolute;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: -70px;
        width: 95px;
        height: 95px;
        border-radius: 50%;
        z-index: 9;
        background: #82ce34;
        padding: 15px;
        text-align: center;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    }

    .modal-confirm .icon-box i {
        font-size: 58px;
        position: relative;
        top: 3px;
    }

    .modal-confirm.modal-dialog {
        margin-top: 80px;
    }

    .modal-confirm .btn {
        color: #fff;
        border-radius: 4px;
        background: #82ce34;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        border: none;
    }

    .modal-confirm .btn:hover,
    .modal-confirm .btn:focus {
        background: #6fb32b;
        outline: none;
    }

    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
    }

    .thumbnail-success{

    margin: 20px 25%;
    border-radius: 7px 7px 7px 7px;
    box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
    }
</style>


<!-- Modal HTML -->
<div class="thumbnail-success">

    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    <i class="material-icons fa-solid fa-check"></i>
                </div>
                <h4 class="modal-title w-100">Đã đặt hàng </h4>
            </div>
            <div class="modal-body">
                <p class="text-center">Bạn đã tạo đơn hàng thành công. <br> Kiểm tra email để biết thêm chi tiết.</p>
            </div>
            <div class="modal-footer">
                <a href="{{route('home')}}" class="btn btn-success btn-block">Trang chủ</a>
            </div>
        </div>
</div>
</div>
@endsection
