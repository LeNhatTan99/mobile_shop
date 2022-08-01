
 <!-- footer section -->
 <footer class="footer_section bottom-0">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 footer-col">
                <div class="footer_detail">
                    <h4 id="contact">
                        Liên hệ
                    </h4>

                    <div class="footer_social">
                        <a href="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 footer-col">
                <div class="footer_contact">
                    <h4>
                        Tìm cửa hàng
                    </h4>
                    <div class="contact_link_box">
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                                Đà Nẵng
                            </span>
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                                0702471720
                            </span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                                mobileshop@gmail.com
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 footer-col">
                <div class="footer_contact">
                    <h4>
                        Đăng ký nhận tin
                    </h4>
                    <form action="{{ route('sendMail') }}" method="post" class="resign_form">
                    @csrf
                    <input type="email" name="email" placeholder="Nhập email của bạn" class="form-control" required>
                    <button type="submit" class="btn-submit">Đăng ký</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 footer-col">
                <div class="footer_contact">
                    <h4>
                        Thời gian mở cửa
                    </h4>
                    <div>
                        <p>Hàng ngày: 8.30 AM - 8.30 PM</p>
                        <p>Chủ nhật: 8.30 AM - 6.30 PM</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer section -->

