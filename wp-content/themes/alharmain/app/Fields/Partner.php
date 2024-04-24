<?php

namespace App\Fields;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

class Partner extends Field
{
    /**
     * The field group.
     */
    public function fields(): array
    {
        $partner = Builder::make('partner');

        $partner
            ->setLocation('post_type', '==', 'partner');

        $partner
            ->addUrl('url');

        return $partner->build();
    }
}
