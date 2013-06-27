<?php

class HomeController extends BaseController
{

    public function getIndex()
    {
        return View::make('site/home');
    }

    public function getIrc()
    {
        return View::make('site/irc');
    }

    public function getContact()
    {
        return View::make('site/contact');
    }

    public function postContact()
    {
        $rules = array(
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'body' => 'required'
        );
        $input = array(
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'subject' => Input::get('subject'),
            'body' => Input::get('body'),
        );

        $validator = Validator::make($input, $rules);
        if($validator->fails()) {
            return Redirect::action('HomeController@getContact')->withErrors($validator)->withInput();
        }

        Mail::queue('emails/site/contact', $input, function($message) use ($input) {
            $message->from($input['email'], $input['name']);
            $message->to('help@capisso.org')->subject("[Contact Form] {$input['subject']}");
        });

        return Redirect::action('HomeController@getContact')->with('success', true);
    }

}