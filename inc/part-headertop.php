<div class="header-top">
    <div class="py-2 text-center text-md-start d-flex align-items-center justify-content-between">
        <?php $sitelogo = velocitytheme_option('custom_logo'); ?>
        <div class="logo-header">
            <?php if ($sitelogo) : ?>
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo wp_get_attachment_image_url($sitelogo, 'full'); ?>" alt="Site Logo" loading="lazy">
                </a>
            <?php endif;  ?>
        </div>
        <div class="profile-icons px-2">
            <div class="d-flex justify-content-center justify-content-md-end align-items-center">
                <div class="p-2"><?php echo do_shortcode('[profile]'); ?></div>
                <div class="p-2"><?php echo do_shortcode('[cart]'); ?></div>
            </div>
        </div>
    </div>
    <div class="row m-0 border-top border-bottom bg-gray align-items-center justify-content-end p-2 py-md-1">
        <div class="col-md-9 kontak-seller text-end px-1">
            <?php echo do_shortcode('[kontak style="false"]'); ?>
        </div>
        <div class="col-md-3 form-header px-1">
            <form action="<?php echo get_site_url(); ?>/products" class="d-flex float-end bg-white rounded-1" method="get" style="max-width:300px;">
                <input class="form-control form-control-sm px-2 py-1 h-auto rounded-start border-0" style="font-size: 12px;" type="text" name="s" placeholder="Cari..">
                <button type="submit" class="border-0 btn bg-dark btn-sm py-1 h-auto rounded-0 rounded-end border-0">
                    <svg class="bi text-white" fill="currentColor" width="16" height="16">
                        <use href="#search"></use>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>