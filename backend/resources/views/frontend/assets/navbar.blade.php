<div class="container-fluid px-0 py-0">
    <nav>
        <div class="wrapper">
            <input type="radio" name="slider" id="menu-btn">
            <input type="radio" name="slider" id="close-btn">
            <ul class="nav-links" style="margin-top: 10px;">
                <label for="close-btn" class="btn close-btn"><i class="fa fa-times" aria-hidden="true"></i></label>
                <li><a href="{{route('home')}}"><b>Home</b></a></li>
                <!-- 1 -->
                @foreach ($parentCategories as $parentCategory)
                <li>
                    <a href="{{route('category.product',$parentCategory['id'])}}"
                        class="desktop-item">{{$parentCategory['name']}}</a>
                    <input type="checkbox" id="showMega">
                    {{-- <label for="showMega" class="mobile-item">{{$parentCategory->ChildCategories->name}}</label>
                    --}}
                    <div class="mega-box">
                        <div class="content">
                            @foreach ($parentCategory->childCategories as $childCategory)
                            <div class="row">
                                <a href="{{route('category.product.child',$childCategory->id)}}">
                                    {{$childCategory->name??''}}</a>
                                <ul class="mega-links">
                                    @foreach ($childCategory->subCategories as $subCategory)
                                    <li><a
                                            href="{{route('category.product.sub',$subCategory->id)}}">{{$subCategory->name??''}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
            <label for="menu-btn" class="btn menu-btn"><i class="fa fa-bars" aria-hidden="true"></i></label>
        </div>
    </nav>
</div>