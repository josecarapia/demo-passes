<!-- header start -->
    <header id="home" class="navbar-fixed-top">
      <nav class="navbar navbar-default" role="navigation">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <h1><a class="nav-brand" href=""> <img src="{{ asset('images/site/logo.png') }}" alt="gigninga"></a></h1>
              </div>
            </div>
            <div class="col-sm-7">
              <!-- Collect the nav toggling -->
              <div class="collapse navbar-collapse navbar-example" id="bs-example-navbar-collapse-1">
                @include('pages.home.nav')
              </div><!-- /.navbar-collapse -->
            </div>
            <div class="col-sm-2 mob-right">
              <ul class="app pull-right">
                <li><a href="http://facebook.com/operationbot"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/opbeontime"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://plus.google.com/u/3/106111170751312122794/"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.container -->
      </nav>
    </header>
    <!-- header end -->