<?

namespace Application\Controller;

use Core\Controller;
use Core\Router;
use Application\Model;

class User
{
	public function get()
	{
		$user = Model\UserModel::fetchUser(123);

		Router::render($user);
	}

	public function getAll()
	{
		$user = Model\UserModel::fetchAll();

		Router::render($user);
	}
}
