<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(['M_Lomba']);
	}

	public function index(){
		$params['page'] = 'list-lomba/index';
		$params['data']['lomba']=$this->M_Lomba->getAll();
		$this->load->view('front/layout',$params);
	}

	public function detail($id){
		$params['page'] = 'list-lomba/detail';
		$lomba = $this->M_Lomba->getById($id);
		$params['data']['lomba']= $lomba;
		$params['data']['user'] = $this->M_Lomba->getAllUserByIdLomba($lomba->Id_Lomba);	
		$this->load->view('front/layout',$params);
	}

	public function save_gabung(){
		$post = $this->input->post();
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			$user = $this->M_Lomba->getUserId($post['username']);
			$id_user = $post['id_lomba'];
			$data= [
				'Id_Lomba' => $id_user,
				'Id_User' => $user->Id_User
			];

			if($this->M_Lomba->save_request($data)){
				redirect(base_url()."list/detail/".$id_user);
			}
		}

	}

	
}