<?php include 'header.php'; ?>


		</header>

		<section class="home">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="owl-carousel owl-theme slide" id="featured">
							<?php tinnoibat($conn); ?>
								
						</div>
						<div class="line">
							<div>Tin Mới</div>
						</div>
						<div class="row">	
							<?php tinmoi($conn); ?>
						</div>
						<div class="banner">
							<a href="#">
								<img src="images/ads.png" alt="Sample Article">
							</a>
						</div>
						<div class="line transparent little"></div>
						<div class="row">
							<div class="col-md-6 col-sm-6 trending-tags">
								<h1 class="title-col">Từ khoá</h1>
								<div class="body-col">
									<ol class="tags-list">
										<?php tukhoa($conn); ?>
									</ol>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<h1 class="title-col">
									Tin Hot
									<div class="carousel-nav" id="hot-news-nav">
										<div class="prev">
											<i class="ion-ios-arrow-left"></i>
										</div>
										<div class="next">
											<i class="ion-ios-arrow-right"></i>
										</div>
									</div>
								</h1>
								<div class="body-col vertical-slider" data-max="4" data-nav="#hot-news-nav" data-item="article">
								
									<?php tinhot($conn); ?>
								</div>
							</div>
						</div>
						<div class="line top">
							<div>Loại Tin </div>
						</div>
						<?php loaitin($conn); ?>
					</div>
					<div class="col-xs-6 col-md-4 sidebar" id="sidebar">
						<div class="sidebar-title for-tablet">Sidebar</div>
						<aside>
							<div class="aside-body">
								<div class="featured-author">
									<div class="featured-author-inner">
										<div class="featured-author-cover" style="background-image: url('images/news/img15.jpg');">
											<div class="badges">
												<div class="badge-item"><i class="ion-star"></i> Featured</div>
											</div>
											<div class="featured-author-center">
												<figure class="featured-author-picture">
													<img src="images/img01.jpg" alt="Sample Article">
												</figure>
												<div class="featured-author-info">
													<h2 class="name">John Doe</h2>
													<div class="desc">@JohnDoe</div>
												</div>
											</div>
										</div>
										<div class="featured-author-body">
											<div class="featured-author-count">
												<div class="item">
													<a href="#">
														<div class="name">Posts</div>
														<div class="value">208</div>														
													</a>
												</div>
												<div class="item">
													<a href="#">
														<div class="name">Stars</div>
														<div class="value">3,729</div>														
													</a>
												</div>
												<div class="item">
													<a href="#">
														<div class="icon">
															<div>More</div>
															<i class="ion-chevron-right"></i>
														</div>														
													</a>
												</div>
											</div>
											<div class="featured-author-quote">
												"Eur costrict mobsa undivani krusvuw blos andugus pu aklosah"
											</div>
											<div class="block">
												<h2 class="block-title">Photos</h2>
												<div class="block-body">
													<ul class="item-list-round" data-magnific="gallery">
														<li><a href="images/news/img06.jpg" style="background-image: url('images/news/img06.jpg');"></a></li>
														<li><a href="images/news/img07.jpg" style="background-image: url('images/news/img07.jpg');"></a></li>
														<li><a href="images/news/img08.jpg" style="background-image: url('images/news/img08.jpg');"></a></li>
														<li><a href="images/news/img09.jpg" style="background-image: url('images/news/img09.jpg');"></a></li>
														<li><a href="images/news/img10.jpg" style="background-image: url('images/news/img10.jpg');"></a></li>
														<li><a href="images/news/img11.jpg" style="background-image: url('images/news/img11.jpg');"></a></li>
														<li><a href="images/news/img12.jpg" style="background-image: url('images/news/img12.jpg');"><div class="more">+2</div></a></li>
														<li class="hidden"><a href="images/news/img13.jpg" style="background-image: url('images/news/img13.jpg');"></a></li>
														<li class="hidden"><a href="images/news/img14.jpg" style="background-image: url('images/news/img14.jpg');"></a></li>
													</ul>
												</div>
											</div>
											<div class="featured-author-footer">
												<a href="#">See All Authors</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</aside>
						<aside>
							<h1 class="aside-title">Phổ biến <a href="#" class="all">Xem thêm <i class="ion-ios-arrow-right"></i></a></h1>
							<div class="aside-body">
								<?php tinxemnhieu($conn); ?>
								</div>
    					</aside>
						<aside>
							<div class="aside-body">
								<form class="newsletter">
									<div class="icon">
										<i class="ion-ios-email-outline"></i>
										<h1>Newsletter</h1>
									</div>
									<div class="input-group">
										<input type="email" class="form-control email" placeholder="Your mail">
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
										</div>
									</div>
									<p>By subscribing you will receive new articles in your email.</p>
								</form>
							</div>
						</aside>
						<aside>
							<ul class="nav nav-tabs nav-justified" role="tablist">
								<li class="active">
									<a href="#recomended" aria-controls="recomended" role="tab" data-toggle="tab">
										<i class="ion-android-star-outline"></i> Recomended
									</a>
								</li>
								<li>
									<a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">
										<i class="ion-ios-chatboxes-outline"></i> Comments
									</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="recomended">
									<?php get_tin($conn); ?>
									<div class="line"></div>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="single.html">
													<img src="images/news/img05.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="single.html"><?php echo get_ten($conn); ?></a></h1>
												<div class="detail">
													<div class="category"><a href="category.php">Lifestyle</a></div>
													<div class="time">December 22, 2016</div>
												</div>
											</div>
										</div>
									</article>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="single.html">
													<img src="images/news/img02.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="single.html"><?php echo get_ten($conn); ?></a></h1>
												<div class="detail">
													<div class="category"><a href="category.php">Travel</a></div>
													<div class="time">December 21, 2016</div>
												</div>
											</div>
										</div>
									</article>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="single.html">
													<img src="images/news/img10.jpg" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="single.html"><?php  get_ten($conn); ?></a></h1>
												<div class="detail">
													<div class="category"><a href="category.php">Healthy</a></div>
													<div class="time">December 20, 2016</div>
												</div>
											</div>
										</div>
									</article>
								</div>
								<div class="tab-pane comments" id="comments">
									<div class="comment-list sm">
										<div class="item">
											<div class="user">                                
												<figure>
													<img src="images/img01.jpg" alt="User Picture">
												</figure>
												<div class="details">
													<h5 class="name">Mark Otto</h5>
													<div class="time">24 Hours</div>
													<div class="description">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit.
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="user">                                
												<figure>
													<img src="images/img01.jpg" alt="User Picture">
												</figure>
												<div class="details">
													<h5 class="name">Mark Otto</h5>
													<div class="time">24 Hours</div>
													<div class="description">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit.
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="user">                                
												<figure>
													<img src="images/img01.jpg" alt="User Picture">
												</figure>
												<div class="details">
													<h5 class="name">Mark Otto</h5>
													<div class="time">24 Hours</div>
													<div class="description">
														Lorem ipsum dolor sit amet, consectetur adipisicing elit.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</aside>
						<aside>
							<h1 class="aside-title">Videos
								<div class="carousel-nav" id="video-list-nav">
									<div class="prev"><i class="ion-ios-arrow-left"></i></div>
									<div class="next"><i class="ion-ios-arrow-right"></i></div>
								</div>
							</h1>
							<div class="aside-body">
								<ul class="video-list" data-youtube='"carousel":true, "nav": "#video-list-nav"'>
									<li><a data-youtube-id="SBjQ9tuuTJQ" data-action="magnific"></a></li>
									<li><a data-youtube-id="9cVJr3eQfXc" data-action="magnific"></a></li>
									<li><a data-youtube-id="DnGdoEa1tPg" data-action="magnific"></a></li>
								</ul>
							</div>
						</aside>
						<aside id="sponsored">
							<h1 class="aside-title">Sponsored</h1>
							<div class="aside-body">
								<ul class="sponsored">
									<li>
										<a href="#">
											<img src="images/sponsored.png" alt="Sponsored">
										</a>
									</li> 
									<li>
										<a href="#">
											<img src="images/sponsored.png" alt="Sponsored">
										</a>
									</li> 
									<li>
										<a href="#">
											<img src="images/sponsored.png" alt="Sponsored">
										</a>
									</li> 
									<li>
										<a href="#">
											<img src="images/sponsored.png" alt="Sponsored">
										</a>
									</li> 
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</section>

		<section class="best-of-the-week">
			<div class="container">
				<h1><div class="text">Tin Cuối Tuần</div>
					<div class="carousel-nav" id="best-of-the-week-nav">
						<div class="prev">
							<i class="ion-ios-arrow-left"></i>
						</div>
						<div class="next">
							<i class="ion-ios-arrow-right"></i>
						</div>
					</div>
				</h1>
				<div class="owl-carousel owl-theme carousel-1">
					<?php tincuoituan($conn); ?>
				</div>
			</div>
		</section>

<?php include 'footer.php'; ?>
	