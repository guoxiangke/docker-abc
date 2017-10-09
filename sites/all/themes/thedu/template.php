<?php

/**
 * @file
 * template.php
 */
/**
 * Implements hook_preprocess_page().
 */
function thedu_preprocess_page(&$variables) {
	drupal_add_js(array('pathToTheme' => array('pathToTheme' => base_path() . path_to_theme())), 'setting');

	if (arg(0) == 'user' && arg(1) == 'login') {
		drupal_add_css(drupal_get_path('theme', 'thedu').'/css/page-user-login.css',array('group'=>CSS_THEME));
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/jquery.backstretch.min.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/page-user-login.js','file');
		$variables['navbar_classes_array'][] = 'navbar-inverse';
		# code...
	}
	if(drupal_is_front_page()){
		drupal_add_css(drupal_get_path('theme', 'thedu').'/font-awesome/css/font-awesome.min.css',array('group'=>CSS_THEME));

		drupal_add_css(drupal_get_path('theme', 'thedu').'/css/WordsRotating.css', 'file');
		drupal_add_css(drupal_get_path('theme', 'thedu').'/css/page-front.css',array('group'=>CSS_THEME));
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/jquery.backstretch.min.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/shareTo.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/header_scroll.js','file');
		//http://tympanus.net/codrops/2013/07/18/on-scroll-effect-layout/
		// drupal_add_js(drupal_get_path('theme', 'thedu').'/js/contrib/cbpScroller/modernizr.custom.js','file');
		// drupal_add_js(drupal_get_path('theme', 'thedu').'/js/contrib/cbpScroller/classie.js','file');
		// drupal_add_js(drupal_get_path('theme', 'thedu').'/js/contrib/cbpScroller/cbpScroller.js','file');
		// drupal_add_css(drupal_get_path('theme', 'thedu').'/js/contrib/cbpScroller/component.css','file');

		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/page-front.js','file');
		$variables['navbar_classes_array'][] = 'navbar-bigger';
	}
	if(isset($variables['node']) && $variables['node']->nid == '43') {
		drupal_add_css(drupal_get_path('theme', 'thedu').'/font-awesome/css/font-awesome.min.css',array('group'=>CSS_THEME));

		drupal_add_css(drupal_get_path('theme', 'thedu').'/css/page-front.css',array('group'=>CSS_THEME));
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/jquery.backstretch.min.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/shareTo.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/header_scroll.js','file');

		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/contrib/jquery.videoBG.js','file');
		$variables['navbar_classes_array'][] = 'navbar-bigger';
	}
	if (arg(0) == 'student' && arg(1) == 'register') {
		drupal_add_css(drupal_get_path('theme', 'thedu').'/css/page-front.css',array('group'=>CSS_THEME));
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/jquery.backstretch.min.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/shareTo.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/header_scroll.js','file');
		// drupal_add_js(drupal_get_path('theme', 'thedu').'/js/page-front.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/page-user-register.js','file');
		$variables['navbar_classes_array'][] = 'navbar-bigger';
	}
	if (arg(0) == 'user' && arg(1) == 'validate_phone') {
		drupal_add_css(drupal_get_path('theme', 'thedu').'/css/page-front.css',array('group'=>CSS_THEME));
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/jquery.backstretch.min.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/shareTo.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/header_scroll.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/page-front.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/page-user-register.js','file');
		$variables['navbar_classes_array'][] = 'navbar-bigger';
	}
	if (arg(0) == 'user' && arg(1) == 'dashboard') {
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/contrib/jquery.countdown.min.js','file');
		drupal_add_css(drupal_get_path('theme', 'thedu').'/font-awesome/css/font-awesome.min.css',array('group'=>CSS_THEME));
		drupal_add_css(drupal_get_path('theme', 'thedu').'/css/contrib/sb-admin-2.css',array('group'=>CSS_THEME));
		// drupal_add_css(drupal_get_path('theme', 'thedu').'/css/page-front.css',array('group'=>CSS_THEME));
		// drupal_add_js(drupal_get_path('theme', 'thedu').'/js/jquery.backstretch.min.js','file');
		// drupal_add_js(drupal_get_path('theme', 'thedu').'/js/shareTo.js','file');
		// drupal_add_js(drupal_get_path('theme', 'thedu').'/js/page-front.js','file');

		drupal_add_js(drupal_get_path('module', 'edu_soho').'/js/open_classroom.js','file');
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/calendar-custom.js','file');
	}
	if(arg(0) == 'calendar'){
		drupal_add_js(drupal_get_path('theme', 'thedu').'/js/calendar-custom.js','file');
	}
	if (arg(0) == 'blog') {
		drupal_add_css(drupal_get_path('theme', 'thedu').'/css/page-blog.css',array('group'=>CSS_THEME));
	}

 if (!empty($variables['node']) && !empty($variables['node']->type)) {
    $variables['theme_hook_suggestions'][] = 'page__node__' . $variables['node']->type;
    drupal_add_css(drupal_get_path('theme', 'thedu').'/css/page-blog.css',array('group'=>CSS_THEME));
  }
}



