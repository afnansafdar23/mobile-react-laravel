@extends('frontend.layouts.master')
@section('content')
<!-- Products Details Container -->
<div class="container bg-light shadow p-3 rounded">
    @if (Session::has('success'))
    <div class="alert alert-success text-center">
        {{-- <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> --}}
        <p>{{ Session::get('success') }}</p>
    </div>
    @endif
    <h4 style="text-align:center; font-size: 17px;" class="text-muted shadow p-3 bg-body rounded">{{$product->name}}
    </h4>
    <!-- Product -->
    <div class="product-information mt-3 container">
        <!-- image -->
        <div class="product-information-images">
            <div class="main-image col-md-6">
                <img id="main-image" src="{{asset($product->getFirstMediaUrl('product.image'))}}" alt="Main Image">
            </div>
        </div>
        <!-- Info -->
        <div class="product-information-details">
            <p>{{$product->description}}</p>
            <span>Price: <b>£{{$product->price}}</b></span> <br>
            <span>RRP: <del>£{{$product->discounted_price}}</del> | <span style="color: red;">{{($product->price -
                    $product->discounted_price) / $product->price * 100}}%
                    OFF</span></span><br>
            <span><i style="color: {{ $product['availability'] == 'on' ? 'green' : 'red' }};"
                    class="{{ $product['availability'] == 'on' ? 'fa fa check' : 'fa fa-solid fa-xmark' }}"
                    aria-hidden="true"></i> <b>{{
                    $product['availability'] ==
                    'on' ? 'In Stock' : 'Out Of Stock' }}</b></span>
            <span>
                <form action="#" method="post" class="px-4">
                    <a href="{{route('product.add.cart',$product->id)}}" type="button"
                        class="px-5 py-1 btn-success rounded text-decoration-none" style="border: none;">Add To
                        Basket</a>
                </form>
            </span><br>
            <span><i class="fa fa-clock-o" aria-hidden="true"></i> Shipment in next working days</span><br>
        </div>
    </div>
    <!-- Product -->
</div>
<!-- Products Details Container -->
<!-- Details -->
<div class="container rounded mt-3 py-0 detail-buttons">
    <button style="border: none;" class="px-4 py-2" type="button" onclick="showOverview()">Overview</button>
    <button style="border: none;" class="px-4 py-2" type="button" onclick="showDelivery()">Delivery and
        Return</button>
    <button style="border: none;" class="px-4 py-2" type="button" onclick="showComments()">Questions &
        Answers</button>
</div>
<div class="container bg-light shadow p-3">
    <!-- 1 -->
    <section class="overview" id="overview-section">
        <div class="devices-container">
            <h4 style="text-align:center; font-size: 17px;" class="text-muted shadow p-3 bg-body rounded zoom-effect">
                Overview</h4>
            <hr class="bg-danger" style="height: 2px; width: 15rem;">
        </div>

        <h4><b>Key Features</b></h4>
        <ul>
            <li>{{$product->features}}</li>
        </ul>

        <h4><b>Description</b></h4>
        {{-- <h5>Hard 9H tempered glass construction</h5> --}}
        <p>{{$product->description}}</p>

        <h4><b>Key Details</b></h4>
        <p>
        <table border="0">
            <tr>
                <th>Part No</th>
                <td> - {{$product->part_number}}</td>
            </tr>
            <tr>
                <th>Manufacturer </th>
                <td>{{$product->manufacturer}}</td>
            </tr>
            <tr>
                <th>Colour </th>
                <td>{{$product->color}}</td>
            </tr>
        </table>
        </p>
    </section>

    <!-- START: Questions and Answers -->
    <section id="comment-section">
        <h4><b>Questions &amp; Answers</b></h4>
        <br>

        <div class="qna-comments">
            <p>
                <span> 0 </span> Comments
            </p>

            <a href="login.html">Login</a>
        </div>

        <div class="comment-form" style="width: 60%;">
            <form action="#" method="post">
                <input type="text" name="comment" id="comment" placeholder="Add Comment"> <br><br>
                <button type="submit" class="btn btn-success">Add Comment</button>
            </form>

            <br><br>

            <div class="comment-visible">
                <img src="assets/category/Speakers.png" alt="icon">
                <p style="width: 80%;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                    ut
                </p>
            </div>
        </div>

    </section>
    <!-- END: Questions and Answers -->

    <!-- 2 -->
    <section class="delivery-and-return" id="delivery-section" class="hidden">

        <div class="devices-container">
            <h4 style="text-align:center; font-size: 17px;" class="text-muted shadow p-3 bg-body rounded zoom-effect">
                Delivery & Returns</h4>
            <hr class="bg-danger" style="height: 2px; width: 15rem;">
        </div>

        <div class="container">
            <h4>Delivery Options</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Estimated Delivery Time</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Royal Mail 48 Service (Super Saver)</td>
                        <td>2 to 5 working days</td>
                        <td>From £1.60</td>
                    </tr>
                    <tr>
                        <td>Evri Tracked 2-3 Day</td>
                        <td>2 to 3 working days</td>
                        <td>£2.99</td>
                    </tr>
                    <tr>
                        <td>Evri Tracked 1-2 Day</td>
                        <td>1 to 2 working days</td>
                        <td>£3.99</td>
                    </tr>
                    <tr>
                        <td>DPD Tracked Next Working Day</td>
                        <td>Next working day if ordered before 5pm Monday to Thursday</td>
                        <td>£6.99</td>
                    </tr>
                    <tr>
                        <td>DHL Global Mail</td>
                        <td>4 to 10 working days</td>
                        <td>£3.50</td>
                    </tr>
                    <tr>
                        <td>DHL International Air Express</td>
                        <td>1 to 3 working days</td>
                        <td>From £1</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h4>Delivery Information</h4>
        <ul>
            <li>Fast, same-day despatch when you order by 5pm on weekdays</li>
            <li>Free no-quibble 30-day return policy</li>
            <li>One flat delivery price for your order, no matter how many items you buy.</li>
            <li>For partially in-stock orders, you pay for delivery only once. If we have to split your order
                into 2 separate deliveries, you'll still only be charged for shipping once.</li>
        </ul>
    </section>
</div>

<!-- Recent Added -->
@if (isset($allProducts))
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
            @foreach ($allProducts as $allProduct)
            <div style="text-align: center">
                <a href="{{route('product.details',$allProduct->id)}}">
                    {{-- <img src="{{asset($allProduct->getFirstMediaUrl(product.image))}}" alt="device" /><br /> --}}
                </a>
                <a href="{{route('product.details',$allProduct->id)}}">{{$allProduct->name}}</a>
            </div>
            @endforeach
        </div>
        <!-- Products -->
        <!-- Items -->
    </div>
</div>
@endif
<!-- Recent Added -->
<!-- Details -->
<!-- Inner Container -->
@endsection