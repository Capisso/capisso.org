@extends('layouts/master')

@section('content')


<div class="row">
    <div class="span3">
        @include('panel/partials/sidebar')
    </div>
    <div class="span6">
        <h2>Create Ticket</h2>

        {{ Form::open(array('action' => 'Panel\SupportController@store')) }}
            <div class="controls controls-row">
                <input id="name" name="title" type="text" class="span6" placeholder="Ticket Title">
            </div>
            <div class="controls">
                <textarea id="message" name="body" class="span6" placeholder="Describe your request or issue." rows="5"></textarea>
            </div>

            <div class="controls">
                <button id="contact-submit" type="submit" class="btn btn-primary input-medium pull-right">Send</button>
            </div>
        {{ Form::close() }}

    </div>
</div>

@stop