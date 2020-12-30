<?php
/*
* Template Name: Full Width (Home)
*/

get_header(); 

// Banner
$banner_heading = get_field('banner_heading');
$banner_image  = get_field('banner_image');
// Banner


// Our Service 
$our_service_heading  = get_field('our_service_heading');
$our_service  = get_field('our_service');
// Our Service 

// Video 
$show_or_hide_video = get_field('show_or_hide_video');
$video_testimonial = get_field('video_testimonial_heading');
$video_url  = get_field('video_url');
// Video


// Technologies
$technologies_heading = get_field('technologies_heading');
$top_row_technology = get_field('top_row_technology');
$bottom_row_technology = get_field('bottom_row_technology');

// Technologies

// Our Process
$process_heading = get_field('process_heading');
$process  = get_field('process');
// Our Process

?>

<section class="top-intro-wrap">
   <div class="container-fluid">
      <div class="top-intro-img-wrapper">
        <?php if (!empty($banner_heading)) 
		{ 
		echo $banner_heading; 
		}
		 if (!empty($banner_image)) 
		{ ?>
				<img src="<?php echo $banner_image; ?>" class="desc_img">
		<?php }?>
     	</div>
   </div>
</section>





<div class="Services-bg-img">
   <section class="OurService_wrapper" id="our-services">
      	<div class="container">
			<h3 class="title">
			<?php if (!empty($our_service_heading)) 
			{ 
			echo $our_service_heading; 
			}?>
			</h3>
			<?php if($our_service) 
			{ $p = 0; ?>
			<div class="services_list res-display-none">
			<?php 
			foreach($our_service as $service_o) 
			{
			$service_title = $service_o['service_title'];
			$service_image = $service_o['service_image'];
			?>
			<div class="service-box">
               <div class="service_item">
                <?php if (!empty($service_image)) 
				{ ?>
				<img src="<?php echo $service_image; ?>" class="service-img">
				<?php }?>
                 <p class="service-text">
						<?php if (!empty($service_title)) 
						{ 
						echo $service_title; 
						}?>
                 </p>
               </div>
            </div>
			<?php $p++; }  ?>
			</div>
			<?php } ?>
         </div>
         
         <div class="services_list res-display-block" id="serviceslider" style="display:none;">
            <div class="owl-carousel owl-theme owl-loaded owl-drag">
               <div class="owl-stage-outer">
                  <div class="owl-stage" style="transition: all 0s ease 0s;">
                     
					<?php if($our_service) 
					{ $p = 0; ?>

					<?php 
					foreach($our_service as $service_o) 
					{
					$service_title = $service_o['service_title'];
					$service_image = $service_o['service_image'];
					?>
					<div class="owl-item">
					<div class="service-box">
					<div class="service_item">
					<?php if (!empty($service_image)) 
					{ ?>
					<img src="<?php echo $service_image; ?>" class="service-img">
					<?php }?>
					<p class="service-text">
					<?php if (!empty($service_title)) 
					{ 
					echo $service_title; 
					}?>
					</p>
					</div>
					</div>
					</div>
					<?php $p++; }  ?>

					<?php } ?>

               </div>
               <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
               <div class="owl-dots disabled"></div>
            </div>
         </div>
      </div>
   </section>
   <section class="technologies_wrapper" id="technology">
      <div class="container">
         <h3 class="title">
         	<?php if (!empty($technologies_heading)) 
			{ 
			echo $technologies_heading; 
			}?>
         </h3>
         <div class="table_wrap res_table_desktop">
            <table class="tech-tbl">
               <tbody>
	                 <?php if($top_row_technology) 
						{ $p = 0; ?> 
						<tr class="row-1">
						<?php 
						foreach($top_row_technology as $top) 
						{
						$technology_top_image = $top['technology_top_image'];
						?>
									<td> 
										<?php if (!empty($technology_top_image)) 
										{ ?>
										<img src="<?php echo $technology_top_image; ?>">
										<?php }?>
									</td>
									<td class="blank"> </td>
						<?php $p++; }  ?>
						</tr>
						<?php } ?>	


						<?php if($bottom_row_technology) 
						{ $p = 0; ?> 
						<tr class="row-2">
						<?php 
						foreach($bottom_row_technology as $bottom) 
						{
						$technology_bottom_image = $bottom['technology_bottom_image'];
						?>
									<td> 
										 
										<?php if (!empty($technology_bottom_image)) 
										{ ?>
										<img src="<?php echo $technology_bottom_image; ?>">
										<?php }?>
									</td>
									<td class="blank"> </td>
						<?php $p++; }  ?>
						</tr>
						<?php } ?>	

                  
               </tbody>
            </table>
         </div>
         
         
   </section>
</div>
<section class="idx-our-process-wrap" id="our-process">
   <div class="container">
      <h3 class="title">Our Process</h3>
      <div class="row bunch-box-wrap">
         	<?php if($process) 
			{ $p = 0; ?>
			<?php 
			foreach($process as $pr) 
			{
			$process_image = $pr['process_image'];
			$process_label = $pr['process_label'];
			?>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			<div class="process-box-wrap">
				<div class="icon-wrapper">
				<?php if (!empty($process_image)) 
				{ ?>
				<img src="<?php echo $process_image; ?>">
				<?php }?>
				</div>
				<h4 class="title">
				<?php if (!empty($process_label)) 
				{ 
				echo $process_label; 
				}?>                   
				</h4>
				
			</div>
			</div>
			<?php $p++; }  ?>
			<?php } ?>
		</div>
   </div>
</section>
<section class="idx-contact-us-wrap" id="contact-us">
   <div class="container">
      <h3 class="title">Contact us</h3>
      <div class="form-wrapper">
         <div role="form" class="wpcf7" id="wpcf7-f69-o1" lang="en-US" dir="ltr">
            <div class="screen-reader-response" role="alert" aria-live="polite"></div>
            	<?php echo do_shortcode( '[contact-form-7 id="70" title="Contact form 1"]' );?>
         </div>
      </div>
   </div>
</section>
<script>jQuery('#serviceslider .owl-carousel').owlCarousel({
autoplay:false,
loop:true,
item:5,
nav:false,
center:true,
dots:false,
margin:10,
responsive:{
0:{
items:2
},
768:{
items:4
},
992:{
items:4
}}
});
</script>
<?php
get_footer();
?>