@extends('layouts/master')

@section('content')

<div class="row">
    <div class="span7">

        <h1>Capisso VMPanel Overview</h1>

        <p class="lead">Capisso VMPanel is an free, open source VPS control panel from Capisso which focuses on
            security, speed and usability. We'll be
            supporting OpenVZ, KVM and Xen from day one, and others will follow shortly after.</p>

        <p>Our core goal with Capisso VMPanel is security, so we've designed many systems to keep your business safe,
            secure and
            updated. Here's a couple of things we've done with VMPanel to help you out.</p>

        <ul>
            <li>PHPIDS - An intrusion detection system for PHP which logs every questionable request. Our panel
                safeguards you
                from almost all XSS and SQL injection exploits, but if you see something out of the ordinary, you can
                check it
                out or report it to Capisso for a more thorough look.
            </li>
            <li>SaltStack - We're embedding the fantastic Salt Stack into our panel and it'll manage our clients on your
                server.
                Salt is fast, easy to use, extendable and fully secure.
            </li>
            <li>Un-encoded Source - All of our panel and software is completely open to customers. Which allows you to
                quickly
                modify, edit or review any piece of code.
            </li>
            <li>No IonCube - Since all of our software is open to customers, there's no reason to IonCube Encode a
                single line
                of code deployed on your server. Security through obscurity just doesn't work.
            </li>
            <li>Secure RESTful JSON API - Our entire panel is built on the idea that the API is the panel, everything
                you can do
                with the panel you can do with the api, and providing your have HTTPS enabled on your panel
                domain/subdomain all
                contents of the requests you send will be encrypted. We've made it so even if you don't trust us for
                front end
                security, you can easily write a front end for yourself or your customers.
            </li>
            <li>Freedom of SQL - With Capisso VMPanel you can use any of the SQL servers you'd like, that includes
                MySQL,
                MariaDB, Percona, SQL Server, PostgreSQL or even SQLite!
            </li>
        </ul>

        <p>Capisso VMPanel isn't quite ready, but it will be soon, but I want to get some initial feedback/feature
            requests from everyone. So let me know!</p>

    </div>
    <div class="span5">
        <div class="well">
            <h2>Capisso VMPanel</h2>

            <div data-gittip-username="capisso" data-gittip-widget="custom">
                <p>VMPanel is <strong>free</strong>, but relies on your support to continue development. If you like our
                    product or where we're going with it please consider supporting us on Gittip. We're currently
                    making about <a class="gittip-profile-link"><span class="gittip-receiving">$0.00</span> a week</a> on Gittip.</p>

                <p>If you'd like another way to support us, please <a href="/contact">contact us</a>
                </p>
            </div>
            <script src="//gttp.co/v1.js"></script>
        </div>

        <h3>Screenshots</h3>

        <iframe class="imgur-album" width="100%" height="440" frameborder="0"
                src="http://imgur.com/a/hw7Da/embed"></iframe>

    </div>
</div>


@stop
