@extends('layouts/master')

@section('content')

<div class="row">
    <div class="span3">
        @include('panel/partials/sidebar')
    </div>
    <div class="span9">

        <h2>Capisso Support</h2>

        @if(count($tickets) == 0)

        <p>You don't have any tickets.</p>

        @else


        @endif

    </div>
</div>

@stop