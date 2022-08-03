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
					<ul class="tabs cell small-12 grid-x align-middle align-center amethyst-bg"  data-deep-link="true" data-update-history="true" data-deep-link-smudge="true" data-deep-link-smudge-delay="500" data-deep-link-smudge-offset="200" data-tabs id="hours-tabs-<?php echo $row ;?>">
						<li><h2>Hours</h2></li>
						<li class="tabs-title<?php if($day == 'Monday'):?> is-active<?php endif;?>"><a href="#monday-hours">Mon</a></li>
						<li class="tabs-title<?php if($day == 'Tuesday'):?> is-active<?php endif;?>"><a href="#tuesday-hours">Tues</a></li>
						<li class="tabs-title<?php if($day == 'Wednesday'):?> is-active<?php endif;?>"><a href="#wednesday-hours">Wed</a></li>
						<li class="tabs-title<?php if($day == 'Thursday'):?> is-active<?php endif;?>"><a href="#thursday-hours">Thu</a></li>
						<li class="tabs-title<?php if($day == 'Friday'):?> is-active<?php endif;?>"><a href="#friday-hours">Fri</a></li>
						<li class="tabs-title<?php if($day == 'Saturday'):?> is-active<?php endif;?>"><a href="#saturday-hours">Sat</a></li>
						<li class="tabs-title<?php if($day == 'Sunday'):?> is-active<?php endif;?>"><a href="#sunday-hours">Sun</a></li>
					</ul>
					<div class="tabs-content cell small-12 text-center" data-tabs-content="hours-tabs-<?php echo $row ;?>">
						
						<div class="tabs-panel<?php if($day == 'Monday'):?> is-active<?php endif;?>" id="monday-hours">
							<div class="grid-container">
								<div class="grid-x grid-padding-x align-center">
									<?php foreach ($mon_sessions as $mon_session):?>
									<div class="cell small-12 medium-6">
										<p><?php echo $mon_session['name'];?></p>
										<p><?php echo $mon_session['hours'];?></p>
										<?php if($mon_session['note']):?>
											<p><b><?php echo $mon_session['note'];?></b></p>
										<?php endif;?>
									</div>
									<?php endforeach;?>
								</div>
							</div>
						</div>
						
						<div class="tabs-panel<?php if($day == 'Tuesday'):?> is-active<?php endif;?>" id="tuesday-hours">
							<div class="grid-container">
								<div class="grid-x grid-padding-x align-center">
									<?php foreach ($tues_sessions as $tues_session):?>
									<div class="cell small-12 medium-6">
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
									<div class="cell small-12 medium-6">
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
									<div class="cell small-12 medium-6">
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
									<div class="cell small-12 medium-6">
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
									<div class="cell small-12 medium-6">
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
									<div class="cell small-12 medium-6">
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