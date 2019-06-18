<?php

namespace Grafite\FormMaker\Fields;

use Grafite\FormMaker\Fields\Field;

class RadioInline extends Field
{
    protected static function getType()
    {
        return 'radio';
    }

    protected static function getAttributes()
    {
        return [
            'class' => 'form-check-input'
        ];
    }
}