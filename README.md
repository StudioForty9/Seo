SF9 SEO
============================
Allows the updating of SEO value (Meta Title, Meta Description and Robots) for Products, Categories and CMS Pages in a grid that uses inline editing (i.e., saved automatically)


Installation
-------------

### Composer
If you have not used Composer to install Magento modules before, we recommend following the following blog posts:

- [http://magebase.com/magento-tutorials/composer-with-magento/](http://magebase.com/magento-tutorials/composer-with-magento/)
- [http://alanstorm.com/php_composer_magento_tutorial](http://alanstorm.com/php_composer_magento_tutorial)

Once, you are comfortable with this process all you need to do is:

1. Add the following to your "repositories" attribute in your composer.json file:

   `{
		   	"type": "git",
   			"url": "https://github.com/StudioForty9/Seo.git"   			
    }`

2. Add the following under the "required" attribute in your composer.json:

	`"sf9/seo":"dev-default"`

3. Run `composer update --no-dev` in a shell from your Magento root directory.
4. Clear the Magento cache

Use
--------------
- Go to Catalog -> SEO -> Products|Categories|Pages
- Edit any of the fields
- When you click in a different field the new value will be saved immediately via AJAX


Compatability
--------------
- Magento Community Edition >= 1.5

Uninstallation Instructions
----------------------------
	
### Composer
1. Remove the line `"sf9/seo":"dev-default"` from the composer.json file
2. Run `composer update --no-dev` from the Magento root directory

Support
-------
If you have any issues with this extension, open an issue on GitHub (see URL above)

Contribution
------------
Any contributions are highly appreciated. The best way to contribute code is to open a
[pull request on GitHub](https://help.github.com/articles/using-pull-requests).

Developer
---------
StudioForty9
[http://www.studioforty9.com](http://www.studioforty9.com)
[@sf9](https://twitter.com/sf9)

Licence
-------
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)

Copyright
---------
(c) 2014 StudioForty9