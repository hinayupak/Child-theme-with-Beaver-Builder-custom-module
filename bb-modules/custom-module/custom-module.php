<?php

class CustomModule extends FLBuilderModule {
    public function __construct() {
        parent::__construct(array(
            'name'            => __('Custom Module', 'fl-builder'),
            'description'     => __('A custom module for Beaver Builder', 'fl-builder'),
            'group'           => __('Custom Modules', 'fl-builder'),
            'category'        => __('Custom', 'fl-builder'),
            'dir'             => get_stylesheet_directory() . '/bb-modules/custom-module/',
            'url'             => get_stylesheet_directory_uri() . '/bb-modules/custom-module/',
            'icon'            => 'star.svg',  // Set your icon
            'editor_export'   => true,
            'enabled'         => true,
            'partial_refresh' => true,
        ));

        // Include CSS and JS
        // echo '<pre>';
        // print_r($this->url);
        // echo '</pre>';
        $this->add_css('example-lib', $this->url . 'css/example-lib.css');
        $this->add_js('example-lib', $this->url . 'js/example-lib.js', array(), '', true);
    }
}

FLBuilder::register_module('CustomModule', array(
    'general' => array(
        'title'    => __('General', 'fl-builder'),
        'sections' => array(
            'content' => array(
                'title'  => __('Content', 'fl-builder'),
                'fields' => array(
                    'heading' => array(
                        'type'        => 'text',
                        'label'       => __('Title', 'fl-builder'),
                        'default'     => 'Title',
                        'placeholder' => __('Enter title', 'fl-builder'),
                    ),
                    'image' => array(
                        'type'        => 'photo',
                        'label'       => __('Image', 'fl-builder'),
                    ),
                    'text' => array(
                        'type'        => 'editor',
                        'label'       => __('Paragraph', 'fl-builder'),
                        'media_buttons' => true,
                    ),
                    'primary_button' => array(
                        'type'        => 'text',
                        'label'       => __('Primary Button Text', 'fl-builder'),
                        'default'     => 'Primary Button',
                        'placeholder' => __('Enter primary button text', 'fl-builder'),
                    ),
                    'primary_button_link_field' => array(
                        'type'          => 'link',
                        'label'         => __('Primary Button Link Field', 'fl-builder'),
                        'placeholder'   => __( '', 'fl-builder' ),
                        'show_target'   => true,
                        'show_nofollow' => true,
                        'show_download' => true,
                    ),
                    'secondary_button' => array(
                        'type'        => 'text',
                        'label'       => __('Secondary Button Text', 'fl-builder'),
                        'default'     => 'Secondary Button',
                        'placeholder' => __('Enter secondary button text', 'fl-builder'),
                    ),
                    'secondary_button_link_field' => array(
                        'type'          => 'link',
                        'label'         => __('Secondary Button Link Field', 'fl-builder'),
                        'placeholder'   => __( '', 'fl-builder' ),
                        'show_target'   => true,
                        'show_nofollow' => true,
                        'show_download' => true,
                    ),
                ),
            ),
        ),
    ),
));
?>
