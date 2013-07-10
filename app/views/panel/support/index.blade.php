@extends('layouts/master')

@section('content')

<div class="row">
    <div class="span3">
        @include('panel/partials/sidebar')
    </div>
    <div class="span9">

        <h2>Capisso Support</h2>

        <div class="pull-right">
            <a href="/panel/support/create" class="btn btn-success">New Ticket</a>
        </div>
        <div class="clearfix"></div>



        @if(count($tickets) == 0)

        <p>You don't have any tickets.</p>

        @else

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Last Update</th>
                </tr>
            </thead>

            <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <td><a href="/panel/support/{{$ticket->id}}">{{{$ticket->title}}}</a></td>
                    <td>{{ ucfirst($ticket->status) }}</td>
                    <td>{{$ticket->created_at}}</td>
                    <td>{{$ticket->updated_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>






        @endif

    </div>
</div>

@stop