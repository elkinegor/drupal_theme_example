<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <li>
  	<?php print $title; ?>
  	<ul>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
	  <li<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
	    <?php print $row; ?>
	  </li>
<?php endforeach; ?>
<?php if (!empty($title)): ?>
  	</ul>
  </li>
<?php endif; ?>
	