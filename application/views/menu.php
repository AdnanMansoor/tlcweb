<ul id="secondary-menu" class="nav">
	<li>
		<?php echo anchor("home", "Home");?>
	</li>
	<li>
		<?php echo anchor("#", "Events"); ?>
		<ul class="sub-menu">
			<li>
				<?php echo anchor("events/timeline/future","Upcoming Events");?>
			</li>
			<li>
				<?php echo anchor("events/timeline/past","Past Events");?>
			</li>
		</ul>
	</li>
	<?php if(!$is_logged_in):?>
	<li>
		<?php echo anchor("home/signup", "Register"); ?>
	</li>
	<?php else: ?>
	<li>
		<?php echo anchor("members/", "Account Settings"); ?>
	</li>
	<?php endif ?>
	<li>
		<?php echo anchor("home/contact", "Contact Us"); ?>
	</li>
	<li>
		<?php echo anchor("home/about", "About Us"); ?>
	</li>
	<?php if($is_logged_in): ?>
	<li>
		<?php echo anchor("home/logout", "Logout"); ?>
	</li>
	<?php endif ?>
</ul>
