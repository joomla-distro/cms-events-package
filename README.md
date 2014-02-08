# Events Package Installer

## Extension Types

### `cms-events`

Add support for Events Package.

## Installation via Composer

Add `"joomla-distro/cms-events-package": "*"` to the require block in your composer.json, make sure you have `"repository": "https://github.com/joomla-distro/packagist/raw/master/web/"` and then run `composer install`.

```json
{
	"require": {
		"joomla-distro/cms-distro-core": "*",
		"joomla-distro/cms-events-package": "*",
	},
	"repositories": [
		{
			"type": "composer",
			"url": "https://github.com/joomla-distro/packagist/raw/master/web/" 
		}
	]
}
```