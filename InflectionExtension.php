<?php
namespace Gone\Twig;

use Camel\CaseTransformer;
use Camel\Format;
use Gone\Inflection\Inflect;

class InflectionExtension extends \Twig_Extension
{
    public function getFilters()
    {
        $filters = [];
        $filters['pluralize'] = new \Twig_SimpleFilter('pluralize', function($word){
            return Inflect::pluralize($word);
        });
        $filters['singularize'] = new \Twig_SimpleFilter('singularize', function($word){
            return Inflect::singularize($word);
        });

        return $filters;
    }

    public function getName()
    {
        return 'inflection_extension';
    }
}
