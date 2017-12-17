		<?php wp_footer(); ?>
		<script src="<?php bloginfo('template_url'); ?>/js/swiper.min.js" type="text/javascript"></script>
		<script>
		    

		    document.getElementById("menu-phone").addEventListener("click", function(){
		    	if ( document.getElementById("icon").classList.contains('fa-bars') ) { 
		    		document.getElementById("icon").classList.remove('fa-bars');
					document.getElementById("icon").classList.toggle('fa-times');
				}

				else {
					document.getElementById("icon").classList.remove('fa-times');
					document.getElementById("icon").classList.toggle('fa-bars');
				}
			    document.getElementById("nav").classList.toggle('show-phone-menu');
			}); 

			

  		</script>
		<footer>
			<div>BH Finance Consulting SA – Avenue Louis-Ruchonnet 15, Case postale 5436, 1002 Lausanne – +41 79 381 03 38 – <a href="mailto:info@bhfconsulting.ch">info@bhfconsulting.ch</a>
			</div>
		</footer>
	</main>
</body>
</html>