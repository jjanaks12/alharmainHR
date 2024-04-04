<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Footer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'sections.footer'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteEmail' => get_field('Email', 'option'),
            'siteAddress' => get_field('Address', 'option'),
            'sitePhone' => $this->getPhoneNO()
        ];
    }

    public function getPhoneNO()
    {
        $phones = get_field('Phone number', 'option');

        if ($phones) {
            $phones = array_filter($phones, function ($phone) {
                return $phone['Show this'];
            });

            $phones = array_map(
                function ($phone) {
                    return $phone['Phone'];
                },
                $phones
            );
        }

        return $phones ? implode(', ', $phones) : '';
    }
}
