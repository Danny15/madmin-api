<?php
session_start();
require_once dirname(dirname(__FILE__)) . '/config.core.php';
$coreConfig = MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
if (file_exists($coreConfig)) {
    /** @noinspection PhpIncludeInspection */
    require_once $coreConfig;
}
require 'vendor/autoload.php';
use Slim\App as Slim;
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => $database_type,
    'host'      => $database_server,
    'database'  => $dbase,
    'username'  => $database_user,
    'password'  => $database_password,
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => $table_prefix,
]);

// Set the event dispatcher used by Eloquent models... (optional)
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
$capsule->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$app = new Slim();

\App\App::setup($app);

require_once "routes.php";

$app->run();
