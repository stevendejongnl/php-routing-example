<?

error_reporting(E_ALL);
ini_set('display_errors', 'on');

define('RootPath', realpath(dirname($_SERVER['DOCUMENT_ROOT'])));
define('ApplicationPath', RootPath . "/Application");
define('CorePath', RootPath . "/Core");

/**
 * Composer Autoload
 */
require RootPath . '/vendor/autoload.php';

$dot_env = new Dotenv\Dotenv(RootPath);
$dot_env->load();
$router = new Core\Router();

$variable = getenv('DBName');
//echo $variable;

$router->load();
