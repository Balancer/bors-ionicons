# bors/ionicons

[Ionicons](http://ionicons.com/) The premium icon font for Ionic Framework.

```bash
# To use CDN-version
composer require bors/ionicons

# To use local asset version need also:
composer require bower-asset/ionicons
```

Local or CDN version detects automatically via `bower-asset/ionicons` package install.

Call `\B2\Ionicons::load();` in `pre_show()` method on any view or config.

```php
namespace \MyApp;

class View extends \B2\View
{
	function pre_show()
	{
		\B2\Ionicons::load();
		return parent::pre_show();
	}
}
```
