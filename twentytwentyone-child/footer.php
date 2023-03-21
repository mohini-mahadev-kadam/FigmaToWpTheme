<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Espied
 */
?>


        <!--Footer HTML starts here--------------------------------------------------------------->


        <div class="outerFooter">
            <footer class="footerFlex">
                <div id="footer1">
                    <br><br><br>
                    Who We Are   /    Gift A Class       /    Membership     /    Refund Policy   /    FAQ   
                </div>

                <div id="footer2">
                    <div class="latestNews"><div style="width: 77%;">Get Our Lastest News</div></div><br>
                    <div class="inputAndSubscribe"><input type="text" placeholder="Enter your email" class="subscribeinput"><span><button class="subscribeinputbtn">Subscribe</button></span></input></div>
                </div>

                <div id="footer3">
                    <span class="footerContact">Contact</span>
                    <span class="orange orange1">2035 Sunset Lake Road, Suite B-2, Newark, Delaware, 19702</span>
                    <span><span class="orange orange1">Office Phone:</span> (510) 987-6543    <span class="orange orange1"> Email:</span> hello@wisdmlabs.com </span>
                </div>

                <div class="socialFooter" id="footer4">
                    
                    
                    <img  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitterorange.png"  class="img1 img2">
                
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebookOrange.png" height="25px" class="img1">
                    
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.png" height="25px" class="img1">

                </div>

                <div id="footer5">&#169; 2022 All rights reserved.</div>
                <div id="footer6">Privacy & Terms</div>

            </footer>
        </div>

    
        <!--Footer HTML ends here--------------------------------------------------------------->


    <?php wp_footer(); ?>

</body>
</html>