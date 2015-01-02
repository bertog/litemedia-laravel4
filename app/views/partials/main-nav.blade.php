<nav class="navbar navbar-default navbar-fixed-top ask-nav" role="navigation">
    <div class="container">
        <div class="masthead">
            <div role="navigation">
                <ul class="nav nav-justified">
                    <li>{{ link_to_route('home', 'Dimostramelo') }}</li>
                    <li>{{ link_to_route('get.story.listing', 'Storie') }}</li>
                    <li class="dropbox">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id="dropProve">Le Prove <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropProve">
                            <li><a href="#">Chiedi le Prove</a></li>
                            <li><a href="#">Comprendi le Prove</a></li>
                        </ul>
                    </li>
                    {{--<li class="active"><a href="#">Chiedi le Prove</a></li>--}}
                    {{--<li><a href="#">Comprendi le Prove</a></li>--}}
                    <li><a href="#">Dimostramelo! sui Socials</a></li>
                    <li><a href="#">Chi Siamo</a></li>
                    @if ($currentUser)
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ $currentUser->username }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>{{ link_to_route('dashboard', 'Dashboard') }}</li>
                                <li class="divider"></li>
                                <li><a href="#">Profilo</a></li>
                                <li>{{ link_to_route('change.password', 'Cambia Password')  }}</li>
                                <li>{{ link_to_route('logout_path', 'Esci')  }}</li>
                            </ul>
                        </li>
                    {{--@else--}}
                        {{--<li>{{ link_to_route('login_path', 'Login') }}</li>--}}
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
 