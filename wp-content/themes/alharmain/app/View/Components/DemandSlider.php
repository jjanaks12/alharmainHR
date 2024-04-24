<?php

namespace App\View\Components;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use WP_Query;

class DemandSlider extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.demand-slider')->with([
            'demands' => $this->getDemands()
        ]);
    }

    private function getDemands()
    {
        $demands = [];
        $args = array(
            'post_type' => 'demand',
            'post_status' => 'publish',
            'posts_per_page' => 10
            // 'meta_key' => '_expiration-date'
        );
        $posts = new WP_Query($args);

        while ($posts->have_posts()) {
            $posts->the_post();
            $terms = get_the_terms(get_the_ID(), 'country');
            $country = '';

            $expiration = get_field('Expiration');
            $today = Carbon::now();
            $expirationDate = Carbon::createFromFormat('d/m/Y', $expiration);
            // $daysLeft = floor((strtotime($expirationDate) - strtotime("now")) / (60 * 60 * 24));
            $daysLeft = $today->diffInDays($expirationDate, false);

            if ($daysLeft > 0) {
                foreach ($terms as $term) {
                    $country .= $term->name;
                }

                $demands[] = [
                    'id' => get_the_ID(),
                    'title' => get_the_title(),
                    'excerpt' => get_the_excerpt(),
                    'image' => get_the_post_thumbnail_url(),
                    'url' => get_permalink(),
                    'country' => $country,
                    'expiry' => $expiration
                ];
            }
        }
        return collect($demands);
    }
}
