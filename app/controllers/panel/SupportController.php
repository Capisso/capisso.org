<?php

namespace Panel;

use View;
use Response;
use Redirect;
use Validator;
use Input;
use Sentry;
use Ticket;
use TicketResponse;

class SupportController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $tickets = Ticket::where('user_id', Sentry::getUser()->id)->get();

        return View::make('panel/support/index', array('tickets' => $tickets));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {

        return View::make('panel/support/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        $rules = array(
            'title' => 'required|max:255',
            'body' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()) {
            return Redirect::action('Panel\SupportController@create')->withErrors($validator);
        }

        $ticket = new Ticket();

        $ticket->title = Input::get('title');
        $ticket->body = Input::get('body');
        $ticket->user_id = Sentry::getUser()->id;

        $ticket->save();

        return Redirect::action('Panel\SupportController@show', array($ticket->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {
        $ticket = Ticket::find($id);
        if($ticket->user_id != Sentry::getUser()->id) {
            return Redirect::action('Panel\SupportController@index');
        }

        $author = $ticket->author;
        $responses = $ticket->responses;

        return View::make('panel/support/show', array(
            'ticket' => $ticket,
            'author' => $author,
            'responses' => $responses
        ));
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
        $rules = array(
            'body' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails()) {
            return Redirect::action('Panel\SupportController@create')->withErrors($validator);
        }

        $ticket = Ticket::find($id);
        if($ticket->user_id != Sentry::getUser()->id) {
            return Redirect::action('Panel\SupportController@index');
        }

        $response = new TicketResponse();

        $response->body = Input::get('body');
        $response->user_id = Sentry::getUser()->id;
        $response->ticket_id = $ticket->id;


        $ticket->responses()->save($response);

        return Redirect::action('Panel\SupportController@show', array($ticket->id));
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