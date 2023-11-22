<footer class="container-fluid px-0 bg-light text-dark">

    <div class="discount-bar container-fluid px-0">
        <div class="discount-bar-desc">
            <div>
                <h1>10% OFF</h1><br>
                <p>Sign up to our newsletter for access to our exclusive deals and 10% off your first order.</p>
            </div>
            <div>
                <button type="button" class="btn btn-success">SIGN UP</button>
            </div>
        </div>
    </div>

    <br>
    <!-- Accordian -->
    <div class="currency-change container px-4">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        CURRENCY CHANGE
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <option value="GBP">GBP£</option>
                        <option value="EURO">EURO€</option>
                        <option value="USD">USD$</option>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Accordian -->

    <!-- Footer Blocks -->
    <div class="footer-blocks px-3" style="font-size: 12px;">
        <!-- 1 -->
        <div class="footer-block">
            <div class="payment-method">
                <h2 style="margin: 1rem 0;">Payment options</h2>
                <img src="{{asset('frontend/assets/payment.PNG')}}" alt="payments">
            </div>
            <br>
            <div class="follow-social">
                <h2>Follow Us</h2>
                <a href="https://www.facebook.com/profile.php?id=61552777326715"><i
                        style="font-size: 30px; color: blue;" class="fa fa-facebook-official"
                        aria-hidden="true"></i></a>
                <a href="#"><i style="font-size: 30px; color: skyblue;" class="fa fa-twitter-square"
                        aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/iphonearena09/"><i style="font-size: 30px; color: grey;"
                        class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <br>
            <div class="app-download">
                <h2>App</h2>
                <a href="#"><i style="font-size: 30px;" class="fa fa-download" aria-hidden="true"></i></a> Download App
            </div>
        </div>
        <!-- 2 -->
        <div class="footer-block">
            <h4 style="margin: 1rem 0;">Customer Service</h4>
            <ul style="list-style: none;">
                <li><a href="{{route('contact')}}">Contact Us</a></li>
                <li><a href="{{route('term-conditions')}}">Return Policy</a></li>
                <li><a href="{{route('contact')}}">FAQs</a></li>
            </ul>
            <h4 style="margin: 1rem 0;">Site Information</h4>
            <ul style="list-style: none;">
                <li><a href="{{route('about')}}">About Us</a></li>
                <li><a href="{{route('term-conditions')}}">Terms and Conditions</a></li>
                <li><a href="{{route('all-blogs')}}">Blog</a></li>
                <li><a href="{{route('career')}}">Careers</a></li>
            </ul>
        </div>
        <!-- 3 -->
        <div class="footer-block">
            <h4 style="margin: 1rem 0;">Popular Categories</h4>
            <ul style="list-style: none;">
                @foreach ($parentCategories as $parentCategory)
                <li><a href="{{route('category.product',$parentCategory['id'])}}">{{$parentCategory->name}}</a></li>
                @endforeach
            </ul>
        </div>

        <!-- 4 -->
        <div class="footer-block">
            <h4 style="margin: 1rem 0;">Popular Manufacturers</h4>
            <ul style="list-style: none;">
                <li><a href="#">Apple</a></li>
                <li><a href="#">Garmin</a></li>
                <li><a href="#">Samsung</a></li>
                <li><a href="#">Google</a></li>
                <li><a href="#">Xiomi</a></li>
                <li><a href="#">One Plus</a></li>
                <li><a href="#">TCL</a></li>
                <li><a href="#">Fixbit</a></li>
                <li><a href="#">Nokia</a></li>
                <li><a style="text-decoration: none; color: black;" href="#">View All Brands</a>
                </li>
            </ul>
        </div>

        <!-- 5 -->
        <div class="footer-block">
            <h4 style="margin: 1rem 0;">Popular Products</h4>
            <ul style="list-style: none;">
                @foreach ($products as $product)
                <li><a href="{{route('product.details',$product['id'])}}">{{$product['name']}}</a></li>
                @endforeach
            </ul>
        </div>

    </div>
    <hr>
    <!-- Conditions -->
    <div class="container" style="display: flex; justify-content: space-evenly; margin-bottom: 5px;">
        <a style="text-decoration:none;" href="{{route('term-conditions')}}">Terms and Conditions</a>
        <a style="text-decoration:none;" href="{{route('all-blogs')}}">Blogs</a>
        <a style="text-decoration:none;" href="{{route('data-privacy')}}">Data Privacy</a>
    </div>
    <!-- Conditions -->
    <p style="text-align: center;">&copy; 2023 Copyrights Iphone Arena. All rights reserved</p>
</footer>