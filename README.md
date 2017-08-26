# Laravel SiteImprove Wrapper [wip]

## Installation

Currently not on packagist, so you'll just have to clone it into your project:

``` bash
git clone ... whatever you can figure it out.
```
You must install this service provider.

```php
// config/app.php
'providers' => [
    ...
    VCU\SiteImprove\SiteImproveServiceProvider::class,
    ...
];
```

Then you'll need to publish the config file of this package with this command:

``` bash
php artisan vendor:publish --provider="VCU\SiteImprove\SiteImproveServiceProvider"
```

## Usage

``` php
$siteImprove = new VCU\SiteImprove\Siteimprove;
$allSites = $siteImprove->all();
$individualSite = $siteImprove->find(1351616669);
$individualSiteAccessibilitySummary = $siteImprove->accessibilitySummary(1351616669);
```