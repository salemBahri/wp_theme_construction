   <!-- footer begin -->
   <footer>
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-6">
                   <img src="<?php echo esc_url(get_theme_mod('footer_logo', get_template_directory_uri() . '/assets/images/logo.png')); ?>" class="logo-small" alt="">
                   <br>
                   <?php echo esc_html(get_bloginfo('description')); ?>
               </div>

               <div class="col-md-6">
                   <h3><?php esc_html_e('Contactez-nous', 'your-theme'); ?></h3>
                   <div class="widget widget-address">
                       <address>
                           <span><?php echo esc_html(get_theme_mod('contact_address', '100 S Main St, Los Angeles, CA')); ?></span>
                           <span><strong><?php esc_html_e('Téléphone:', 'your-theme'); ?></strong> <?php echo esc_html(get_theme_mod('contact_phone', '(208) 333 9296')); ?></span>
                           <span><strong><?php esc_html_e('Fix:', 'your-theme'); ?></strong> <?php echo esc_html(get_theme_mod('contact_fix', '(208) 333 9298')); ?></span>
                           <span><strong><?php esc_html_e('Email:', 'your-theme'); ?></strong>
                               <a href="mailto:<?php echo esc_attr(get_theme_mod('contact_email', 'contact@archi-interior.com')); ?>">
                                   <?php echo esc_html(get_theme_mod('contact_email', 'contact@archi-interior.com')); ?>
                               </a>
                           </span>
                           <span><strong><?php esc_html_e('Website:', 'your-theme'); ?></strong>
                               <a href="<?php echo esc_url(get_theme_mod('contact_website', 'http://archi-interior.com')); ?>" target="_blank">
                                   <?php echo esc_html(get_theme_mod('contact_website', 'http://archi-interior.com')); ?>
                               </a>
                           </span>
                       </address>
                   </div>
               </div>

           </div>
       </div>

       <div class="subfooter">
           <div class="container-fluid">
               <div class="row">
                   <div class="col-md-6">
                        Copyright <?php echo date('Y')?> by <a href="#">Salem Bahri</a>
                   </div>
                   <div class="col-md-6 text-right">
                       <div class="social-icons">
                           <?php if ($facebook = get_theme_mod('social_facebook_link', '#')) : ?>
                               <a href="<?php echo esc_url($facebook); ?>" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                           <?php endif; ?>
                           <?php if ($twitter = get_theme_mod('social_twitter_link', '#')) : ?>
                               <a href="<?php echo esc_url($twitter); ?>" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                           <?php endif; ?>
                           <?php if ($rss = get_theme_mod('social_rss_link', '#')) : ?>
                               <a href="<?php echo esc_url($rss); ?>" target="_blank"><i class="fa fa-rss fa-lg"></i></a>
                           <?php endif; ?>
                           <?php if ($google_plus = get_theme_mod('social_google_plus_link', '#')) : ?>
                               <a href="<?php echo esc_url($google_plus); ?>" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
                           <?php endif; ?>
                           <?php if ($skype = get_theme_mod('social_skype_link', '#')) : ?>
                               <a href="<?php echo esc_url($skype); ?>" target="_blank"><i class="fa fa-skype fa-lg"></i></a>
                           <?php endif; ?>
                           <?php if ($dribbble = get_theme_mod('social_dribbble_link', '#')) : ?>
                               <a href="<?php echo esc_url($dribbble); ?>" target="_blank"><i class="fa fa-dribbble fa-lg"></i></a>
                           <?php endif; ?>
                       </div>
                   </div>

               </div>
           </div>
       </div>
       <a href="#" id="back-to-top"></a>
   </footer>
   <!-- footer close -->

   </div>
   </div>
   </div>
   </div>

   <?php wp_footer(); ?>
   </body>

   </html>