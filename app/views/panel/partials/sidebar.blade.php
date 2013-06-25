
<ul class="nav nav-pills nav-stacked">
    <li class="{{(Request::is('panel') ? 'active' : '')}}"><a href="/panel">Home</a></li>
    <li class="{{(Request::is('panel/licenses*') ? 'active' : '')}}"><a href="/panel/licenses">Licenses</a></li>
    <li class="{{(Request::is('panel/support*') ? 'active' : '')}}"><a href="/panel/support">Support</a></li>
</ul>