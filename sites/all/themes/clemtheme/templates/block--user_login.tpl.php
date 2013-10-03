<?php

?>

<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
<?php if ($block->subject): ?>
  <div<?php print $title_attributes; ?>><?php print $block->subject ?></div>


  <?php print render($title_suffix); ?>
      <?php print $content ?>

<?php endif;?>
</div>
