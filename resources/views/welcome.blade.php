<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stripe</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div class="container">
            <div class="col-6 mx-auto">
                <div class="row">
                    <div class="col-sm-12 my-5">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('charge') }}" method="post" id="payment-form">
                                    @csrf
                                    <div class="form-group">
                                        <label for="card-element">
                                            Credit or debit card
                                        </label>
                                        <div id="card-element" class="form-control"></div>

                                        <div id="card-errors" role="alert"></div>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary input-block-level">Submit Payment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            let stripe_public_key = '{{ env('STRIPE_PUB_KEY') }}'
        </script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="js/app.js"></script>
    </body>
</html>
