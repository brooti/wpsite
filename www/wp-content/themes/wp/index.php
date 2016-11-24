<?php get_header(); ?>
   
    <div class="content-section">
		<?php
			$posts = get_posts( array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'numberposts' => 3,
					'orderby' => 'post_date',
					'order' => 'DESC',
				)
			);
		?>
		<div class="container thumbs">
			<?php foreach ($posts as $post) : ?>
				<div class="col-md-4 col-sm-6">
                    <div class="product-item">
                        <div class="product-thumbnail">
                            <?php echo get_the_post_thumbnail($post, 'front-news'); ?>
                        </div> <!-- /.product-thum -->
                        <div class="product-content">
                            <h5><a href="<?php echo get_permalink($post); ?>"><?=get_the_title($post); ?></a></h5>
                            <p><?=get_the_excerpt($post); ?></p>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
			<?php endforeach; ?>
		</div>
	</div>

    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title">
                    <h2>New Products</h2>
                </div> <!-- /.section -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="<?php bloginfo('template_url'); ?>/images/gallery-image-2.jpg" alt="">
                        </div> <!-- /.product-thum -->
                        <div class="product-content">
                            <h5><a href="#">Name of Shirt</a></h5>
                            <span class="price">$40.00</span>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="<?php bloginfo('template_url'); ?>/images/gallery-image-3.jpg" alt="">
                        </div> <!-- /.product-thum -->
                        <div class="product-content">
                            <h5><a href="#">Sport Shirt</a></h5>
                            <span class="price">$40.00</span>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="<?php bloginfo('template_url'); ?>/images/gallery-image-4.jpg" alt="">
                        </div> <!-- /.product-thum -->
                        <div class="product-content">
                            <h5><a href="#">Elegant Shirt</a></h5>
                            <span class="price">$60.00</span>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="<?php bloginfo('template_url'); ?>/images/gallery-image-5.jpg" alt="">
                        </div> <!-- /.product-thum -->
                        <div class="product-content">
                            <h5><a href="#">Another New Shirt</a></h5>
                            <span class="price">$80.00</span>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.content-section -->

    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title">
                    <h2>Vote For Future Products</h2>
                </div> <!-- /.section -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="product-item-vote">
                        <div class="product-thumb">
                            <img src="<?php bloginfo('template_url'); ?>/images/products/1.jpg" alt="">
                        </div> <!-- /.product-thum -->
                        <div class="product-content">
                            <h5><a href="#">Name of Shirt</a></h5>
                            <span class="tagline">By: Catherine</span>
                            <ul class="progess-bars">
                                <li>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                        <span>4<i class="fa fa-heart"></i></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="progress">
                                        <div class="progress-bar comments" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                        <span class="comments">6<i class="fa fa-heart"></i></span>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-vote -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item-vote">
                        <div class="product-thumb">
                            <img src="<?php bloginfo('template_url'); ?>/images/products/2.jpg" alt="">
                        </div> <!-- /.product-thum -->
                        <div class="product-content">
                            <h5><a href="#">Name of Shirt</a></h5>
                            <span class="tagline">By: Rebecca</span>
                            <ul class="progess-bars">
                                <li>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                        <span>4<i class="fa fa-heart"></i></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="progress">
                                        <div class="progress-bar comments" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                        <span class="comments">6<i class="fa fa-heart"></i></span>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-vote -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item-vote">
                        <div class="product-thumb">
                            <img src="<?php bloginfo('template_url'); ?>/images/products/3.jpg" alt="">
                        </div> <!-- /.product-thum -->
                        <div class="product-content">
                            <h5><a href="#">Name of Shirt</a></h5>
                            <span class="tagline">By: Catherine</span>
                            <ul class="progess-bars">
                                <li>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                        <span>4<i class="fa fa-heart"></i></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="progress">
                                        <div class="progress-bar comments" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                        <span class="comments">6<i class="fa fa-heart"></i></span>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-vote -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item-vote">
                        <div class="product-thumb">
                            <img src="<?php bloginfo('template_url'); ?>/images/products/4.jpg" alt="">
                        </div> <!-- /.product-thum -->
                        <div class="product-content">
                            <h5><a href="#">Name of Shirt</a></h5>
                            <span class="tagline">By: Rebecca</span>
                            <ul class="progess-bars">
                                <li>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                        <span>4<i class="fa fa-heart"></i></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="progress">
                                        <div class="progress-bar comments" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                        <span class="comments">6<i class="fa fa-heart"></i></span>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-vote -->
                </div> <!-- /.col-md-3 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.content-section -->
<?php get_footer(); ?>