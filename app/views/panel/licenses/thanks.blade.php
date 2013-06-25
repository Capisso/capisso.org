@extends('layouts/master')

@section('content')

<div class="row">
    <div class="span3">
        @include('panel/partials/sidebar')
    </div>
    <div class="span9">

        <h2>Thank you!</h2>
        <p>Thank you so much for purchasing Capisso VMPanel, so far you're our {{Str::ordinal(License::count())}} customer.</p>

    </div>
</div>

@stop