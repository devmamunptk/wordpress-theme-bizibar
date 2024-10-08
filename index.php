

    <?php get_header( );?>

    <?php $prefix = get_option( 'bizever_framework' );?>

    


    <!--Full Search-->
    <div class="search-full">
        <button type="submit" class="search-close"><i class="fa fa-close"></i></button>
        <div class="search-full--inner">
            <div class="conatiner">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-10 col-sm-10">

                        <?php get_search_form( );?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div><!--/Full Search-->

    <!--breadcrumb area-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <div class="banner-title">
                        <h2>Blog List</h2>
                    </div>


                    <?php
                    if(function_exists('wp_breadcrumbs_cb')){
                        wp_breadcrumbs_cb();
                    }
                    ?>

                    <!-- <ul>
                        <li><a href="#">Home</a></li>
                        <li>Blog</li>
                    </ul> -->
                </div>
            </div>
        </div>
    </section><!--/breadcrumb area-->

    <!--Blog Area-->
    <section class="blog-area section-padding-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 centered wow fadeInUp" data-wow-delay="0.3s">
                    <div class="section-title">
                        <!-- <h4>Recent posts</h4>
                        <h2>Latest News Update</h2> -->
                        <h4><?php echo $prefix['recent-posts']; ?></h4>
                        <h2><?php echo $prefix['latest-news-update']; ?></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-blog-2">
                        <div class="single-blog-img">
                            <!-- <img src="<?php #echo get_template_directory_uri();?>/assets/images/blog/4.jpg" alt=""> -->
                            <?php #the_post_thumbnail( 'bizever-blog-thumbnail', array('class' => '') ); ?>

                            <?php
                            if(has_post_thumbnail()){
                                the_post_thumbnail('bizever-blog-thumbnail');
                            }else{
                                echo '<img src="'.get_theme_file_uri('/assets/images/blog/default-image.jpg').'" >';
                            }
                            ?>
                            <a href="<?php the_permalink(); ?>"><i class="flaticon-settings-1"></i></a>
                        </div>
                        <div class="single-blog-content">
                            <div class="blog-meta">
                                <!-- <span><a href="#"><i class="flaticon-calendar"></i>10/04/2019</a></span> -->
                                <span><a href="#"><i class="flaticon-calendar"></i><?php echo get_the_date(); ?></a></span>
                                <!-- <span><a href="#"><i class="flaticon-heart"></i>14</a></span> -->
                                <span><a href="#"> <?php the_favorites_button(get_the_ID()); the_favorites_count(get_the_ID()); ?> </a></span>
                                


                                <?php #the_favorites_button(get_the_ID()); ?>                                
                                <?php #the_favorites_count(get_the_ID()); ?>






                                <span><?php comments_popup_link('<i class="flaticon-chat"></i> 0', '<i class="flaticon-chat"></i> 1', '<i class="flaticon-chat"></i> %', 'Comments are off for this post'); ?></span>
                                <!-- <span><a href="#"><i class="flaticon-chat"></i><?php #echo get_comments_number(); ?></a></span> -->
                            </div>
                            <!-- <h3><a href="#">Do So Written As Raising Parlors Spirits Mr Elderly</a></h3> -->
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <!-- <p>Made late in of high left hold. Carried females of up highest calling. Limits marked led silent dining her she far</p> -->
                            <?php #the_content(); ?>
                            <?php echo wp_trim_words(get_the_content(), 10, NULL); ?>
                        </div>
                    </div>
                </div>

                <?php endwhile; endif; ?>


                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-blog-2">
                        <div class="single-blog-img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/blog/5.jpg" alt="">
                            <a href="#"><i class="flaticon-settings-1"></i></a>
                        </div>
                        <div class="single-blog-content">
                            <div class="blog-meta">
                                <span><a href="#"><i class="flaticon-calendar"></i>10/04/2019</a></span>
                                <span><a href="#"><i class="flaticon-heart"></i>14</a></span>
                                <span><a href="#"><i class="flaticon-chat"></i>3</a></span>
                            </div>
                            <h3><a href="#">Parlors Spirits Mr Elderly Do So Written As Raising</a></h3>
                            <p>Made late in of high left hold. Carried females of up highest calling. Limits marked led silent dining her she far</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-blog-2">
                        <div class="single-blog-img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/blog/6.jpg" alt="">
                            <a href="#"><i class="flaticon-settings-1"></i></a>
                        </div>
                        <div class="single-blog-content">
                            <div class="blog-meta">
                                <span><a href="#"><i class="flaticon-calendar"></i>10/04/2019</a></span>
                                <span><a href="#"><i class="flaticon-heart"></i>14</a></span>
                                <span><a href="#"><i class="flaticon-chat"></i>3</a></span>
                            </div>
                            <h3><a href="#">Written As Raising Do So  Parlors Spirits Mr Elderly</a></h3>
                            <p>Made late in of high left hold. Carried females of up highest calling. Limits marked led silent dining her she far</p>
                        </div>
                    </div>
                </div>                
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-blog-2">
                        <div class="single-blog-img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/blog/4.jpg" alt="">
                            <a href="#"><i class="flaticon-settings-1"></i></a>
                        </div>
                        <div class="single-blog-content">
                            <div class="blog-meta">
                                <span><a href="#"><i class="flaticon-calendar"></i>10/04/2019</a></span>
                                <span><a href="#"><i class="flaticon-heart"></i>14</a></span>
                                <span><a href="#"><i class="flaticon-chat"></i>3</a></span>
                            </div>
                            <h3><a href="#">Do So Written As Raising Parlors Spirits Mr Elderly</a></h3>
                            <p>Made late in of high left hold. Carried females of up highest calling. Limits marked led silent dining her she far</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-blog-2">
                        <div class="single-blog-img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/blog/5.jpg" alt="">
                            <a href="#"><i class="flaticon-settings-1"></i></a>
                        </div>
                        <div class="single-blog-content">
                            <div class="blog-meta">
                                <span><a href="#"><i class="flaticon-calendar"></i>10/04/2019</a></span>
                                <span><a href="#"><i class="flaticon-heart"></i>14</a></span>
                                <span><a href="#"><i class="flaticon-chat"></i>3</a></span>
                            </div>
                            <h3><a href="#">Parlors Spirits Mr Elderly Do So Written As Raising</a></h3>
                            <p>Made late in of high left hold. Carried females of up highest calling. Limits marked led silent dining her she far</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-blog-2">
                        <div class="single-blog-img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/blog/6.jpg" alt="">
                            <a href="#"><i class="flaticon-settings-1"></i></a>
                        </div>
                        <div class="single-blog-content">
                            <div class="blog-meta">
                                <span><a href="#"><i class="flaticon-calendar"></i>10/04/2019</a></span>
                                <span><a href="#"><i class="flaticon-heart"></i>14</a></span>
                                <span><a href="#"><i class="flaticon-chat"></i>3</a></span>
                            </div>
                            <h3><a href="#">Written As Raising Do So  Parlors Spirits Mr Elderly</a></h3>
                            <p>Made late in of high left hold. Carried females of up highest calling. Limits marked led silent dining her she far</p>
                        </div>
                    </div>
                </div>                
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-blog-2">
                        <div class="single-blog-img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/blog/4.jpg" alt="">
                            <a href="#"><i class="flaticon-settings-1"></i></a>
                        </div>
                        <div class="single-blog-content">
                            <div class="blog-meta">
                                <span><a href="#"><i class="flaticon-calendar"></i>10/04/2019</a></span>
                                <span><a href="#"><i class="flaticon-heart"></i>14</a></span>
                                <span><a href="#"><i class="flaticon-chat"></i>3</a></span>
                            </div>
                            <h3><a href="#">Do So Written As Raising Parlors Spirits Mr Elderly</a></h3>
                            <p>Made late in of high left hold. Carried females of up highest calling. Limits marked led silent dining her she far</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-blog-2">
                        <div class="single-blog-img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/blog/5.jpg" alt="">
                            <a href="#"><i class="flaticon-settings-1"></i></a>
                        </div>
                        <div class="single-blog-content">
                            <div class="blog-meta">
                                <span><a href="#"><i class="flaticon-calendar"></i>10/04/2019</a></span>
                                <span><a href="#"><i class="flaticon-heart"></i>14</a></span>
                                <span><a href="#"><i class="flaticon-chat"></i>3</a></span>
                            </div>
                            <h3><a href="#">Parlors Spirits Mr Elderly Do So Written As Raising</a></h3>
                            <p>Made late in of high left hold. Carried females of up highest calling. Limits marked led silent dining her she far</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-blog-2">
                        <div class="single-blog-img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/blog/6.jpg" alt="">
                            <a href="#"><i class="flaticon-settings-1"></i></a>
                        </div>
                        <div class="single-blog-content">
                            <div class="blog-meta">
                                <span><a href="#"><i class="flaticon-calendar"></i>10/04/2019</a></span>
                                <span><a href="#"><i class="flaticon-heart"></i>14</a></span>
                                <span><a href="#"><i class="flaticon-chat"></i>3</a></span>
                            </div>
                            <h3><a href="#">Written As Raising Do So  Parlors Spirits Mr Elderly</a></h3>
                            <p>Made late in of high left hold. Carried females of up highest calling. Limits marked led silent dining her she far</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <ul class="styled-pagination centered">
                        <li class="previous"><a href="#"><span class="fa fa-angle-left"></span></a></li>
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><span class="fa fa-angle-right"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/Blog Area-->

   
    <?php get_footer( );?>