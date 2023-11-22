@extends('frontend.layouts.master')
@section('styles')
<style>
    input {
        padding: 0 10px;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 80%;
    }

    td,
    th {
        text-align: left;
        padding: 10px;
    }

    .billing-form,
    .card-payment-form {
        display: none;
    }
</style>
@endsection
@section('content')@if (Session::has('error'))
<div class="alert alert-danger">{{ Session::get('error') }}</div>
@endif
@if (Session::has('success'))
<div class="alert alert-success">{{ Session::get('success') }}</div>
@endif
<div class="container-lg bg-light mt-2 rounded p-3 shadow">
    <h4 style="text-align:center; font-size: 17px;" class="text-muted bg-body rounded p-3 shadow">Shoping Basket</h4>
    <!-- Product -->
    <div class="container px-5">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0 @endphp
                @if (session('cart'))
                @foreach (session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100"
                                    class="img-responsive" /></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}"
                            class="form-control quantity update-cart" />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <!-- Product -->
</div>
<!-- Checkout -->

<!-- Secure Checkout -->
<div class="container-lg bg-light mt-2 rounded p-3 shadow">
    <h4 style="text-align:center; font-size: 17px;" class="text-muted bg-body rounded p-3 shadow">Secure
        Checkout</h4>

    <div class="container mt-3 px-5">
        <form action="#">
            <h4>Email Address</h4>
            <p>For your order confirmation email</p>
            <input type="email" name="email" id="email"><br>

            <input class="mt-3 px-5" style="background-color: #004597; color: white;" type="button"
                value="Continue to Billing" onclick="toggleBillingForm()">
            <span>- OR -</span>
            <input class="mt-3 px-5" style="background-color: #ffc439;; color: black;" type="button"
                value="Continue Card Payment" onclick="toggleCardPaymentForm()">
        </form>
    </div>
    <!-- START: Billing form -->
    <div class="billing-form container mx-auto">
        <h3>Billing</h3>
        <h4><b>Billing Aaddress</b></h4><br>

        <form action="{{route('order.post')}}" enctype="multipart/form-data" method="post">
            @csrf
            <table>
                <tr>
                    <td><label>Name</label></td>
                    <td><input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
                    </td>
                </tr>
                <tr>
                    <td><label>Telphone</label></td>
                    <td><input type="number" name="phone" id="phone" class="form-control"
                            placeholder="Enter Your Number" required>
                    </td>
                </tr>
                <tr>
                    <td><label>Address</label></td>
                    <td>
                        <textarea name="address" id="address" class="form-control" cols="45" rows="5"></textarea>
                    </td>
                </tr>
                <tr>
                    <td><label>Country</label></td>
                    <td><input type="text" name="country" id="country" class="form-control"
                            placeholder="Enter Your Country"></td>
                </tr>

                <tr>
                    <td><label>City</label></td>
                    <td><input type="text" name="city" id="city" class="form-control" placeholder="Enter City Name">
                    </td>
                </tr>

                <tr>
                    <td><label>Postcode</label></td>
                    <td><input type="number" name="postal_code" id="postal_code" class="form-control"
                            placeholder="Enter Zip Code" required></td>
                </tr>
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <input type="hidden" name="order_number" value="{{" igc-" . now()->format('n') . "1343" . rand(10,
                99)}}">
            </table>

            <button class="mt-3 px-5" style="background-color: #004597; color: white;" type="submit"
                value="Continue to Shipping">Continue to Shipping</button>
        </form>

    </div>
    <!-- END: Billing form -->
    <br><br>
    <!-- START: Card Payment Form -->
    <div class="card-payment-form">
        <h4>Card Payment</h4>
        <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
            data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
            @csrf
            <div class='form-row row'>
                <div class='col-xs-12 form-group required'>
                    <label class='control-label'>Name on Card</label> <input class='form-control' size='4' type='text'>
                </div>
            </div>

            <div class='form-row row'>
                <div class='col-xs-12 form-group  required'>
                    <label class='control-label'>Card Number</label> <input autocomplete='off'
                        class='form-control card-number' name="card-number" id="card-number" size='20' type='text'>
                </div>
            </div>

            <div class='form-row row'>
                <div class='col-xs-12 col-md-4 form-group cvc required'>
                    <label class='control-label'>CVC</label> <input autocomplete='off' class='form-control card-cvc'
                        placeholder='ex. 311' size='4' id="cvv" oninput="validateCVV(this)" type='text'>
                </div>
                <div class='col-xs-12 col-md-4 form-group expiration required'>
                    <label class='control-label'>Expiration Month</label> <input class='form-control card-expiry-month'
                        placeholder='MM' size='2' id="datepickermonths" oninput="validateMonth(this)" type='text'>
                </div>
                <div class='col-xs-12 col-md-4 form-group expiration required'>
                    <label class='control-label'>Expiration Year</label> <input class='form-control card-expiry-year'
                        placeholder='YYYY' size='4' id="datepicker" oninput="validateYear(this)" type='text'>
                </div>
            </div>

            <br>
            <h3>Payment Amount: <span>{{$total??'0'}}&#163;</span></h3>
            <button class="mt-3 px-5" style="background-color: #004597; color: white;" type="submit">Proceed To
                Pay</button>
        </form>
    </div>
    <!-- END: Card Payment Form -->

    <div style="text-align: center;" class="mt-5"><a style="text-decoration:none;"
            href="{{route('term-conditions')}}">Terms
            and Conditions</a></div>
