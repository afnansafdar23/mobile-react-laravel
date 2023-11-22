@extends('frontend.layouts.master')
@section('content')

<!-- content -->
<div class="container-fluid px-0 " style="background-color: #f3f0e9;">
    <div class="container-lg bg-light shadow p-3 rounded">
        <div class="row">
            <div class="col-lg-12">
                <!-- START: About Container -->
                <div class="top-brands mt-4 mb-4">
                    <div class="top-brands-head">
                        <h4 style="text-align:center" class="text-muted shadow p-3 bg-body rounded zoom-effect">About
                            iPhone Arena</h4>
                        <br>
                    </div>
                    <!-- START: Device Banner -->
                    <div class="device-banner about-banner">
                        <img src="{{asset('frontend/assets/dsbanner.png')}}">
                        <h1>ABOUT US</h1>
                    </div>
                    <!-- END: Device Banner -->

                    <!-- START: About Heading Bar -->
                    <hr>
                    <div class="about-heading-bar">
                        <div>Our Mission</div>
                        <div>Evaluation and Success</div>
                        <div>Our Team Wins</div>
                        <div>Company Information</div>
                    </div>
                    <hr>
                    <!-- END: About Heading Bar -->

                    <!-- START: Our Mission -->
                    <div class="about-our-mission">
                        <h1>OUR MISSION</h1>
                        <div class="our-missions-para">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo inventore eos rerum quidem
                                natus accusantium numquam ratione est. Tempore quidem officia saepe, deserunt ut placeat
                                enim iusto animi doloremque repellendus?</p>
                            <br>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus sint numquam
                                laudantium suscipit assumenda quidem exercitationem ipsa, provident dolores, architecto
                                corrupti fugit recusandae tempora voluptas quos optio doloremque quae vel.</p>
                        </div>
                    </div>
                    <!-- END: Our Mission -->

                    <br>
                    <hr>
                    <!-- START: Evaluation and Success -->
                    <div class="evaluation-and-success">
                        <div class="evaluation-and-success-info">

                            <h1>EVALUATION AND SUCCESS</h1>
                            <div class="evaluation-and-success-para">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo inventore eos rerum
                                    quidem natus accusantium numquam ratione est. Tempore quidem officia saepe, deserunt
                                    ut placeat enim iusto animi doloremque repellendus?</p>
                                <br>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus sint numquam
                                    laudantium suscipit assumenda quidem exercitationem ipsa, provident dolores,
                                    architecto corrupti fugit recusandae tempora voluptas quos optio doloremque quae
                                    vel.</p>
                                <br>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus sint numquam
                                    laudantium suscipit assumenda quidem exercitationem ipsa, provident dolores,
                                    architecto corrupti fugit recusandae tempora voluptas quos optio doloremque quae
                                    vel.</p>
                            </div>
                        </div>
                        <div class="evaluation-and-success-image">
                            <img src="{{asset('frontend/assets/successmap.png')}}" alt="success">
                        </div>
                    </div>
                    <!-- END: Evaluation and Success -->

                    <br>
                    <hr>
                    <!-- START: Trusted to Innovate -->
                    <div class="evaluation-and-success">

                        <div class="evaluation-and-success-image">
                            <img src="{{asset('frontend/assets/10.png')}}" alt="success">
                        </div>

                        <div class="evaluation-and-success-info">

                            <h1>Trusted to Innovate</h1>
                            <div class="evaluation-and-success-para">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo inventore eos rerum
                                    quidem natus accusantium numquam ratione est. Tempore quidem officia saepe, deserunt
                                    ut placeat enim iusto animi doloremque repellendus?</p>
                                <br>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus sint numquam
                                    laudantium suscipit assumenda quidem exercitationem ipsa, provident dolores,
                                    architecto corrupti fugit recusandae tempora voluptas quos optio doloremque quae
                                    vel.</p>
                                <br>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus sint numquam
                                    laudantium suscipit assumenda quidem exercitationem ipsa, provident dolores,
                                    architecto corrupti fugit recusandae tempora voluptas quos optio doloremque quae
                                    vel.</p>
                            </div>

                        </div>

                    </div>
                    <!-- END: Trusted to Innovate -->


                </div>
                <!--  END: About Container -->
            </div>
        </div>
    </div>
</div>

<div class="container-fluid px-0 py-2" style="background-color: #f3f0e9;"></div>

<!-- START: Company Information -->
<div class="container-fluid px-0" style="background-color: #f3f0e9;">
    <div class="container-lg bg-light shadow p-3 rounded">
        <div class="row">
            <div class="col-lg-12">
                <!-- START: Company Container -->
                <div class="top-brands mt-4 mb-4">
                    <div class="top-brands-head">
                        <h4 style="text-align:center" class="text-muted shadow p-3 bg-body rounded zoom-effect">Company
                            Information</h4>
                        <br>
                    </div>

                    <!-- START: Company Info -->
                    <div class="company-info">

                        <div class="company-address">
                            <h4>ADDRESS</h4>
                            <div class="company-info-para">
                                <p>iPhone Arena</p>
                                <p>Unit</p>
                                <p>Street</p>
                                <p>Postal Code</p>
                                <p>Country</p>
                            </div>
                        </div>

                        <div class="company-about">
                            <h4>Company Information</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate dicta doloribus
                                ducimus omnis blanditiis cumque iste sequi quibusdam inventore, nesciunt pariatur earum,
                                sunt modi officia porro sed qui quasi eligendi.</p>
                        </div>

                    </div>
                    <!-- END: Company info -->
                </div>
                <!--  END: Company Container -->
            </div>
        </div>
    </div>
</div>
<!-- END: Company Information -->

<!-- Recent Added -->
<div class="recent-products container-fluid shadow rounded">
    <div class="devices-container">
        <h4 style="text-align: center; font-size: 17px" class="text-muted shadow p-3 bg-body rounded zoom-effect">
            Recently Added Products
        </h4>
        <hr class="bg-danger" style="height: 2px; width: 15rem" />

        <!-- Items -->
        <!-- Products -->
        <div class="top-category-products container-fluid">
            <!-- Row 1 -->
            <!-- 1 -->
            <div style="text-align: center">
                <a href="product-details.html">
                    <img src="{{asset('frontend/assets/1.png')}}" alt="device" /><br />
                </a>
                <a href="product-details.html">Olixar 2 Pack Tempered Glass Screen Protectors - For Samsung Galaxy S23
                    Ultra</a>
            </div>
            <!-- 2 -->
            <div style="text-align: center">
                <a href="product-details.html">
                    <img src="{{asset('frontend/assets/2.png')}}" alt="device" /><br />
                </a>
                <a href="product-details.html">Olixar Clear Glitter Tough Case - For Samsung Galaxy A54</a>
            </div>
            <!-- 3 -->
            <div style="text-align: center">
                <a href="product-details.html">
                    <img src="{{asset('frontend/assets/3.png')}}" alt="device" /><br />
                </a>
                <a href="product-details.html">Olixar Ultra-Thin 100% Clear Case - For iPhone 15 Pro Max</a>
            </div>

            <!-- Row 2 -->
            <!-- 1 -->
            <div style="text-align: center">
                <a href="product-details.html">
                    <img src="{{asset('frontend/assets/4.png')}}" alt="device" /><br />
                </a>
                <a href="product-details.html">Olixar Easy Fit Tempered Glass Screen Protector - For iPhone 15 Pro
                    Max</a>
            </div>

        </div>
        <!-- Products -->
        <!-- Items -->
    </div>
</div>
<!-- Recent Added -->
@endsection