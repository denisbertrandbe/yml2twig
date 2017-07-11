<?php
namespace Craft;

class Yml2twigPlugin extends BasePlugin
{
    public function init()
    {
        require_once __DIR__ . '/vendor/autoload.php';
    }
    function getName()
    {
        return Craft::t('Yml2twig');
    }

    function getDescription()
    {
        return 'This plugin read a Yaml file and inject its content as a twig variable.';
    }

    function getVersion()
    {
        return '0.1';
    }

    function getDeveloper()
    {
        return 'Justdoweb';
    }

    function getDeveloperUrl()
    {
        return 'https://justdoweb.be';
    }
}