</div>
<!-- Secure Checkout -->
@endsection
@section('script')<script>
    $("#datepicker").datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years"
            });

            $('#datepickermonths').datepicker({
                format: 'mm', // Display format for the selected date
                minViewMode: 'months' // Minimum allowed viewing mode (prevents switching to years)
            });
</script>
<script type="text/javascript">
    $(function() {

        /*------------------------------------------
        --------------------------------------------
        Stripe Payment Code
        --------------------------------------------
        --------------------------------------------*/

        var $form = $(".require-validation");
        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                             'input[type=text]', 'input[type=file]',
                             'textarea'].join(', '),
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
            $errorMessage.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
              var $input = $(el);
              if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
              }
            });

            if (!$form.data('cc-on-file')) {
              e.preventDefault();
              Stripe.setPublishableKey($form.data('stripe-publishable-key'));
              Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
              }, stripeResponseHandler);
            }

        });

        /*------------------------------------------
        --------------------------------------------
        Stripe Response Handler
        --------------------------------------------
        --------------------------------------------*/
        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];

                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });
</script>
<script type="text/javascript">
    $(".update-cart").change(function(e) {
    e.preventDefault();

    var ele = $(this);

    $.ajax({
    url: '{{ route('update.cart') }}',
    method: "patch",
    data: {
    _token: '{{ csrf_token() }}',
    id: ele.parents("tr").attr("data-id"),
    quantity: ele.parents("tr").find(".quantity").val()
    },
    success: function(response) {
    window.location.reload();
    }
    });
    });

    jQuery.noConflict();
    $(".remove-from-cart").click(function(e) {
    e.preventDefault();
    var ele = $(this);

    if (confirm("Are you sure want to remove?")) {
    $.ajax({
    url: '{{ route('remove.from.cart') }}',
    method: "DELETE",
    data: {
    _token: '{{ csrf_token() }}',
    id: ele.parents("tr").attr("data-id")
    },
    success: function(response) {
    window.location.reload();
    }
    });
    }
    });
</script>
<script>
    function toggleBillingForm() {
            var billingForm = document.querySelector('.billing-form');
            var cardPaymentForm = document.querySelector('.card-payment-form');

            if (billingForm.style.display === 'none' || billingForm.style.display === '') {
                billingForm.style.display = 'block';
                cardPaymentForm.style.display = 'none';
            } else {
                billingForm.style.display = 'none';
            }
        }

        function toggleCardPaymentForm() {
            var cardPaymentForm = document.querySelector('.card-payment-form');
            var billingForm = document.querySelector('.billing-form');

            if (cardPaymentForm.style.display === 'none' || cardPaymentForm.style.display === '') {
                cardPaymentForm.style.display = 'block';
                billingForm.style.display = 'none';
            } else {
                cardPaymentForm.style.display = 'none';
            }
        }

        function formatCardNumber() {
            // Get the input element
            var input = document.getElementById('card-number');

            // Remove non-numeric characters
            var cardNumber = input.value.replace(/\D/g, '');

            // Check if the card number exceeds 16 digits
            if (cardNumber.length > 16) {
                // If so, remove the last digit
                cardNumber = cardNumber.slice(0, 16);
            }

            // Add spaces after every four digits
            cardNumber = cardNumber.replace(/(\d{4})(?=\d)/g, '$1 ');

            // Update the input value
            input.value = cardNumber;
        }

        // Get the input element
        var cardNumberInput = document.getElementById('card-number');

        // Attach the formatCardNumber function to the input's "input" event
        cardNumberInput.addEventListener('input', formatCardNumber);

        function validateCVV(input) {
            // Get the entered value
            let cvv = input.value;

            // Ensure the length is not more than 3 digits
            if (cvv.length > 3) {
                // If more than 3 digits, truncate the value
                cvv = cvv.slice(0, 3);

                // Update the input value
                input.value = cvv;
            }
        }

        function validateYear(input) {
            let year = input.value;

            if (year.length > 3) {
                year = year.slice(0, 4);

                input.value = year;
            }
        }

        function validateMonth(input) {
            let year = input.value;

            if (year.length > 2) {
                year = year.slice(0, 2);

                input.value = year;
            }
        }
</script>
<script type="text/javascript">
    $(function() {

        /*------------------------------------------
        --------------------------------------------
        Stripe Payment Code
        --------------------------------------------
        --------------------------------------------*/

        var $form = $(".require-validation");
        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                             'input[type=text]', 'input[type=file]',
                             'textarea'].join(', '),
            $inputs = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('div.error'),
            valid = true;
            $errorMessage.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
              var $input = $(el);
              if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
              }
            });

            if (!$form.data('cc-on-file')) {
              e.preventDefault();
              Stripe.setPublishableKey($form.data('stripe-publishable-key'));
              Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
              }, stripeResponseHandler);
            }

        });

        /*------------------------------------------
        --------------------------------------------
        Stripe Response Handler
        --------------------------------------------
        --------------------------------------------*/
        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];

                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });
</script>
@endsection