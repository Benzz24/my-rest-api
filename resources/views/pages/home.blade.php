@extends('layouts.app-public')
@section('title', 'Home')
@section('content')

<div class="site-wrapper-reveal">
    <div class="hero-box-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Hero Slider Area Start -->
                    <div class="hero-area" id="product-preview">
                       
                    </div>
                    <!-- Hero Slider Area End -->
                </div>
            </div>
        </div>
</div>

        <div class="about-us-area section-space--ptb_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-us-content_6 text-center">
                            <h2>Kings&nbsp;&nbsp;Store</h2>
                            <p>
                                <small>
                                    Selamat datang di Kings Store, destinasi utama bagi pecinta tas dengan sentuhan kemewahan.
                                    Kami menghadirkan koleksi tas eksklusif yang dirancang dengan detail sempurna, menggunakan material premium dan desain yang tak lekang oleh waktu.
                                    Setiap tas adalah perpaduan antara fungsionalitas dan keanggunan — cocok untuk menemani hari-hari penting maupun momen istimewa.
                                    Dengan pilihan warna, bentuk, dan tekstur yang berkelas, Kings Store membantu kamu tampil percaya diri dan berkarakter di setiap langkah.
                                    Kings Store bukan sekadar toko, tapi cerminan gaya hidup elegan dan berkelas.&#10084;
                                </small>
                            </p>
                            <p class="mt-5">Find your window to the world! Or, even,  
                                <span class="text-color-primary">unlock hidden worlds, one page at a time!</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

  <!-- Banner Video Area Start -->
<div class="banner-video-area overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-video-box">
                    <!-- Thumbnail YouTube (JPG) -->
                    <img src="https://img.youtube.com/vi/imGiVOC8JpI/maxresdefault.jpg" alt="Unboxing Tas Branded Thumbnail" class="img-fluid" style="width:100%; height:auto; object-fit:cover;">
                    <!-- Video Popup -->
                    <div class="video-icon">
                        <a href="https://youtu.be/imGiVOC8JpI?si=OL1qr5lC7F5hDO2a" class="popup-youtube">
                            <i class="linear-ic-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Video Area End -->


    <!-- Our Brand Area Start -->
    <div class="our-brand-area section-space--pb_90">
        <div class="container">
            <div class="brand-slider-active">
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/images/brand/foto1.jpg" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/images/brand/foto2.webp" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/images/brand/foto3.jpg" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/images/brand/foto4.webp" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/images/brand/foto5.jpg" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/images/brand/foto6.jpg" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/images/brand/foto7.webp" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-brand-item">
                        <a href="#"><img src="assets/images/brand/foto8.webp" class="img-fluid" alt="Brand Images"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Brand Area End -->

    <!-- Our Member Area Start -->
    <div class="our-member-area section-space--pb_120">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="member-box">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-4">
                                <div class="section-title small-mb_40 tablet-mb_40">
                                    <h4 class="section-title">Join the community!</h4>
                                    <p>Become one of the member and get discount 50% off</p>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-8">
                                <div class="member-wrap">
                                    <form action="#" class="member-two">
                                        <input class="input-box" type="text" placeholder="Your email address">
                                        <button class="submit-btn"><i class="icon-arrow-right"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <!-- Our Member Area End -->

</div>
@endsection
@section('addition_css')
@endsection
@section('addition_script')
    <script src="{{ asset('pages/js/home.js') }}"></script>
@endsection