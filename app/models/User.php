<?php

class User extends Cartalyst\Sentry\Users\Eloquent\User {

    public function gravatar() {
        return md5(mb_strtolower(trim($this->attributes['email'])));
    }

}