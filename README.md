
# Stripe Payment Gateway Integration with Laravel 5.7: 

Step 1:  open your composer.json file and put following one package in require array , add this package "cartalyst/stripe-laravel": "9.0.*"

"require": {
        "php": "^7.1.3",
        "fideloper/proxy": "^4.0",
        "laravel/framework": "5.7.*",
        "laravel/tinker": "^1.0",
        "cartalyst/stripe-laravel": "9.0.*"
   },

Step 2 : open your composer then run command->  composer update

Step 3 : Configuration Packages
Now, we need to configure package in app.php file. so open your confige/app.php file and add following code into it.

'providers' => [
	....
    ....
    Cartalyst\Stripe\Laravel\StripeServiceProvider::class,
],
'aliases' => [
	....
    ....
    'Stripe' => Cartalyst\Stripe\Laravel\Facades\Stripe::class,
]


Step 4: Create route for stripe payment

// Route for stripe payment form.
Route::get('stripe', 'StripePaymentController@payWithStripe')->('stripform');
// Route for stripe post request.
Route::post('stripe', 'StripePaymentController@postPaymentWithStripe')->('paywithstripe');


Step 5: Create Controller StripePaymentController.php file in this path app/Http/Controllers
Notes : Controller already created in this project with source code. please follow.


Step 6 : Set  stripe secret key into your controller  $stripe = Stripe::make('your_stripe_secret_key');

Step 7: Create View file
And into the last step create your paywithstripe.blade.php file in this folder resources/views/stripes 

Notes : Please see the source code of view file.


Step 8: php artisan serve

Step 9: 
Use following dummy data for stripe payment testing in test mode.

Card No : 4242424242424242 / 4012888888881881
Month : any future month
Year : any future Year
CVV : any 3 digit No.

Step 8 : Now you can open bellow URL on your browser: http://127.0.0.1:8000/stripe


