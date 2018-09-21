<?

namespace Application\Model;

class UserModel
{
	public $name;
	public $email;
	public $password;

	public function create()
	{
		$user = new UserModel();
		$user->name = 'Steven';
		$user->email = 'sdejong@competa.com';
		$user->password = 'hoi';
		$user->make();
	}

	static function fetchUser($id)
	{
		$data = null;

		if ($id === 123) {
			$data = (object) [
				'name' => 'Steven',
				'email' => 'sdejong@competa.com',
				'password' => 'hoi'
			];
		}

		return $data;
	}

	static function fetchAll()
	{
		$data = [
			(object) [
				'name' => 'Steven',
				'email' => 'sdejong@competa.com',
				'password' => 'hoi'
			],
			(object) [
				'name' => 'Steven2',
				'email' => 'sdejong@competa.com',
				'password' => 'hoi'
			]
		];

		return $data;
	}
}
