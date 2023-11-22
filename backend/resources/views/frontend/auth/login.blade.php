@extends('frontend.layouts.master')
@section('content')
<!-- forms -->
<div class="container rounded mt-3 py-0 detail-buttons">
    <button style="border: none;" class="px-4 py-2" type="button" onclick="showLogin()">Login</button>
    <button style="border: none;" class="px-4 py-2" type="button" onclick="showSignup()">Create Account</button>
</div>
<div class="container bg-light shadow p-3">
    <!-- 1 -->
    <section class="overview" id="login-section">

        <div class="devices-container">
            <h4 style="text-align:center; font-size: 17px;" class="text-muted shadow p-3 bg-body rounded zoom-effect">
                Login to your Account</h4>
            <hr class="bg-danger" style="height: 2px; width: 15rem;">
        </div>

        <div class="container d-flex justify-content-center">
            <div class="col-md-6 mt-3">
                <button type="button" class="btn btn-danger btn-block">Login with Google</button>
                <form class="mt-3">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-success btn-block mt-3">Login</button>
                </form>
            </div>
        </div>
    </section>
    <!-- 2 -->
    <section class="delivery-and-return" id="signup-section" class="hidden">

        <div class="devices-container">
            <h4 style="text-align:center; font-size: 17px;" class="text-muted shadow p-3 bg-body rounded zoom-effect">
                Create and Account</h4>
            <hr class="bg-danger" style="height: 2px; width: 15rem;">
        </div>

        <div class="container d-flex justify-content-center">
            <div class="col-md-6 mt-3">
                <form>
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Enter your first name">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Enter your last name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <label for="reEnterPassword">Re-enter Password</label>
                        <input type="password" class="form-control" id="reEnterPassword"
                            placeholder="Re-enter your password">
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Sign Up</button>
                </form>
            </div>
        </div>
    </section>
</div>
<!-- forms -->

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
                    <img src="assets/1.png" alt="device" /><br />
                </a>
                <a href="product-details.html">Olixar 2 Pack Tempered Glass Screen Protectors - For Samsung Galaxy S23
                    Ultra</a>
            </div>
            <!-- 2 -->
            <div style="text-align: center">
                <a href="product-details.html">
                    <img src="assets/2.png" alt="device" /><br />
                </a>
                <a href="product-details.html">Olixar Clear Glitter Tough Case - For Samsung Galaxy A54</a>
            </div>
            <!-- 3 -->
            <div style="text-align: center">
                <a href="product-details.html">
                    <img src="assets/3.png" alt="device" /><br />
                </a>
                <a href="product-details.html">Olixar Ultra-Thin 100% Clear Case - For iPhone 15 Pro Max</a>
            </div>

            <!-- Row 2 -->
            <!-- 1 -->
            <div style="text-align: center">
                <a href="product-details.html">
                    <img src="assets/4.png" alt="device" /><br />
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
@section('script')
<script>
    document.getElementById('signup-section').style.display = 'none';
     function showLogin() {
            document.getElementById('login-section').style.display = 'block';
            document.getElementById('signup-section').style.display = 'none';
        }

        function showSignup() {
            document.getElementById('login-section').style.display = 'none';
            document.getElementById('signup-section').style.display = 'block';
        }
</script>
@endsection