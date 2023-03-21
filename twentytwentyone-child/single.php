<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package TwentyTwentyOneChild
 * 
 */

get_header(); 

//the_post();

// $query = new WP_Query( array( 'post_type' => 'classes') );
// The Loop
//  if( $query->have_posts() ) {
//              $query->the_post();

?>


	<div id="primary" class="content-area">
        
		<main id="main" class="site-main" role="main">

                <!--Middle Part of 3 main dives HTML starts here----------------------------------------------->

                <div class="outerMiddle">
        <div class="middle">

            <div class="main">

                <div class="large">
                    
                    <p><?php the_title(); ?></p>
                    <div class="small">
                        <span class="davidWillam"><svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 0C4.98 0 0.5 4.48 0.5 10C0.5 15.52 4.98 20 10.5 20C16.02 20 20.5 15.52 20.5 10C20.5 4.48 16.02 0 10.5 0ZM10.5 3C12.16 3 13.5 4.34 13.5 6C13.5 7.66 12.16 9 10.5 9C8.84 9 7.5 7.66 7.5 6C7.5 4.34 8.84 3 10.5 3ZM10.5 17.2C8 17.2 5.79 15.92 4.5 13.98C4.53 11.99 8.5 10.9 10.5 10.9C12.49 10.9 16.47 11.99 16.5 13.98C15.21 15.92 13 17.2 10.5 17.2Z" fill="#00ACB4"/>
                            </svg>
                            <?php  echo get_post_meta( get_the_ID(), 'courseTrainer', true ); ?></span>
                        <span class="fiction"><?php  echo get_post_meta( get_the_ID(), 'courseGenre', true ); ?></span>
                        <span class="advanced"><?php  echo get_post_meta( get_the_ID(), 'courseLevel', true ); ?></span>
                    </div>

                </div>



                <div class="memberNonmember1">
                    
                    <div class="memberNonmember2">
                        <div class="signupMainDiv">                        
                            <div class="signupInnerDiv">
                                <div class="columnDiv firstColumnDiv">
                                    <div class="numberDiv">$<?php  echo get_post_meta( get_the_ID(), 'memberfees', true ); ?></div>
                                    <div class="textDiv">Member</div>
                                </div>
                                <hr class="hrTag">
                                <div class="columnDiv">
                                    <div class="numberDiv">$<?php  echo get_post_meta( get_the_ID(), 'nonmemberfees', true ); ?> </div>
                                    <div class="textDiv">Non-Member</div>
                                </div>

                            </div>
                            <div class="signupBtnDiv"><button id="signupButtonMember">Sign Up</button></div>
                        </div>
                        
                        <div id="reducedButton"><button id="reducebtn">Apply for reduced-rate spot </button></div>
