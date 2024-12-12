<?php get_header(); ?>
                <div id="main" class="col-lg-9 col-md-12 offset-lg-3 offset-md-0">

                <?php if (have_posts()): ?>
                    <?php while (have_posts()): ?>
                        <?php the_post(); ?>
                    <!-- subheader -->
                    <section id="subheader" data-speed="8" data-type="background">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1><?php the_title();?></h1>
                                    <ul class="crumb">
                                        <li><a href="index.html">Accueil</a></li>
                                        <li class="sep">/</li>
                                        <li><a href="sidebar-services.html">Machines</a></li>
                                        <li class="sep">/</li>
                                        <li><?php the_title();?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- subheader close -->

                    <div id="content" class="nopadding">
                        <section id="section-content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                        <?php the_content();?>
                                    </div>
                                    <div class="col-md-6 pic-services wow fadeInUp" data-wow-delay=".6s">
                                        <?php if (has_post_thumbnail()): ?>
                                        <!-- Display the project cover image -->
                                        <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                            <?php else: ?>
                                        <!-- Fallback image if no cover image is set -->
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-cover.jpg" alt="<?php the_title(); ?>" class="img-responsive" />
                                      <?php endif; ?>


                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- section begin -->
                        <section id="view-all-projects" class="call-to-action bg-color dark text-center" data-speed="5" data-type="background" aria-label="view-all-projects">
                            <a href="sidebar-contact.html" class="btn btn-line black btn-big">Get Quotation</a>
                        </section>
                        <!-- logo carousel section close -->
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                          <?php else: ?>
                            <p>No posts found.</p>
                          <?php endif; ?>




                    </div>


                    <?php get_footer(); ?>