<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Welcome to Capisso!</h2>

<div>
    <p>In case you forgot, <a href="{{URL::to('/')}}">Capisso</a> is a new line of panels and solutions to help you
        manage and maintain your hosting business. We're starting with a VPS panel called VMPanel and expanding from
        there.</p>

    <p>Anyways, here's the stuff you need to know to finish your account: </p>

    <ol>
        <li><a href="{{ URL::to('account/validate', array($user->email, $activationCode)) }}">Authorize Your Email</a>[1]
        </li>
    </ol>

    <p>We hope that's pretty simple, if not, let us know!</p>

    <p>Thanks,<br>
        <i>The Capisso Team</i><br></p>

    <hr>

    <ol>
        <li>{{ URL::to('account/validate', array($user->email, $activationCode)) }}</li>
    </ol>
</div>
</body>
</html>
