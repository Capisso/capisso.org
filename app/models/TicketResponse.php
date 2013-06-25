<?php

class TicketResponse extends Eloquent {

    protected $table = 'ticket_responses';

    protected $touches = array('ticket');

    public function ticket() {
        return $this->belongsTo('Ticket');
    }

    public function author() {
        return $this->belongsTo('User', 'user_id');
    }

}