@extends('layouts/master')

@section('content')

<div class="row">
    <div class="span7">

        <h1>Capisso VMPanel Overview</h1>

        <p class="lead">Capisso VMPanel is an VPS control panel from Capisso which focuses on security, speed and usability. We'll be
            supporting OpenVZ, KVM and Xen from day one, and others will follow shortly after.</p>

        <p>Our core goal with Capisso VMPanel is security, so we've designed many systems to keep your business safe, secure and
            updated. Here's a couple of things we've done with VMPanel to help you out.</p>

        <ul>
            <li>PHPIDS - An intrusion detection system for PHP which logs every questionable request. Our panel safeguards you
                from almost all XSS and SQL injection exploits, but if you see something out of the ordinary, you can check it
                out or report it to Capisso for a more thorough look.
            </li>
            <li>SaltStack - We're embedding the fantastic Salt Stack into our panel and it'll manage our clients on your server.
                Salt is fast, easy to use, extendable and fully secure.
            </li>
            <li>Un-encoded Source - All of our panel and software is completely open to customers. Which allows you to quickly
                modify, edit or review any piece of code.
            </li>
            <li>No IonCube - Since all of our software is open to customers, there's no reason to IonCube Encode a single line
                of code deployed on your server. Security through obscurity just doesn't work.
            </li>
            <li>Secure RESTful JSON API - Our entire panel is built on the idea that the API is the panel, everything you can do
                with the panel you can do with the api, and providing your have HTTPS enabled on your panel domain/subdomain all
                contents of the requests you send will be encrypted. We've made it so even if you don't trust us for front end
                security, you can easily write a front end for yourself or your customers.
            </li>
            <li>Freedom of SQL - With Capisso VMPanel you can use any of the SQL servers you'd like, that includes MySQL,
                MariaDB, Percona, SQL Server, PostgreSQL or even SQLite!
            </li>
        </ul>

        <p>Capisso VMPanel isn't quite ready, but it will be soon, but I want to get some initial feedback/feature requests from everyone. So let me know!</p>

    </div>
    <div class="span5">
        <div class="well">
            <h2>Capisso VMPanel</h2>
            <ul>
                <li>One VMPanel License</li>
                <li>One Node License <br>

                    <p class="muted">Additional node licenses are $3/mo after your first.</p></li>

            </ul>
            <p>Capisso VMPanel is a VPS control panel from Capisso which focuses on security, speed and usability.
                We support OpenVZ, KVM and Xen. <a href="/vmpanel/overview">Find out more.</a></p>

            <h3>Special: <span style="text-decoration: line-through; font-size: 20px;">$100</span> <span class="text-success">$75.00!</span>  / one time</h3>

            @if(!Sentry::check())
            <a href="/account/login" class="btn btn-success btn-large btn-block">Sign me up!</a>
            @else
            <a href="/panel/licenses/create" class="btn btn-success btn-large btn-block">Create License</a>
            @endif

        </div>

        <h3>Screenshots</h3>

        <iframe class="imgur-album" width="100%" height="440" frameborder="0" src="http://imgur.com/a/hw7Da/embed"></iframe>

    </div>
</div>


@stop