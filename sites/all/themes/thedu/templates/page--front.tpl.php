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
 global $base_url;
?>
<?php include('special_header.php');?>

<section id="hero"  data-img="<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu'); ?>/img/hero0.jpg" class="hero herobackstretch main-content wrapper-dark text-center">
    <div class="hero-content">
        <h1 class="ng-binding">英语在线教育</h1>
        <h2 class="text-light ng-binding">Your online English course for real life.</h2>
        <p style="font-size:1.5em;">真人外教互动课堂第一品牌</p>
        <ul>
            <li>
            <?php
            	echo l('课程体系','node/43',array('attributes'=>array('class'=>array('btn btn-course-full btn-lg'))));
            ?>
            </li>
            <li>
            <?php
            	echo l('立刻体验','student/register',array('attributes'=>array('class'=>array('btn btn-trial-full btn-lg'))));
            ?>
            </li>
        </ul>



				<!-- <p class="rw-sentence-IE">Wow you can learn English!</p> -->


        <!-- <p> -->
	        <!-- <section class="rw-wrapper">
	        	<span class="rw-sentence">
							<div class="rw-words rw-words-1">
									<span>Astonishingly</span>
									<span>Yes</span>
									<span>Wow</span>
									<span>Amazingly</span>
									<span>Incredibly</span>
									<span>Trust us</span>
							</div>
						</span>You can learn English like this !
					</section> -->
            <!-- <a class="how-it-works underline-white" href="/english/how-it-works">
             这样学习英语一定行！
						</a> -->
        <!-- </p> -->
    </div>
</section>
<div class="section-share">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 dale_text_center">
					<div class="share-wrap">
							<span>分享学习体验</span>
	            <ul>
	                <li class="sinaWeibo tips" title="分享到新浪微博"></li>
	                <li class="weixin tips" title="分享到微信"></li>
	                <li class="tenWeibo tips" title="分享到QQ空间"></li>
	                <li class="douban tips" title="分享到豆瓣"></li>
	                <li class="renren tips" title="分享到人人"></li>
	            </ul>
							<span>成功企业</span>
							<img   width="619" height="38" alt="" src="<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/seen.png">
	        </div>
	        <hr>
			</div>
		</div>
	</div>
</div>
<div class="section-slide container">
	<aside class="col-sm-6" role="complementary">
		<div class="intro">
			<h3>我们是国际资深语言学校，因此我们拥有...</h3>
			<ul>
				<li>ABC-ChinaEdu纯正英语学习系统</li>
				<li>全球认证师资，老师现场互动</li>
				<li>独家打造少儿英语在线课程体系</li>
				<li>个性化教材及学习计划，专人跟踪学习进度</li>
				<!-- <li>提供ABC-ChinaEdu英语能力认证等级证书</li> -->
			</ul>
		</div>
		<div class="intro">
			<h3>拥有多年远程教育经验，因此我们...</h3>
			<ul>
				<li>拥有4000万成功教学案例 + 弹性的学习时间</li>
				<li>遍及200多个国家 + 自然的学习环境</li>
				<li>千余位专业外教 + 专业的本地学习顾问</li>
				<li>无论何时，无论何地，想学就学!</li>
			</ul>
		</div>
	</aside>
	<section class="col-sm-6 visible-lg">
		<div class="infoslide">

		</div>
	</section>

</div>

<div class="section">
  <div class="container">
    <div class="row">
      <div id="basic-plan">
        <div class="title">
          <p>私人定制</p>
        </div>
        <div class="body">
          <span class="spr40">企业培训?&nbsp;国际学校?&nbsp;国际交流?欢迎垂询～</span>
          <span class="i-phone spr40">
            <span class="glyphicon glyphicon-earphone"></span>
            <a href="tel:+86 (010) 8283-9320">(+86)-010-8283-9320</a>
          </span>
          <span class="i-mail spr40">
            <span class="fa fa-send-o"></span>
            <a href="mailto:sales@abc-chinaedu.com">sales@abc-chinaedu.com</a>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- advanced-features -->
<div id="advanced-features">
  <div class="container">
    <h1 class="blue-heading">我们的服务</h1>
    <h2>一个全新的快乐和沉浸式英语学习世界</h2>
    <section class="row down img80">
      <section class="col-md-6">
        <a href="http://www.britishcouncil.org/english">
          <div class="col-md-2 col-xs-3">
            <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/avatar/teens.jpg">
          </div>
          <div class="col-md-10 col-xs-9">
            <h4>
              儿童及青少年英语
            </h4>
            <p>通过我们的在线课程，让你的孩子在英语中有最好的开始，专门为孩子设计的，乐趣，互动而且有效。</p>
          </div>
        </a>
      </section>
      <section class="col-md-6">
        <a href="http://www.britishcouncil.org/english">
          <div class="col-md-2 col-xs-3">
            <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/avatar/student.jpg">
          </div>
          <div class="col-md-10 col-xs-9">
            <h4>在校生英语</h4>
            <p>
             最大限度地提高您在学校的成绩，敢开口机会。我们有独特的定位，以帮助您获得您所需要的所有课程体系的等级。
            </p>
          </div>
        </a>
      </section>
      <section class="col-md-6">
        <a href="http://www.britishcouncil.org/english">
          <div class="col-md-2 col-xs-3">
            <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/avatar/workplace.jpg">
          </div>
          <div class="col-md-10 col-xs-9">
            <h4>
              职场专业英语
            </h4>
            <p>
              在全世界的商务语言中有效地沟通，充分发挥你的潜力。我们的商务英语有独特的学习方法，确保您的学习是实战性的运用。
            </p>
          </div>
        </a>
      </section>
      <section class="col-md-6">
        <a href="http://www.britishcouncil.org/english">
          <div class="col-md-2 col-xs-3">
            <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/avatar/companies.jpg">
          </div>
          <div class="col-md-10 col-xs-9">
            <h4>
              企业英语培训
            </h4>
            <p>
              为企业提供专属主题讲堂，根据企业需求开设课程，由资深外教顾问讲解，富有启发与趣味，学员能从讲堂中获得最全面、最实用的内容，全面提高公司整体文化氛围。
            </p>
          </div>
        </a>
      </section>
    </section>
  </div>
</div>
<!-- advanced-features -->

<!-- advanced-features -->
<div id="advanced-features">
  <div class="container">
  <?php $my_block = module_invoke('views', 'block_view', 'promotion-block');?>
    <h1 class="blue-heading"><?php print render($my_block['subject']);?></h1>
    <h2>What are people saying about ABC-ChinaEdu?</h2>
    <?php
      $my_block = module_invoke('views', 'block_view', 'promotion-block');
      print render($my_block['content']);
    ?>
    </div>
  </div>
</div>


<div class="section">
  <?php include('price.php');?>
</div>
<?php include('float-consult.php');?>


<!-- scroll effect end -->
<?php if(0):?>
<div class="container">

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
</div>
<?php endif;?>
<?php include('special_footer.php');?>

<?php if(0&&!user_is_logged_in()): ?>
<!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('8506-544-10-4211');/*]]>*/</script><noscript><a href="https://www.olark.com/site/8506-544-10-4211/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->
<?php endif;?>
