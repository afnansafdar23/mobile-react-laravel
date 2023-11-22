<!-- Header -->
<!-- Top Contacts -->
<div class="top-contacts">
    <p class="animate__animated animate__backInLeft"><i class="fa fa-envelope" aria-hidden="true"></i>
        iphonearena07@gmail.com</p>|
    <p class="animate__animated animate__backInLeft animate__delay-1s"><i class="fa fa-phone" aria-hidden="true"></i>
        +44 7883 846758</p>
</div>
<!-- Top Contacts -->
<div class="header container">
    <img class="ialogo" src="{{asset('frontend/assets/ialogo.png')}}" alt="logo">

    <!-- Search -->
    <form class="example" action="#">
        <input type="text" placeholder="By device, brand or item" name="search" autocomplete="off">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>

    <div class="cart">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="badge text-dark badge-pill badge-danger">{{
            count((array) session('cart')) }}</span>
        <button class="btn btn-success"><a href="{{route('cart.product')}}"
                style="text-decoration:none; color: white;">Checkout</a></button>
    </div>
</div>

<!-- preheader -->
<div class="preheader container">
    <!-- List -->
    <div class="list">
        <ul>
            <li><a href="{{route('contact')}}" class="btn">Help </a>|</li>
            <li><a href="#" type="button" id="myBtn" class="btn" onclick="openFeedbackModal()">Feedback </a>|</li>
            {{-- <li><a href="trackmyorder.html" class="btn">Track My Order </a>|</li> --}}
            <li><a href="{{route('auth.login')}}" class="btn">My Account</a></li>
        </ul>
    </div>
    <!-- Selectors -->
    <div class="preheader__selectors">
        <!-- currency -->
        <div class="currency">
            <select name="currency" id="currency">
                <option value="GBP">GBP£</option>
                <option value="EURO">EURO€</option>
                <option value="USD">USD$</option>
            </select>
        </div>
    </div>
</div>