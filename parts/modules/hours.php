<?php 
	$day = date('w');
	
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
					
					<ul class="tabs cell small-12 grid-x align-middle align-center" data-tabs id="hours-tabs-<?php echo $row ;?>">
						<li class="tabs-title"><h2>Hours</h2></li>
						<li class="tabs-title<?php if($day == 2):?> is-active<?php endif;?>"><a href="#day-monday">Mon</a></li>
						<li class="tabs-title<?php if($day == 3):?> is-active<?php endif;?>"><a href="#day-tuesday">Tues</a></li>
						<li class="tabs-title<?php if($day == 4):?> is-active<?php endif;?>"><a href="#day-wednesday">Wed</a></li>
						<li class="tabs-title<?php if($day == 5):?> is-active<?php endif;?>"><a href="#day-thursday">Thu</a></li>
						<li class="tabs-title<?php if($day == 6):?> is-active<?php endif;?>"><a href="#day-friday">Fri</a></li>
						<li class="tabs-title<?php if($day == 0):?> is-active<?php endif;?>"><a href="#day-saturday">Sat</a></li>
						<li class="tabs-title<?php if($day == 1):?> is-active<?php endif;?>"><a href="#day-sunday">Sun</a></li>
					</ul>
					<div class="tabs-content cell small-12 text-center" data-tabs-content="hours-tabs-<?php echo $row ;?>">
						
						<div class="tabs-panel<?php if($day == 2):?> is-active<?php endif;?>" id="day-monday">
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
						
						<div class="tabs-panel<?php if($day == 3):?> is-active<?php endif;?>" id="day-tuesday">
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
						
						<div class="tabs-panel<?php if($day == 4):?> is-active<?php endif;?>" id="day-wednesday">
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
	
						<div class="tabs-panel<?php if($day == 5):?> is-active<?php endif;?>" id="day-thursday">
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
	
						<div class="tabs-panel<?php if($day == 6):?> is-active<?php endif;?>" id="day-friday">
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
									
						<div class="tabs-panel<?php if($day == 0):?> is-active<?php endif;?>" id="day-saturday">
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
	
						<div class="tabs-panel" id="day-sunday">
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