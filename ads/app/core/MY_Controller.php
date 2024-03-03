<?php defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	protected $data;
	public $isLogin;

	public $d;

	public function __construct()
	{
		parent::__construct();

		$this->current_lang = $this->session->userdata('lang');

		if (empty($this->current_lang)) {
			$this->session->set_userdata('lang', 'vi');
			$this->current_lang = 'vi';
		}

		if ($this->current_lang != 'en') $this->session->set_userdata('site_lang', 'vietnamese');
		if (!empty($_SESSION['lang'])) $this->session->set_userdata('lang', $_SESSION['lang']);



		#require_once SHAREDLIBRARIES . 'autoload.php';

		#new AutoLoad();

		#$d = new PDODb($info_db);



		$this->init_db();


		$this->data = array(
			'd' => $this->d,

			'template' => 'page/home/index',
			'lang' => $this->session->userdata('lang'),
			'isMobile' => $this->agent->is_mobile(),
			'isLogin' => $this->isLogin
		);
	}

	public function index()
	{
	}
	public function init_db()
	{
		require_once ROOT . 'shared/libraries/class/class.PDODb.php';


		$config = $this->config->item('main_config');
		$info_db = $config['database'];


		$this->d = new PDODb($info_db);
	}
}
