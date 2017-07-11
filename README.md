# Craft Yml2twig

Parse a yaml file and injects its content as a twig variable.

-------------------------------------------

## Requirements

- [Craft 2.5+](http://craftcms.com/)
- **PHP 5.6+**

## Installation

1. Download the latest release of the plugin
2. Drop the `yml2twig` plugin folder to `craft/plugins`
3. Create a file `yml2twig.yml` at the root of your craft templates folder
4. Install Yml2twig plugin from the control panel in `Settings > Plugins`
5. Inside your twig template, you can load your YAML content like this : `{% set var = craft.yml2twig.content %}` 
6. You can access to a YAML entry like this : `{{ var.yamlentry.yamlsubentry }}` 

## Notes

You should consider to define your twig variable inside a root template and extends it. This way, your var is available inside all subtemplates. 


## Links

[justdoweb.be](https://justdoweb.be/) © 2017 - All rights reserved