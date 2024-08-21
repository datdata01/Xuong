@extends('layout')
@section('content')

<style>
    @media (max-width: 992px) {
    .body {
        width: unset;
        margin: 0 auto;
    }
}
</style>

<div class="post-slider">
    <div class="post-wrapper">
        <div class="post">
            <h1 style="position: absolute; top: 60%; left: 50%; transform: translate(-50%, -50%);" class="text-white mb-5">
                Dịch vụ chăm sóc sức khỏe tại nhà

                <div class="row mt-5">
                    <div class="col-lg-4 col-md-4">
                        <div class="mainServices">
                            <i class="fa fa-stethoscope"></i>
                            <div class="mainServices__content">
                                <h3>Chăm Sóc Tại Nhà</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="mainServices">
                            <i class="fa fa-ambulance"></i>
                            <div class="mainServices__content">
                                <h3>Cấp Cứu</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="mainServices">
                            <i class="fa fa-heartbeat"></i>
                            <div class="mainServices__content">
                                <h3>Khám Sức Khỏe Định Kỳ</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </h1>
            <img src="{{ asset('frontend/img/banner_healthcare.jpg')}}" alt="">
        </div>
    </div>

</div>

<div class="modal">
    <div class="modal-overlay modal-toggle"></div>
    <div class="modal-wrapper modal-transition">

        <div class="modal-header">
            <button class="modal-close modal-toggle btn fa fa-times" style="outline: none;"></button>
            <h2 class="modal-heading">Xem thêm</h2>
        </div>

        <style>
            .form-horizontal .control-label {
                text-align: unset !important;
            }
        </style>

    </div>
</div>

<div class="body">
    <div class="container-fluid" style="padding: 0!important;">
        <div style="background-image: url('frontend/img/bg_healthcare.jpg')" class="service-banner">
            <div class="boxservice">
                <h3 class="h1-title">
                    Chăm Sóc Sức Khỏe Toàn Diện Dành Cho Bệnh Nhân!
                </h3>
                <p>Chúng tôi cung cấp các dịch vụ y tế chất lượng cao ngay tại nhà, giúp bệnh nhân hồi phục nhanh chóng và thoải mái hơn.</p>

                <button class="btn btn-danger mt-5 modal-toggle">Xem thêm!</button>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4" style="padding: 15px!important;">
            <div style="background-color: #4CAF50" class="service-list__content-box">
                <img src="{{ asset('frontend/img/service_healthcare1.jpg')}}" alt="">
                <h3 class="h1-title">
                    1. Chăm Sóc Tại Nhà
                </h3>

                <p>
                    Dịch vụ chăm sóc sức khỏe tại nhà của chúng tôi giúp bệnh nhân hồi phục nhanh chóng và thoải mái hơn.
                </p>

            </div>
        </div>
        <div class="col-lg-4" style="padding: 15px!important;">
            <div style="background-color: #FFC107" class="service-list__content-box">
                <img src="{{ asset('frontend/img/service_healthcare2.jpg')}}" alt="">
                <h3 class="h1-title">
                    2. Dịch Vụ Cấp Cứu
                </h3>

                <p>
                    Chúng tôi cung cấp dịch vụ cấp cứu nhanh chóng và hiệu quả, luôn sẵn sàng 24/7 để đáp ứng nhu cầu khẩn cấp của bệnh nhân.
                </p>
            </div>
        </div>
        <div class="col-lg-4" style="padding: 15px!important;">
            <div style="background-color: #17A2B8" class="service-list__content-box">
                <img src="{{ asset('frontend/img/service_healthcare3.jpg')}}" alt="">
                <h3 class="h1-title">
                    3. Khám Sức Khỏe Định Kỳ
                </h3>

                <p>
                    Dịch vụ khám sức khỏe định kỳ giúp bệnh nhân duy trì sức khỏe tốt và phát hiện sớm các vấn đề y tế.
                </p>
            </div>
        </div>

    </div>

    <div class="service-text mb30">
        <div class="service-text__content">
            <h2 class="h2-title">Chăm sóc sức khỏe toàn diện, tận tâm và chuyên nghiệp!</h2>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <img class="banner-service" src="{{ asset('frontend/img/service_banner.jpg')}}" alt="">

        </div>
    </div>
</div>
@endsection
