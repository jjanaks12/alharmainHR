<?php

namespace App\Fields;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

class Banner extends Field
{
    /**
     * The field group.
     */
    public function fields(): array
    {
        $banner = Builder::make('banner');

        $banner
            ->setLocation('post_type', '==', 'banner');

        $banner
            ->addUrl('Video URL')
            ->addSelect('country', [
                'label' => 'Select a country',
                'choices' => ['', 'Malaysia', 'Saudia Arabia', 'Qatar'],
                'default_value' => [],
                'allow_null' => 0,
                'multiple' => 0,
                'return_format' => 'value',
                'placeholder' => 'none',
            ]);

        return $banner->build();
    }
}
