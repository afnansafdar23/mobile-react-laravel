@extends('frontend.layouts.master')
@section('content')
<!-- content -->
<div class="container-fluid px-0" style="background-color: #f3f0e9">
    <div class="container-lg bg-light shadow p-3 rounded">
        <div class="row">
            <div class="col-lg-12">
                <!-- Screen Protectors Heading -->
                <div class="top-brands mt-4 mb-4">
                    <div class="top-brands-head">

                        <h4 style="text-align: center" class="text-muted shadow p-3 bg-body rounded zoom-effect">
                            {{$subCategory->name}}
                        </h4>
                        <hr class="bg-danger" style="height: 2px; width: 80%" />
                        <br />
                        <!-- Devices -->
                        <div class="top-categories devices-container">
                            <!-- Products -->
                            <div class="top-category-products container-fluid">
                                <!-- Row 1 -->
                                <!-- 1 -->
                                @foreach ($subCategories as $subCat)
                                <div style="text-align: center;">
                                    <a href="{{route('category.product.sub',$subCat['id'])}}">
                                        <img src="{{$subCat->getFirstMediaUrl('subCategory.image')}}" alt="device"><br>
                                    </a>
                                    <a href="#">{{$subCat['name']}}</a>
                                </div>
                                @endforeach
                            </div>
                            <!-- Products -->
                            <hr class="bg-danger" style="height: 2px; width: 15rem" />
                        </div>
                        <!-- Devices -->
                    </div>
                </div>
                <!-- Screen Protectors Heading -->
            </div>
        </div>
    </div>
</div>

<!-- Screen Protector Items -->
<div class="container-fluid px-5 mb-3" style="background-color: #f3f0e9">
    <div class="row">
        <div class="col-md-3">
            <!-- Container One -->
            <div class="container-one mt-3">
                <div class="bg-light shadow p-3 rounded">
                    <h4><b>Filter</b></h4>
                    <hr class="bg-danger" style="height: 2px; width: 80%" />
                    <!-- form -->
                    <form action="#" method="post">
                        <!-- Filter category -->
                        <div>
                            <h4>Filter By Category</h4>
                            <select name="filter-category" id="f-category">
                                <option value="all">All</option>
                                <option value="TG">Tempered Glass</option>
                                <option value="PF">PET Films</option>
                                <option value="PG">Privacy Filters</option>
                            </select>
                        </div>
                        <!-- Filter Manufactruer -->
                        <hr class="bg-danger" style="height: 2px; width: 80%" />
                        <div>
                            <h4>Filter By Manufactruer</h4>
                            <select name="filter-category" id="f-category">
                                <option value="all">All</option>
                                <option value="Apple">Apple</option>
                                <option value="Samsung">Samsung</option>
                                <option value="Sony">Sony</option>
                                <option value="Huawei">Huawei</option>
                                <option value="Motorola">Motorola</option>
                                <option value="Google">Google</option>
                                <option value="OnePlus">OnePlus</option>
                                <option value="LG">LG</option>
                                <option value="HTC">HTC</option>
                                <option value="Nokia">Nokia</option>
                                <option value="Lenovo">Lenovo</option>
                                <option value="Microsoft">Microsoft</option>
                            </select>
                        </div>
                        <!-- Filter Price -->
                        <hr class="bg-danger" style="height: 2px; width: 80%" />
                        <div>
                            <h4>Filter By Price</h4>
                            <input type="range" name="price-slider" id="price-slider" min="0" max="1000" step="10" />
                            <output for="price-slider" id="price-output">£400</output>
                        </div>
                        <!-- Filter By color -->
                        <hr class="bg-danger" style="height: 2px; width: 80%" />
                        <div>
                            <h4>Filter By Color</h4>
                            <select id="colorSelect" name="color">
                                <option value="Beige">Beige</option>
                                <option value="Black">Black</option>
                                <option value="Blue">Blue</option>
                                <option value="Brown">Brown</option>
                                <option value="Clear">Clear</option>
                                <option value="Gold">Gold</option>
                                <option value="Green">Green</option>
                                <option value="Grey">Grey</option>
                                <option value="Lavender">Lavender</option>
                                <option value="Multicolour">Multicolour</option>
                                <option value="Orange">Orange</option>
                                <option value="Pink">Pink</option>
                                <option value="Purple">Purple</option>
                                <option value="Red">Red</option>
                                <option value="Rose Gold">Rose Gold</option>
                                <option value="Silver">Silver</option>
                                <option value="White">White</option>
                                <option value="Yellow">Yellow</option>
                            </select>
                        </div>
                        <!-- Filter By rating -->
                        <hr class="bg-danger" style="height: 2px; width: 80%" />
                        <div>
                            <h4>Filter by rating</h4>
                            <div class="rating-filter">
                                <label for="rating">Select Rating:</label>
                                <select id="rating" name="rating">
                                    <option value="5">5 stars</option>
                                    <option value="4">4 stars</option>
                                    <option value="3">3 stars</option>
                                    <option value="2">2 stars</option>
                                    <option value="1">1 star</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-success" value="Apply Filters" />
                    </form>
                    <!-- form -->
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <!-- Container Two -->
            <div class="container-two mt-3 mb-5">
                <div class="bg-light shadow p-3 rounded">
                    <h4 style="text-align: center" class="text-muted shadow p-3 bg-body rounded">
                        {{$subCategory->name}}
                    </h4>
                    <hr class="bg-danger" style="height: 2px; width: 100%" />
                    <!-- Products -->
                    <div class="product-cards-container">
                        <!-- 1 -->
                        @foreach ($products as $product)
                        <div class="product-card">
                            <div class="product-card-image">
                                <a href="{{route('product.details',$product->id)}}"><img
                                        src="{{asset($product->getFirstMediaUrl('product.image'))}}"
                                        alt="Screen-Protector"></a>
                            </div>
                            <div class="product-card-details">
                                <a
                                    href="{{route('product.details',$product->id)}}"><small>{{$product->name}}</small></a><br>
                                <p>£{{$product->price}} <del>£{{$product->discounted_price}}</del> | <span
                                        style="color: red;">Save {{($product->price - $product->discounted_price)/
                                        $product->price *100}}%</span>
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- products -->
                </div>
            </div>
        </div>
        <!-- Screen Protector Items -->
    </div>
    <!-- content -->
</div>
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
                    <img src="{{asset($allProduct->getFirstMediaUrl('product.image'))}}" alt="device" /><br />
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
@endsection