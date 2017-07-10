    <!-- main-header -->
    <div class="la-main-header clearfix">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <!-- Logo -->
                    <div class="site-branding">
                        <div class="site-logo">
                            <a href="homepage_02.php" title="YallaNews" rel="home">
                                <img src="images/logos/logo-01.png" alt="YallaNews">
                            </a>
                        </div>
                    </div>
                    <!-- ./Logo -->
                </div>

                <!-- col -->
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <!-- ads -->
                    <div class="pull-left">
                        <?php include 'blocks/ads/ads_728x90.php'; ?>
                    </div>
                    <!-- ./ads -->
                </div>
                <!-- ./col -->
            </div>
            <!-- ./row -->
        </div>
        <!-- ./container -->
    </div>
    <!-- ./main-header -->
    

    <nav class="navbar navbar-default site-header main-header">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">

            <!-- Logo -->
            <div class="site-branding">
                <div class="site-logo">
                    <a href="homepage_02.php" title="YallaNews" rel="home">
                        <img src="images/logos/logo-03.png" alt="YallaNews">
                    </a>
                </div>
            </div>
            <!-- ./Logo -->

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#la_mobile_nav" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="la_mobile_nav">
            
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">الرئيسيه</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">سياسه <span class="caret"></span></a>
                <ul class="dropdown-menu animated fadeIn">
                  <li><a href="#">داخليه</a></li>
                  <li><a href="#">خارجيه</a></li>
                  <li><a href="#">الوطن العربي</a></li>
                  <li><a href="#">اودبا وامريكا</a></li>
                </ul>
              </li>
              <li><a href="#">صحه</a></li>
              <li><a href="#">وتكنلوجيا</a></li>
              <li><a href="#">اقتصاد</a></li>
              <li><a href="#">حوادث</a></li>
              <li><a href="#">علوم</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->

            <div class="la-nav-search">
                <a href="javascrpits:;" data-toggle="modal" data-target="#search_pop"><span class="fa fa-search"></span></a>
            </div>

            <div class="la-nav-search la-user">
                <a href="javascrpits:;" data-toggle="modal" data-target="#login_pop"><span class="fa fa-user"></span></a>
            </div>

        </div><!-- /.container-fluid -->
    </nav>
</header>