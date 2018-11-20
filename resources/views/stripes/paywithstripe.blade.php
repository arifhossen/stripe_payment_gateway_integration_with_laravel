<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .container
            {
                margin: 100px;

            }
        </style>
    </head>
    <body>
 

            <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        @if ($message = Session::get('success'))
                        <div class="custom-alerts alert alert-success fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            {!! $message !!}
                        </div>
                        <?php Session::forget('success');?>
                        @endif
                        @if ($message = Session::get('error'))
                        <div class="custom-alerts alert alert-danger fade in">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            {!! $message !!}
                        </div>
                        <?php Session::forget('error');?>
                        @endif
                        <h3>Paywith Stripe Payment Gateway</h3>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" id="payment-form" role="form" action="/stripe" >
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('card_no') ? ' has-error' : '' }}">
                                    <label for="card_no" class="col-md-4 control-label">Card No</label>
                                    <div class="col-md-6">
                                        <input id="card_no" type="text" class="form-control" name="card_no" value="{{ old('card_no') }}" autofocus>
                                        @if ($errors->has('card_no'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('card_no') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('ccExpiryMonth') ? ' has-error' : '' }}">
                                    <label for="ccExpiryMonth" class="col-md-4 control-label">Expiry Month</label>
                                    <div class="col-md-6">
                                        <input id="ccExpiryMonth" type="text" class="form-control" name="ccExpiryMonth" value="{{ old('ccExpiryMonth') }}" autofocus>
                                        @if ($errors->has('ccExpiryMonth'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('ccExpiryMonth') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('ccExpiryYear') ? ' has-error' : '' }}">
                                    <label for="ccExpiryYear" class="col-md-4 control-label">Expiry Year</label>
                                    <div class="col-md-6">
                                        <input id="ccExpiryYear" type="text" class="form-control" name="ccExpiryYear" value="{{ old('ccExpiryYear') }}" autofocus>
                                        @if ($errors->has('ccExpiryYear'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('ccExpiryYear') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('cvvNumber') ? ' has-error' : '' }}">
                                    <label for="cvvNumber" class="col-md-4 control-label">CVV No.</label>
                                    <div class="col-md-6">
                                        <input id="cvvNumber" type="text" class="form-control" name="cvvNumber" value="{{ old('cvvNumber') }}" autofocus>
                                        @if ($errors->has('cvvNumber'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('cvvNumber') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                    <label for="amount" class="col-md-4 control-label">Amount</label>
                                    <div class="col-md-6">
                                        <input id="amount" type="text" class="form-control" name="amount" value="{{ old('amount') }}" autofocus>
                                        @if ($errors->has('amount'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('amount') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group" style="margin-top:10px; ">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Paywith Stripe
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

