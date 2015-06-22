<?php global $dm_settings; ?>
<?php if ($dm_settings['show_postmeta'] != 0) : ?>
    <p class="postmeta">
        <?php _e('Publicado em','devdmbootstrap3'); ?>
        <?php the_category(', '); ?> em
         <?php the_time('d \d\e F \d\e Y'); ?>

        <?php edit_post_link(__(' - Editar','devdmbootstrap3')); ?>
    </p>



<?php endif; ?>