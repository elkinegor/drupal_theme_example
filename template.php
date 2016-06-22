<?php
/**
 * Implements hook_theme().
 */
function appraisal_theme($existing, $type, $theme, $path) {
 $forms_array = array(
    'portfolio_property_node_form' => array(
      'render element' => 'form',
      'template' => 'user-request-appraisal',
      // this will set to module/theme path by default:
      'path' => drupal_get_path('theme', 'appraisal').'/templates',
    ),
    'appraisal_node_form' => array(
      'render element' => 'form',
      'template' => 'agent-request-appraisal',
      // this will set to module/theme path by default:
      'path' => drupal_get_path('theme', 'appraisal').'/templates',
    ),
    'appraisal_request_node_form' => array(
      'render element' => 'form',
      'template' => 'user-request-appraisal-step2',
      // this will set to module/theme path by default:
      'path' => drupal_get_path('theme', 'appraisal').'/templates',
    ),
    'user_register_form' => array(
      'render element' => 'form',
      'template' => 'user_register_form',
      // this will set to module/theme path by default:
      'path' => drupal_get_path('theme', 'appraisal').'/templates',
    ),
    'user_login' => array(
      'render element' => 'form',
      'template' => 'user_login_form',
      // this will set to module/theme path by default:
      'path' => drupal_get_path('theme', 'appraisal').'/templates',
    ),
    'user_pass' => array(
      'render element' => 'form',
      'template' => 'user_pass_form',
      // this will set to module/theme path by default:
      'path' => drupal_get_path('theme', 'appraisal').'/templates',
    ),
  );

  if ($_GET['q'] == 'agent/register') {
    $forms_array['user_register_form']['template'] = 'agent_register_form';
  }

  return $forms_array;
}


/**
 * Preprocessor for theme('article_node_form').
 */
function appraisal_preprocess_portfolio_property_node_form(&$variables) {

    /*$variables['sidebar'] = array();   // Put taxonomy fields in sidebar.

    $variables['sidebar'][] = $variables['form']['field_tags'];
    hide($variables['form']['field_tags']);

    // Extract the form buttons, and put them in independent variable.
    $variables['buttons'] = $variables['form']['actions'];
    hide($variables['form']['actions']);*/
}

function appraisal_form_alter(&$form, &$form_state, $form_id) {
	//dpm($form);
	// disable preview button
	if (isset($form['#node_edit_form'])) {
		unset($form['actions']['preview']);
	}
}

/*
 * Add a class of "default-image" to all image fields that are using the Default image.
 */
function appraisal_preprocess_field(&$variables, $hook) {
  if( !empty($variables['element']['#field_type'])
    && !empty($variables['items'][0]['#item']['is_default'])
    && $variables['element']['#field_type']=='image'
    && $variables['items'][0]['#item']['is_default'] == TRUE )
  {
    $variables['classes_array'][] = 'default-image';
  }
}

/*
 * Helper function to format prices.
 */

function appraisal_format_price($num){
	$myriad = $num / 1000;
	if ($myriad >= 1000) {
        $myriad = (int) $myriad / 1000;
        return "$" . $myriad . "m";
    }
    else if ($myriad >= 1) {
        $myriad = (int) $myriad;
        return "$" . $myriad . "K";
    }
    else {
	    $formatted_value = number_format($num, 0, '.', ',');
        return "$" . $num;
    }  
}
