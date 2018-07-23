<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
//use Netshell\Paypal\Paypal;
use Paypal;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class PaypalIntegration_C extends Controller
{
    private $_apiContext;
    public function __construct()
    {
        $this->_apiContext = PayPal::ApiContext(
            config('services.paypal.client_id'),
            config('services.paypal.secret'));

        $this->_apiContext->setConfig(array(
            'mode'=>'sandbox',
            'service.Endpoint' => 'https://api.sandbox.paypal.com',
            'http.ConnectionTimeOut' =>30,
            'log.LogEnabled' =>true,
            'log.FileName' =>storage_path('logs/paypal.log'),
            'log.LogLevel' => 'FINE'

        ));
    }

    public function checkout(Request $request){

        $payer = PayPal::Payer();
        $payer->setPaymentMethod('paypal');

        $amount = PayPal:: Amount();
        $amount->setCurrency('EUR');
        $amount->setTotal($request->input('fee')); // This is the simple way,
        // you can alternatively describe everything in the order separately;
        // Reference the PayPal PHP REST SDK for details.

        $transaction = PayPal::Transaction();
        $transaction->setAmount($amount);
        $transaction->setDescription('Buy Premium '.$request->input('type').' Plan on '.$request->input('fee'));

        $redirectUrls = PayPal:: RedirectUrls();
        $redirectUrls->setReturnUrl(url('done'));
        $redirectUrls->setCancelUrl(url('cancel'));

        $payment = PayPal::Payment();
        $payment->setIntent('sale');
        $payment->setPayer($payer);
        $payment->setRedirectUrls($redirectUrls);
        $payment->setTransactions(array($transaction));

        $response = $payment->create($this->_apiContext);
        $redirectUrl = $response->links[1]->href;

        return Redirect::to( $redirectUrl );
    }

    public function getDone(Request $request)
    {
        $id = $request->get('paymentId');
        $token = $request->get('token');
        $payer_id = $request->get('PayerID');

        $payment = PayPal::getById($id, $this->_apiContext);

        $paymentExecution = PayPal::PaymentExecution();

        $paymentExecution->setPayerId($payer_id);
        $executePayment = $payment->execute($paymentExecution, $this->_apiContext);

        // Clear the shopping cart, write to database, send notifications, etc.

        // Thank the user for the purchase
        $session = Session::flash('success_message','Congratulation You have successfully Evaluated');
        return redirect('/')->with(compact('session'));
    }

    public function getCancel()
    {
        // Curse and humiliate the user for cancelling this most sacred payment (yours)
        $session = Session::flash('cancel_message','Your Payment hase been canceled ');
        return redirect('/')->with(compact('session'));
    }
}
