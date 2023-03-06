<?php
defined('ABSPATH') || exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;



add_action('carbon_fields_register_fields', 'journal_post_fields');
function journal_post_fields()
{
    Container::make('post_meta', 'Journal Post Fields')
        ->where('post_type', '=', 'post')
        ->where('post_term', '=', array(
            'field' => 'slug',
            'value' => 'journal',
            'taxonomy' => 'category',
        ))
        ->add_fields(array(

            // unsplash image fields
            Field::make('text', 'unsplash_author', 'Unsplash Author')
                ->set_help_text('Unsplash Author Name'),

        ));
        
}

