<?php


class Ticket extends Eloquent {

    public function responses() {
        return $this->hasMany('TicketResponse');
    }

    public function author() {
        return $this->belongsTo('User', 'user_id');
    }

}