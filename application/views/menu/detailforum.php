<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	
<?php $this->load->view('user/head') ?>

	<body class="home header-v1">
		<!-- <div id="fakeloader"></div> -->
		<!-- <div class="color-switcher" id="choose_color"> -->
			<!-- <a href="#." class="picker_close"><i class="fas fa-cog fa-spin"></i></a> -->
		<!-- </div> -->
		<div id="page" class="site">
			<!-- Mobile main menu -->
			<a href="#" id="mobile-trigger"><i class="fa fa-list" aria-hidden="true"></i></a>
			
<?php $this->load->view('user/header') ?>
<?php $this->load->view('user/mainnav') ?>
<?php $this->load->view('user/slide') ?>	

<!-- <div id="content" class="site-content global-layout-right-sidebar"> -->
				<div class="container">
					<div class="section-title-wrap" style="text-align: center;">
					<h2 class="section-title">Detail Forum</h2><span class="divider"></span>
				</div>
					<div class="inner-wrapper">
						<div id="primary" class="content-area">
							<main id="main" class="site-main" >
								<article class="hentry">
									<div class="entry-thumb">
										<img class="aligncenter" src="<?php echo base_url('assets/images/blog-single')?>/blog-single.jpg" alt="Blog">
									</div>
									<div class="entry-content-wrapper">
										<header class="entry-header">
											<h2 class="entry-title"><a href="#" rel="bookmark">Website Design & Development</a></h2>
										</header><!-- .entry-header -->
										<div class="entry-meta">
											<span class="posted-on"><a href="#" rel="bookmark"><span class="entry-date published updated">February 22, 2017</span></a>
										</span>
										<span class="byline"><span class="author vcard"><a href="#" >Supervisor</a></span></span>
										<span class="comments-link"><a href="#" >Leave a comment</a></span>
										<span class="cat-links"><a href="#"  rel="category tag">Design</a></span>
									</div><!-- .entry-meta -->
									<div class="entry-content">
										<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quisProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis</p>
									</div><!-- .entry-content -->
								</div><!-- .entry-content-wrapper -->

								<footer class="entry-footer">
								</footer><!-- .entry-footer -->
							</article>
							<div class="authorbox ">
								<div class="author-avatar">
									<img alt="" src="<?php echo base_url('assets/images/blog-single')?>/author-1.jpg" class="avatar img-circle">
								</div>
								<div class="author-info">
									<h4 class="author-header">
										Written by&nbsp;<a href="#" title="Posts by Director & Writer: Kopaja Team" rel="author">Director & Writer: Kopaja Team</a>   </h4>
										<div class="author-content">
											<p>Phasellus imperdiet libero sitdl amet dlante Donec convallis elemen tumd leo. Etiam non pede aecen vehicu magna quis pede. Maecenas felis quam consectetuer dictum..</p>
										</div>
									</div> <!-- .author-info -->
								</div> <!-- .authorbox -->
								<nav class="navigation post-navigation" >
									<h2 class="screen-reader-text">Post navigation</h2>
									<div class="nav-links">
										<div class="nav-previous">
											<a href="#" rel="prev">Previous</a>
										</div>
										<div class="nav-next">
											<a href="#" rel="next">Next</a>
										</div>
									</div>
								</nav>
								<div id="comments" class="comments-area">
									<h2 class="comments-title">Comments</h2>
									<ol class="comment-list">
										<li  class="comment">
											<article class="comment-body">
												<footer class="comment-meta">
													<div class="comment-author vcard">
														<img alt="Author" src="<?php echo base_url('assets/images/blog-single')?>/author-2.jpg" class="avatar img-circle">
														<b class="fn"><a href="#"  class="url">Anil</a></b>
														<span class="says">says:</span>
														<div class="reply">
															<a  class="comment-reply-link" href="#">Reply</a>
														</div>
													</div><!-- .comment-author -->
													<div class="comment-metadata">
														<a href="#" >
															<span> May 28, 2017 at 8:17 am </span>
														</a>
													</div><!-- .comment-metadata -->
												</footer><!-- .comment-meta -->
												<div class="comment-content">
													<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,</p>
												</div><!-- .comment-content -->

											</article><!-- .comment-body -->
											<ol class="children">
												<li  class="comment">
													<article class="comment-body">
														<footer class="comment-meta">
															<div class="comment-author vcard">
																<img alt="" src="<?php echo base_url('assets/images/blog-single')?>/author-3.jpg" class="avatar img-circle">
																<b class="fn">
																	<a href="#" class="url">John Mark</a> </b>
																	<span class="says">says:</span>
																	<div class="reply"><a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
																	</div>
																</div><!-- .comment-author -->
																<div class="comment-metadata">
																	<a href="#" >
																		<span>
																			May 28, 2017 at 8:17 am  </span>
																		</a>
																	</div><!-- .comment-metadata -->
																</footer><!-- .comment-meta -->
																<div class="comment-content">
																	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,</p>
																</div><!-- .comment-content -->
															</article><!-- .comment-body -->
														</li><!-- #comment-## -->
													</ol><!-- .children -->
												</li><!-- #comment-## -->
											</ol><!-- .comment-list -->
											<div id="respond" class="comment-respond">
												<h3 id="reply-title" class="comment-reply-title">Leave a Reply
													<small><a  id="cancel-comment-reply-link" href="#" >Cancel reply</a></small>
												</h3>
												<form action="http://anilbasnet.com/demo/biz-lina/."  id="commentform" class="comment-form">
													<p class="comment-notes">
														<span id="email-notes">Your email address will not be published.
														</span> Required fields are marked <span class="required">*</span>
													</p>
													<p class="comment-form-comment">
														<label for="comment">Comment</label>
														<textarea id="comment" name="comment"></textarea>
													</p>
													<p class="comment-form-author">
														<label for="author">Name <span class="required">*</span></label>
														<input id="author" name="author" type="text">
													</p>
													<p class="comment-form-email">
														<label for="email">Email <span class="required">*</span></label>
														<input id="email" name="email" type="email" aria-describedby="email-notes">
													</p>
													<p class="comment-form-url"><label for="url">Website</label>
														<input id="url" name="url" type="url">
													</p>
													<p class="form-submit">
														<input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
														<input type="hidden" id="comment-post-ID">
														<input type="hidden" id="comment-parent">
													</p>
												</form>
											</div><!-- #respond -->
										</div>
									</main>
								</div>
								<div id="sidebar-primary" class="sidebar widget-area" >
									<div class="sidebar-widget-wrapper">
										<aside class="widget">
										<h3 class="widget-title"><span class="widget-title-wrapper">Search</span></h3>
										<form action="http://anilbasnet.com/demo/biz-lina/." class="search-form" method="get" role="search">
												<input type="search" title="Search:" name="s" value="" placeholder="Search..." class="search-field">
												<input type="submit" value="Search" class="search-submit">
											</form>
										</aside> <!-- .widget -->
</div>
</div>
</div>
</div>

<?php $this->load->view('user/wiget') ?>
<?php $this->load->view('user/sosmed') ?>

<?php $this->load->view('user/footer') ?>	
		
		</div> <!--#page-->
		<div id="btn-scrollup">
			<a  title="Go Top"  class="scrollup" href="#"><i class="fas fa-angle-up"></i></a>
		</div>
<?php $this->load->view('user/jscript') ?>	
	</body>

</html>