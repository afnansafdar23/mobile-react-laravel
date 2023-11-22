@extends('frontend.layouts.master')
@section('content')
<!-- Contact -->
<!-- Hero -->
<div class="p-5 text-center bg-image rounded-3" style="
    background-image: url('assets/dsbanner.png');
    width: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    ">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6); height: 200px;">
        <div class="d-flex justify-content-center align-items-center">
            <div class="text-white">
                <h1 class="mb-3">Got any Questions? We'd love to hear.</h1>
                <h4 style="font-size: 17px;" class="mb-3">Whether you're curious about our service, your order status,
                    or returns. We're ready to answer any and all questions</h4>
            </div>
        </div>
    </div>
</div>
<!-- Hero -->

<!-- Questions -->
<div class="container rounded mt-3 py-0 detail-buttons">
    <button style="border: none;" class="px-4 py-2" type="button" onclick="showQone()">How do I make a
        complaint?</button>
    <button style="border: none;" class="px-4 py-2" type="button" onclick="showQtwo()">How do I contact customer
        services?</button>
    <button style="border: none;" class="px-4 py-2" type="button" onclick="faq()">FAQ's</button>
</div>
<div class="container bg-light shadow p-3">
    <!-- 1 -->
    <section class="overview" id="one-section">
        <h4><b>We're Here to Help!</b></h4>
        <hr>
        <p>We hope that you never need to make a complaint but if you do, don't worry, we're here to help!</p>
        <p>Please contact our Customer Support team who will help resolve any issue you may have. To help resolve the
            problem as quickly as possible, could you please include:</p>
        <ul>
            <li>Your Order ID</li>
            <li>Any applicable images showing the issue with a product or parcel</li>
            <li>A brief description of the issue/complaint</li>
        </ul>
    </section>
    <!-- 2 -->
    <section class="delivery-and-return" id="two-section" class="hidden">
        <h4><b>Contact Customer Services</b></h4>
        <hr>
        <p>Firstly, have a look at our FAQ's as the most common questions are answered here and there is no waiting
            around!</p>
        <p>If you still need to contact us then email our Customer Support team for help. Just note that it might take
            the team 1-2 business days to respond.</p>
    </section>
    <!-- 3 -->
    <section class="faq" id="faq-section">
        <h4><b>Frequently Asked Questions</b></h4>
        <hr>
        <h5>Q - What types of mobile accessories do you offer?</h5>
        <p>We offer a wide range of mobile accessories, including phone cases, screen protectors, chargers, headphones,
            phone stands, and more.</p>

        <h5>Q - Are your mobile accessories compatible with all smartphone brands and models?</h5>
        <p>Our accessories are designed to be compatible with a wide range of smartphone brands and models. You can
            check the product descriptions for specific compatibility details.</p>

        <h5>Q - How can I find the right accessory for my phone?</h5>
        <p>You can use our search and filter options to find accessories specific to your phone's make and model.
            Additionally, our product descriptions provide compatibility information.</p>

        <h5>Q - Do you offer free shipping?</h5>
        <p>We offer free shipping on orders over a certain amount. Please check our shipping policy for specific
            details.</p>

        <h5>Q - What is your return and exchange policy?</h5>
        <p>Our return and exchange policy allows you to return or exchange items within a specified period if they are
            in unused and resalable condition. Please review our detailed policy for more information.</p>

        <h5>Q - How can I track my order?</h5>
        <p>Once your order is shipped, you will receive a tracking number via email. You can use this number to track
            your order on our website or through the shipping carrier.</p>

        <h5>Q - What payment methods do you accept?</h5>
        <p>We accept various payment methods, including credit cards, debit cards, PayPal, and more. You can find a list
            of accepted payment methods during the checkout process.</p>

        <h5>Q - Do you offer warranty on your products?</h5>
        <p>Some of our products may come with a manufacturer's warranty. You can find warranty information in the
            product descriptions. If you encounter any issues, please contact our customer support for assistance.</p>

        <h5>Q - Can I return or exchange an accessory if I ordered the wrong one?</h5>
        <p>You can reach our customer support team through the "Contact Us" page on our website. We're here to assist
            you with any questions or concerns.</p>

        <h5>Q - Do you offer bulk discounts for larger orders?</h5>
        <p>We do offer bulk discounts for larger orders. Please contact our sales team for more information and custom
            pricing.</p>

        <h5>Q - Is my personal and payment information secure on your website?</h5>
        <p>We take data security seriously and use industry-standard encryption to protect your personal and payment
            information. Your data is safe with us.</p>
    </section>
</div>
<!-- Questions -->

<div class="container-lg bg-light shadow p-3 mt-3">
    <div class="devices-container">
        <h4 style="text-align:center; font-size: 17px;" class="text-muted shadow p-3 bg-body rounded zoom-effect">Get In
            Touch</h4>
        <hr class="bg-danger" style="height: 2px; width: 15rem;">
    </div>

    <!-- Icons -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <i style="font-size: 17px;" class="fa fa-phone-square" aria-hidden="true"> +44 7883 846758</i>
            </div>
            <div class="col-md-6 text-center">
                <i style="font-size: 17px;" class="fa fa-envelope" aria-hidden="true"> iphonearena07@gmail.com</i>
            </div>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="container text-center mt-3">
        <div class="col-md-6 mx-auto">
            <form>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="message">Send Message:</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Type your message"></textarea>
                </div>
                <button type="submit" class="btn btn-success mt-3">Send Email</button>
            </form>
        </div>
    </div>
    <!-- Contact -->
</div>
@endsection