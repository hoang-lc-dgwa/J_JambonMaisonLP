<?php
$information = get_posts(array(
  'posts_per_page' => 4
));
if ($information) :

  foreach ($information as $post) :
    setup_postdata($post);
?>

    <dt><time datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time></dt>
    <dd>
    <?php if( get_field('custum_url') ){ ?>
      <a href="<?php the_field('custum_url') ?>" target="_blank"><?php the_title(); ?></a>
    <?php } else { ?>
      <?php the_title(); ?>
    <?php } ?>  
    </dd>
  <?php
  endforeach;
  wp_reset_postdata();
  ?>
  </ul>
<?php else : ?>
  <p class="information__note">お知らせはまだありません。</p>
<?php endif; ?>