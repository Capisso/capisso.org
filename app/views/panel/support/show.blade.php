@extends('layouts/master')

@section('content')

<div class="row">
    <div class="span3">
        @include('panel/partials/sidebar')
    </div>
    <div class="span9">

        <h2>Capisso Support</h2>

        <hr>

        <h3>{{{$ticket->title}}} <small>by {{$author->username}}</small></h3>
        <div class="well">{{{$ticket->body}}}</div>

        <hr>

        @foreach($responses as $response)

        @endforeach

        <div class="row">
            <div class="span6">
                {{ Form::open(array('method' => 'PUT', 'action' => array('Panel\SupportController@update', $ticket->id))) }}
                <div class="controls">
                    <textarea id="message" name="body" class="span6" placeholder="Update your issue." rows="5"></textarea>
                </div>

                <div class="controls">
                    <button id="contact-submit" type="submit" class="btn btn-primary input-medium pull-right">Send</button>
                </div>
                {{ Form::close() }}
            </div>
        </div>



    </div>
</div>

@stop