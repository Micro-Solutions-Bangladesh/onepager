<?php
	$items = array_chunk($contents['items'], 3);
	$animation = ($settings['animation']) ? $settings['animation'] : '';
?>
<section id="<?php echo $id; ?>" class="op-section team-1">
	<div class="container">
		
		<h1 class="section-title text-center <?php echo $settings['title_transformation']?>"><?php echo $contents['title']?></h1>

		<?php foreach( $items as $teams ) :?>
			<div class="row">
				<?php foreach( $teams as $team ) :?>
				<div class="col-md-4 wow <?php echo $animation ?>">
					<figure class="overlay overlay-hover">
						<img src="<?php echo $team['image']?>" alt="<?php echo $team['title']?>" />
						<figcaption class="overlay-panel overlay-background overlay-<?php echo $settings['overlay_animation']?> flex flex-center flex-middle text-center">
							<div>
								<h3 class="title"><?php echo $team['title']?></h3>
								<p class="designation"><?php echo $team['designation']?></p>
								<div class="social-links">
								<?php foreach($team['social'] as $social):?>
									<a class="icon" href="<?php echo $social?>" target="_blank"></a>
								<?php endforeach;?>
								</div>
							</div>
						</figcaption>
					</figure>
				</div>
				<?php endforeach; ?>
			</div>
		<?php endforeach; ?>

	</div>
</section>