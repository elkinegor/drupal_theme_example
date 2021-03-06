<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<div id="page-wrapper">
  <div id="page">
  <div id="header" class="<?php print $secondary_menu ? 'with-secondary-menu': 'without-secondary-menu'; ?>"><div class="section clearfix">
	<?php include 'parts/header.tpl.php'; ?>
  </div></div> <!-- /.section, /#header -->

  <?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>

  <?php if ($page['featured']): ?>
    <div id="featured"><div class="section clearfix">
      <?php print render($page['featured']); ?>
    </div></div> <!-- /.section, /#featured -->
  <?php endif; ?>

<div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">
<?php 
	
	$path = current_path();
	$path_array = explode('/', $path);
	global $user;
	$role = 'anon';
	if (in_array('member', $user->roles)) { $role = 'member'; }
	if (in_array('agent', $user->roles)) { $role = 'agent'; }
	if (in_array('administrator', $user->roles)) { $role = 'administrator'; }
	
?>

<?php //if ( $path_array[2] == 'edit' && ($role != 'anon'):?>
<?php if ( $role != 'anon'):?>

  
	<div id="appraisal_form">
		<div id="title_and_tabs_wrapper">
			<div id="title_and_tabs">
			  <h2>My Profile</h2>
			  <div id="steps">
			  <?php global $user; ?>
			    <div class="step step1 first <?php if ($_GET['q'] == 'user/'.$user->uid) print "active"; ?>">
			      <!--<p>View profile</p>-->
			      <h2><a href="/user">View profile</a></h2>
			    </div>
			    <div class="step step2 last <?php if ($_GET['q'] != 'user/'.$user->uid) print "active"; ?>">
			      <!--<p>Edit profile</p>-->
			      <?php global $user; ?>
			      <h2><a href="/user/<?php print $user->uid; ?>/edit">Edit profile</a></h2>
			    </div>
			  </div>
			</div>
		</div>
		<div id="content-wrapper-wrapper">
			<div id="content-wrapper">
			  <div id="node_create_form">
			       <?php include 'parts/content.tpl.php'; ?>
			   </div>
			  <div id="right-sidebar">
			    
			  </div>
			</div>
		</div>
	</div>  

<?php else: ?>
	  <?php include 'parts/content.tpl.php'; ?>
<?php endif; ?>
   
  </div></div> <!-- /#main, /#main-wrapper -->

  <?php if ($page['triptych_first'] || $page['triptych_middle'] || $page['triptych_last']): ?>
    <div id="triptych-wrapper"><div id="triptych" class="clearfix">
      <?php print render($page['triptych_first']); ?>
      <?php print render($page['triptych_middle']); ?>
      <?php print render($page['triptych_last']); ?>
    </div></div> <!-- /#triptych, /#triptych-wrapper -->
  <?php endif; ?>
  <?php include 'parts/footer.tpl.php'; ?>
</div></div> <!-- /#page, /#page-wrapper -->

