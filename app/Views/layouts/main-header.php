			<!-- Main Header-->
			<div class="main-header side-header sticky">
				<div class="container-fluid">

					<div class="main-header-left">
						<a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
					</div>
					<div class="main-header-center">
						<div class="responsive-logo">
							<a href="<?php echo base_url('home/dashboard'); ?>"><img src="<?php echo base_url('/img/logo-siantar.png'); ?>" class="mobile-logo ht-50" alt="logo"></a>
							<a href="<?php echo base_url('home/dashboard'); ?>"><img src="<?php echo base_url('/img/logo-siantar.png'); ?>" class="mobile-logo-dark ht-50" alt="logo"></a>
						</div>
						
					</div>
					<div class="main-header-right">
						<div class="dropdown header-search">
							<a class="nav-link icon header-search">
								<i class="fe fe-search header-icons"></i>
							</a>
							
						</div>
						
						<div class="dropdown d-md-flex full-screen-link">
							<a class="nav-link icon " href="">
								<i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
								<i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
							</a>
						</div>
						
						
						<div class="dropdown main-profile-menu">
							<a class="d-flex" href="">
								<span class="main-img-user"><img alt="avatar" src="<?php echo base_url('/img/user.png'); ?>"></span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<h6 class="main-notification-title">Sonia Taylor</h6>
									<p class="main-notification-text">Web Designer</p>
								</div>
								<a class="dropdown-item border-top" href="<?php echo base_url('#'); ?>">
									<i class="fe fe-user"></i> My Profile
								</a>
								<a class="dropdown-item" href="<?php echo base_url('#'); ?>">
									<i class="fe fe-edit"></i> Edit Profile
								</a>								
								<a class="dropdown-item" href="<?php echo base_url('/'); ?>">
									<i class="fe fe-power"></i> Sign Out
								</a>
							</div>
						</div>
						
						
					</div>
				</div>
			</div>
			<!-- End Main Header-->