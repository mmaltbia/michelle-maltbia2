<?php get_header(); 
	$content = get_post();
	if ( has_post_thumbnail()){
		$thumb_id = get_post_thumbnail_id();
		$image = wp_get_attachment_url($thumb_id);
		$comments = get_comments(array(
		       'post_id' => $post->ID));
		  
?>
<div class="container-fluid" data-parallax="scroll" data-image-src="<?php echo $image ?>" style="position: relative; height: 500px; width: 100%; background-size: cover;">
	<div class="dark"></div>
	<div class="row">
		<div class="col-xs-12" style="position: absolute; float: left; top: 40%; color: #fff; z-index: 2;">
			<h1 class="col-xs-6 col-xs-offset-3 text-center white-text"><?php echo the_title(); ?></h1>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row row2">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
			<?php 
				the_title( '<h2 class="text-center" style="text-transform: uppercase;">', '</h2>' ); 
			?>
			<br>
			<br>	
			<p style="line-height: 2;"><?php echo $content->post_content ?></p>
			<div class="social text-center">
		    	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 49.652 49.652" style="enable-background:new 0 0 49.652 49.652; fill: #525252; margin: 5px;" xml:space="preserve">
			    	<g>
			    		<g>
			    			<path d="M24.826,0C11.137,0,0,11.137,0,24.826c0,13.688,11.137,24.826,24.826,24.826c13.688,0,24.826-11.138,24.826-24.826
			    				C49.652,11.137,38.516,0,24.826,0z M31,25.7h-4.039c0,6.453,0,14.396,0,14.396h-5.985c0,0,0-7.866,0-14.396h-2.845v-5.088h2.845
			    				v-3.291c0-2.357,1.12-6.04,6.04-6.04l4.435,0.017v4.939c0,0-2.695,0-3.219,0c-0.524,0-1.269,0.262-1.269,1.386v2.99h4.56L31,25.7z
			    				"/>
			    		</g>
			    	</g>
		    	</svg>
		    	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
		    		 width="30px" height="30px" viewBox="0 0 49.652 49.652" style="enable-background:new 0 0 49.652 49.652; fill: #525252; margin: 5px;"
		    		 xml:space="preserve">
		    	<g>
		    		<g>
		    			<path d="M24.826,0C11.137,0,0,11.137,0,24.826c0,13.688,11.137,24.826,24.826,24.826c13.688,0,24.826-11.138,24.826-24.826
		    				C49.652,11.137,38.516,0,24.826,0z M35.901,19.144c0.011,0.246,0.017,0.494,0.017,0.742c0,7.551-5.746,16.255-16.259,16.255
		    				c-3.227,0-6.231-0.943-8.759-2.565c0.447,0.053,0.902,0.08,1.363,0.08c2.678,0,5.141-0.914,7.097-2.446
		    				c-2.5-0.046-4.611-1.698-5.338-3.969c0.348,0.066,0.707,0.103,1.074,0.103c0.521,0,1.027-0.068,1.506-0.199
		    				c-2.614-0.524-4.583-2.833-4.583-5.603c0-0.024,0-0.049,0.001-0.072c0.77,0.427,1.651,0.685,2.587,0.714
		    				c-1.532-1.023-2.541-2.773-2.541-4.755c0-1.048,0.281-2.03,0.773-2.874c2.817,3.458,7.029,5.732,11.777,5.972
		    				c-0.098-0.419-0.147-0.854-0.147-1.303c0-3.155,2.558-5.714,5.713-5.714c1.644,0,3.127,0.694,4.171,1.804
		    				c1.303-0.256,2.523-0.73,3.63-1.387c-0.43,1.335-1.333,2.454-2.516,3.162c1.157-0.138,2.261-0.444,3.282-0.899
		    				C37.987,17.334,37.018,18.341,35.901,19.144z"/>
		    		</g>
					</g>
		    	</svg>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid" style="background-color: #525252; color: #fff;">
	<div class="row row2">
		<div class="comments col-xs-10 col-xs-offset-1">
		<?php 
		comments_template();
		?>
		</div>
	</div>
</div>
<?php 
	}

get_footer(); ?>