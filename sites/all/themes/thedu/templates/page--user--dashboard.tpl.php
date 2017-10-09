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
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
global $user;
if(!user_is_logged_in()) return 'no access';

$role = 'agency';
if(in_array('student', array_values($user->roles))){
	$role = 'student';
}
if(in_array('teacher', array_values($user->roles))){
	//get a list to do classes!!!
	$role = 'teacher';
}
	$query = new EntityFieldQuery();

  $query->entityCondition('entity_type', 'node')
    ->entityCondition('bundle', 'study_record')
    ->propertyCondition('status', NODE_PUBLISHED)
    ->fieldCondition('field_'.$role, 'uid', $user->uid)
    // ->range(0,1)
    ->propertyOrderBy('created','DESC')
    ->addMetaData('account', user_load(1)); // Run the query as user 1.

  $last_study_record = $query->execute();

  $flag = flag_get_flag('mark_finished_class');//teacher
  $class_time_begin = array();
  $study_record_nid = 0;
  $study_record_node = FALSE;
  $count = 0;//for teacher! coming classes
  if(isset($last_study_record['node']))
  foreach ($last_study_record['node'] as $nid => $node) {
  	//get last node!!
  	if ($flag) {
      	$study_record_nid = $nid;
      if($flag->is_flagged($nid)){
          //finished!!! You have no class ,Please request one!!!
      }else{
      	//get start time!!! cut down!!!
      	$study_record_node = node_load($nid);
        // dpm($study_record_node->field_class_time[LANGUAGE_NONE][0]['value']);
      	$class_time_begin[$nid] = strtotime($study_record_node->field_class_time[LANGUAGE_NONE][0]['value'])+8*3600;
      	$count ++;
      }
    	if($role == 'student') break;
    }
  }
// dpm($study_record_node);
// dpm(date('Y-m-d H:i:s',$class_time_begin[0]));
?>
<script type="text/javascript">
(function($){
	$(document).ready(function () {
	$('[data-countdown]').each(function() {
	 var $this = $(this), finalDate = $(this).data('countdown');
	 // console.log(finalDate);
	 $this.countdown(finalDate, {elapse: true})
		 .on('update.countdown', function(event) {
		   var $this = $(this);
		   console.log(finalDate);
		   if (event.elapsed) {
		     $this.html(event.strftime('%M:%S'));
		     $('#elapsed').html('已进行'+event.strftime('%M')+'分钟');
		     if(event.strftime('%M')>=25){
		     		$('#elapsed').html('已结束');
		     		$this.html(event.strftime('%M:%S OverTime'));
		     		$this.countdown('stop');
		     		$this.parents('.progress-bar').addClass('progress-bar-danger');
		     }
		   } else {
		   	if(event.strftime('%D')=='00'){
		  		$this.html(event.strftime('%-H:%M:%S'));
		  	}else{
		  		$this.html(event.strftime('%-D 天 %H:%M:%S'));
		  	}
		   }
		 });
	});

	});
})(jQuery);
</script>
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="container">
    <div class="navbar-header">
      <?php if ($logo): ?>
      <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
      <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>
<div class="main-container container">
<?php if(0):?>
  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>

    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
