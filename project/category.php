<?php include 'header.php'; ?>
<?php
    $id = $_GET['id'];
    $type = $_GET['type'];

?>

		</header>

		<section class="category">
		  <div class="container">
		    <div class="row">
		      <div class="col-md-8 text-left">
		        <div class="row">
		          <div class="col-md-12">        
		            <ol class="breadcrumb">
		              <li><a href="#">Home</a></li>
		              <li class="active">Computer</li>
		            </ol>
		            <h1 class="page-title">Chuyên mục: <?php echo get_category($conn, $id, $type); ?> </h1>
		            <p class="page-subtitle">Showing all posts with category <i>Computer</i></p>
		          </div>
		        </div>
		        <div class="line"></div>
		        <div class="row">
		         <?php get_tinchuyenmuc($conn); ?>
		         
		          <div class="col-md-12 text-center">
		            <ul class="pagination">
		              <li class="prev"><a href="#"><i class="ion-ios-arrow-left"></i></a></li>
		              <li class="active"><a href="#">1</a></li>
		              <li><a href="#">2</a></li>
		              <li><a href="#">3</a></li>
		              <li><a href="#">...</a></li>
		              <li><a href="#">97</a></li>
		              <li class="next"><a href="#"><i class="ion-ios-arrow-right"></i></a></li>
		            </ul>
		            <div class="pagination-help-text">
		            	Showing 8 results of 776 &mdash; Page 1
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="col-md-4 sidebar">
		        <aside>
		          <div class="aside-body">
		            <figure class="ads">
			            <a href="single.html">
			              <img src="images/ad.png">
			            </a>
		              <figcaption>Advertisement</figcaption>
		            </figure>
		          </div>
		        </aside>
		        <aside>
		          <h1 class="aside-title">Recent Post</h1>
		          <div class="aside-body">
		            <article class="article-fw">
		              <div class="inner">
		                <figure>
			                <a href="single.html">
			                  <img src="images/news/img12.jpg">
			                </a>
		                </figure>
		                <div class="details">
		                  <h1><a href="single.html">Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit</a></h1>
		                  <p>
		                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                    tempor incididunt ut labore et dolore magna aliqua.
		                  </p>
		                  <div class="detail">
		                    <div class="time">December 26, 2016</div>
		                    <div class="category"><a href="category.html">Lifestyle</a></div>
		                  </div>
		                </div>
		              </div>
		            </article>
		            <div class="line"></div>
		            <article class="article-mini">
		              <div class="inner">
		              <figure>
			              <a href="single.html">
			                <img src="images/news/img05.jpg">
		                </a>
		              </figure>
		              <div class="padding">
		                <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
		                <div class="detail">
		                  <div class="category"><a href="category.html">Lifestyle</a></div>
		                  <div class="time">December 22, 2016</div>
		                </div>
		              </div>
		              </div>
		            </article>
		            <article class="article-mini">
		              <div class="inner">
		                <figure>
			                <a href="single.html">
			                  <img src="images/news/img02.jpg">
		                  </a>
		                </figure>
		                <div class="padding">
		                  <h1><a href="single.html">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
		                  <div class="detail">
		                    <div class="category"><a href="category.html">Travel</a></div>
		                    <div class="time">December 21, 2016</div>
		                  </div>
		                </div>
		              </div>
		            </article>
		            <article class="article-mini">
		              <div class="inner">
		                <figure>
			                <a href="single.html">
			                  <img src="images/news/img13.jpg">
		                  </a>
		                </figure>
		                <div class="padding">
		                  <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
		                  <div class="detail">
		                    <div class="category"><a href="category.html">International</a></div>
		                    <div class="time">December 20, 2016</div>
		                  </div>
		                </div>
		              </div>
		            </article>
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
		      </div>
		    </div>
		  </div>
		</section>

<?php include 'footer.php'; ?>
	