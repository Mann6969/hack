@extends('users.home.index')
@section('head')
    <link href="{{ asset('user/assets/css/about.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section id="center" class="clearfix center_prod">
        <div class="container">
            <div class="row">
                <div class="center_prod_1 clearfix">
                    <div class="col-sm-12">
                        <h5 class="mgt">
                            <a href="{{ route('index') }}">Home</a>
                            |
                            <span class="col_2"> About Us</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="about_1 clearfix">
                    <div class="col-sm-4">
                        <div class="about_1l clearfix">
                            <img src="{{ asset('user/assets/img/52.jpg') }}" class="iw" alt="abc">
                            <h4>Creating children’s clothes inspires us in every aspect</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                Aenean massa. Cum sociis natoque dis Lorem ipsum dolor sit amet, consectetuer adipiscing
                                elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque dis</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="about_1m clearfix">
                            <img src="{{ asset('user/assets/img/53.jpg') }}" class="iw" alt="abc">
                            <p><i class="fa fa-check"></i> We make your life easier.</p>
                            <p><i class="fa fa-check"></i> Experience childcare.</p>
                            <p><i class="fa fa-check"></i> Daycare is great…</p>
                            <p><i class="fa fa-check"></i> We are childcare professionals.</p>
                            <p><i class="fa fa-check"></i> Babysitting with a loving heart.</p>
                            <p><i class="fa fa-check"></i> Your wishes just came true.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="about_1r clearfix">
                            <h3 class="mgt">Working Hours</h3>
                            <p>Lorem ipsum dolor sit amet, elit consectetuer adipiscing aenean.</p>
                            <h5 class="normal">Monday <span class="pull-right">9AM - 6PM</span></h5>
                            <h5 class="normal">Tuesday <span class="pull-right">9AM - 6PM</span></h5>
                            <h5 class="normal">Wednesday <span class="pull-right">9AM - 6PM</span></h5>
                            <h5 class="normal">Thursday <span class="pull-right">9AM - 6PM</span></h5>
                            <h5 class="normal">Friday <span class="pull-right">9AM - 6PM</span></h5>
                            <h5 class="normal">Saturday <span class="pull-right">9AM - 5PM</span></h5>
                            <h4><a class="button" href="#">Contact Us </a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sale" class="clearfix">
        <div class="col-sm-6 space_all">
            <div class="sale_l clearfix">
                <img src="{{ asset('user/assets/img/15.jpg') }}" class="iw" alt="abc">
            </div>
        </div>
        <div class="col-sm-6 space_all">
            <div class="sale_r text-center clearfix">
                <h1 class="mgt head_1">50% Sale</h1><br>
                <h1 class="head_2">We make shopping easy.</h1>
                <p class="col">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient</p>
                <h4><a class="button" href="#">Learn More</a></h4>
            </div>
        </div>
    </section>
    <section id="about_home">
        <div class="container">
            <div class="row">
                <div class="about_home_2 clearfix">
                    <div class="col-sm-5">
                        <div class="about_home_2l clearfix">
                            <img src="{{ asset('user/assets/img/54.jpg') }}" class="iw" alt="abc">
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="about_home_2r clearfix">
                            <p class="mgt">All of our services are backed by our 100% satisfaction guarantee. Our
                                electricians can install anything from new security lighting for your outdoors to a whole
                                home generator that will keep your appliances working during a power outage. Our
                                installation services are always done promptly and safely.</p>
                            <ul>
                                <li><i class="fa fa-check col_1"></i> Full-service electrical layout, design</li>
                                <li><i class="fa fa-check col_1"></i> Wiring and installation/upgrades</li>
                                <li><i class="fa fa-check col_1"></i> Emergency power solutions (generators)</li>
                                <li><i class="fa fa-check col_1"></i> Virtually any electrical needs you have – just ask!
                                </li>
                            </ul>
                            <h4><a class="button" href="#"> Know More</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

