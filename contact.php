<?php
/* Template Name: Contact */
?>


<?php get_header(); ?>

<div id="main" class="col-lg-9 col-md-12 offset-lg-3 offset-md-0">

    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact</h1>
                    <ul class="crumb">
                        <li><a href="index.html">Accueil</a></li>
                        <li class="sep">/</li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <div id="content" class="nopadding">

        <div class="map-container map-fullwidth">
        ..
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254.26616676657042!2d10.755142722421125!3d34.74267414567489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1301d2d5f75e9d31%3A0x740f60bc1db9da2a!2sOlfa%20Palace%2C%20Sfax!5e1!3m2!1sen!2stn!4v1733929506840!5m2!1sen!2stn" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

    </div>

    <section id="section-content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12">
                    <h3>Send Us Message</h3>
                    <form name="contactForm" id='contact_form' method="post" action='email.php'>
                        <div class="row">
                            <div class="col-md-5">
                                <div id='name_error' class='error'>Please enter your name.</div>
                                <div>
                                    <input type='text' name='name' id='name' class="form-control" placeholder="Your Name">
                                </div>

                                <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                <div>
                                    <input type='text' name='email' id='email' class="form-control" placeholder="Your Email">
                                </div>

                                <div id='phone_error' class='error'>Please enter your phone number.</div>
                                <div>
                                    <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div id='message_error' class='error'>Please enter your message.</div>
                                <div>
                                    <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <p id='submit'>
                                    <input type='submit' id='send_message' value='Submit Form' class="btn btn-line">
                                </p>
                                <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="sidebar" class="col-md-4">

                    

                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>