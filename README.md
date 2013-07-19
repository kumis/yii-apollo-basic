yii-apollo-basic
=======

A basic base app for the Yii Framework.

## Setup

 * Set up Git by following the instructions [here](https://help.github.com/articles/set-up-git).
 * Update the configurations in `app/config/` to suit your needs. The `app/config/main.php` isn't configured to use a database by default. Edit your `common/config/environments/dev.php` and `prod.php` to suit your database requirements. (Unless you are running the app in dev mode `yiic env dev`, it'll use `prod.php`.)
 * Composer is required. The package includes already a `composer.phar` file.
 * Browse through the `composer.json` and remove the dependencies you don't need also update the required versions of the extensions.
 * If you have `composer` installed globally:
	* Run `composer self-update` to make sure you have the latest version of composer.
	* Run `composer install` to download all the dependencies.
 * If you work the `composer.phar` library within the project.
    * Run `php composer.phar self-update` to make sure you have the latest version of composer.
    * Run `php composer.phar install` to download all the dependencies. 
 * Download and install Node.js by following the instructions here [here](https://github.com/joyent/node/wiki/Installing-Node.js-via-package-manager).
 * Run `npm install` to download  Node.js dependencies.
 * Update the configurations in `app/config` to suit your needs.
 * Start Grunt by running `grunt` and it will compile your LESS and deploy your JavaScript files.
 * Run `yiic env dev` to activate the development environment.
 * Run `yiic debug on` to enable the debugging mode.
 * You're done! Navigate to `web/index.php` to see your application.

For more information on Composer and Grunt:

* [Composer documentation](http://getcomposer.org/doc/)
* [Grunt documentation](http://gruntjs.com/getting-started)

## Extensions

The following extensions are part of yii-apollo-basic:

 * Config builder https://github.com/Crisu83/yii-configbuilder
 * Debug https://github.com/Crisu83/yii-debug
 * Debug toolbar https://github.com/malyshev/yii-debug-toolbar
 * Yiistrap https://github.com/Crisu83/yiistrap

Please consult the extension documentation for further information.

A sincere thanks to Crisu83 for making his fine work available.