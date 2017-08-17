
    <div id="app">
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <nav class="navbar navbar-fixed-top navbar-collapse navbar-logout">
            <ul>
                <li class="logoDiv"><img src="/img/wedding-dress.png" style="height:50px;width:auto;"><a href="/"><img src="/img/logo.png" style="height:30px;width:auto;padding-bottom:10px;"></a></li>
                <li style="float:right">
                    <a href="#myPopup" data-rel="popup" class="signin-btn ui-btn ui-btn-inline ui-corner-all">Sign in</a>
                    <div data-role="popup" id="myPopup" class="ui-content" style="min-width:250px;">
                        <form class="popup-content" method="POST" action="{{url('/login')}}">
                            {{ csrf_field() }}
                            <div class="pop-inner">
                                <span class="close" title="Close Modal">&times;</span>
                                <h3>Login <img class="key" src="/img/key-black.png" style="height:50px;width:auto;text-align: center"></h3>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">E-Mail Address: </label>
                                    <input id="email" class="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password">Password: </label>
                                    <input id="password" type="password" class="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i> Login
                                    </button>
                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                                <p style="font-size: 10px;">Don't have an account? Please <a href="{{ url('/register') }}">sign up</a> here.</p>
                            </div>
                        </form>
                    </div>
                </li>
                <li style="float:right;padding-top:25px;padding-right:25px;font-size:13px;color:#fcaf3c;font-family: 'Lucida Console','Lucida Sans Typewriter',monaco,'Bitstream Vera Sans Mono',monospace;">Not sign in yet?</li>
            </ul>
        </nav>
    </div>
    <script>
        var popup = document.getElementById('myPopup');
        document.getElementById('myPopup').style.display="none";
        $('.signin-btn').click(function(){
            $('.key').attr('src','/img/key-black.png');
            $('#myPopup').show();
        });
        $('.close').click(function(){
            $('#myPopup').hide();
        });
    </script>
    <script>
        $('.password').click(function(){
            $('.key').attr('src','/img/key.png');
        });
        $('.username').click(function(){
            $('.key').attr('src','/img/key-black.png');
        });
    </script>
