<nav class="navbar navbar-default" id="nav-header">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button id="button-menu" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-menu-header" aria-expanded="false">Menu <span class="caret"></span></button>
            <a class="navbar-brand visible-xs-block" href="/vi"><img src="asset/images/logo-vega.png" alt=""/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="nav-menu-header">
            <ul class="nav navbar-nav">
                @foreach($db as $tc)
                <li>
                    <a href="{{$tc->slug}}">{{$tc->name}}</a> 
                </li>
                @endforeach
            </ul>
            <form class="navbar-form navbar-right hidden-xs">
                <a class="navbar-brand" href="/vi"><img src="asset/images/logo-vega.png" alt=""/></a>
            </form>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <div class="dropdown" id="button-lang">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">VI <span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="/vi">VI</a></li>
            <li><a href="/en">EN</a></li>
        </ul>
    </div>
</nav>