@extends('layouts/master')

@section('content')


<div class="row">
    <div class="span3">
        @include('panel/partials/sidebar')
    </div>
    <div class="span5 offset2">

        <div class="well">
            <h2>Capisso VMPanel</h2>
            <ul>
                <li>One VMPanel License</li>
                <li>One Node License <br>

                    <p class="muted">Additional node licenses are $3/mo after your first.</p></li>

            </ul>
            <p>Capisso VMPanel is a VPS control panel from Capisso which focuses on security, speed and usability.
                We support OpenVZ, KVM and Xen. <a href="/vmpanel/overview">Find out more.</a></p>

            <h3>Special: <span style="text-decoration: line-through; font-size: 20px;">$100</span> <span class="text-success">$75.00!</span>  / one time</h3>



            {{ Form::open(array('action' => 'Panel\LicenseController@store')) }}
                {{ Form::label('domain', 'Panel Domain or Subdomain') }}
                {{ Form::input('text', 'domain') }}
                <p class="help-block">Licensing is done per domain, so set this to your panel domain.</p>

                <br>

                <script
                    src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
                    data-key="{{Config::get('stripe.public')}}"
                    data-amount="10000"
                    data-name="Capisso"
                    data-description="Capisso VMPanel ($100.00)">
                </script>
            {{ Form::close() }}
            <p>If you'd like additional ways to pay, let us know at help@capisso.org</p>
        </div>

    </div>
</div>

@stop