function thedu_preprocess_node(&$variables, $hook) {

  // Add $unpublished variable.
  $variables['unpublished'] = (!$variables['status']) ? TRUE : FALSE;

  // Add a class for the view mode.
  $variables['classes_array'][] = 'view-mode-' . $variables['view_mode'];

  //add view mode template files
  // $variables['theme_hook_suggestions'][] = 'node__' . $variables['view_mode'];
  // $variables['theme_hook_suggestions'][] = 'node__' . $variables['node']->nid;
  $variables['theme_hook_suggestions'][] = 'node__' . $variables['type'] . '__' . $variables['view_mode'];

  //Might need this later.
  // $variables['title'] = htmlspecialchars_decode($variables['title']);
}


/**
 * Implements template_preprocess_views_view().
 */
function thedu_preprocess_views_view_table(&$vars) {
	$view = $vars['view'];
	//flag完成和AOL
  //http://dev.abc.com/recodersteacher
  if ($view->name == 'nodes' && in_array($view->current_display, array('page_teacher_record','ordersrecoders','ordersrecoder','ordersrecodersteacher'))) {
	  $rows = $vars['rows'];
	  foreach ($rows as $id => $row) {
	    $data = $view->result[$id];
	    $event_class = get_aol_classes($data->nid);
	    $vars['row_classes'][$id][] = $event_class;
	  }
  }
  //订单的作废与完成
  if ($view->name == 'nodes' && in_array($view->current_display, array('page_orders'))) {
    $rows = $vars['rows'];
    foreach ($rows as $id => $row) {
      $data = $view->result[$id];
      $query = db_select('node', 'n');
      $query->fields('n',array('sticky'));
      $query->condition('n.nid', $data->nid);
      $sticky = $query->execute()->fetchField();
      if(!$sticky) $vars['row_classes'][$id][] = 'bg-grey';
    }
  }
  //published or not!!
  if ($view->name == 'nodes' && in_array($view->current_display, array('ordersrecoder'))) {
    $rows = $vars['rows'];
    foreach ($rows as $id => $row) {
      $data = $view->result[$id];
      $query = db_select('node', 'n');
      $query->fields('n',array('status'));
      $query->condition('n.nid', $data->nid);
      $published = $query->execute()->fetchField();
      if(!$published) $vars['row_classes'][$id][] = 'bg-grey';
    }
  }
}

function get_aol_classes($nid) {
  $flag2 = flag_get_flag('mark_finished_class');
  $event_class = 'bg-brown';
  if($flag2->is_flagged($nid)){//如果标记
  		$event_class = 'bg-green';
  }
  $flag = flag_get_flag('ask_for_leave');
  if($flag->is_flagged($nid)){//如果标记
      $event_class = 'bg-grey';
  }
  return $event_class;
}
