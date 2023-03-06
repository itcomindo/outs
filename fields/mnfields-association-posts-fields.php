<?php
defined('ABSPATH') || exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;


// add_action('carbon_fields_register_fields', 'association_post_fields_mn');

function association_post_fields_mn() {
    Container::make('post_meta', 'The Association Posts')
    ->where('post_type', '=', 'post')
    ->where('post_term', '=', array(
        'field' => 'slug',
        'value' => 'journal',
        'taxonomy' => 'category',
    ))
    ->add_fields([
        // post association fields
        Field::make('association', 'crb_association', 'Post Association')
        ->set_duplicates_allowed(false)
            ->set_types(array(
                array(
                    'type' => 'post',
                    'post_type' => 'post',
                ),
            ))
            ->set_min(5)
            ->set_max(9)
            ->set_help_text('Select a post to associate with this post')
            ->set_types(array(
                array(
                    'type' => 'post',
                    'post_type' => 'post',
                    'post_terms' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'journal',
                        ),
                    ),

                )
            )),

    ]);

}