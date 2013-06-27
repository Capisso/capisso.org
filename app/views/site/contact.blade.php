@extends('layouts/master')

@section('content')
<div class="row">
    <div class="span6">
        <h2>Contact us</h2>
        <p>Get in touch with us through this form!</p>

        <!-- TODO: Improve how errors look -->
        @if(count($errors) > 0)
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        @if(Session::has('success'))

        <p>
            Thank you for contacting us!
            <!-- TODO: Add something here -->
        </p>

        @else

        {{ Form::open(array('action' => 'HomeController@postContact')) }}
        <div class="controls controls-row">
            <input id="name" name="name" type="text" class="input-large" placeholder="Name" value="{{{ Input::old('name') }}}">
        </div>
        <div class="controls controls-row">
            <input id="email" name="email" type="email" class="input-large" placeholder="Email address" value="{{{ Input::old('email') }}}">
        </div>
        <div class="controls controls-row">
            <input id="subject" name="subject" type="text" class="input-large" placeholder="Subject" value="{{{ Input::old('subject') }}}">
        </div>
        <div class="controls controls">
            <textarea id="message" name="body" class="span6" placeholder="Enter your message here." rows="5">{{{ Input::old('body') }}}</textarea>
        </div>

        <div class="controls">
            <button id="contact-submit" type="submit" class="btn btn-primary input-medium pull-right">Send</button>
        </div>
        {{ Form::close() }}

        @endif
    </div>
</div>
@stop