<?php

namespace App\Http\Controllers\Account\Methods;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Cashier\Exceptions\IncompletePayment;

class MethodsController extends Controller
{
    /**
     * Show the form
     */
    public function index()
    {
        $user = User::find(auth()->user()->id);
        $intent = $user->createSetupIntent();
        $methods =  $this->getPaymentMethods();

        return view('account.methods.index', compact('user', 'intent', 'methods'));
    }

    /**
     * Process the form
     */
    public function store(Request $request)
    {
        $user = $request->user();
        $paymentMethod = $request->paymentMethod;

        $user->createOrGetStripeCustomer();

        if (!$user->hasPaymentMethod()) {
            $user->addPaymentMethod($paymentMethod);
        }

        $user->updateDefaultPaymentMethod($paymentMethod);


        // subscription to the plan
        // try {
        //     $subscription = $user->newSubscription('default', 'plan_Gcs5HNGY9aTUix')
        //                             ->create($paymentMethod);
        // } catch (IncompletePayment $exception) {
        //     return redirect()->route(
        //         'cashier.payment',
        //         [$exception->payment->id, 'redirect' => route('account.index')]
        //     );
        // }

        return redirect(route('methods.index'));
    }

    /**
     * Removes a payment method for the current user.
     * 
     * @param Request $request The request data from the user.
     */
    public function delete( Request $request ) {
        
        $user = User::find(auth()->user()->id);

        $paymentMethodID = $request->get('id');

        $paymentMethods = $user->paymentMethods();

        foreach( $paymentMethods as $method ) {
            if( $method->id == $paymentMethodID ){
                $method->delete();
                return redirect(route('methods.index'));
            }
        }
        
        return redirect(route('methods.index'));
    }

    /**
     * Returns the payment methods the user has saved
     * 
     * @param Request $request The request data from the user.
     */
    public function getPaymentMethods() {

        $user = User::find(auth()->user()->id);

        $methods = [];

        if( $user->hasPaymentMethod() ) {
            foreach( $user->paymentMethods() as $method ) {
                array_push( $methods, [
                    'id' => $method->id,
                    'brand' => $method->card->brand,
                    'last_four' => $method->card->last4,
                    'exp_month' => $method->card->exp_month,
                    'exp_year' => $method->card->exp_year,
                    'method_payment' => $method->method_payment,
                ] );
            }
        }

        return $methods;
    }
}
