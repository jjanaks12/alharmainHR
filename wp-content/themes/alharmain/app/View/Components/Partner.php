<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use WP_Query;

class Partner extends Component
{
    private $total = 0;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->total = wp_count_posts('partner');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $noOfPostToGrab = 15;
        return view('components.partner')->with([
            'partners' => $this->getPartners($noOfPostToGrab),
            'count' => $this->total->publish - $noOfPostToGrab
        ]);
    }

    private function getPartners($per_page = 10)
    {
        $partners = [];
        $args = array(
            'post_type' => 'partner',
            'post_status' => 'publish',
            'posts_per_page' => $per_page,
            'order_by' => 'rand',
            'order' => 'DESC',
        );
        $posts = new WP_Query($args);

        while ($posts->have_posts()) {
            $posts->the_post();

            $partners[] = [
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'excerpt' => get_the_excerpt(),
                'image' => get_the_post_thumbnail_url(),
                'url' => get_permalink(),
                'company_url' => get_field('Url')
            ];
        }

        if ($partners)
            return $partners;

        return [];
    }
}
