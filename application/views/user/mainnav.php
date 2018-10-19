<div id ="main-navigation" style="background-color: #7f3012">
	<div class="container" style="background-color: #975425">
		<nav class="main-navigation">
			<ul>
				<li class="<?php if($this->uri->segment(1) == "welcome" and $this->uri->segment(2) ==""){echo "current-menu-item";}?> menu-item""><a href="<?php echo base_url("welcome") ?>">Home</a>
				</li>
				<li class=" <?php if($this->uri->segment(2) == "about" ){echo "current-menu-item";}?> menu-item"><a href="<?php echo base_url("welcome/about") ?>">About Us</a>
				</li>
				<li class=" <?php if($this->uri->segment(2) == "produk"){echo "current-menu-item";}?> menu-item"><a href="<?php echo base_url("welcome/produk") ?>">Product</a> </li>
				<li class=" <?php if($this->uri->segment(2) == "testi"){echo "current-menu-item";}?> menu-item"><a href="<?php echo base_url("welcome/testi") ?>">Testimonial</a></li>
				<li class=" <?php if($this->uri->segment(2) == "contact"){echo "current-menu-item";}?> menu-item"><a href="<?php echo base_url("welcome/contact") ?>" >Contact</a>
				<li class=" <?php if($this->uri->segment(2) == "forum"){echo "current-menu-item";}?> menu-item"><a href="<?php echo base_url("welcome/forum") ?>">Forum</a></li>	
				</li>
				<li class=" <?php if($this->uri->segment(2) == "gambar"){echo "current-menu-item";}?> menu-item"><a href="<?php echo base_url("welcome/gambar")?>">Galery</a></li>
			</ul>
		</nav> <!-- .site-navigation -->
		<div id="troli">
			<a href="<?php echo base_url("welcome/bayar") ?>"><i class="fa fa-shopping-cart" style="color: #fff"></i> <span class="badge badge-light">0</span></a>
		</div>
		<div id="header-search" style="margin-right: 1%;">
			<a href="#" class="search-icon"><i class="fa fa-search"></i></a>
			<div class="search-box-wrap">
				<div class="searchform" role="search">
					<form>
						<input type="text" name="s" id="s" placeholder="Search..." value="" class="search-field">
						<input type="submit" class="search-submit" value="Search">
					</form>
				</div>
			</div>
		</div>
		<div class="header-social-wrapper">
			<div class="social-links" >
				<ul>
					<li><a href="https://www.facebook.com/panji.arekmarchingband" ></a></li>
					<li><a href="http://youtube.com/" target="_blank"></a></li>
					<li><a href="http://twitter.com/" target="_blank"></a></li>
					<li><a href="http://instagram.com/" target="_blank"></a></li>
				</ul>
			</div> <!-- .social-links -->
		</div><!-- .header-social-wrapper -->
	</div><!-- .container -->
</div> <!-- #main-navigation -->