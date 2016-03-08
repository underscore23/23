<body>
    <div class="body">
	    <header class="clean-top center">
            <!--<div class="header-top">
				<div class="container">
                    <div class="social-icons">
							<ul class="social-icons">
								<li class="facebook"><a href="https://www.facebook.com/pages/Socio-Marker/155035944560050" target="_blank" title="Facebook">Facebook</a></li>
								<li class="twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li>
								<li class="linkedin"><a href="http://www.linkedin.com/company/socio-marker/" target="_blank" title="Linkedin">Linkedin</a></li>
							</ul>
					</div>
                    <div class="search">
						<form id="searchForm" action="page-search-results.html" method="get">
							<div class="input-group">
								<input type="text" class="form-control search" name="q" id="q" placeholder="Search...">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button"><i class="icon icon-search"></i></button>
								</span>
							</div>
						</form>
					</div>

				</div>
				</div>-->
                <div class="container">
                    <h1 class="logo">
						<a href="index.php">
							<img alt="SocioGang" src="img/logo.png">
						</a>
					</h1>
                    <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
						<i class="icon icon-bars"></i>
    				</button>
                </div>
                <?php
                  if($thisPage == 'index'){
                    // do not show the menu
                    echo "<br /><br />";
                  } else {
                ?>
                <br /><br />
				<div class="navbar-collapse nav-main-collapse collapse">
					<div class="container">
						<nav class="nav-main">
							<ul class="nav nav-pills nav-main" id="mainMenu">
								<li class="">
									<a href="index.php">All Projects</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
                <?php
                  }
                ?>
			</header>