<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Donovan
 */

?>

	</div><!-- #content -->

	<?php do_action( 'donovan_before_footer' ); ?>

	<div id="footer" class="footer-wrap">

		<footer id="colophon" class="site-footer container clearfix" role="contentinfo">
				
				 <!--============================= footer =============================-->


  <footer>
    <div class="container"> 
     <div class="row footer"> 
        <div class="col-md-12"> 
          <?php dynamic_sidebar( 'sidebar-3' ); ?>
     </div> 
  

<div class="clearfix"></div><br> <div class="col-md-12"> <div 
class="text-center"> <div class="clearfix"></div><br> 
<p class="copyright wow fadeInUp text-center" style="visibility: visible; 
animation-name: fadeInUp;">
<i class="fa fa-copyright"></i> 2017-<?php echo date('Y'); ?> enlte. 
All Rights Reserved. | <a href="privacypolicy.php" 
style="color:white;">Privacy Policy </a></p> <hr style="border-top:1px 
solid #efefef"> <p class="disclaimer">We are on a mission to create a 
database of all of experiences around the world and create a location 
based small world where each and every experience is easily accessible 
to us so that we can get real time updates of good and bad experiences 
happening around us to make us socially aware and unite against social 
injustice. We give each one of us equal power to express how do you feel 
and broadcast to the nearby world using your identity or anonymously. We 
encourage you to be a part of this mission, share your experiences and 
log_in to make your nearby world a better place to live.</p> <p></p> 
</div> </div> </div> </div> 

</footer>
  
    <!--============================= footer =============================-->

				

		</footer><!-- #colophon -->
 <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" 
integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" 
crossorigin="anonymous"></script>


 
    <!-- Main CSS -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css">




	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
