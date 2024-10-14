<div class="custom-module">
    <div class="col-left">

        <h2 class="custom-module-title">
            <?php echo $settings->heading; ?>
        </h2>

        <div class="custom-module-text">
            <?php echo $settings->text; ?>
        </div>

        <div class="custom-module-btn-container">
        
            <?php if ($settings->primary_button) : ?>
                <?php
                    // echo '<pre>';
                    // print_r($settings);
                    // echo '</pre>';

                    $primary_link = $settings->primary_button_link_field ? $settings->primary_button_link_field : 'javascript:void(0)';
                    $primary_target = $settings->primary_button_link_field_target == '_blank' ? 'target="_blank"' : '';
                    $primary_follow = $settings->primary_button_link_field_nofollow == 'yes' ? 'rel="nofollow"' : '';
                    $primary_download = $settings->primary_button_link_field_download == 'yes' ? 'download' : '';
                ?>
                <a 
                    href="<?php echo $primary_link; ?>" 
                    class="custom-module-primary" 
                    <?php echo $primary_target . ' ' . $primary_follow . ' ' . $primary_download; ?>
                >
                    <?php echo $settings->primary_button; ?>
                </a>
            <?php endif; ?>

            <?php if ($settings->secondary_button) : ?>
                <?php
                    $secondary_link = $settings->secondary_button_link_field ? $settings->secondary_button_link_field : 'javascript:void(0)';
                    $secondary_target = $settings->secondary_button_link_field_target == '_blank' ? 'target="_blank"' : '';
                    $secondary_follow = $settings->secondary_button_link_field_nofollow == 'yes' ? 'rel="nofollow"' : '';
                    $secondary_download = $settings->secondary_button_link_field_download == 'yes' ? 'download' : '';
                ?>
                <a 
                    href="<?php echo $secondary_link; ?>" 
                    class="custom-module-secondary" 
                    <?php echo $secondary_target . ' ' . $secondary_follow . ' ' . $secondary_download; ?>
                >
                    <?php echo $settings->secondary_button; ?>
                </a>
            <?php endif; ?>

        </div>

    </div>
    <div class="col-right">

        <?php if ($settings->image) : ?>
            <img class="custom-module-img" src="<?php echo wp_get_attachment_url($settings->image); ?>" alt="">
        <?php endif; ?>

        <div class="tooltip-container">
            <div class="tooltip">
                <div class="tooltip-left">
                    92%
                </div>
                <div class="tooltip-right">
                    Aena est,<br />ipsum ipsum
                </div>
            </div>
            <div class="tooltip">
                <div class="tooltip-left">
                    20+
                </div>
                <div class="tooltip-right">
                    Aena est,<br />ipsum ipsum
                </div>
            </div>
        </div>

    </div>
</div>