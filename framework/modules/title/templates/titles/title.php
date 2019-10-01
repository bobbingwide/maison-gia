<?php
do_action('maison_edge_action_before_page_title'); ?>
<div class="edgtf-title <?php echo maison_edge_title_classes(); ?>"  >
    <?php if(!empty($title_background_image_src)) { ?>
        <div class="edgtf-title-image">
            <img itemprop="image" src="<?php echo esc_url($title_background_image_src); ?>" alt="<?php esc_html_e('Title Image', 'maison'); ?>" />
        </div>
    <?php } ?>
    <div class="edgtf-title-holder">
        <div class="edgtf-container clearfix">
            <div class="edgtf-container-inner">
                <div class="edgtf-title-subtitle-holder" style="<?php echo esc_attr($title_subtitle_holder_padding); ?>">
                    <div class="edgtf-title-subtitle-holder-inner">
                        <?php switch ($type){
                        case 'standard': ?>
                        <?php if(maison_edge_get_title_text() !== '') { ?>
                        <<?php echo esc_attr($title_tag); ?> class="edgtf-page-title entry-title" <?php maison_edge_inline_style($title_color); ?>><span><?php maison_edge_title_text(); ?></span></<?php echo esc_attr($title_tag); ?>>
                    <?php } ?>
                    <?php if($has_subtitle){ ?>
                    <<?php echo esc_attr($subtitle_tag); ?> class="edgtf-subtitle" <?php maison_edge_inline_style($subtitle_styles); ?>><span><?php maison_edge_subtitle_text(); ?></span></<?php echo esc_attr($subtitle_tag); ?>>
                <?php } ?>
                <?php if($enable_breadcrumbs){ ?>
                    <div class="edgtf-breadcrumbs-holder"> <?php maison_edge_custom_breadcrumbs(); ?></div>
                <?php } ?>
                <?php break;
                case 'breadcrumb': ?>
                    <div class="edgtf-breadcrumbs-holder"> <?php maison_edge_custom_breadcrumbs(); ?></div>
                    <?php break;
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php do_action('maison_edge_action_after_page_title'); ?>
