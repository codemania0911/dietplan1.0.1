<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use Session;
use Stripe\Stripe;
use Stripe\Charge;


class PaymentController extends Controller
{
    public function stripe() {
        return view('dietplan.index');
    }

    public function stripePayment(Request $request) {

        \Stripe\Stripe::setApiKey('sk_test_al6B3UwqQCXcor53GowWTWAV00ypvEgX3l');
        
        $charge = \Stripe\Charge::create([
            'amount' => '400',
            'currency' => 'usd',
            'description' => 'diet plan',
            'source' => $request->get('stripeToken'),
        ]);

        //save your customer order to database here
        return back()->with('success_message', 'Thank you! your payment has been accepted');
    }

}
