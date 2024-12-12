<?php
/**
 * Template Name: Projects Page
 */
?>
<?php get_header(); ?>

                <div id="main" class="col-lg-9 col-md-12 offset-lg-3 offset-md-0">

                    <!-- subheader -->
                    <section id="subheader" data-speed="8" data-type="background">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1>Projects</h1>
                                    <ul class="crumb">
                                        <li><a href="index.html">Home</a></li>
                                        <li class="sep">/</li>
                                        <li>Projects</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- subheader close -->

                    <!-- content begin -->
                    <div id="content" class="nopadding">
                        <!-- section begin -->
                        <div class="container-fluid">

                            <div class="spacer-single"></div>


                        </div>

                        <div id="gallery" class="gallery full-gallery de-gallery pf_full_width pf_3_cols wow fadeInUp" data-wow-delay=".3s">






                        <?php
                            $args = array(
                                'post_type' => 'project',
                                
                            );

                            $projects_query = new WP_Query($args);

                            if ($projects_query->have_posts()):
                                while ($projects_query->have_posts()):
                                    $projects_query->the_post();
                            ?>




                        
                            <!-- gallery item -->
                            <div class="item residential">
                                <div class="picframe">
                                    <a href="<?php the_permalink(); ?>">
                                        <span class="overlay">
                                            <span class="pf_text">
                                                <span class="project-name"><?php the_title(); ?></span>
                                            </span>
                                        </span>
                                    </a>
                                    <?php if (has_post_thumbnail()): ?>
                                    <!-- Display the project cover image -->
                                    <?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
                                <?php else: ?>
                                    <!-- Fallback image if no cover image is set -->
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-cover.jpg" alt="<?php the_title(); ?>" class="img-responsive" />
                                <?php endif; ?>
                                    
                                </div>
                            </div>
                            <!-- close gallery item -->
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            else:
                            ?>
                                <p>No projects found.</p>
                            <?php endif; ?>


















                        </div>

                        <hr>
                        <div class="text-center" style="background-size: cover;">
                                <ul class="pagination">
                                    <li><a href="#">Prev</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>



                    </div>


                    

    <?php get_footer(); ?>