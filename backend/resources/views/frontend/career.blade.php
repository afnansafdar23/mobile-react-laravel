@extends('frontend.layouts.master')
@section('content')
<!-- content -->
<div class="container-fluid px-0 " style="background-color: #f3f0e9;">
    <div class="container-lg bg-light shadow p-3 rounded">
        <div class="row">
            <div class="col-lg-12">
                <!-- START: Career Container -->
                <!-- START: Device Banner -->
                <div class="device-banner about-banner">
                    <img src="{{asset('frontend/assets/dsbanner.png')}}">
                    <h1>Careers at iPhone Arena</h1>
                </div>
                <!-- END: Device Banner -->

                <!-- START: About Heading Bar -->
                <hr>
                <div class="about-heading-bar">
                    <div><a href="{{route('all-blogs')}}" style="text-decoration: none;">Culture and Values</a></div>
                    <div><a href="{{route('all-blogs')}}" style="text-decoration: none;">Learning</a></div>
                    <div><a href="{{route('all-blogs')}}" style="text-decoration: none;">Working</a></div>
                    <div><a href="{{route('all-blogs')}}" style="text-decoration: none;">Benifits</a></div>
                </div>
                <hr>
                <!-- END: About Heading Bar -->

                <!-- START: career abiut us -->
                <div class="career-about-us">
                    <h3>ABOUT US</h3>
                    <div class="career-about-us-para">
                        <p>Learn about our mission to provide top-notch mobile accessories.Our team is passionate about
                            technology and dedicated to delivering quality products. At our core, we are driven by a
                            singular mission, and that is to provide top-notch mobile accessories that enhance the way
                            you interact with your devices. Our team is not just a group of professionals; we are a
                            community of individuals who are deeply passionate about technology. This passion fuels our
                            dedication to delivering quality products that not only meet but exceed the expectations of
                            our customers.</p>
                    </div>
                </div>
                <!-- END: career about us -->

                <br>
                <hr>
                <!-- START: Join Our Team -->
                <div class="career-about-us">
                    <h3>Join our team, and learn whilst working with us</h3>
                    <div class="career-about-us-para">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita non id repudiandae harum
                            impedit cumque deleniti itaque ea consequatur deserunt, adipisci nostrum animi ab iste.
                            Animi suscipit eius sapiente nemo.</p>
                    </div>
                </div>
                <!-- END: Join Our Team -->

                <br>
                <hr>
                <!-- START: Benifits -->
                <div class="career-about-us">
                    <h3>Benifits & Featured Jobs</h3>
                    <div class="career-about-us-para">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita non id repudiandae harum
                            impedit cumque deleniti itaque ea consequatur deserunt, adipisci nostrum animi ab iste.
                            Animi suscipit eius sapiente nemo.</p>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita non id repudiandae harum
                            impedit cumque deleniti itaque ea consequatur deserunt, adipisci nostrum animi ab iste.
                            Animi suscipit eius sapiente nemo.</p>
                    </div>
                    <!-- Jobs Button -->
                    <div class="career-job-btn">
                        <button type="button" class="btn btn-success"> APPLY </button> <span> &nbsp; JOB TITLE GOES HERE
                        </span>
                        <ul style="display: flex; gap: 2rem;">
                            <li>Location</li>
                            <li>Full Time</li>
                            <li>Operations</li>
                            <li>£22,000 - £24,000</li>
                        </ul>
                    </div>
                    <!-- Jobs Button -->
                    <!-- Jobs Button -->
                    <div class="career-job-btn">
                        <button type="button" class="btn btn-success"> APPLY </button> <span> &nbsp; JOB TITLE GOES HERE
                        </span>
                        <ul style="display: flex; gap: 2rem;">
                            <li>Location</li>
                            <li>Full Time</li>
                            <li>Operations</li>
                            <li>£22,000 - £24,000</li>
                        </ul>
                    </div>
                    <!-- Jobs Button -->
                    <!-- Jobs Button -->
                    <div class="career-job-btn">
                        <button type="button" class="btn btn-success"> APPLY </button> <span> &nbsp; JOB TITLE GOES HERE
                        </span>
                        <ul style="display: flex; gap: 2rem;">
                            <li>Location</li>
                            <li>Full Time</li>
                            <li>Operations</li>
                            <li>£22,000 - £24,000</li>
                        </ul>
                    </div>
                    <!-- Jobs Button -->
                </div>
                <!-- END: Benifits -->

                <!-- START: Agency Policy -->
                <div class="career-about-us">
                    <h3>iPhone Arena Agency Policy</h3>
                    <div class="career-about-us-para">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut veniam, fugiat maiores earum at
                            dolorem minus impedit necessitatibus doloribus. Ullam ipsum dolor eveniet, laudantium nemo
                            doloremque aliquid fuga saepe quibusdam.</p>
                    </div>
                </div>
                <!-- END: Agency Policy -->

                <!-- START: Device Banner -->
                <div class="device-banner about-banner">
                    <img src="{{asset('frontend/assets/dsbanner.png')}}">
                </div>
                <!-- END: Device Banner -->

            </div>
            <!--  END: Career Container -->
        </div>
    </div>
</div>

<div class="container-fluid px-0 py-2" style="background-color: #f3f0e9;"></div>

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
        </div>
        <!-- Products -->
        <!-- Items -->
    </div>
</div>
<!-- Recent Added -->
@endsection