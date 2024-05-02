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
            ])
            ->addText('company_address')
            ->addRepeater('details')
                ->addTaxonomy('job_position', [
                    'label' => 'Job Position',
                    'taxonomy' => 'job_position',
                    'field_type' => 'select',
                ])
                ->addText('demand_for_male', [
                    'default_value' => 0
                ])
                ->addText('demand_for_female', [
                    'default_value' => 0
                ])
                ->addText('monthly_salary')
                ->addGroup('working')
                    ->addNumber('hour', [
                        'default_value' => 8
                    ])
                    ->addNumber('days', [
                        'default_value' => 6
                    ])
                ->endGroup()
                ->addGroup('facilities')
                    ->addTrueFalse('food')
                    ->addTrueFalse('accommodation')
                ->endGroup()
                ->addNumber('duration', [
                    'default_value' => 2
                ])
            ->endRepeater()
            ->addGroup('interview')
                ->addText('address')
                ->addTrueFalse('is_headquater')
                ->addDatePicker('date')
            ->endGroup();

        return $demand->build();
    }
}
