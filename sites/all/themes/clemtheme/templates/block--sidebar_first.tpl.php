<?php

//var_dump($variables);



?>


<ul id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
<?php if ($block->subject): ?>
  <li<?php print $title_attributes; ?>><?php print $block->subject ?>


  <?php print render($title_suffix); ?>
      <?php print $content ?>

  </li>
<?php endif;?>
</ul>

