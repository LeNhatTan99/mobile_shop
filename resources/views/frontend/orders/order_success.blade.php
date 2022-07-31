@extends('frontend.app')
@section('content')





<!-- Modal HTML -->


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
@endsection