<?php endif;?>
<a href="#"></a>
<!-- begin -->
  <div class="row">
      <div class="col-lg-12">
          <h5 class="page-header"><?php echo l(t('>>Setting Up Audio'),'node/1');?></h5>
      </div>
      <!-- /.col-lg-12 -->
  </div>

  <div class="row">
  <?php if($role == 'agency'):?>
    <div class="col-lg-3 col-md-6">
          <div class="panel panel-red">
            <a id='noopen_classroom' href="<?php echo url('create/student')?>">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                    	<i class="fa fa-users fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                        	 <span id="noclock"><?php echo count(edu_get_agencyusers($user));?></span>
                        </div>
                        <div>学生总计</div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <span class="pull-left">添加学生</span>
                <span class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
                <div class="clearfix"></div>
            </div>
            </a>
        </div>
    </div>
  <?php elseif($study_record_node): ?>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                    	<i class="glyphicon glyphicon-facetime-video fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                        	<?php if($role=='student'): ?>
                        	 <span class="clock" data-countdown = "<?php echo date('Y-m-d H:i:s',$class_time_begin[$study_record_nid]);?>"><?php echo isset($class_time_begin[0])?$class_time_begin[0]:0;?></span>
                        	<?php endif;?>
                        	<?php if($role=='teacher'): ?>
                        	 <span id="noclock"><?php echo count($class_time_begin);?></span>
                        	<?php endif;?>
                        </div>
                        <div <?php if($role=='student') echo 'id="elapsed"'?>><?php echo t('Your Coming Classes');?></div>
                    </div>
                </div>
            </div>
            <a data-room='<?php if($study_record_nid) echo "https://appear.in/abc-chinaedu-".$study_record_nid;?>'  id='open_classroom' href="#<?php if($study_record_nid) echo $study_record_nid;?>">
                <div class="panel-footer">
                    <span class="pull-left">点击上课</span>
                    <span class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
  <?php else:?>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                    	<i class="glyphicon glyphicon-facetime-video fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                        	 <span class="clock1" data-countqdown = ""></span>
                        </div>
                        <div <?php if($role=='student') echo 'id="2elapsed"'?>>即将上课</div>
                    </div>
                </div>
            </div>
            <a data-room='<?php if($study_record_nid) echo "https://appear.in/abc-chinaedu-".$study_record_nid;?>'  id='open_classroom' href="#<?php if($study_record_nid) echo $study_record_nid;?>">
                <div class="panel-footer">
                    <span class="pull-left">申请上课</span>
                    <span class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
  <?php endif;?>
  <?php if($role == 'agency'):?>

  <?php else:?>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-blackboard fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php
                        echo count(edu_get_records($user,'field_'.$role));?></div>
                        <div><?php echo t('Your Records');?></div>
                    </div>
                </div>
            </div>
            <a href="#records">
                <div class="panel-footer">
                    <span class="pull-left"><?php echo t('View Details');?></span>
                    <span class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-education fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo count(edu_get_orders($user,'field_'.$role));?></div>
                        <div><?php echo t('Your Courses');?></div>
                    </div>
                </div>
            </div>
            <a href="#bought">
                <div class="panel-footer">
                    <span class="pull-left"><?php echo t('View Details');?></span>
                    <span class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
  <?php endif;?>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="glyphicon glyphicon-tint fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo userpoints_get_current_points();?></div>
                        <div><?php echo t('Your Points');?></div>
                    </div>
                </div>
            </div>
            <a href="#points">
                <div class="panel-footer">
                    <span class="pull-left"><?php echo t('View Details');?></span>
                    <span class="pull-right"><i class="glyphicon glyphicon-circle-arrow-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
	</div> <!-- end -->

  <div class="panel panel-primary">
    <div class="panel-heading">上课日历</div>
    <div class="panel-body">
      <?php print views_embed_view('calendar', 'block_'.$role); ?>
    </div>
  </div>

	<div class="panel panel-primary" id="records">
	  <div class="panel-heading"><?php echo t('Your Records');?></div>
	  <div class="panel-body">
	    <!-- <p>上课记录，您上的每一节课都会在里体现，清晰明了！</p> -->
	  </div>
		<?php print views_embed_view('nodes', 'page_'.$role.'_record'); ?>
	</div>


	<div class="panel panel-info" id="bought">
	  <div class="panel-heading"><?php echo t('Your Courses');?></div>
	  <div class="panel-body">
	    <!-- <p>您的课程记录，每一次报课！</p> -->
	  </div>
		<?php print views_embed_view('nodes', 'page_'.$role.'_order'); ?>
	</div>

	<div class="panel panel-primary" id="points">
	  <div class="panel-heading"><?php echo t('Your Points');?></div>
	  <div class="panel-body">
	    <!-- <p>您的几分点卡记录！</p> -->
	  </div>
		<?php
			require_once(drupal_get_path('module', 'userpoints').'/userpoints.pages.inc');
			$form = drupal_get_form('userpoints_list_transactions');
			print drupal_render($form);;
		?>
	</div>


</div>
<footer class="footer container">
  <?php print render($page['footer']); ?>
</footer>
