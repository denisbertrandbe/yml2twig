<?php
namespace Craft;

use Symfony\Component\Yaml\Yaml;

class Yml2twigVariable
{
    public function content()
    {
        $templatePath = craft()->path->getTemplatesPath();
        $filename = craft()->config->get('filename', 'yml2twig');
        $fullPath = $templatePath . $filename;
        if(file_exists($fullPath)){
            return Yaml::parse(file_get_contents($fullPath));
        }
        return array();
    }
}