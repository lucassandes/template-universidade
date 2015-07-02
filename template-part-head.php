<?php global $dm_settings; ?>

<header id="header">
    <div class="container dmbs-container">

        <!-- barra de acessibilidade -->
        <?php get_template_part('template-part', 'accessibility'); ?>
        <!-- /barra de acessibilidade -->
        <?php if ($dm_settings['show_header'] != 0) : ?>

            <div class="row dmbs-header">

                <?php if (get_header_image() != '' || get_header_textcolor() != 'blank') : ?>

                    <?php if (get_header_image() != '') : ?>
                        <div class="col-md-8 dmbs-header-img">
                            <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php header_image(); ?>"
                                                                                 height="<?php echo get_custom_header()->height; ?>"
                                                                                 width="<?php echo get_custom_header()->width; ?>"
                                                                                 alt="Logo da Universidade Fictícia"/></a>
                        </div>
                        <h1 class="hidden"><?php bloginfo( 'name' ); ?></h1>
                    <?php endif; ?>


                <?php endif; ?>

                <!-- busca -->
                <div class="col-md-4 ">
                    <div class="widget-search-top" id="busca-teste">
                        <form role="search" method="get" id="searchform" class="searchform"
                              action="<?php echo home_url('/'); ?>">
                            <div class="input-group">
                                <input type="text" class="form-control search-field" name="s" id="s" accesskey="3"
                                       placeholder="<?php echo esc_attr_x('Faça sua busca ...', 'placeholder') ?>"
                                       title="<?php echo esc_attr_x('Faça sua busca ...', 'label') ?>"/>
                                    <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit" ><span
                                                    class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                            </button>
                                     </span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /busca -->
            </div>

        <?php endif; ?>
    </div>
</header>


