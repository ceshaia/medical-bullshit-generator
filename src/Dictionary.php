<?php

namespace Einenlum\BullshitGenerator;

class Dictionary
{
    public static function getPrefixes()
    {
        return [
            'osthéo',
            'kinésio',
            'naturo',
            'géo',
            'nutri',
            'astro',
            'grapho',
            'homéo',
            'chiro',
            'irido',
            'éco',
            'éthio',
            'réflexo',
            'psycho',
            'biokinergo',
        ];
    }

    public static function getSuffixes()
    {
        return [
            'practeur',
            'pathe',
            'biologue',
            'puncteur',
            'logue',
            'praxologue',
        ];
    }

    public static function getDomains()
    {
        return [
            'tantrique',
            'quantique',
            'cellulaire',
        ];
    }

    public static function getExcludedWords()
    {
        return [
            'psychologue',
            'géologue'
        ];
    }
}
