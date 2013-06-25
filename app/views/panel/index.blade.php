@extends('layouts/master')

@section('content')

<div class="row">
    <div class="span3">
        @include('panel/partials/sidebar')
    </div>
    <div class="span9">

        <h2>Welcome</h2>
        <p>Welcome to your Capisso Panel. Navigate around using the nav on the right.</p>

    </div>
</div>

@stop