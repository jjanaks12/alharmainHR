<?php

namespace App\Fields;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

class Demand extends Field
{
    /**
     * The field group.
     */
    public function fields(): array
    {

        $demand = Builder::make('demand');

        $demand
            ->setLocation('post_type', '==', 'demand');

        $demand
            ->addDatePicker('Expiration', [
                'required' => true
            ]);

        return $demand->build();
    }
}
