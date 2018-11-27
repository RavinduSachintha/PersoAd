<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use App\advertisements;

class CheckoutController extends Controller
{
    public function charge(Request $request, $id_no)
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ));

            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => 50,
                'currency' => 'usd'
            ));

            $a=advertisements::find($id_no);
            $a->paid='yes';
            $a->save();

            return redirect('adds_table');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}
