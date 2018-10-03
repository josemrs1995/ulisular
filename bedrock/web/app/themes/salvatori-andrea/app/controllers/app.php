<?php

// Global data available in all views extending app.blade.php

namespace App;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public function currentTemplate()
    {
        return basename(get_page_template() ,'.blade.php');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function excerpt()
    {
        return get_the_excerpt();
    }

    public static function thumbnail()
    {
        return get_the_post_thumbnail_url();
    }


    public static function glideImage()
    {
        return str_replace('/app/uploads/', '/img/', get_the_post_thumbnail_url());
    }
    function serviciosLoop()
    {
        $servicios = get_posts([
            'post_type' => 'servicios',
            'has_archive' => false,
        ]);
 
        return array_map(function ($post) {
            return [
                'thumbnail' => get_the_post_thumbnail_url($post->ID, 'large'),
                'title' => get_the_title($post->ID),
                'resumen' =>apply_filters( 'the_excerpt',get_the_excerpt($post->ID) ),
                'link' => get_permalink($post->ID),
                'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
                'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
                'tags' => get_tags($post->ID)    
            ];
        }, $servicios);
    }

    function procesosLoop()
    {
        $procesos= get_posts([
            'post_type' => 'post',
            'order' => 'ASC', 'include' => array(),
        ]);
 
        return array_map(function ($post) {
            return [
                'thumbnail' => get_the_post_thumbnail_url($post->ID, 'large'),
                'title' => get_the_title($post->ID),
                'resumen' =>apply_filters( 'the_excerpt',get_the_excerpt($post->ID) ),
                'link' => get_permalink($post->ID),
                'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
                'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
                'tags' => get_tags($post->ID),
                'date' => get_the_date( 'l F j, Y', $post->ID ) 
            ];
        }, $procesos);
    }
}
