<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Roots\Acorn\View\Composers\Concerns\AcfFields;
use WP_Query;

class Homepage extends Composer
{
    use AcfFields;

    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'template-home'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'company_profile' => get_field('company_profile', 'option'),
            'profils' => collect($this->getCompanyMessage())
        ];
    }

    private function getCompanyMessage()
    {
        $profils = [];

        $args = [
            'category_name' => 'profiling',
            'posts_per_page' => 2,
        ];

        $posts  = new WP_Query($args);
        while($posts->have_posts()) {
            $posts->the_post();

            $profils[] = [
                'title' => get_the_title(),
                'image' => get_the_post_thumbnail_url(),
                'designation' => get_field('designation'),
                'name' => get_field('name'),
                'link' => get_permalink()
            ];
        }

        return $profils;
    }
}
