@extends('frontend.layouts.master')
@section('content')
<div class="box-grey">
    <!-- START: onload MODAL -->
    <div id="myModalonload" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content2">
                <div class="modal-body" style="display: flex;">
                    <div class="discount1"><img src="{{asset('frontend/assets/3.png')}}" alt="discount"></div>
                    <div class="discount2">
                        <h4 style="font-size: 65%;"><b>Get 10% OFF</b></h4>
                        <p style="font-size: 65%;">Sign up to our newsletter for access to our exclusive deals and 10%
                            off your first order.</p>
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success" style="font-size: 70%;">Get My Code</button>
                            <br>
                            <button type="button" class="btn btn-secondary mt-2" data-dismiss="modal"
                                style="font-size: 70%;">No Thanks</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: onload MODAL -->
    <!-- Device Selector -->
    <div class="device_selector">

        <div class="categoryselector shadow p-3 rounded">
            <h4>Find accessories for your device</h4>
            <br>
            <h5><label>Enter phone, tablet or wearable</label><br></h5>
            <div class="devices">
                <select id="devicesSelect" name="devices">
                    <optgroup label="Apple">
                        <option value="product-categories.html">Apple AirTag</option>
                        <option value="product-categories.html">Apple iPhone 15 Pro Max</option>
                        <option value="product-categories.html">Apple iPhone 15 Pro</option>
                        <option value="product-categories.html">Apple iPhone 15</option>
                        <option value="product-categories.html">Apple iPhone 14 Pro Max</option>
                        <option value="product-categories.html">Apple iPhone 14 Pro</option>
                        <option value="product-categories.html">Apple iPhone 14 Plus</option>
                        <option value="product-categories.html">Apple iPhone 14</option>
                        <option value="product-categories.html">Apple iPhone 13 Pro Max</option>
                        <option value="product-categories.html">Apple iPhone 13 Pro</option>
                        <option value="product-categories.html">Apple iPhone 13</option>
                        <option value="product-categories.html">Apple iPhone 13 mini</option>
                        <option value="product-categories.html">Apple Watch Series 7</option>
                        <option value="product-categories.html">Apple Watch Series 8</option>
                        <option value="product-categories.html">Apple Watch SE 2022</option>
                        <option value="product-categories.html">Apple Watch Ultra</option>
                        <option value="product-categories.html">Apple Watch Ultra 2</option>
                        <option value="product-categories.html">Apple Watch Series 9</option>
                        <option value="product-categories.html">Apple iPad Mini 6</option>
                        <option value="product-categories.html">Apple iPad 10.2 2021</option>
                        <option value="product-categories.html">Apple iPhone 12 Pro Max</option>
                        <option value="product-categories.html">Apple iPhone 12 Pro</option>
                        <option value="product-categories.html">Apple iPhone 12</option>
                        <option value="product-categories.html">Apple iPhone 12 mini</option>
                        <option value="product-categories.html">Apple iPhone SE 2020</option>
                        <option value="product-categories.html">Apple iPhone SE 2022</option>
                        <option value="product-categories.html">Apple iPad Pro 11 inch 2020</option>
                        <option value="product-categories.html">Apple iPad Pro 12.9 inch 2020</option>
                        <option value="product-categories.html">Apple iPhone 11 Pro Max</option>
                        <option value="product-categories.html">Apple iPhone 11 Pro</option>
                        <option value="product-categories.html">Apple iPhone 11</option>
                        <option value="product-categories.html">Apple iPhone XR</option>
                        <option value="product-categories.html">Apple iPhone XS Max</option>
                        <option value="product-categories.html">Apple iPhone XS</option>
                        <option value="product-categories.html">Apple iPhone X</option>
                        <option value="product-categories.html">Apple iPhone 8 Plus</option>
                        <option value="product-categories.html">Apple iPhone 8</option>
                        <option value="product-categories.html">Apple iPhone 7 Plus</option>
                        <option value="product-categories.html">Apple iPhone 7</option>
                        <option value="product-categories.html">Apple iPad Air 5</option>
                        <option value="product-categories.html">Apple iPad Air 4</option>
                        <option value="product-categories.html">Apple iPad 10.2 inch 2020</option>
                        <option value="product-categories.html">Apple iPad Pro 11 inch</option>
                        <option value="product-categories.html">Apple iPad Pro 12.9 inch</option>
                        <option value="product-categories.html">Apple Mac Studio</option>
                        <option value="product-categories.html">Macbook Air 13" 2022</option>
                        <option value="product-categories.html">Macbook Pro 14" 2021</option>
                        <option value="product-categories.html">Macbook Pro 16" 2021</option>
                        <option value="product-categories.html">Macbook Pro 14" 2023</option>
                        <option value="product-categories.html">Macbook Pro 16" 2023</option>
                    </optgroup>
                    <optgroup label="Garmin">
                        <option value="product-categories.html">Garmin Vivoactive 4</option>
                        <option value="product-categories.html">Garmin Fenix 7</option>
                        <option value="product-categories.html">Garmin Forerunner 255</option>
                        <option value="product-categories.html">Garmin Epix (Gen 2)</option>
                        <option value="product-categories.html">Garmin Approach S62</option>
                        <option value="product-categories.html">Garmin Tactix 7</option>
                        <option value="product-categories.html">Garmin Instinct 2</option>
                        <option value="product-categories.html">Garmin Fenix 6s</option>
                    </optgroup>
                    <optgroup label="Samsung">
                        <option value="product-categories.html">Samsung Galaxy A03 Core</option>
                        <option value="product-categories.html">Samsung Galaxy A03</option>
                        <option value="product-categories.html">Samsung Galaxy A02</option>
                        <option value="product-categories.html">Samsung Galaxy A02s</option>
                        <option value="product-categories.html">Samsung Galaxy A01</option>
                        <option value="product-categories.html">Samsung Galaxy Tab S6</option>
                        <option value="product-categories.html">Samsung Galaxy Tab S6 Lite</option>
                        <option value="product-categories.html">Samsung Galaxy Tab S5e</option>
                        <option value="product-categories.html">Samsung Galaxy Tab A8</option>
                        <option value="product-categories.html">Samsung Galaxy Tab A7 Lite</option>
                        <option value="product-categories.html">Samsung Galaxy Tab Active 3</option>
                        <option value="product-categories.html">Samsung Galaxy A72 5G</option>
                        <option value="product-categories.html">Samsung Galaxy A72</option>
                        <option value="product-categories.html">Samsung Galaxy A73</option>
                        <option value="product-categories.html">Samsung Galaxy A73</option>
                        <option value="product-categories.html">Samsung Galaxy A73</option>
                        <option value="product-categories.html">Samsung Galaxy A53</option>
                        <option value="product-categories.html">Samsung Galaxy A54</option>
                        <option value="product-categories.html">Samsung Galaxy A34</option>
                        <option value="product-categories.html">Samsung Galaxy A52 5G</option>
                        <option value="product-categories.html">Samsung Galaxy A52</option>
                        <option value="product-categories.html">Samsung Galaxy A42 5G</option>
                        <option value="product-categories.html">Samsung Galaxy A53</option>
                        <option value="product-categories.html">Samsung Galaxy A33 5G</option>
                        <option value="product-categories.html">Samsung Galaxy A32</option>
                        <option value="product-categories.html">Samsung Galaxy A22 5G</option>
                        <option value="product-categories.html">Samsung Galaxy Z Fold 2 5G</option>
                        <option value="product-categories.html">Samsung Galaxy Note 20 Ultra</option>
                        <option value="product-categories.html">Samsung Galaxy Note 20 5G</option>
                        <option value="product-categories.html">Samsung Galaxy Note 20</option>
                        <option value="product-categories.html">Samsung Galaxy Z Flip 5G</option>
                        <option value="product-categories.html">Samsung Galaxy S20 Ultra</option>
                        <option value="product-categories.html">Samsung Galaxy S20 Plus</option>
                        <option value="product-categories.html">Samsung Galaxy S20</option>
                        <option value="product-categories.html">Samsung Galaxy S20 FE 5G</option>
                        <option value="product-categories.html">Samsung Galaxy S20 FE</option>
                        <option value="product-categories.html">Samsung Galaxy S10 Plus</option>
                        <option value="product-categories.html">Samsung Galaxy S10</option>
                        <option value="product-categories.html">Samsung Galaxy S9 Plus</option>
                        <option value="product-categories.html">Samsung Galaxy S9</option>
                        <option value="product-categories.html">Samsung Galaxy S8 Plus</option>
                        <option value="product-categories.html">Samsung Galaxy S8</option>
                        <option value="product-categories.html">Samsung Galaxy Note 10 Plus</option>
                        <option value="product-categories.html">Samsung Galaxy Note 10</option>
                        <option value="product-categories.html">Samsung Galaxy Note 9</option>
                    </optgroup>
                    <optgroup label="Google">
                        <option value="product-categories.html">Google Pixel 6 Pro</option>
                        <option value="product-categories.html">Google Pixel 6</option>
                        <option value="product-categories.html">Google Pixel 5a</option>
                        <option value="product-categories.html">Google Pixel 4a</option>
                        <option value="product-categories.html">Google Pixel 4 XL</option>
                        <option value="product-categories.html">Google Pixel 4</option>
                        <option value="product-categories.html">Google Pixel 3a XL</option>
                        <option value="product-categories.html">Google Pixel 3a</option>
                        <option value="product-categories.html">Google Pixel 3 XL</option>
                        <option value="product-categories.html">Google Pixel 3</option>
                        <option value="product-categories.html">Google Pixel 2 XL</option>
                        <option value="product-categories.html">Google Pixel 2</option>
                        <option value="product-categories.html">Google Pixel XL</option>
                        <option value="product-categories.html">Google Pixel</option>
                        <option value="product-categories.html">Google Nest Hub Max</option>
                        <option value="product-categories.html">Google Nest Hub</option>
                        <option value="product-categories.html">Google Nest Mini</option>
                        <option value="product-categories.html">Google Home Mini</option>
                    </optgroup>
                    <optgroup label="Xiaomi">
                        <option value="product-categories.html">Xiaomi Redmi Note 11</option>
                        <option value="product-categories.html">Xiaomi Redmi Note 10 Pro</option>
                        <option value="product-categories.html">Xiaomi Redmi Note 10</option>
                        <option value="product-categories.html">Xiaomi Mi 11</option>
                        <option value="product-categories.html">Xiaomi Mi 11 Pro</option>
                        <option value="product-categories.html">Xiaomi Mi 10T Pro</option>
                        <option value="product-categories.html">Xiaomi Mi 10T</option>
                        <option value="product-categories.html">Xiaomi Poco X3</option>
                        <option value="product-categories.html">Xiaomi Poco X3 Pro</option>
                        <option value="product-categories.html">Xiaomi Poco X2</option>
                        <option value="product-categories.html">Xiaomi Mi Mix 4</option>
                        <option value="product-categories.html">Xiaomi Mi Mix Fold</option>
                        <option value="product-categories.html">Xiaomi Mi 10 Ultra</option>
                        <option value="product-categories.html">Xiaomi Mi 10 Pro</option>
                        <option value="product-categories.html">Xiaomi Mi 10</option>
                        <option value="product-categories.html">Xiaomi Mi 9T Pro</option>
                        <option value="product-categories.html">Xiaomi Mi 9T</option>
                        <option value="product-categories.html">Xiaomi Mi 9 SE</option>
                        <option value="product-categories.html">Xiaomi Mi 9</option>
                        <option value="product-categories.html">Xiaomi Mi 8 Pro</option>
                        <option value="product-categories.html">Xiaomi Mi 8</option>
                        <option value="product-categories.html">Xiaomi Mi 6</option>
                        <option value="product-categories.html">Xiaomi Mi 5X</option>
                        <option value="product-categories.html">Xiaomi Mi 5c</option>
                        <option value="product-categories.html">Xiaomi Mi 5</option>
                        <option value="product-categories.html">Xiaomi Mi 4</option>
                        <option value="product-categories.html">Xiaomi Mi 3</option>
                        <option value="product-categories.html">Xiaomi Mi Note 3</option>
                        <option value="product-categories.html">Xiaomi Mi Note 2</option>
                        <option value="product-categories.html">Xiaomi Mi Note</option>
                        <option value="product-categories.html">Xiaomi Redmi K40 Pro</option>
                        <option value="product-categories.html">Xiaomi Redmi K40</option>
                        <option value="product-categories.html">Xiaomi Redmi K30 Pro</option>
                        <option value="product-categories.html">Xiaomi Redmi K30</option>
                        <option value="product-categories.html">Xiaomi Redmi K20 Pro</option>
                        <option value="product-categories.html">Xiaomi Redmi K20</option>
                        <option value="product-categories.html">Xiaomi Redmi 9</option>
                        <option value="product-categories.html">Xiaomi Redmi 9A</option>
                        <option value="product-categories.html">Xiaomi Redmi 9C</option>
                        <option value="product-categories.html">Xiaomi Redmi 8A</option>
                        <option value="product-categories.html">Xiaomi Redmi 8</option>
                        <option value="product-categories.html">Xiaomi Redmi 7A</option>
                        <option value="product-categories.html">Xiaomi Redmi 7</option>
                        <option value="product-categories.html">Xiaomi Redmi 6A</option>
                        <option value="product-categories.html">Xiaomi Redmi 6</option>
                        <option value="product-categories.html">Xiaomi Redmi 5</option>
                        <option value="product-categories.html">Xiaomi Redmi 4A</option>
                        <option value="product-categories.html">Xiaomi Redmi 4X</option>
                        <option value="product-categories.html">Xiaomi Redmi 3S</option>
                        <option value="product-categories.html">Xiaomi Redmi 3 Pro</option>
                        <option value="product-categories.html">Xiaomi Redmi 3</option>
                        <option value="product-categories.html">Xiaomi Mi Pad 5 Pro</option>
                        <option value="product-categories.html">Xiaomi Mi Pad 5</option>
                        <option value="product-categories.html">Xiaomi Mi Pad 5 Lite</option>
                        <option value="product-categories.html">Xiaomi Mi Pad 4 Plus</option>
                        <option value="product-categories.html">Xiaomi Mi Pad 4</option>
                        <option value="product-categories.html">Xiaomi Mi Pad 4C</option>
                        <option value="product-categories.html">Xiaomi Mi Pad 3</option>
                        <option value="product-categories.html">Xiaomi Mi Pad 2</option>
                        <option value="product-categories.html">Xiaomi Mi Pad</option>
                    </optgroup>
                    <optgroup label="OnePlus">
                        <option value="product-categories.html">OnePlus 9 Pro</option>
                        <option value="product-categories.html">OnePlus 9</option>
                        <option value="product-categories.html">OnePlus 9R</option>
                        <option value="product-categories.html">OnePlus 8T</option>
                        <option value="product-categories.html">OnePlus 8 Pro</option>
                        <option value="product-categories.html">OnePlus 8</option>
                        <option value="product-categories.html">OnePlus Nord</option>
                        <option value="product-categories.html">OnePlus 7T Pro</option>
                        <option value="product-categories.html">OnePlus 7T</option>
                        <option value="product-categories.html">OnePlus 7 Pro</option>
                        <option value="product-categories.html">OnePlus 7</option>
                        <option value="product-categories.html">OnePlus 6T</option>
                        <option value="product-categories.html">OnePlus 6</option>
                        <option value="product-categories.html">OnePlus 5T</option>
                        <option value="product-categories.html">OnePlus 5</option>
                        <option value="product-categories.html">OnePlus 3T</option>
                        <option value="product-categories.html">OnePlus 3</option>
                        <option value="product-categories.html">OnePlus 2</option>
                        <option value="product-categories.html">OnePlus One</option>
                    </optgroup>
                    <optgroup label="NOKIA">
                        <option value="product-categories.html">Nokia C21</option>
                        <option value="product-categories.html">Nokia C21 Plus</option>
                        <option value="product-categories.html">Nokia C2 2nd Edition</option>
                    </optgroup>
                    <optgroup label="TCL">
                        <option value="product-categories.html">TCL 30 5G</option>
                        <option value="product-categories.html">TCL 30+</option>
                    </optgroup>
                    <optgroup label="Fixbit">
                        <option value="product-categories.html">Fixbit 2</option>
                        <option value="product-categories.html">Fixbit 4</option>
                    </optgroup>
                </select>
                <br><br>
                <a href="#" style="font-weight: 900;">Can't see the accessory you need?</a><br>
                <a href="#" style="font-weight: 900;">Need help?</a>
            </div>

        </div>
    </div>
    <!-- Device Selector -->
    <!-- Inner Container -->
    <div class="container-lg bg-light shadow p-3 rounded col-md">

        <!-- Device Banner -->
        <div class="device-banner">
            <img src="{{asset('frontend/assets/Banner1.png')}}">
        </div>

        <!-- Accessories -->
        <div class="top-categories devices-container">
            <h4 style="text-align:center; font-size: 17px;" class="text-muted shadow p-3 bg-body rounded zoom-effect">
                Find Accessories For Your Device</h4>
            <hr class="bg-danger" style="height: 2px; width: 15rem;">

            <!-- Products -->
            <div class="top-category-products container-fluid">
                <!-- Row 1 -->
                <!-- 1 -->
                @foreach($subCategories as $subCategory)
                <div style="text-align: center;">
                    <a href="{{route('category.product.sub',$subCategory['id'])}}">
                        <img src="{{asset($subCategory->getFirstMediaUrl('subCategory.image'))}}" alt="device"><br>
                    </a>
                    <a href="#">{{$subCategory['name']}}</a>
                </div>
                @endforeach
            </div>
            <!-- Products -->
            <hr class="bg-danger" style="height: 2px; width: 15rem;">
        </div>
        <!-- Accessories -->

        <!-- Slidshow -->
        <div class="container">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner top-slider-crousel">
                    <div class="carousel-item active device-banner">
                        <img src="{{asset('frontend/assets/9.png')}}" class="d-block w-100" alt="1">
                    </div>
                    <div class="carousel-item device-banner">
                        <img src="{{asset('frontend/assets/10.png')}}" class="d-block w-100" alt="2">
                    </div>
                    <div class="carousel-item device-banner">
                        <img src="{{asset('frontend/assets/11.png')}}" class="d-block w-100" alt="3">
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Categories -->
        <div class="top-categories devices-container">
            <h4 style="text-align:center; font-size: 17px;" class="text-muted shadow p-3 bg-body rounded zoom-effect">
                Top Categories</h4>
            <hr class="bg-danger" style="height: 2px; width: 15rem;">

            <!-- Products -->
            <div class="top-category-products container-fluid">
                <!-- Items -->
                @foreach($parentCategories as $parentCategory)
                <div style="text-align: center;">
                    <a href="{{route('category.product',$parentCategory['id'])}}">
                        <img src="{{asset($parentCategory->getFirstMediaUrl('parentCategory.image'))}}"
                            alt="carphoneholder">
                    </a>
                    <a href="{{route('category.product',$parentCategory['id'])}}">{{$parentCategory['name']}}</a>
                </div>
                @endforeach
                <!-- Items -->
            </div>
            <!-- Products -->
        </div>
        <!-- Top Categories -->

        <!-- Top Brandas -->
        <div class="container-fluid">

            <div class="devices-container">
                <h4 style="text-align:center; font-size: 17px;"
                    class="text-muted shadow p-3 bg-body rounded zoom-effect">Top Brands</h4>
                <hr class="bg-danger" style="height: 2px; width: 15rem;">
            </div>
            <!-- Top Brand Images -->
            <div style="text-align: center;" class="top-brand-one">
                <a href="#"><img src="{{asset('frontend/assets/topbrands/olixar-mf-banner.png')}}" alt="top brand"
                        class="zoom-effect"></a>
                <a href="#"><img src="{{asset('frontend/assets/topbrands/Mobilefun-banner-low.png')}}" alt="top brand"
                        class="zoom-effect"></a>
            </div>
            <div style="text-align: center; margin-top: 5px;" class="top-brand-two">
                <a href="#"><img src="{{asset('frontend/assets/topbrands/ghostek362.png')}}" alt="top brand"
                        class="zoom-effect"></a>
                <a href="#"><img src="{{asset('frontend/assets/topbrands/Otterbox-362.png')}}" alt="top brand"
                        class="zoom-effect"></a>
                <a href="#"><img src="{{asset('frontend/assets/topbrands/tb6.jpg')}}" alt="top brand"
                        class="zoom-effect"></a>
            </div>
            <!-- Top Brand Images -->
        </div>
        <!-- Top Brandas -->

        <!-- About -->
        <div class="top-brands mt-4">
            <div class="top-brands-head">
                <h4 style="text-align:center; font-size: 17px;"
                    class="text-muted shadow p-3 bg-body rounded zoom-effect">About Us</h4>
                <hr class="bg-danger" style="height: 2px; width: 15rem;">
                <br>
                <p style="text-align: justify;">
                    Learn about our mission to provide top-notch mobile accessories.Our team is passionate about
                    technology and dedicated to delivering quality products. At our core, we are driven by a
                    singular mission, and that is to provide top-notch mobile accessories that enhance the way
                    you interact with your devices. Our team is not just a group of professionals; we are a
                    community of individuals who are deeply passionate about technology. This passion fuels our
                    dedication to delivering quality products that not only meet but exceed the expectations of
                    our customers.
                </p>
            </div>

        </div>
        <!-- About -->

        <!-- Device Banner 2 -->
        <div class="device-banner">
            <img src="{{asset('frontend/assets/dsbanner.png')}}">
        </div>

        <!-- Device Manufactruer -->
        <div class="device-manufactruers devices-container">
            <h4 style="text-align:center; font-size: 17px;" class="text-muted shadow p-3 bg-body rounded zoom-effect">
                Manufactruers</h4>
            <hr class="bg-danger" style="height: 2px; width: 15rem;">
            <!-- sliding brand -->
            <div class="sliding-brand-box container">
                <div class="sliding-brand">
                    <!-- 1 -->
                    <div class="item zoom-effect" style="text-align: center;">
                        <img src="{{asset('frontend/assets/manufacturer/Apple.png')}}" alt="device" width="100rem"><br>
                    </div>
                    <!-- 2 -->
                    <div class="item zoom-effect" style="text-align: center;">
                        <img src="{{asset('frontend/assets/manufacturer/Samsung.png')}}" alt="device"
                            width="100rem"><br>
                    </div>
                    <!-- 3 -->
                    <div class="item zoom-effect" style="text-align: center;">
                        <img src="{{asset('frontend/assets/manufacturer/Sony.png')}}" alt="device" width="100rem"><br>
                    </div>
                    <!-- 4 -->
                    <div class="item zoom-effect" style="text-align: center;">
                        <img src="{{asset('frontend/assets/manufacturer/Huawei.png')}}" alt="device" width="100rem"><br>
                    </div>
                    <!-- 5 -->
                    <div class="item zoom-effect" style="text-align: center;">
                        <img src="{{asset('frontend/assets/manufacturer/Motorola.png')}}" alt="device"
                            width="100rem"><br>
                    </div>
                    <!-- 6 -->
                    <div class="item zoom-effect" style="text-align: center;">
                        <img src="{{asset('frontend/assets/manufacturer/Google.png')}}" alt="device" width="100rem"><br>
                    </div>
                    <!-- 7 -->
                    <div class="item zoom-effect" style="text-align: center;">
                        <img src="{{asset('frontend/assets/manufacturer/OnePlus.png')}}" alt="device"
                            width="100rem"><br>
                    </div>
                    <!-- 8 -->
                    <div class="item zoom-effect" style="text-align: center;">
                        <img src="{{asset('frontend/assets/manufacturer/LG.png')}}" alt="device" width="100rem"><br>
                    </div>
                    <!-- 9 -->
                    <div class="item zoom-effect" style="text-align: center;">
                        <img src="{{asset('frontend/assets/manufacturer/HTC.png')}}" alt="device" width="100rem"><br>
                    </div>
                    <!-- 10 -->
                    <div class="item zoom-effect" style="text-align: center;">
                        <img src="{{asset('frontend/assets/manufacturer/Nokia.png')}}" alt="device" width="100rem"><br>
                    </div>
                    <!-- 11 -->
                    <div class="item zoom-effect" style="text-align: center;">
                        <img src="{{asset('frontend/assets/manufacturer/Lenovo.png')}}" alt="device" width="100rem"><br>
                    </div>
                    <!-- 12 -->
                    <div class="item zoom-effect" style="text-align: center;">
                        <img src="{{asset('frontend/assets/manufacturer/Microsoft.png')}}" alt="device"
                            width="100rem"><br>
                    </div>
                </div>
            </div>
            <!-- sliding brand -->
        </div>

        <!-- Why choose us -->
        <div class="container-fluid">
            <section class="why-us">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <h2 class="mt-5 text-center">Why Choose Us</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-xl-6">
                            <div class="box">
                                <span>01</span>
                                <h4><a href="#">Quality Assurance</a></h4>
                                <p>We stand behind the quality of our products with a satisfaction guarantee. If
                                    you're not completely happy with your purchase, please don't hesitate to
                                    contact our customer support team for assistance.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6">
                            <div class="box">
                                <span>02</span>
                                <h4><a href="#">Fast Shipping</a></h4>
                                <p>Enjoy quick and reliable delivery to your doorstep. Experience convenience at
                                    its best with our dedicated team of drivers and advanced tracking
                                    technology.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6">
                            <div class="box">
                                <span>03</span>
                                <h4><a href="#">Customer Support</a></h4>
                                <p>Our friendly support team is ready to assist you with any questions or
                                    concerns.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-6">
                            <div class="box">
                                <span>04</span>
                                <h4><a href="#">Money Back Guarantee</a></h4>
                                <p>Shop with confidence, Thirty Days Money Back Guarantee. Satisfaction
                                    guaranteed, or your purchase is fully refundable.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
        <!-- Why choose us -->
    </div>
    <!-- Inner Container -->
</div>

<!-- Box -->
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
            @foreach($products as $product)
            <div style="text-align: center">
                <a href="{{route('product.details',$product['id'])}}">
                    <img src="{{asset($product->getFirstMediaUrl('product.image'))}}" alt="device" /><br />
                </a>
                <a href="{{route('product.details',$product['id'])}}">{{$product['name']}}</a>
            </div>
            @endforeach
        </div>
        <!-- Products -->
        <!-- Items -->
    </div>
</div>
<!-- Recent Added -->
@endsection