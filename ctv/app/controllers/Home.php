<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{


	function __construct()
	{
		parent::__construct();
	}


	public function index()
	{


		//https://admin.ckdvietnam.com/api/fetch?code=landingpage

		$url = "https://admin.ckdvietnam.com/api/fetch?code=landingpage";
		$get_data = @callAPI('GET', $url);
		$response = @json_decode($get_data, true);
		#echo '<pre>';
		#var_dump($response);




		$this->data['links'] = [
			'www' => 'https://ckdvietnam.com',
			'fb' => 'https://www.facebook.com/ckdvietnamchinhhang',
			'ig' => 'https://www.instagram.com/ckdcos_vietnam',
			'lazada' => 'https://www.lazada.vn/shop/ckd-vietnam',
			'shopee' => 'https://shopee.vn/ckdvietnam',
			'tiktok' => 'https://www.tiktok.com/@ckdvietnam',
		];

		$this->data['items'] = $response;
		$this->data['page'] = $this->load->view('home', $this->data, TRUE);
		$this->load->view('welcome', $this->data);
	}

	public function test()
	{

		$this->init_twig();
		$this->twig->render(
			'nav_vertical_bs5.html',

			[
				'level' => '1',
				'items' => [
					'class' => '111',
					'href' => 'dsdsd',
				]
			]
		);
	}

	public function dangky()
	{


		$rs = 0;



		$data = $this->input->post();

		$data['loai'] = 'Cộng Tác Viên';

		if (empty($data) || !isset($data['sdt'])) {
			echo $rs;
			die;
		}
		$check = $this->d->rawQueryOne('select id from #_lienhe where sdt = ?', [
			$data['sdt']
		]);

		if ($check && $check['id'] != '') {
			$data['ngaytao'] = date('d-m-Y H:i:s', time());

			$this->d->where('id', $check['id']);
			$this->d->update('lienhe', $data);

			$rs = 1;
		} else {
			$data['ngaytao'] = date('d-m-Y H:i:s', time());

			if ($this->d->insert('lienhe', $data)) {

				$rs = 1;
			} else {
				$rs = 0;
			}
		}

		echo $rs;
		die;
	}


	public function daily()
	{

		$rs = 0;



		$data = $this->input->post();

		$data['loai'] = 'Đại lý';
		if (empty($data) || !isset($data['sdt'])) {
			echo $rs;
			die;
		}
		$check = $this->d->rawQueryOne('select id from #_lienhe where sdt = ?', [
			$data['sdt']
		]);

		if ($check && $check['id'] != '') {
			$data['ngaytao'] = date('d-m-Y H:i:s', time());

			$this->d->where('id', $check['id']);
			$this->d->update('lienhe', $data);

			$rs = 1;
		} else {
			$data['ngaytao'] = date('d-m-Y H:i:s', time());

			if ($this->d->insert('lienhe', $data)) {

				$rs = 1;
			} else {
				$rs = 0;
			}
		}

		echo $rs;
		die;
	}







	public function Page404()
	{
		$this->load->view('404');
	}

	public function PageOff()
	{
		redirect('/', 'reset');
	}
}
