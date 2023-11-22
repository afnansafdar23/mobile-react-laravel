<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Iphone Gadget Case</title>
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/nav.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"
        rel="stylesheet" />
    @yield('styles')
</head>

<body>
    <div class="container-fluid px-0">
        <!-- Header -->
        @include('frontend.assets.header')
        <!-- Header -->

        <!-- Nav bar -->
        @include('frontend.assets.navbar')
        <!-- Navbar -->
        <div class="container-fluid px-0"
            style="background-color: white; display: flex; justify-content: space-evenly; align-items: center; flex-wrap: wrap;">
            <div><small><span style="color: rgb(18, 172, 18);">⛟</span> Fast Delivery Available</small></div>
            <div><small><span style="color: rgb(18, 172, 113);">★</span> Trust Pilot</small></div>
            <div><small><span style="color: rgb(18, 172, 18);">📅</span> 30-day money back guarantee</small></div>
        </div>
        <!-- Box -->

        <!-- sliding text -->
        <div class="sliding-text-box sliding-text-color">
            <div class="sliding-text">
                Welcome to <b>Iphone Arena</b>. It is your one-stop shop for high-quality mobile accessories!
                Explore our wide range of accessories designed to enhance your mobile experience!
            </div>
        </div>
        <!-- sliding text -->
        @yield('content')
    </div>


    <!-- Footer -->
    @include('frontend.assets.footer')
    <!-- Footer -->
    <!-- Modal Feedback -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <br><br><br>
            <h4>Iphone Arena Feedback</h4><br>
            <p>Thank you for helping us to improve our website.</p>
            <br>
            <h3>Please fill in this survey after you have finished browsing the website.</h3>
            <hr><br>
            <form action="#" method="post">
                <label for="satisfaction"><b>How satisfied were you?</b></label>
                <select name="satisfaction" id="satisfaction">
                    <option value="1">1 - Less Satisfied</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="3">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10 - Fully Satisfied</option>
                </select> <br><br>

                <label for="task"><b>Are You able to complete your task?</b></label><br>
                <span>YES </span><input type="radio" name="YES" id="yes"><br>
                <span>NO </span><input type="radio" name="NO" id="no">
                <br><br>

                <label for="problem"><b>What was the problem?</b></label><br>
                <textarea name="problem" id="problem" cols="50" rows="5"></textarea>
                <br><br>

                <label for="email"><b>Enter your Email</b></label><br>
                <input type="email" name="email" id="email"> <br>
                <input class="btn btn-success mt-3" type="submit" value="Add Feedback">
            </form>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Modal -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="{{asset('frontend/script/script.js')}}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    @yield('script')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js">
    </script>
    <script>
        $(document).ready(function(){
        $("#myModalonload").modal('show');
      });
    </script>
</body>

</html>