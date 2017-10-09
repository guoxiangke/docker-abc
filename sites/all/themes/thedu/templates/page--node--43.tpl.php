<?php
/**
 * @file
 Course ! landing page!
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

<!-- Warming Up -->

<section id="videoBG" data-img="<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu'); ?>/img/hero0.jpg" class="hero herob2ackstretch main-content wrapper-dark text-center">

  <div class="hero-content">

        <h1 class="ng-binding">Learn English online</h1>
        <h2 class="text-light ng-binding">With real teachers in live classes</h2>
        <ul>
            <!-- <li>
                <a widest="callToAction" class="btn btn-course-full btn-lg ng-binding" href="/english/courses"  >
                    SEE COURSES
                </a>
            </li> -->
            <li>
                <a widest="callToAction" class="btn btn-trial-full btn-lg" href="student/register" >
                    预约课程
                </a>
            </li>
        </ul>
        <p>
            <a class="how-it-works underline-white"   href="#advanced-features">为何我们能做得到</a><br>
            <a class="how-it-works"  style="font-size:30px;"  href="#advanced-features">↓</a>
        </p>
    </div>
</section>

<!--Video Section-->

</script>
<!--Video Section Ends Here-->
  <script type="text/javascript">
  jQuery('#videoBG').videoBG({
      mp4:"<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu'); ?>/img/15-8-home-campaign-loop.mp4",
      // ogv:'assets/tunnel_animation.ogv',
      webm:"<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu'); ?>/img/15-8-home-campaign-loop.webm",
      // poster:'assets/tunnel_animation.jpg',
      scale:true,
      zIndex:0
    });
  </script>

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
							<img   width="619" height="38" alt="" src="<?php echo $base_url.'/'.drupal_get_path('theme', 'thedu'); ?>/img/seen.png">
	        </div>
	        <hr>
			</div>

      <h1 class="blue-heading">来自全球优秀教师</h1>
      <!-- <h2>Analyze and share off your media wizardry!</h2> -->
<!-- http://www.linkedin.com/pub/aaron-webber ### -->
      <div class="face-wall hidden-phone">
        <img src="/sites/all/themes/thedu/img/avatar2/0007e45429a0c578bd7090a775f3b873.png">
<img src="/sites/all/themes/thedu/img/avatar2/0144b4f8d9faeb87099fb50a47cf17b7.png">
<img src="/sites/all/themes/thedu/img/avatar2/04d240544da769049ebe99f42a3f87c7.png">
<img src="/sites/all/themes/thedu/img/avatar2/0ccb2f468a3a6f49204fe083bb3209df.png">
<img src="/sites/all/themes/thedu/img/avatar2/0e851eaeef4f4585dd9954d045eedb5e.png">
<img src="/sites/all/themes/thedu/img/avatar2/108d732ff3fb5f8e8a08b9d987e8f576.png">
<img src="/sites/all/themes/thedu/img/avatar2/10caeb23eef23b4b75991511ca60c5bc.png">
<img src="/sites/all/themes/thedu/img/avatar2/1345370ce9e41fab9a5a542ff63530da.png">
<img src="/sites/all/themes/thedu/img/avatar2/140de27c31fa6ca11c4bb85f51524bee.png">
<img src="/sites/all/themes/thedu/img/avatar2/157411b453a97599b0692ff701446aa0.png">
<img src="/sites/all/themes/thedu/img/avatar2/1ba09707556dfa494207afc8a07581f4.png">
<img src="/sites/all/themes/thedu/img/avatar2/1c96e96508b23e0a7271182579c01ff9.png">
<img src="/sites/all/themes/thedu/img/avatar2/1cbbf8a22cce38206ec5e8b92ecbf938.png">
<img src="/sites/all/themes/thedu/img/avatar2/1ce22cc92444f78001a153b1792967d2.png">
<img src="/sites/all/themes/thedu/img/avatar2/1d350abb9957bc50ec0f33f3a8a032d6.png">
<img src="/sites/all/themes/thedu/img/avatar2/1e2ab45a60ad5f8fc01e766420cf712c.png">
<img src="/sites/all/themes/thedu/img/avatar2/1fc4a2c09b93392b99d74c68e93e2eb7.png">
<img src="/sites/all/themes/thedu/img/avatar2/23ebf498dd82f976b55102e3ff184993.png">
<img src="/sites/all/themes/thedu/img/avatar2/2465ef1479f959132271fc8795e4af6e.png">
<img src="/sites/all/themes/thedu/img/avatar2/2c91ee5a5801657b3ba80b641559cd08.png">
<img src="/sites/all/themes/thedu/img/avatar2/2e5c4c05d17b84729adc9b05076f2313.png">
<img src="/sites/all/themes/thedu/img/avatar2/37a3d38d08da001dad2d6d861834baf3.png">
<img src="/sites/all/themes/thedu/img/avatar2/3fa18a8e77c822871d2cdee0e4483c9e.png">
<img src="/sites/all/themes/thedu/img/avatar2/3fe814ba3144aabbcbd64beb0631f5cc.png">
<img src="/sites/all/themes/thedu/img/avatar2/41fe787a32fdd1236942917295dc8b95.png">
<img src="/sites/all/themes/thedu/img/avatar2/437bd18b0a75d08cc20ac37a74b0a278.png">
<img src="/sites/all/themes/thedu/img/avatar2/44aff50821c40261a4b59a1e44b9c927.png">
<img src="/sites/all/themes/thedu/img/avatar2/44cc5dd48c52a56913e54071a91aff4d.png">
<img src="/sites/all/themes/thedu/img/avatar2/46de491191c0dba398387a8feb2c28f0.png">
<img src="/sites/all/themes/thedu/img/avatar2/475459a268dbc5e8231bf1f269048bc1.png">
<img src="/sites/all/themes/thedu/img/avatar2/49a97205b7cacce42e9c0513a9590105.png">
<img src="/sites/all/themes/thedu/img/avatar2/4b0fad43a2d2ff3421906756341be88e.png">
<img src="/sites/all/themes/thedu/img/avatar2/4c76491263fc5fbb7b587b28e7ac8a9d.png">
<img src="/sites/all/themes/thedu/img/avatar2/4e4c9160ee1964bc122989d08dfdd66b.png">
<img src="/sites/all/themes/thedu/img/avatar2/4f20ba3e3edcc1c35e7bbc323f97d146.png">
<img src="/sites/all/themes/thedu/img/avatar2/4f443a79aa39ba47e9f78e72f41359e0.png">
<img src="/sites/all/themes/thedu/img/avatar2/4f54b6f9eaf869986dd21c58a92b0492.png">
<img src="/sites/all/themes/thedu/img/avatar2/53efc376753eb128a9e0ed2ea78576cf.png">
<img src="/sites/all/themes/thedu/img/avatar2/5780c311ea7a37b0e139d2e39ab125f9.png">
<img src="/sites/all/themes/thedu/img/avatar2/588629ca6bb8e056b0dbbeebc3b0d29b.png">
<img src="/sites/all/themes/thedu/img/avatar2/5b6dc24f8b7ce7cea90a2091b1a58323.png">
<img src="/sites/all/themes/thedu/img/avatar2/5d270b8978e1ec17c41a9bde0fa56096.png">
<img src="/sites/all/themes/thedu/img/avatar2/5f7eb09360b2ecd6458e8558805f6d94.png">
<img src="/sites/all/themes/thedu/img/avatar2/633ac37ee63cf64df8aa3ac6080d727c.png">
<img src="/sites/all/themes/thedu/img/avatar2/636c043e9ac51611cb5b2cd03d2d98a1.png">
<img src="/sites/all/themes/thedu/img/avatar2/677cd9ab998dd5504fc8f58226d7f324.png">
<img src="/sites/all/themes/thedu/img/avatar2/6858d632240a15c28a178696138f1a48.png">
<img src="/sites/all/themes/thedu/img/avatar2/6b8879dafc3e7a99bec66d2756315aa8.png">
<img src="/sites/all/themes/thedu/img/avatar2/6cb2dd2a87033cd75bb60d1cccb696fe.png">
<img src="/sites/all/themes/thedu/img/avatar2/6e443903866b524305e7d0fc09c5538d.png">
<img src="/sites/all/themes/thedu/img/avatar2/72bb007ca7962db588f3b31c9e15a899.png">
<img src="/sites/all/themes/thedu/img/avatar2/72e9d18e7cd117ab99165d75bc81cc5f.png">
<img src="/sites/all/themes/thedu/img/avatar2/73b0ef08149457535e017db3dc7715a6.png">
<img src="/sites/all/themes/thedu/img/avatar2/7408baf2702c910b59f944f54a68ff0f.png">
<img src="/sites/all/themes/thedu/img/avatar2/742b896c1fbf0f4cc9b4ec796c4c439d.png">
<img src="/sites/all/themes/thedu/img/avatar2/74b4cfb8dfa512f2ea745f93306f4b28.png">
<img src="/sites/all/themes/thedu/img/avatar2/783e372cf50e89a8e6bf240f21e804d8.png">
<img src="/sites/all/themes/thedu/img/avatar2/7cca8dc0ec40ae3c275270c57bb127d7.png">
<img src="/sites/all/themes/thedu/img/avatar2/83cf1e1b54d8abb88e20c53834ae4070.png">
<img src="/sites/all/themes/thedu/img/avatar2/875557c7ffa18afde3acd3effe1c6156.png">
<img src="/sites/all/themes/thedu/img/avatar2/8a0d13601df46ec3123d3b443594b935.png">
<img src="/sites/all/themes/thedu/img/avatar2/8bb509863c77747ada428d093fb4d10a.png">
<img src="/sites/all/themes/thedu/img/avatar2/8cde692d6af0572fe6c03b139b19f89d.png">
<img src="/sites/all/themes/thedu/img/avatar2/90abc1171b0da2415866dde6a5ec621e.png">
<img src="/sites/all/themes/thedu/img/avatar2/93b4f9a4af459cd891d2046b8451f501.png">
<img src="/sites/all/themes/thedu/img/avatar2/948b9d7defba3dc450560eccadee2cd9.png">
<img src="/sites/all/themes/thedu/img/avatar2/95518c5c42b750bcb70fa9ab93acd0d9.png">
<img src="/sites/all/themes/thedu/img/avatar2/984a8da52a2156150ec85fd10d8ece5c.png">
<img src="/sites/all/themes/thedu/img/avatar2/9f3a747f7ea8346997e9aa6243ba64d8.png">
<img src="/sites/all/themes/thedu/img/avatar2/a140f08a70b46ae169700581d497a5ba.png">
<img src="/sites/all/themes/thedu/img/avatar2/a285a3b774b80dcc06d9bf502b264558.png">
<img src="/sites/all/themes/thedu/img/avatar2/a2ea12870e26809d677379770e545c46.png">
<img src="/sites/all/themes/thedu/img/avatar2/a2f3e197c79d3193674a50f7fe5c68c4.png">
<img src="/sites/all/themes/thedu/img/avatar2/a436e7c8d9291d9627fd58ce48a4bd94.png">
<img src="/sites/all/themes/thedu/img/avatar2/a4d7d9b5e5fdc4f9e311a5d481de6765.png">
<img src="/sites/all/themes/thedu/img/avatar2/a6590f82ac068a9caeed87f83f840ca1.png">
<img src="/sites/all/themes/thedu/img/avatar2/a88f735a645abda79a8e7c963a0f51cb.png">
<img src="/sites/all/themes/thedu/img/avatar2/b3f6e4a10458123758138c5d1169c6e3.png">
<img src="/sites/all/themes/thedu/img/avatar2/b6f14010b84fad7c8c19f5ff1453e073.png">
<img src="/sites/all/themes/thedu/img/avatar2/b7deeaeb9fb6bcf8a3baaa85c5d1bda3.png">
<img src="/sites/all/themes/thedu/img/avatar2/bc9c53492813ec59c15d2bb0faf6ec8b.png">
<img src="/sites/all/themes/thedu/img/avatar2/be32dfb95423acced99ea24762d35ea8.png">
<img src="/sites/all/themes/thedu/img/avatar2/c0b4711b39228e34f4e4a602fde41f01.png">
<img src="/sites/all/themes/thedu/img/avatar2/c3b7e348b55f89aa091cb4110f53551c.png">
<img src="/sites/all/themes/thedu/img/avatar2/c4043c853679b12188ffe8103e9a99db.png">
<img src="/sites/all/themes/thedu/img/avatar2/c9e16961ffb9cd82c77f01ed215d8f41.png">
<img src="/sites/all/themes/thedu/img/avatar2/cd55d578a2bdcb1ef2d990a0ca6e8eea.png">
<img src="/sites/all/themes/thedu/img/avatar2/ce7e8acc8c81c2aa2304ddc97a3927bd.png">
<img src="/sites/all/themes/thedu/img/avatar2/cf34b6bd155ddf5fd8f5a6add785b845.png">
<img src="/sites/all/themes/thedu/img/avatar2/d49da5608fdc3e94fb43f1332fd8c44f.png">
<img src="/sites/all/themes/thedu/img/avatar2/d9cbaac07a781f2b8a2917f769fbdc11.png">
<img src="/sites/all/themes/thedu/img/avatar2/db005f45f1dc2f815ab9f657866890d2.png">
<img src="/sites/all/themes/thedu/img/avatar2/dc1d23082d7723348d96e4a3f517e297.png">
<img src="/sites/all/themes/thedu/img/avatar2/de5bde3e24af7255752f98c061b6258d.png">
<img src="/sites/all/themes/thedu/img/avatar2/e05c52e8faac5f75eaa31cb8d6cc64c2.png">
<img src="/sites/all/themes/thedu/img/avatar2/e35e40e64624a632ab2a97b8d4e6a5d3.png">
<img src="/sites/all/themes/thedu/img/avatar2/e5bcb7de07a24153efd5f2916e92cf97.png">
<img src="/sites/all/themes/thedu/img/avatar2/e834ddf0f41ccc30c538ab8cee4af467.png">
<img src="/sites/all/themes/thedu/img/avatar2/e8c2e6aa73090ae32acdeacd527c8424.png">
<img src="/sites/all/themes/thedu/img/avatar2/e9bade0af66375e71653051c56e9a4f8.png">
<img src="/sites/all/themes/thedu/img/avatar2/eef1fd6b060e6dc7f7e53f6e81532bca.png">
<img src="/sites/all/themes/thedu/img/avatar2/f1997d295b69501db6100140fbf76f0c.png">
<img src="/sites/all/themes/thedu/img/avatar2/f2e8c4404468dbc11a04663ecc7d89ce.png">
<img src="/sites/all/themes/thedu/img/avatar2/f6f74a509c0deb627accef753b191419.png">
<img src="/sites/all/themes/thedu/img/avatar2/f89371164cd5271548fe93af13808a95.png">

      </div>
		</div>
	</div>
</div>

<!-- advanced-features -->
<div id="advanced-features">
      <div class="container">
        <h1 class="blue-heading">选择我们的理由</h1>
        <!-- <h2>Analyze and share off your media wizardry!</h2> -->
        <section class="row down">
          <section class="col-md-6 col-xs-12">
            <div class="col-md-2 col-xs-3">
              <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/mention/stats.svg">
            </div>
            <div class="col-md-10 col-xs-9">
              <h4>
                学会用自然的方法说英语
              </h4>
              <p>
                就像在现实生活中，你会用你的手机来听，说，读，写一样：你的潜意识会逐渐的吸收新的词汇并自然的表达出来！。
              </p>
            </div>
          </section>
          <section class="col-md-6 col-xs-12">
            <div class="col-md-2 col-xs-3">
              <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/mention/radar.svg">
            </div>
            <div class="col-md-10 col-xs-9">
              <h4>
                在现实生活中学习
              </h4>
              <p>
                有效的自然方法，鼓励开口，鼓励在不断练习与犯错中进步，轻松自然交流。
              </p>
            </div>
          </section>
        </section>
        <section class="row down">
          <section class="col-md-6">
            <div class="col-md-2 col-xs-3">
              <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/mention/files.svg">
            </div>
            <div class="col-md-10 col-xs-9">
              <h4>
                ABC-China学校提供最优秀的外籍老师。
              </h4>
              <p>拥有超过6000名的专业外教，耐心，有责任心，师资力量领跑同行业，细致入微的教学服务，同时也更擅长激发学员英语学习的兴趣和积极性
              </p>
            </div>
          </section>
          <section class="col-md-6">
            <div class="col-md-2 col-xs-3">
              <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/mention/time.svg">
            </div>
            <div class="col-md-10 col-xs-9">
              <h4>
                无限制问题随时咨询
              </h4>
              <p>
                每当你有问题时！你可以在一天中的任何时间都问你喜欢的问题。
              </p>
            </div>
          </section>
        </section>

        <!-- <h1 class="blue-heading">为什么选择我们的外教？</h1> -->
        <!-- <h2>Involve your coworkers in social media monitoring</h2> -->
<!--         <section class="row down">
          <section class="col-md-6">
            <div class="col-md-2 col-xs-3">
              <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/mention/share.svg">
            </div>
            <div class="col-md-10 col-xs-9">
              <h4>
                资历筛选
              </h4>
              <p>
                资历筛选，只用顶尖的5%，选择其中最优秀的外教，不只是英语老师
              </p>
            </div>
          </section>
          <section class="col-md-6">
            <div class="col-md-2 col-xs-3">
              <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/mention/task.svg">
            </div>
            <div class="col-md-10 col-xs-9">
              <h4>
                Assign Tasks to the right people
              </h4>
              <p>
                最专业的面试，严格考核经过培训后，才能正式上岗，只为更优秀的外教
              </p>
            </div>
          </section>
          <section class="col-md-6">
            <div class="col-md-2 col-xs-3">
              <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/mention/list.svg">
            </div>
            <div class="col-md-10 col-xs-9">
              <h4>
                Track your team's progress
              </h4>
              <p>
                With Mention's Task List and Activity Feed, you'll never be in the dark when it comes to knowing who's done what.
              </p>
            </div>
          </section>
          <section class="col-md-6">
            <div class="col-md-2 col-xs-3">
              <img src="<?php  echo $base_url.'/'.drupal_get_path('theme', 'thedu');?>/img/mention/workflow.svg">
            </div>
            <div class="col-md-10 col-xs-9">
              <h4>
                Jumpstart your workflow
              </h4>
              <p>
                Work smarter. Easily add new team members, grant access only to those who need it, and speed up your social media presence while protecting your information.
              </p>
            </div>
          </section>
        </section> -->
      </div>
    </div>
<!-- advanced-features -->


<!-- <div class="section"> -->
  <?php //include('price.php');?>
<!-- </div> -->
<?php include('float-consult.php');?>

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
