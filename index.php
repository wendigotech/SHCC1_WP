<!doctype html> 
<html <?php language_attributes(); ?>> 
    <head> 
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <meta name="description" content=""> 
        <meta name="author" content="">          
        <!-- Bootstrap core CSS -->                                             
        <!-- Custom styles for this template -->                  
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>     
    <body class="<?php echo implode(' ', get_body_class()); ?>"> 
        <!-- Navigation -->         
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav"> 
            <div class="container"> 
                <?php if ( ! has_custom_logo() ) : ?>
                    <a class="navbar-brand js-scroll-trigger" href="<?php echo esc_url( get_home_url() ); ?>"><?php bloginfo( 'name' ); ?></a>
                <?php else : ?>
                    <?php pg_starter_the_custom_logo() ?>
                <?php endif; ?> 
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> 
                    <?php _e( 'Menu', 'shcc_wp' ); ?> 
                    <i class="fa fa-bars"></i> 
                </button>                 
                <div class="collapse navbar-collapse" id="navbarResponsive"> 
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <?php wp_nav_menu( array(
                                'menu_class' => 'navbar-nav text-uppercase ml-auto',
                                'container' => '',
                                'depth' => '2',
                                'theme_location' => 'primary',
                                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                'walker' => new wp_bootstrap_navwalker()
                        ) ); ?>
                    </ul>                     
                </div>                 
            </div>             
        </nav>         
        <!-- Header -->         
        <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' ) : null; ?>
        <header class="masthead" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>;color:<?php echo '#'.get_header_textcolor() ?>;"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-6 left"> 
                        <div class="intro-text">
                            <?php _e( 'Have You Been… The Victim of Sexual Harassment?', 'shcc_wp' ); ?>
                        </div>                         
                        <div class="row intro-list"> 
                            <!-- <ul>
	          		<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Has sexual harassment caused you shame, resentment, anger or humiliation?</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Are you afraid of losing your job or future employment in your field?</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Have you endured these emotions and thoughts in the workplace through no fault of your own?</li>
				</ul>-->                             
                            <div class="col-md-1"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-arrow-orange.png"> 
                            </div>                             
                            <div class="col-md-11"> 
                                <p><?php _e( 'Has sexual harassment caused you shame, resentment, anger or humiliation?', 'shcc_wp' ); ?></p> 
                            </div>                             
                            <div class="col-md-1"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-arrow-orange.png"> 
                            </div>                             
                            <div class="col-md-11"> 
                                <p><?php _e( 'Are you afraid of losing your job or future employment in your field?', 'shcc_wp' ); ?></p> 
                            </div>                             
                            <div class="col-md-1"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-arrow-orange.png"> 
                            </div>                             
                            <div class="col-md-11"> 
                                <p><?php _e( 'Have you endured these emotions and thoughts in the workplace through no fault of your own?', 'shcc_wp' ); ?></p> 
                            </div>                             
                        </div>                         
                    </div>                     
                    <div class="col-md-6 custom-form"> 
                        <div class="row"> 
                            <div class="col-md-12"> 
                                <form class="form-horizontal" role="form"> 
                                    <fieldset> 
                                        <!-- Form Name -->                                         
                                        <div class="form-title"> 
                                            <legend>
                                                <?php _e( 'Free No Obligation Consultation', 'shcc_wp' ); ?>
                                            </legend>                                             
                                        </div>                                         
                                        <!-- Text input-->                                         
                                        <div class="form-body"> 
                                            <div class="form-group"> 
                                                <div class="col-sm-12"> 
                                                    <input type="text" placeholder="First Name *" class="form-control"> 
                                                </div>                                                 
                                            </div>                                             
                                            <!-- Text input-->                                             
                                            <div class="form-group"> 
                                                <div class="col-sm-12"> 
                                                    <input type="text" placeholder="Last Name *" class="form-control"> 
                                                </div>                                                 
                                            </div>                                             
                                            <!-- Text input-->                                             
                                            <div class="form-group"> 
                                                <div class="col-sm-12"> 
                                                    <input type="text" placeholder="Email *" class="form-control"> 
                                                </div>                                                 
                                            </div>                                             
                                            <!-- Text input-->                                             
                                            <div class="form-group"> 
                                                <div class="row"> 
                                                    <div class="col-md-6"> 
                                                        <div class="col-sm-12"> 
                                                            <input type="text" placeholder="Phone" class="form-control"> 
                                                        </div>                                                         
                                                    </div>                                                     
                                                    <div class="col-md-6"> 
                                                        <div class="col-sm-12"> 
                                                            <input type="text" placeholder="Zip code*" class="form-control"> 
                                                            <i class="zip-home-fa fa fa-info-circle" aria-hidden="true"></i> 
                                                        </div>                                                         
                                                    </div>                                                     
                                                </div>                                                 
                                            </div>                                             
                                            <!-- Text input-->                                             
                                            <div class="form-group"> 
                                                <div class="col-sm-12"> 
                                                    <input type="text" placeholder="Comments *" class="form-control"> 
                                                    <i class="comments-home-fa fa fa-info-circle" aria-hidden="true"></i> 
                                                </div>                                                 
                                            </div>                                             
                                            <a class="btn btn-primary btn-xl col-md-12" href="#services"><?php _e( 'Yes, I would like a free consultation', 'shcc_wp' ); ?></a> 
                                        </div>                                         
                                    </fieldset>                                     
                                </form>                                 
                            </div>
                            <!-- /.col-lg-12 -->                             
                        </div>
                        <!-- /.row -->                         
                    </div>                     
                </div>                 
        </header>         
        <!-- Quotation -->         
        <section class="quote"> 
            <div class="container"> 
                <div class="row centered"> 
                    <div class="col-md-1"></div>                     
                    <div class="col-md-10"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-quote.png" class="centered"> 
                        <p><?php _e( '$38,332,931 jury trial verdict for fraud, breach of fiduciary duty and professional negligence on behalf of the creator of Tae Bo, Billy Blanks, his wife Gayle Blanks, and their company, BG Star Productions, Inc. against their former law firm. Billy Blanks, et al. v. Seyfarth Shaw LLP, et al., Los Angeles Superior Court case number BC308355.', 'shcc_wp' ); ?></p> 
                    </div>                     
                    <div class="col-md-1"></div>                     
                </div>                 
            </div>             
        </section>         
        <section class="two-col"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-6 first"> 
                        <h3><?php _e( 'Together We Can Put a Stop To It', 'shcc_wp' ); ?></h3> 
                        <p><?php _e( 'Before that can happen it is very important to understand what sexual harassment is.', 'shcc_wp' ); ?></p> 
                        <p><?php _e( 'The basis for sexual harassment legal protection is Title VII of the Civil Rights Act of 1974. It is unlawful to harass a person (an applicant or employee) because of that person’s sex. Harassment can include “sexual harassment” or unwelcome sexual advances. It is also unlawful to request sexual favors. Whether it is verbal or physical, harassment of a sexual nature is unlawful.', 'shcc_wp' ); ?></p> 
                        <p><?php _e( 'Every state in the union has enacted some form of sexual harassment legislation. The model version is the one used by the federal government. Some states provide for workman’s compensation. Some allow damages for personal injury and some allow punitive damages as well.', 'shcc_wp' ); ?></p> 
                    </div>                     
                    <div class="col-md-6 second"> 
                        <h3><?php _e( 'Sexual harassment may include:', 'shcc_wp' ); ?></h3> 
                        <!--<ul>
	 					<li>The victim as well as the harasser may be a woman or a man. The victim does not have to be of the opposite sex.</li>
						<li>The harasser can be the victim’s supervisor, an agent of the employer, a supervisor in another area, a co-worker, or a non-employee.</li>
						<li>The victim does not have to be the person harassed but could be anyone affected by the offensive conduct.</li>
						<li>Unlawful sexual harassment may occur without economic injury to or discharge of the victim.</li>
						<li>The harasser’s conduct must be unwelcome.</li>
	 				</ul>-->                         
                        <div class="row"> 
                            <div class="col-md-1"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-one.png"> 
                            </div>                             
                            <div class="col-md-11"> 
                                <p><?php _e( 'The victim as well as the harasser may be a woman or a man. The victim does not have to be of the opposite sex.', 'shcc_wp' ); ?></p> 
                            </div>                             
                            <div class="col-md-1"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-two.png"> 
                            </div>                             
                            <div class="col-md-11"> 
                                <p><?php _e( 'The harasser can be the victim’s supervisor, an agent of the employer, a supervisor in another area, a co-worker, or a non-employee.', 'shcc_wp' ); ?></p> 
                            </div>                             
                            <div class="col-md-1"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-three.png"> 
                            </div>                             
                            <div class="col-md-11"> 
                                <p><?php _e( 'The victim does not have to be the person harassed but could be anyone affected by the offensive conduct.', 'shcc_wp' ); ?></p> 
                            </div>                             
                            <div class="col-md-1"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-four.png"> 
                            </div>                             
                            <div class="col-md-11"> 
                                <p><?php _e( 'Unlawful sexual harassment may occur without economic injury to or discharge of the victim.', 'shcc_wp' ); ?></p> 
                            </div>                             
                            <div class="col-md-1"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-five.png"> 
                            </div>                             
                            <div class="col-md-11"> 
                                <p><?php _e( 'The harasser’s conduct must be unwelcome.', 'shcc_wp' ); ?></p> 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
        </section>         
        <section class="help centered"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-3"></div>                     
                    <div class="col-md-6"> 
                        <h3><?php _e( 'How We Can Help', 'shcc_wp' ); ?></h3> 
                        <p><?php _e( 'If you or your loved one are in need of legal assistance concerning a potential lawsuit you should get some legal advice sooner rather than later.', 'shcc_wp' ); ?></p> 
                    </div>                     
                    <div class="col-md-3"></div>                     
                </div>                 
                <div class="row four-col"> 
                    <div class="col-md-3"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/HSCC-icon1.png"> 
                        <p class="title"><strong><?php _e( 'Case Evaluation', 'shcc_wp' ); ?></strong></p> 
                        <p><?php _e( 'A FREE, No Obligations, No Hassle, Case Evaluation.', 'shcc_wp' ); ?></p> 
                    </div>                     
                    <div class="col-md-3"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/HSCC-icon2.png"> 
                        <p class="title"><strong><?php _e( 'Consumer Care', 'shcc_wp' ); ?></strong></p> 
                        <p><?php _e( 'Personal Service, Speak Directly With A Responsible Lawyer. No Call Centers.', 'shcc_wp' ); ?></p> 
                    </div>                     
                    <div class="col-md-3"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/HSCC-icon3.png"> 
                        <p class="title"><strong><?php _e( 'Experience', 'shcc_wp' ); ?></strong></p> 
                        <p><?php _e( 'Over 100 Years Of Experience With Over $200 Million In Recovery For Victims.', 'shcc_wp' ); ?></p> 
                    </div>                     
                    <div class="col-md-3"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/HSCC-icon4.png"> 
                        <p class="title"><strong><?php _e( 'Safety', 'shcc_wp' ); ?></strong></p> 
                        <p><?php _e( 'We promise to keep you secure and anonymous.', 'shcc_wp' ); ?></p> 
                    </div>                     
                </div>                 
            </div>             
        </section>         
        <section class="mind-section"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-2"></div>                     
                    <div class="col-md-8 centered"> 
                        <h3><?php _e( 'Peace Of Mind Could Be 30 Seconds Away', 'shcc_wp' ); ?></h3>
                        <br> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-mind.png">
                        <br>
                        <br> 
                        <a class="btn btn-primary btn-xl" href="#services"><?php _e( 'Fill Out A Free Case Evaluation Form Now', 'shcc_wp' ); ?></a> 
                    </div>                     
                    <div class="col-md-2"></div>                     
                </div>                 
            </div>             
        </section>         
        <section class="footer"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-12 centered"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-logo-gray.png"> 
                        <p><?php _e( '© 2017 Sexual Harassment Claim Center.', 'shcc_wp' ); ?></p> 
                    </div>                     
                </div>                 
            </div>             
        </section>         
        <!-- Bootstrap core JavaScript -->                                    
        <?php wp_footer(); ?>
    </body>     
</html>