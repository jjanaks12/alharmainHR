<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Roots\Acorn\View\Composers\Concerns\AcfFields;
use WP_Term_Query;

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
            'img02' => asset('/images/home_img_02.png')->uri(),
            'img03' => asset('/images/home_img_03.png')->uri(),
            'img04' => asset('/images/home_img_04.png')->uri(),
            'img05' => asset('/images/home_img_05.png')->uri(),
            'img06' => asset('/images/home_img_06.png')->uri(),
            'img07' => asset('/images/home_img_07.png')->uri(),
            'img08' => asset('/images/home_img_08.png')->uri(),
            'img09' => asset('/images/home_img_09.png')->uri(),
            'img11' => asset('/images/home_img_11.png')->uri(),
            'img12' => asset('/images/home_img_12.png')->uri(),
            'img13' => asset('/images/home_img_13.png')->uri(),
            'company_profile' => get_field('company_profile', 'option'),
            'test' => collect($this->getCompanyMessage())
        ];
    }

    private function getCompanyMessage()
    {
        $profils = [];

        $args = [
            'taxonomy' =>  'profiling',
            'hide_empty' => false,
            'fields' => 'all',
            'count' => true,
        ];

        $posts  = new WP_Term_Query($args);
        foreach ($posts->terms as $term) {
            $profils[] = [
                'name' => $term->title,
                'designation' => 'Chairman'
            ];
        }

        return $profils;
    }
}
