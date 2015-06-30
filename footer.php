

<div class="location container-fluid">

        		<div class="container">

                <div class="loction_map pull-left col-md-8">

                	<h3>Location</h3>

         			 

                     <iframe width="100%" height="235" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo urlencode(get_option_tree( 'address')); ?>&output=embed"></iframe>

                     <!--<img src="<?php echo get_template_directory_uri(); ?>/img/map_img.jpg" class="img-responsive" alt="">-->

                     

                </div>

                

                <div class="usefull_lnks pull-left col-md-4">

                		<h3>Useful Links</h3>	

                        <?php  wp_nav_menu(array('menu'=>'Main Menu','menu_class' => 'footer_menu col-md-8 pull-left')); ?>
                       
<!--
						<ul>
							<li><a rel="nofollow" target="_blank" href="#">Facebook</a>
							<li><a rel="nofollow" target="_blank" href="#">Youtube</a>
						</ul>
-->

                		

                </div>

                

                <div class="col-md-4 news_letter">

               		<h3>Newsletter</h3> 

                    <p>Suscribe to our ahasellus sit 

amet justo sapien and raesent 

bibendum you will get nim non 

fringilla vestibulum.</p>

					<form action="#">

                    	<input type="text" name="your_name" placeholder="Your Name" id="">

                        <input type="text" name="your_email" placeholder="Your Email" id="">

                    </form>	

                    

                    <a href="" class="read_more">Read More</a>

                </div> 

               </div> 

        </div>





			<!-- footer -->

			<footer class="container-fluid footer">

        	<div class="container">

            		<a href="" class="col-md-3 pull-left"><img class="footer_logo_img" src="<?php echo get_template_directory_uri(); ?>/img/footer_logo.png" alt=""></a>

                    <p class="col-md-10 copy_right pull-right">&copy; <a href="http://trainingyourbody.com">Training your Body</a> |    Design: <a href="https://www.wodumedia.com" target="_blank">Wodu Media</a> Hosting: <a href="https://www.keywestwebdesign.com" target="_blank">Key West Web Design</a></p>

            </div>

        </footer>

			<!-- /footer -->



		</div>

		<!-- /wrapper -->



		<?php wp_footer(); ?>

	</body>

</html>

