<?php


class Ticket extends Eloquent {

    public function responses() {
        return $this->hasMany('TicketResponse');
    }

}