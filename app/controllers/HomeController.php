<?php

class HomeController extends BaseController {

    public function getIndex()
    {
        return View::make('site/home');
    }

    public function getIrc()
    {
        return View::make('site/irc');
    }

}