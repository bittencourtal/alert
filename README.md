alert
=====


Register Service Provider

'provider' => array(
...
'Wikichua\Alert\AlertServiceProvider'
...
)

'aliases' => array(
...
'Alert' => 'Wikichua\Alert\Facades\Alert',
...
),

To use it

Alert::show();

Publishing asset and config file

php artisan config:publish wikichua/alert
php artisan asset:publish wikichua/alert

Configuration

return [
    'use_default_asset' => false, // set to true if want to use default bootstrap css / js from package
    'default_asset_path' => 'packages/wikichua/alert/', // try not to change this
];
