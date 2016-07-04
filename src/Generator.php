<?php

namespace Einenlum\MedicalBullshitGenerator;

use Faker\Factory;

class Generator
{
    public static function generateName()
    {
        $faker = Factory::create('fr_FR');

        return $faker->name;
    }

    public static function generateTitle($domainProbability = 0.3)
    {
        $prefixes = Dictionary::getPrefixes();
        $suffixes = Dictionary::getSuffixes();

        shuffle($prefixes);
        shuffle($suffixes);

        $title = sprintf('%s%s', current($prefixes), current($suffixes));

        if (in_array($title, Dictionary::getExcludedWords())) {
            return static::generateTitle();
        }

        $domain = static::getDomain($domainProbability);

        if (null !== $domain) {
            $title = sprintf('%s %s', $title, $domain);
        }

        return ucfirst($title);
    }

    private static function getDomain($probability)
    {
        $random = mt_rand(0, 100);
        if ($random < ($probability*100)) {
            return;
        }

        $domains = Dictionary::getDomains();
        shuffle($domains);

        return current($domains);
    }
}
