
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
	  <?php $wl_theme_options = kadima_get_options(); $j=1;
			for($i=1; $i<=3; $i++){  ?>
			<?php if($wl_theme_options['slide_image_'.$i]!='') {
              			?>
        <div class="item <?php if($j==1) echo "active"; ?>">

          <img src="<?php echo esc_url($wl_theme_options['slide_image_'.$i]); ?>" class="img-responsive" alt="<?php echo esc_attr($wl_theme_options['slide_title_'.$i]); ?>">
		  <div class="container">
            <div class="carousel-caption">
			<div class="carousel-text">
				<?php if($wl_theme_options['slide_btn_text_'.$i]!='') { ?>
					<a class="kadima_blog_read_btn animated bounceInUp" href="<?php if($wl_theme_options['slide_btn_link_'.$i]!='') { echo esc_url($wl_theme_options['slide_btn_link_'.$i]); } ?>" role="button">
					<?php echo esc_attr($wl_theme_options['slide_btn_text_'.$i]); ?>
					</a>
				<?php } ?>
            </div>
			</div>
          </div>
        </div>
			<?php $j++; }  } ?>
      </div>
	  <ol class="carousel-indicators">
			<?php for($i=0; $i<$j-1; $i++) { ?>
			<li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" <?php if($i==0) { echo 'class="active"'; } ?> ></li>
			<?php } ?>
	</ol>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>