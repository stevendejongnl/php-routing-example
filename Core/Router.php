<?

namespace Core;

//use Application\Controller;

class Router
{
	private $request;

	function __construct()
	{
		$this->request = $_SERVER['REQUEST_URI'];
	}

	public function load()
	{
		$parts = explode('/', $this->request);

//		$parts = [
//			'controller' => 'user',
//			'action' => 'get'
//		];
//		var_dump($parts);

		$controller = null;
		if (isset($parts[2]))
			$controller = ucwords($parts[2]);

		$action = null;
		if (isset($parts[3]))
			$action = $parts[3];

		$controllerName = "Application\Controller\\$controller";
		$getController = new $controllerName();

		$getController->$action();
	}

	static function render($data)
	{
		header('Content-Type: application/json');
		echo json_encode($data);
		exit;
	}
}