<!--                         
                        <span class="memberNonmber3" >200 Member | $150 Non-Member<button id="signupButtonMember">Sign Up</button></span>
                         -->


                    </div>
                  
                </div>

                
                <div class="schedule">
                    
                    <div class="datetimeLarge2">
                        <span class="imagePaddingTop">
                            <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.0459 3.25H12.9521V1.60938C12.9521 1.07617 13.3623 0.625 13.9365 0.625C14.4697 0.625 14.9209 1.07617 14.9209 1.60938V3.25H16.5615C17.9971 3.25 19.1865 4.43945 19.1865 5.875V19C19.1865 20.4766 17.9971 21.625 16.5615 21.625H3.43652C1.95996 21.625 0.811523 20.4766 0.811523 19V5.875C0.811523 4.43945 1.95996 3.25 3.43652 3.25H5.07715V1.60938C5.07715 1.07617 5.4873 0.625 6.06152 0.625C6.59473 0.625 7.0459 1.07617 7.0459 1.60938V3.25ZM2.78027 10.7969H6.06152V8.5H2.78027V10.7969ZM2.78027 12.7656V15.3906H6.06152V12.7656H2.78027ZM8.03027 12.7656V15.3906H11.9678V12.7656H8.03027ZM13.9365 12.7656V15.3906H17.2178V12.7656H13.9365ZM17.2178 8.5H13.9365V10.7969H17.2178V8.5ZM17.2178 17.3594H13.9365V19.6562H16.5615C16.8896 19.6562 17.2178 19.3691 17.2178 19V17.3594ZM11.9678 17.3594H8.03027V19.6562H11.9678V17.3594ZM6.06152 17.3594H2.78027V19C2.78027 19.3691 3.06738 19.6562 3.43652 19.6562H6.06152V17.3594ZM11.9678 8.5H8.03027V10.7969H11.9678V8.5Z" fill="#DC3636"/>
                            </svg>
                        </span>

                        <span class="imagePaddingLeft"><span class="cancellationBold"><?php  echo get_post_meta( get_the_ID(), 'startingDate', true ); ?>  - <?php  echo get_post_meta( get_the_ID(), 'endingDate', true ); ?> </span><span class="orange">(5 Wednsedays)</span><br>  10:00am - 4:00pm (PST)</span>

                    </div>


                    <div class="addressLarge2">
                        <hr>
                        <span class="imagePaddingTop"><svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 0.161255C3.8 0.161255 0 3.38125 0 8.36125C0 11.5413 2.45 15.2813 7.34 19.5913C7.72 19.9213 8.29 19.9213 8.67 19.5913C13.55 15.2813 16 11.5413 16 8.36125C16 3.38125 12.2 0.161255 8 0.161255ZM8 10.1613C6.9 10.1613 6 9.26126 6 8.16125C6 7.06125 6.9 6.16125 8 6.16125C9.1 6.16125 10 7.06125 10 8.16125C10 9.26126 9.1 10.1613 8 10.1613Z" fill="#DC3636"/>
                            </svg>
                            </span>
                        <span class="imagePaddingLeft"><?php  echo get_post_meta( get_the_ID(), 'address', true ); ?></span>
                    </div>

                    
                    <div class="timeRegLarge2">
                        <hr>
                        <span class="imagePaddingTop"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 0C4.5 0 0 4.5 0 10C0 15.5 4.5 20 10 20C15.5 20 20 15.5 20 10C20 4.5 15.5 0 10 0ZM14.2 14.2L9 11V5H10.5V10.2L15 12.9L14.2 14.2Z" fill="#DC3636"/>
                            </svg>
                            </span>
                        <span class="imagePaddingLeft"><span class="cancellationBold">Registration deadline:   </span><br> <?php  echo get_post_meta( get_the_ID(), 'regDeadline', true ); ?>(PST)</span>
                    </div>

                </div>

            </div>


            <div class="mainMiddle" >
                <div class="part1">
                    <p>
                    <?php the_content(); ?>    
               
                    </p>
            

                    <div class="socialShare">
                        <span class="cancellationBold" id="shareBold">Share  </span>

                        <span>
                            <a href="<?php  echo get_post_meta( get_the_ID(), 'facebook_url', true ); ?>" target="_blank">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.png" height="25px" class="img1">
                            </a>
                                
                        </span>  
                        <span>
                            <a href="<?php  echo get_post_meta( get_the_ID(), 'twitter_url', true ); ?>" target="_blank">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter.png" height="25px" class="img1">
                            </a>
                        </span> 
                        <span>
                            <a href="<?php  echo get_post_meta( get_the_ID(), 'linkedin_url', true ); ?>" target="_blank">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linkedin.png" height="25px" class="img1">
                            </a>
                        </span>  

                        <span>
                            <a href="<?php  echo get_post_meta( get_the_ID(), 'other_url', true ); ?>" target="_blank">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/download.jpeg" height="25px" class="img1">
                            </a>
                        </span>  

                    </div>

                    <hr>

                    <div class="classSchedule1">
                        <h1 class="classSchedule2">Class Schedule</h1>
                        <span><span class="cancellationBold">Time:</span> <span class="classSchedule1TimeSpan">10:30am - 4:00pm(PST)</span></span>
                        <div class="tueGrid">
                            <label><span class="cancellationBold">Dates: </span></label>
                            <div class="tue">Tue 6/15</div>
                            <div class="tue">Tue 6/20</div>
                            <div class="tue">Tue 6/24</div>
                            <div class="tue">Tue 6/20</div>    
                            <div class="tue">Tue 6/24</div>
                        </div>
                    </div>

                </div>
                

                <div class="part2image">
                    <div class="roundImg">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/girl.jpeg"/>
                    </div>
                    <br>
                    <div class="imageArticle">
                        <p><span class="colorLinkAndJohn">John Doe </span>, MFA, writes fiction and nonfiction with a special emphasis on the power of place. Her work has been anthologized and published in venues such as Atlas Obscura, The Los Angeles Times, The Sun, and Best Women’s Travel Writing. She loves to see her students surprise and delight themselves (and others!), whether she’s teaching at City University of New York, the San Francisco Women’s Jail, or The Writing Salon. After many years of living abroad (from Oaxaca to Quito to San Jose, Costa Rica), she now lives in San Francisco. She is also the author of Living Abroad in Costa Rica.</p>
                    
                        <div class="johnReview">See John's review</div>
                    </div>
                </div>
            
                <br>
            
                <div class="backImage">
                    <div class="arrowDiv"> 
                        <span class="arrow"><</span>
                        <!-- <img src="./left-arrow-angle-svgrepo-com.svg" > -->
                    </div>

                    <div class="slideTextDiv">
                        <div class="slidetext1">
                            <div class="qoute1">
                                <svg width="47" height="34" viewBox="0 0 47 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M46.6 3.9C46.6 2.1 45.5 0.499996 42.8 0.499996C39.1 0.499996 34.6 2.3 31.6 5.3C27.9 9 25.7 14.4 25.7 21.7V22.1C25.7 29 29 33.3 34.6 33.3C39.6 33.3 42.9 29.8 42.9 25.1V24.9C42.9 20.6 39.4 17.6 35.9 16.7C35.7 11.9 38.5 8.4 43.6 7.2C45.3 6.8 46.6 5.69999 46.6 3.9ZM21.2 3.9C21.2 2.1 20.1 0.499996 17.4 0.499996C13.7 0.499996 9.2 2.3 6.2 5.3C2.5 9 0.3 14.4 0.3 21.7V22.1C0.3 29 3.6 33.3 9.2 33.3C14.2 33.3 17.5 29.8 17.5 25.1V24.9C17.5 20.6 14 17.6 10.5 16.7C10.3 11.9 13.1 8.4 18.2 7.2C19.9 6.8 21.2 5.69999 21.2 3.9Z" fill="#00ACB4"/>
                                </svg>
                            </div>  
                            
                            <div class="slideText2">
                                <span>Erin was a wonderful teacher. She was personable, kind, organized, and great with facilitating group discussion.
                                <p>Katy L.</p></span>
                            </div>
                            
                            <div class="qoute1">
                                <svg width="47" height="34" viewBox="0 0 47 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.4 29.8C0.4 31.6 1.5 33.2 4.2 33.2C7.9 33.2 12.4 31.4 15.4 28.4C19.1 24.7 21.3 19.3 21.3 12V11.6C21.3 4.7 18 0.399997 12.4 0.399997C7.4 0.399997 4.1 3.9 4.1 8.6V8.8C4.1 13.1 7.6 16.1 11.1 17C11.3 21.8 8.5 25.3 3.4 26.5C1.7 26.9 0.4 28 0.4 29.8ZM25.8 29.8C25.8 31.6 26.9 33.2 29.6 33.2C33.3 33.2 37.8 31.4 40.8 28.4C44.5 24.7 46.7 19.3 46.7 12V11.6C46.7 4.7 43.4 0.399997 37.8 0.399997C32.8 0.399997 29.5 3.9 29.5 8.6V8.8C29.5 13.1 33 16.1 36.5 17C36.7 21.8 33.9 25.3 28.8 26.5C27.1 26.9 25.8 28 25.8 29.8Z" fill="#00ACB4"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    <div class="arrowDiv">
                        <span class="arrow">></span>
                        <!-- <img src="./right-arrow-svgrepo-com.svg" class="arrow"> -->
                    </div>
                
                </div>
            </div>

            <div class="thirdMain">
                <span id="thirdMainHeading">Similar Classes</span>
                
                <div id="learnMoreDiv">
                    <div class="thirdM1">
                        <span><?php the_title(); ?>
                        <p class="orange">Learn More ></p>
                        </span>
                    </div>

                    <div class="thirdM1">
                        <span><?php the_title(); ?>
                            <p class="orange">Learn More ></p>
                        </span>
                    </div>

                    <div class="thirdM1">
                        <span><?php the_title(); ?>
                            <p class="orange">Learn More ></p>
                        </span>
                    </div>
                </div>
            </div>

        </div>
        </div>
        
        <!--Middle Part of 3 main dives HTML ends here----------------------------------------------->

        <div class="outerMiddleBelow">

        <div class="middle">
        <!--About the remote classes HTML starts here----------------------------------------------->
        <div class="aboutRemoteClass">
            
            <p>About the Remote Classes</p>

            <span><span id="cancellationText">
                <?php  echo get_post_meta( get_the_ID(), 'about_the_remote_classes', true ); ?>
            </span>
            <div class="AboutAndQuestion">
                <div class="orange">Learn About Our Clsses > </div>
                <div class="orange">Questions? See FAQ > </div>
            </div>


            <hr>
        </div>
        <!--About the remote classes HTML ends here----------------------------------------------->


        <!--About the remote classes HTML starts here----------------------------------------------->
        <div class="cancelationPolicy">
    
            <p id="headingCancellation">Cancelation Policy</p>
            <span id="cancellationText">
                <?php  echo get_post_meta( get_the_ID(), 'cancelation_policy', true ); ?>
            </span>
            
            <div class="aboutCancelation">
                <div class="cancellation">
                    <p class="orange">10 days or more</p>
                    <span>
                        <?php  echo get_post_meta( get_the_ID(), 'days10', true ); ?>
                    </span>
                </div>


                <div class="cancellation">
                    <p class="orange">3-9 days </p>
                    <span>
                    <?php  echo get_post_meta( get_the_ID(), 'days3_9', true ); ?>
                    </span>
                </div>


                <div class="cancellation">
                    <p class="orange">2 days or less</p>
                    <span>
                        <?php  echo get_post_meta( get_the_ID(), 'days2', true ); ?>
                    </span>
                </div>

                <div class="cancellation">
                    <p class="orange">On the day or after</p>
                    <span>
                        <?php  echo get_post_meta( get_the_ID(), 'day_after1', true ); ?>
                    </span>
                </div>
                
            </div>

        </div>
        </div>
        </div>
        <!--About the remote classes HTML ends here----------------------------------------------->





		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>



		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

        
    /* Restore original Post Data */
    wp_reset_postdata();
    // } 

?>

<?php get_footer(); ?>