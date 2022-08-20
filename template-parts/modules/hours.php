<?php 
	$day = date('l');
	
	$row = get_row_index();
	$days = get_field('days', 'option');
	$mon_sessions = $days['monday']['sessions'];
	$tues_sessions = $days['tuesday']['sessions'];
	$wed_sessions = $days['wednesday']['sessions'];
	$thurs_sessions = $days['thursday']['sessions'];
	$fri_sessions = $days['friday']['sessions'];
	$sat_sessions = $days['saturday']['sessions'];
	$sun_sessions = $days['sunday']['sessions'];
?>

<section class="module hours">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<div class="grid-x grid-padding-x align-center">
					<div class="cell small-12 heading-tabs-wrap amethyst-bg">
						<div class="grid-x grid-padding-x align-center">
							<div class="left cell small-12 xlarge-shrink">
								<h2>Hours</h2>
							</div>
							<div class="right cell small-12 xlarge-auto">
								<ul class="tabs cell small-12 grid-x align-middle align-center transparent-bg"  data-deep-link="true" data-update-history="true" data-deep-link-smudge="true" data-deep-link-smudge-delay="500" data-deep-link-smudge-offset="200" data-tabs id="hours-tabs-<?php echo $row ;?>">
									<li class="tabs-title<?php if($day == 'Monday'):?> is-active<?php endif;?>"><a href="#monday-hours"><span>Mon</span></a></li>
									<li class="tabs-title<?php if($day == 'Tuesday'):?> is-active<?php endif;?>"><a href="#tuesday-hours"><span>Tues</span></a></li>
									<li class="tabs-title<?php if($day == 'Wednesday'):?> is-active<?php endif;?>"><a href="#wednesday-hours"><span>Wed</span></a></li>
									<li class="tabs-title<?php if($day == 'Thursday'):?> is-active<?php endif;?>"><a href="#thursday-hours"><span>Thu</span></a></li>
									<li class="tabs-title<?php if($day == 'Friday'):?> is-active<?php endif;?>"><a href="#friday-hours"><span>Fri</span></a></li>
									<li class="tabs-title<?php if($day == 'Saturday'):?> is-active<?php endif;?>"><a href="#saturday-hours"><span>Sat</span></a></li>
									<li class="tabs-title<?php if($day == 'Sunday'):?> is-active<?php endif;?>"><a href="#sunday-hours"><span>Sun</span></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="tabs-content cell small-12 text-center transparent-bg" data-tabs-content="hours-tabs-<?php echo $row ;?>">
						
						<div class="tabs-panel<?php if($day == 'Monday'):?> is-active<?php endif;?> transparent-bg" id="monday-hours">
							<div class="grid-container">
								<div class="grid-x grid-padding-x align-center">
									<?php foreach ($mon_sessions as $mon_session):?>
									<div class="cell small-6">
										<p><?php echo $mon_session['name'];?></p>
										<p><?php echo $mon_session['hours'];?></p>
										<?php if($mon_session['note']):?>
											<p><b><?php echo $mon_session['note'];?></b></p>
										<?php endif;?>
										<?php 
										$link = $mon_session['link'];
											if( $link ): 
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
											?>
										<div class="btn-wrap text-center">
											<a class="h7 color-purple" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><b><?php echo esc_html( $link_title ); ?></b></a>
										</div>
										<?php endif; ?>
									</div>
									<?php endforeach;?>
								</div>
							</div>
						</div>
						
						<div class="tabs-panel<?php if($day == 'Tuesday'):?> is-active<?php endif;?>" id="tuesday-hours">
							<div class="grid-container">
								<div class="grid-x grid-padding-x align-center">
									<?php foreach ($tues_sessions as $tues_session):?>
									<div class="cell small-6">
										<p><?php echo $tues_session['name'];?></p>
										<p><?php echo $tues_session['hours'];?></p>
										<?php if($tues_session['note']):?>
											<p><b><?php echo $tues_session['note'];?></b></p>
										<?php endif;?>
									</div>
									<?php endforeach;?>
								</div>
							</div>
						</div>
						
						<div class="tabs-panel<?php if($day == 'Wednesday'):?> is-active<?php endif;?>" id="wednesday-hours">
							<div class="grid-container">
								<div class="grid-x grid-padding-x align-center">
									<?php foreach ($wed_sessions as $wed_session):?>
									<div class="cell small-6">
										<p><?php echo $wed_session['name'];?></p>
										<p><?php echo $wed_session['hours'];?></p>
										<?php if($wed_session['note']):?>
											<p><b><?php echo $wed_session['note'];?></b></p>
										<?php endif;?>
									</div>
									<?php endforeach;?>
								</div>
							</div>
						</div>
	
						<div class="tabs-panel<?php if($day == 'Thursday'):?> is-active<?php endif;?>" id="thursday-hours">
							<div class="grid-container">
								<div class="grid-x grid-padding-x align-center">
									<?php foreach ($thurs_sessions as $thurs_session):?>
									<div class="cell small-6">
										<p><?php echo $thurs_session['name'];?></p>
										<p><?php echo $thurs_session['hours'];?></p>
										<?php if($thurs_session['note']):?>
											<p><b><?php echo $thurs_session['note'];?></b></p>
										<?php endif;?>
									</div>
									<?php endforeach;?>
								</div>
							</div>
						</div>
	
						<div class="tabs-panel<?php if($day == 'Friday'):?> is-active<?php endif;?>" id="friday-hours">
							<div class="grid-container">
								<div class="grid-x grid-padding-x align-center">
									<?php foreach ($fri_sessions as $fri_session):?>
									<div class="cell small-6">
										<p><?php echo $fri_session['name'];?></p>
										<p><?php echo $fri_session['hours'];?></p>
										<?php if($fri_session['note']):?>
											<p><b><?php echo $fri_session['note'];?></b></p>
										<?php endif;?>
									</div>
									<?php endforeach;?>
								</div>
							</div>
						</div>
									
						<div class="tabs-panel<?php if($day == 'Saturday'):?> is-active<?php endif;?>" id="saturday-hours">
							<div class="grid-container">
								<div class="grid-x grid-padding-x align-center">
									<?php foreach ($sat_sessions as $sat_session):?>
									<div class="cell small-6">
										<p><?php echo $sat_session['name'];?></p>
										<p><?php echo $sat_session['hours'];?></p>
										<?php if($sat_session['note']):?>
											<p><b><?php echo $sat_session['note'];?></b></p>
										<?php endif;?>
									</div>
									<?php endforeach;?>
								</div>
							</div>
						</div>
	
						<div class="tabs-panel<?php if($day == 'Sunday'):?> is-active<?php endif;?>" id="sunday-hours">
							<div class="grid-container">
								<div class="grid-x grid-padding-x align-center">
									<?php foreach ($sun_sessions as $sun_session):?>
									<div class="cell small-6">
										<p><?php echo $sun_session['name'];?></p>
										<p><?php echo $sun_session['hours'];?></p>
										<?php if($sun_session['note']):?>
											<p><b><?php echo $sun_session['note'];?></b></p>
										<?php endif;?>
									</div>
									<?php endforeach;?>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>