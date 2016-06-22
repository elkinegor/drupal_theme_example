	<div id="header-menu-wrapper">
      <a id="menu-icon" href="#mobile-drawer"></a>
    </div>
    <div id="header-content-wrapper">
      <?php //if ($logo): ?>
<!--
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
-->
      <?php //endif; ?>
      	
      	<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"></a>
      
      <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">

          <?php if ($site_name): ?>
            <?php if ($title): ?>
              <div id="site-name">
                <h1>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                </h1>
            <?php endif; ?>
          <?php endif; ?>


          <?php if ($site_slogan): ?>
            <div id="site-slogan"<?php if ($hide_site_slogan) { print ' class="element-invisible"'; } ?>>
              <?php print $site_slogan; ?>
            </div>
          <?php endif; ?>
          
        </div> <!-- /#name-and-slogan -->
      <?php endif; ?>
       </div>
      
      <?php // print render($page['header']); ?>
      
      <div id="user-menu-wrapper">
        <div id="user-menu-icon">
          <?php global $user;
          if ($user->uid == 0) {
            print('<span class="not-logged">'.l('Log in', 'user/login').'</span>');
          }else {
            print('<span>'.format_username($user).'</span>');
          }
          ?>
        </div>
        <?php if ($user->uid != 0) { ?>
        <div id="user-menu">
          <?php if ($secondary_menu): ?>
            <div id="secondary-menu" class="navigation">
              <?php print theme('links__system_secondary_menu', array(
                'links' => $secondary_menu,
                'attributes' => array(
                  'id' => 'secondary-menu-links',
                  'class' => array('links', 'inline', 'clearfix'),
                ),
                'heading' => array(
                  'text' => t('Secondary menu'),
                  'level' => 'h2',
                  'class' => array('element-invisible'),
                ),
              )); ?>
            </div> <!-- /#secondary-menu -->
          <?php endif; ?>
        </div> <!-- /#user-menu -->
        <?php } ?>
       
     
    </div>
  </div>
  <div id="mobile-drawer">
	  <?php include 'mobile-drawer.tpl.php'; ?>
  </div>	
  
  <!-- </div> -->