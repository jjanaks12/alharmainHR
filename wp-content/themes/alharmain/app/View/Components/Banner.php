<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use WP_Query;

class Banner extends Component
{

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banner')->with(['banners' => $this->getBanners()]);
    }

    private function getBanners()
    {
        $banners = [];
        $args = array(
            'post_type' => 'banner',
            'post_status' => 'publish',
            'posts_per_page' => -1
        );
        $posts = new WP_Query($args);

        while ($posts->have_posts()) {
            $posts->the_post();

            $banners[] = [
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'excerpt' => get_the_excerpt(),
                'image' => get_the_post_thumbnail_url(),
                'url' => get_permalink(),
                'video' => get_field('Video URL'),
                'country' => get_field('country')
            ];
        }
        return collect($banners);
    }
}
