<?php global $dm_settings; ?>
<?php if ($dm_settings['show_postmeta'] != 0) : ?>

    <?php if( has_tag() ) : ?>
        <div class="tags">
        <p> <?php the_tags('<strong>Palavras-chave:</strong> ', ', '); ?> </p>
        </div>
    <?php endif; ?>
<?php endif; ?>