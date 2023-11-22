@extends('frontend.layouts.master')
@section('content')
<!-- Blogs -->
<div class="container-lg bg-ight shadow rounded py-3 px-5">

    <div class="devices-container">
        <h4 style="text-align:center; font-size: 17px;" class="text-muted shadow p-3 bg-body rounded zoom-effect">Blogs
        </h4>
        <hr class="bg-danger" style="height: 2px; width: 15rem;">
    </div>

    <!-- blog Cards-->
    <div class="container-lg mt-5 blogs-container">
        <!-- 1 -->
        <div class="card mb-3 p-3" style="border: none;">
            <div class="row g-0">
                <div class="col-md-4 order-md-2">
                    <a href="{{route('single-blog')}}"><img src="{{asset('frontend/assets/1.png')}}"
                            class="img-fluid rounded d-flex" alt="Blog1"></a>
                </div>

                <div class="col-md-8 order-md-1">
                    <div class="card-body">
                        <h4><a href="{{route('single-blog')}}" style="text-decoration: none; color: black;">Culture and
                                Values</a>
                        </h4>
                        <p class="card-title" style="font-size: small;">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Debitis dolore at error excepturi adipisci maxime ipsam fuga nostrum minus
                            saepe nobis maiores, tempore amet molestiae nam unde eveniet eos. Temporibus!</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- 2 -->
        <div class="card mb-3 p-3" style="border: none;">
            <div class="row g-0">

                <div class="col-md-4">
                    <a href="{{route('single-blog')}}"><img src="{{asset('frontend/assets/2.png')}}"
                            class="img-fluid rounded d-flex" alt="Blog2"></a>
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        <h4><a href="{{route('single-blog')}}" style="text-decoration: none; color: black;">Learning</a>
                        </h4>
                        <p class="card-title" style="font-size: small;">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Dolor excepturi assumenda velit sequi. Culpa maiores praesentium aperiam,
                            exercitationem eius molestias explicabo distinctio ea. Est hic corporis eum repellat? Porro,
                            mollitia?</p>
                    </div>
                </div>

            </div>
        </div>
        <!-- 3 -->
        <div class="card mb-3 p-3" style="border: none;">
            <div class="row g-0">
                <div class="col-md-4 order-md-2">
                    <a href="{{route('single-blog')}}"><img src="{{asset('frontend/assets/3.png')}}"
                            class="img-fluid rounded d-flex" alt="Blog3"></a>
                </div>

                <div class="col-md-8 order-md-1">
                    <div class="card-body">
                        <h4><a href="{{route('single-blog')}}" style="text-decoration: none; color: black;">Working</a>
                        </h4>
                        <p class="card-title" style="font-size: small;">Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Tempore rerum voluptate magni recusandae eum perspiciatis molestias dolor
                            quae molestiae! Ipsum dolor quasi inventore ducimus magnam tempore et quidem impedit soluta.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- 4 -->
        <div class="card mb-3 p-3" style="border: none;">
            <div class="row g-0">

                <div class="col-md-4">
                    <a href="{{route('single-blog')}}"><img src="{{asset('frontend/assets/4.png')}}"
                            class="img-fluid rounded d-flex" alt="Blog4"></a>
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        <h4><a href="{{route('single-blog')}}" style="text-decoration: none; color: black;">Benifits</a>
                        </h4>
                        <p class="card-title" style="font-size: small;">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Dolor excepturi assumenda velit sequi. Culpa maiores praesentium aperiam,
                            exercitationem eius molestias explicabo distinctio ea. Est hic corporis eum repellat? Porro,
                            mollitia?</p>
                    </div>
                </div>

            </div>
        </div>
        <!-- 5 -->
    </div>
    <!-- blog Cards-->
</div>
<!-- Blogs -->
@endsection