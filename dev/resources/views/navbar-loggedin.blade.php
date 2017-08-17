<?php ?>
<div id="app">
    @yield('navbar')
    <nav class="navbar navbar-fixed-top navbar-collapse navbar-login">
        <ul>
            <li class="logoDiv"><img src="/img/wedding-dress.png" style="height:50px;width:auto;"><a href="/"><img src="/img/logo.png" style="height:30px;width:auto;padding-bottom:10px;"></a></li>
            <li style="float:right">
                <a class="signout-btn ui-btn ui-btn-inline ui-corner-all" href="{{ url('/logout') }}" >Logout</a>
            </li>
            <li class="userShow">
                    <a>
                        Hi! {{ Auth::user()->name }}
                    </a>
            </li>
        </ul>
    </nav>
</div>