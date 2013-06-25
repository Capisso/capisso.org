<?php

namespace Panel;

use Sentry;
use View;
use Validator;
use Input;
use Config;
use Redirect;

use License;
use User;

use Stripe;
use Stripe_Customer;
use Stripe_Charge;

class LicenseController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $licenses = License::where('user_id', Sentry::getUser()->id)->get();

        return View::make('panel/licenses/index', array('licenses' => $licenses));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return View::make('panel/licenses/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {

        $rules = array(

            'stripeToken' => 'required',
            'domain' => 'required|min:3|max:255|unique:licenses'

        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()) {
            return Redirect::action('Panel\LicenseController@create')->withErrors($validator);
        }

        Stripe::setApiKey(Config::get('stripe.secret'));
        $token = Input::get('stripeToken');
        $domain = Input::get('domain');

        $customer = Stripe_Customer::create(array(
            'card' => $token,
            'description' => Sentry::getUser()->email
        ));

        Stripe_Charge::create(array(
            'amount' => 10000,
            'currency' => 'usd',
            'customer' => $customer->id
        ));

        // Save the Stripe customer ID
        $user = User::where('id', Sentry::getUser()->id)->first();

        $user->stripe_customer_id = $customer->id;

        $user->save();

        // Create the license
        $license = new License();

        $license->domain = $domain;
        $license->user_id = Sentry::getUser()->id;
        $license->panel = true;
        $license->nodes = 1;
        $license->active = true;

        $license->save();

        return Redirect::to('panel/license/thanks');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id) {
        //
    }
}