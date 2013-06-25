@extends('layouts/master')

@section('content')

<div class="row">
    <div class="span3">
        @include('panel/partials/sidebar')
    </div>
    <div class="span9">

        <h2>Your Capisso Licenses</h2>

        <div class="pull-right">
            <a href="/panel/licenses/create" class="btn btn-success">Purchase License</a>
        </div>
        <div class="clearfix"></div>

        @if(count($licenses) == 0)

        <p>You don't currently have any licenses with Capisso, <a href="/panel/licenses/create">consider buying one?</a></p>

        @else


        @endif

    </div>
</div>

@stop