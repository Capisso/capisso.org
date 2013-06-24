@extends('layouts/master')

@section('content')
<p dir="ltr">Since Capisso VMPanel is built on the idea that our API is our panel, features go hand in hand with the API.</p>
<p dir="ltr">Live updated version at: <a href="https://docs.google.com/document/d/1Vutq8sPDvzDsI1Bukt9ARo7DzYiR8L6_8jUPbtJNGp4/edit?usp=sharing">https://docs.google.com/document/d/1Vutq8sPDvzDsI1Bukt9ARo7DzYiR8L6_8jUPbtJNGp4/edit?usp=sharing</a></p>
&nbsp;
<p dir="ltr">API/Panel</p>

<ul>
    <li dir="ltr">
        <p dir="ltr">User</p>

        <ul>
            <li dir="ltr">
                <p dir="ltr">Virtual Machines</p>

                <ul>
                    <li dir="ltr">
                        <p dir="ltr">List</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Create</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Update (Includes renaming/resizing/etc)</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Destroy</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Start</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Stop</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Rebuild</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Reset Root Password</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Snapshot</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Restore from snapshot</p>
                    </li>
                </ul>
            </li>
            <li dir="ltr">
                <p dir="ltr">Regions</p>

                <ul>
                    <li dir="ltr">
                        <p dir="ltr">List</p>
                    </li>
                </ul>
            </li>
            <li dir="ltr">
                <p dir="ltr">Templates/Plans</p>

                <ul>
                    <li dir="ltr">
                        <p dir="ltr">List</p>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li dir="ltr">
        <p dir="ltr">Admin</p>

        <ul>
            <li dir="ltr">
                <p dir="ltr">Virtual Machines</p>

                <ul>
                    <li dir="ltr">
                        <p dir="ltr">List All</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Create</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Update</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Delete</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Start</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Stop</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Rebuild</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Reset Root Password</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Snapshot</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Restore from snapshot</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Disconnect (network)</p>
                    </li>
                </ul>
            </li>
            <li dir="ltr">
                <p dir="ltr">Machines</p>

                <ul>
                    <li dir="ltr">
                        <p dir="ltr">List</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Create</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Update</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Destroy</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Start</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Stop</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Restart VM’s</p>
                    </li>
                </ul>
            </li>
            <li dir="ltr">
                <p dir="ltr">IP Addresses</p>

                <ul>
                    <li dir="ltr">
                        <p dir="ltr">Assign</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Add</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Delete</p>
                    </li>
                </ul>
            </li>
            <li dir="ltr">
                <p dir="ltr">Users</p>

                <ul>
                    <li dir="ltr">
                        <p dir="ltr">Create</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Delete</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Update</p>
                    </li>
                    <li dir="ltr">
                        <p dir="ltr">Suspend</p>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
</ul>

@stop