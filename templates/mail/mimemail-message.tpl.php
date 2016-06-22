<?php

/**
 * @file
 * Default theme implementation to format an HTML mail.
 *
 * Copy this file in your default theme folder to create a custom themed mail.
 * Rename it to mimemail-message--[module]--[key].tpl.php to override it for a
 * specific mail.
 *
 * Available variables:
 * - $recipient: The recipient of the message
 * - $subject: The message subject
 * - $body: The message body
 * - $css: Internal style sheets
 * - $module: The sending module
 * - $key: The message identifier
 *
 * @see template_preprocess_mimemail_message()
 */
?>
<?php global $base_url; ?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php if ($css): ?>
    <style type="text/css">
      <?php print $css ?>
    </style>
    <?php endif; ?>
  </head>
  <body id="mimemail-body" <?php if ($module && $key): print 'class="module-'. $module .' key-'. $key .'"'; endif; ?> style="margin:0; padding:0; background-color: #EFEFEF;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
	    <tr bgcolor="#EFEFEF" style="background-color:#EFEFEF; color:#2a2a2a; width:100%;">
		    <td id="header" class="center" style="width:95%; max-width:580px; padding:15px 30px; margin:auto;">
			    <img src="<?php print $base_url . '/' . path_to_theme(); ?>/images/icons/logo.png" alt="The Appraisal App" width="242" height="35" />
		    </td>    
		</tr>
	    <tr bgcolor="#ffffff" id="main-wrapper" style="background-color:#ffffff;width:100%;">
			<td id="main" class="center" style="background-color:#ffffff;width:95%; max-width:580px; padding:15px; margin:auto;">
	        	<?php print $body ?>
	        </td>
	    </tr>
	    <tr id="footer-menu" bgcolor="#EFEFEF" style="background-color:#EFEFEF; color:#2a2a2a; width:100%;">
		    <td class="center" style="width:95%; max-width:580px; padding:15px 30px; margin:auto;">
			    
		    </td>
		        
		</tr>
		<tr bgcolor="#EFEFEF" style="background-color:#EFEFEF; color:#2a2a2a; width:100%;">
			<td>Powered by</td>	
		</tr>
		<tr id="footer-sw" bgcolor="#EFEFEF" style="background-color:#EFEFEF; color:#2a2a2a; width:100%;">
		    <td class="center" style="width:95%; max-width:580px; padding:15px 30px; margin:auto;">
			    <img src="<?php print $base_url . '/' . path_to_theme(); ?>/images/icons/sw-logo.png" alt="sw-logo" width="229" height="15" />
		    </td>
		        
		</tr>
		<tr bgcolor="#EFEFEF" style="background-color:#EFEFEF; color:#2a2a2a; width:100%;">
			<td>Our Family</td>	
		</tr>
		<tr id="footer-family" bgcolor="#EFEFEF" style="background-color:#EFEFEF; color:#2a2a2a; max-width:580px; padding:15px 30px; margin:auto;">
		    
		    
		    <td class="half" style="width:50%;">
			    <img src="<?php print $base_url . '/' . path_to_theme(); ?>/images/icons/hp-logo.png" alt="hp-logo" width="172" height="29" />
		    </td>
		    <td class="half" style="width:50%;">
			    <img src="<?php print $base_url . '/' . path_to_theme(); ?>/images/icons/recon-logo.png" alt="recon-logo" width="115" height="30" />
		    </td>
		        
		</tr>
		<tr>
			<td>	
				<div class="copyright">&copy; SchwartzWilliams 2015. All rights reserved</div>	
			</td>
		</tr>
    </div> <!-- /#footer -->
		
    </table>
  </body>
</html>
