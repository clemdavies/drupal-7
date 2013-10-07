<?php


?>
<div id='page-wrapper'><div id='page'>

<div id='clearfix-wrapper'><div id='clearfix'>

  <div id='header-wrapper'><div id='header'>


    <?php if ($page['user_login']): ?>
      <?php print render($page['user_login']); ?>
    <?php endif; ?>
    <?php if ($secondary_menu): ?>
      <div id="secondary-menu">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'id' => 'secondary-menu-links',
            'class' => array('links', 'inline'),
          ),
          'heading' => array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </div> <!-- /#secondary-menu -->
    <?php endif; ?>


    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan">

        <?php if ($site_name): ?>
          <div id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </div>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div id="site-slogan">
            <?php print $site_slogan; ?>
          </div>
        <?php endif; ?>

      </div> <!-- /#name-and-slogan -->
    <?php endif; ?>

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
    <?php if ($main_menu): ?>
      <ul id="main-menu">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </ul> <!-- /#main-menu -->
    <?php endif; ?>


        <div class='push'></div>
  </div></div><!-- /#header , /#header-wrapper -->


  <?php if ($messages): ?>
    <div id="messages">
      <?php print $messages; ?>
    </div> <!-- /#messages -->
  <?php endif; ?>


  <div id='main-wrapper'><div id='main'>

  <?php 
    /*
      <?php if ($breadcrumb): ?>
        <div id="breadcrumb"><?php print $breadcrumb; ?></div>
      <?php endif; ?>
    */
  ?>


    <?php 
      /*
        <?php if ($page['sidebar_first']): ?>
          <div id="sidebar-first" class="column sidebar">
            <?php print render($page['sidebar_first']); ?>
          </div> <!-- /.section, /#sidebar-first -->
        <?php endif; ?>
      */
    ?>

    <div id="content" class="column">

      <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>

      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>

      <?php print render($title_suffix); ?>

      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>

      <?php print render($page['help']); ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php print render($page['content']); ?>

      <?php if ($page['blog_feed']): ?>
      <div id='blog_feed_container'>
        <?php 
          /*
            <?php foreach($page['blog_feed']['blog_feed_block_blog_feed_block']['nodes'] as $key => $value): ?>
            <?php var_dump($key); ?>
            <?php var_dump($value); ?>
            <?php endforeach;?>
          */
        ?>
        <?php
          $prev = array(
            '#type' => 'button',
            '#value'=>t('prev'),
            '#id'=>'blog_feed_prev',
            '#attributes'=>array('disabled'=>'disabled')
            );

          echo drupal_render($prev);

          print render($page['blog_feed']);

          $next = array(
            '#type' => 'button',
            '#value'=>t('next'),
            '#id'=>'blog_feed_next',
            '#attributes'=>array(),
            '#ajax' => array(
                'callback' => 'some_callback_function',
                'wrapper' => 'blog_feed_container',
                'method' => 'replace',
                'effect' => 'fade'
              )
            );

          echo drupal_render($next);
        ?>
      </div><!-- /#blog_feed_container -->
      <?php endif; ?>


    </div> <!-- /#content -->

    <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="column sidebar"><div class="section">
        <?php print render($page['sidebar_second']); ?>
      </div></div> <!-- /.section , /#sidebar-second -->
    <?php endif; ?>


  </div></div><!-- /#main , /#main-wrapper -->
</div></div><!-- /#clearfix , /#clearfix-wrapper -->

  <div id='footer-wrapper'>
    <?php if ($page['footer']): ?>
      <div id="footer">
        <?php print render($page['footer']); ?>
      </div> <!-- /#footer -->
    <?php endif; ?>

  </div><!-- /#footer-wrapper -->

</div></div><!-- /#page , /#page-wrapper -->
