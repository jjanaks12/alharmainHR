<?php

namespace App\Options;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Options as Field;

class ThemeOptions extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Theme Options';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Theme Options | Options';

    /**
     * The option page field group.
     */
    public function fields(): array
    {
        $themeOptions = Builder::make('theme_options');

        $themeOptions
            ->addEmail('Email')
            ->addText('Address')
            ->addRepeater('Phone number')
                ->addText('Phone')
                ->addTrueFalse('Show this')
            ->endRepeater()
            ->addGroup('Header')
                ->addImage('logo', ['label' => 'Logo', 'return_format' => 'id'])
            ->endGroup()
            ->addRepeater('Partners')
                ->addText('Name')
                ->addUrl('URL')
                ->addImage('partner_logo', ['label' => 'Logo', 'return_format' => 'id'])
            ->endRepeater()
            ->addGroup('Footer')
            ->endGroup();

        return $themeOptions->build();
    }
}
