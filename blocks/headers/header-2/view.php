<?php
	$slide_num = 0;
?>
<header id="<?php echo $id; ?>" class="op-section header header-2">

	<div class="navbar navbar-static-top" <?php echo ($settings['sticky_nav']) ? 'data-spy="affix"' : '';?> data-offset-top="80">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-<?php echo $id; ?>">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php echo site_url(); ?>">
				<?php if($contents['logo']) :?>
					<img class="img-responsive" src="<?php echo $contents['logo']?>" alt="<?php wp_title(); ?>">
				<?php else : ?>
					<?php wp_title(); ?>
				<?php endif; ?>
		      </a>
		    </div>


		    <!-- Menu -->
		    <nav class="collapse navbar-collapse" id="nav-<?php echo $id; ?>">

			    <?php if( $settings['cta']): ?>
			    	<!-- Navbar button -->
	            	<a href="<?php echo $settings['cta']?>" class="btn navbar-btn navbar-right"><?php echo $settings['cta_text']?></a>
		    	<?php endif; ?>

		    	<?php wp_nav_menu(array(
	                'menu' =>$contents['menu'] ,
	                'menu_class'=>'nav navbar-nav navbar-right',
	                'container' =>false,
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker()
	            )) ?>
		    </nav>
		</div>
	</div>
	<!-- Navbar end -->

	<div id="slide-<?php echo $id ?>" class="carousel slide" data-ride="carousel">

		<?php if(count($contents['sliders']) > 1): // Indicator will only show when more then one item publish?>
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<?php for($i = 0; $i < count($contents['sliders']); $i++): ?>
			<li data-target="#slide-<?php echo $id ?>" data-slide-to="<?php echo $i;?>" class="<?php echo ($i === 0) ? 'active' : ''?>"></li>
			<?php endfor;?>
		</ol>
		<?php endif; ?>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">

			<?php foreach($contents['sliders'] as $slide): ?>
			<div class="item <?php echo ($slide_num === 0) ? 'active' : ''?>">
				<div class="container">
					<div class="carousel-caption">
						<div class="row">
							<div class="col-sm-7">
								<div class="pad-right-big">
									<?php if($slide['title']):?>
									<h2 class="title <?php echo $settings['title_transformation']?> "><?php echo $slide['title']?></h2>
									<?php endif; ?>

									<?php if($slide['description']):?>
									<p class="desc"><?php echo $slide['description']?></p>
									<?php endif; ?>

									<?php if($slide['link']): ?>
									<p><a class="btn btn-lg btn-primary" href="<?php echo $slide['link']?>"><?php echo $slide['link_text']?></a></p>
									<?php endif; ?>
								</div>
							</div>
							<div class="col-sm-5">
								<?php if($slide['image']):?>
									<a class="popup-video" href="<?php echo $slide['video_url']?>">
										<img class="img-responsive" src="<?php echo $slide['image']?>" alt="<?php echo $slide['title']?>">
									</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $slide_num++; endforeach; ?>
		</div>

	</div>

</header>

<script type="text/javascript">
  jQuery(document).ready(function() {
    jQuery('.header-2 .popup-video').magnificPopup({
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false
    });
  });
</script>
