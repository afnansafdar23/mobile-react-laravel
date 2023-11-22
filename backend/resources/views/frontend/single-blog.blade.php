@extends('frontend.layouts.master')
@section('content')
<!-- Main Container -->
<div class="container-fluid px-0">

    <!-- Blog Nav -->
    <div class="px-5 bg-green" style="display: flex; align-items: center; justify-content: space-between;">
        <div><a href="{{route('home')}}"><img style="width: 150px; height: 80px;"
                    src="{{asset('frontend/assets/ialogo.png')}}" alt="logo"></a>
        </div>

        <div>
            <ul style="display: flex; gap: 1rem; list-style: none;">
                <li>Culture and Values</li>
                <li>Learning</li>
                <li>Working</li>
                <li>Benifits</li>
            </ul>
        </div>

    </div>
    <!-- Blog Nav -->

    <!-- Blogs -->
    <div class="container-lg bg-ight shadow rounded py-3 px-5 mt-5 box-grey">

        <div class="devices-container">
            <h4 style="text-align:center; font-size: 17px;" class="text-muted shadow p-3 bg-body rounded zoom-effect">
                The Blog Post Name</h4>
            <hr class="bg-danger" style="height: 2px; width: 15rem;">
        </div>

        <!-- blog Cards-->
        <div class="container-lg mt-5 blogs-container">
            <!-- 1 -->
            <div class="card mb-3 p-3" style="border: none;">
                <div class="row g-0">

                    <div class="col-md-4">
                        <a href="blog-post.html"><img src="{{asset('frontend/assets/3.png')}}"
                                class="img-fluid rounded d-flex" alt="Blog2"></a>
                    </div>

                    <div class="col-md-8">
                        <div class="card-body">
                            <h4><a href="blog-post.html" style="text-decoration: none; color: black;">Post Name</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis consequatur non officiis
                                rerum quam adipisci modi quos voluptatem praesentium nisi minima quae iusto ea, aut
                                asperiores consectetur, laboriosam, maiores inventore? Doloribus, officia ex dolorem
                                voluptas aliquam, quod deleniti, iure natus delectus in expedita nam veritatis
                                voluptatibus. Molestiae laudantium, provident dolorem similique expedita eos saepe
                                corrupti. Excepturi blanditiis quisquam aut expedita similique omnis unde magni qui,
                                perspiciatis, aliquid distinctio quod iure? Animi, obcaecati? Similique vel maiores
                                architecto hic corrupti dignissimos harum debitis numquam voluptatibus rerum commodi qui
                                at incidunt ullam laborum, iure cum cumque rem molestiae nihil perferendis unde. Rem,
                                doloremque!</p>
                        </div>
                    </div>

                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, accusantium eligendi. Officia
                        excepturi voluptates consequuntur ullam quibusdam, itaque unde reprehenderit repellendus earum,
                        doloribus, praesentium iure nisi! Aliquid, vero! Quia, enim!
                        Quia ducimus nemo a distinctio dignissimos laudantium, tenetur fugiat possimus, sapiente soluta
                        aliquam, provident expedita incidunt mollitia id ea nesciunt suscipit illo natus saepe sit earum
                        consectetur corporis! Dolor, fugiat!
                        Libero a vero blanditiis placeat, in odit tenetur explicabo repellendus! Officiis unde earum
                        facere et eos ipsam doloribus quo eum, fugiat odit temporibus cupiditate quam error dolores
                        consequatur? Mollitia, saepe.
                        Dolorem totam distinctio amet voluptatibus! Molestias vel sint aut recusandae, provident neque
                        id. Illum voluptatibus ipsam soluta, consequuntur vel numquam voluptas ipsum iste voluptatum,
                        est quibusdam laudantium qui dolore debitis.
                        Beatae ullam, inventore debitis unde sint accusantium veritatis nobis corporis quos natus nisi,
                        illo consequatur ipsa harum obcaecati vero pariatur, animi illum. Iure ducimus at fugiat
                        sapiente? Officia, omnis vero.
                        Suscipit omnis ut voluptatum sed eaque sunt illo, autem vero et, adipisci ea necessitatibus
                        corrupti rem sint facere voluptatibus amet consequatur velit assumenda similique labore, saepe
                        totam earum? Vitae, sunt.
                        Molestiae hic totam suscipit porro reiciendis vel mollitia atque a consequuntur qui
                        reprehenderit, dolor ut temporibus quidem error odit provident magnam debitis perferendis!
                        Similique esse eaque dolore et maxime culpa?
                        Omnis, aliquam illum aperiam obcaecati dolore vero repellat est quos deleniti quaerat veniam
                        animi laboriosam iusto pariatur possimus sed, sit minus vitae fugit, iure ipsa nisi nostrum
                        error. Eaque, hic?
                        Quia tenetur quis maxime vitae sint voluptate a esse, at natus ratione eum omnis excepturi
                        dolore eaque suscipit architecto beatae facere accusamus quod officiis? Voluptatibus accusamus
                        atque repellendus similique perspiciatis.
                        Nisi sunt aliquid, ab amet assumenda rerum, iste aliquam sit repudiandae itaque ipsa, sed
                        consectetur sequi? In omnis a blanditiis optio quisquam architecto mollitia, officia praesentium
                        porro doloremque nisi ipsa!
                        Alias ipsum ab labore iure placeat aliquid accusamus dolorum, vero eos repellendus nemo magni
                        ipsa eaque iste nisi est esse ex nobis, natus dolores iusto unde! Illo ut tempore iste.
                        Quis illum, animi quisquam voluptate, cumque beatae harum esse rerum necessitatibus velit
                        tempora ratione. Officiis deleniti optio minus ullam dolorem aperiam quis cupiditate nesciunt
                        molestiae culpa, reprehenderit quas, repudiandae hic.
                        Tenetur aut iure cupiditate esse non nam consectetur officia maiores, eligendi laboriosam
                        aliquid, repellat accusamus quod debitis dolor illo maxime pariatur autem. Aspernatur illum
                        optio nam ex molestias earum alias.</p>

                    <div class="card mb-3 p-3" style="border: none;">
                        <div class="row g-0">

                            <div class="col-md-8">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis consequatur non
                                        officiis rerum quam adipisci modi quos voluptatem praesentium nisi minima quae
                                        iusto ea, aut asperiores consectetur, laboriosam, maiores inventore? Doloribus,
                                        officia ex dolorem voluptas aliquam, quod deleniti, iure natus delectus in
                                        expedita nam veritatis voluptatibus. Molestiae laudantium, provident dolorem
                                        similique expedita eos saepe corrupti. Excepturi blanditiis quisquam aut
                                        expedita similique omnis unde magni qui, perspiciatis, aliquid distinctio quod
                                        iure? Animi, obcaecati? Similique vel maiores architecto hic corrupti
                                        dignissimos harum debitis numquam voluptatibus rerum commodi qui at incidunt
                                        ullam laborum, iure cum cumque rem molestiae nihil perferendis unde. Rem,
                                        doloremque!</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <a href="blog-post.html"><img src="{{asset('frontend/assets/3.png')}}"
                                        class="img-fluid rounded d-flex" alt="Blog2"></a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- 4 -->
        </div>
        <!-- blog Cards-->
    </div>
    <!-- Blogs -->
</div>
<!-- Main Container -->
@endsection