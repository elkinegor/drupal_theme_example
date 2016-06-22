<div id="header-menu">
  <?php print render($page['drawer']); ?>
  
  <?php if ($user->uid != 0): ?>
	<div id="drawer-user-menu">
	  <?php if ($secondary_menu): ?>
	    <div id="account-menu" class="navigation">
	      <?php print theme('links__system_secondary_menu', array(
	        'links' => $secondary_menu,
	        'attributes' => array(
	          'id' => 'account-menu-links',
	          //'class' => array('links', 'inline', 'clearfix'),
	        ),
	        'heading' => array(
	          'text' => t('My Account'),
	          'level' => 'h2',
	          //'class' => array('element-invisible'),
	        ),
	      )); ?>
	    </div> <!-- /#secondary-menu -->
	  <?php endif; ?>
	</div> <!-- /#user-menu -->
	<?php else: ?>
		<div>
			<h2>My Activity</h2>
			<ul>
				<li><a href="/user/register?destination=request/create-property">Request Appraisal</a></li>
			</ul>
		</div>
		<div>
			<h2>My Account</h2>
			<ul>
				<li><a href="/user/register">Sign Up</a></li>
				<li><a href="/user/login">Login</a></li>
			</ul>
		</div>
		<div>
			<h2>For agents</h2>
			<ul>
				<li><a href="/agent/how-it-works">How it works</a></li>
			</ul>
		</div>
	<?php endif; ?>
  
</div>
      