<section class="contact_section ">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="form_container">
                    <div class="heading_container">
                        <h2>
                            Phản hồi
                        </h2>
                    </div>
                    <form action="{{route('feedback')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div>
                            <input type="text" placeholder="Họ và tên " name="name"/>
                            @if ($errors->has('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span>
                            @endif
                        </div>
                        <div>
                            <input type="email" placeholder="Email" name="email" />
                            @if ($errors->has('email'))
                            <span class="text-danger">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div>
                            <input type="text" placeholder="Số điện thoại" name="phone_number" />
                            @if ($errors->has('phone_number'))
                            <span class="text-danger">{{$errors->first('phone_number')}}</span>
                            @endif
                        </div>
                        <div>
                            <input type="text" class="message-box" placeholder="Nội dung" name="content" />
                            @if ($errors->has('content'))
                            <span class="text-danger">{{$errors->first('content')}}</span>
                            @endif
                        </div>
                        <div class="d-flex ">
                            <button type="submit">
                                Gửi
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
