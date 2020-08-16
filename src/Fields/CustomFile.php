<?php

namespace Grafite\Forms\Fields;

use Grafite\Forms\Fields\Field;

class CustomFile extends Field
{
    protected static function getType()
    {
        return 'custom-file';
    }

    protected static function getOptions()
    {
        return [];
    }

    protected static function getFactory()
    {
        return 'image';
    }
}
