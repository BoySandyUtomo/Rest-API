<?php


use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Input extends REST_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Input_model');
	}

	public function index_get()
	{
		$id = $this->get('id');
		if ( $id === null ) {
			$input = $this->Input_model->getInput();
		
		} else {

			$input = $this->Input_model->getInput($id);
		}
		

		if($input){
			$this->response([
                    'status' => true,
                    'data' => $input
                ], REST_Controller::HTTP_OK);
		} else{
			$this->response([
                    'status' => true,
                    'data' => 'id not found'
                ], REST_Controller::HTTP_NOT_FOUND);

		}
		
	}


	public function index_delete()
	{
		$id = $this->delete('id');

		if ($id === null) {
			$this->response([
                    'status' => false,
                    'message' => 'provide an id'
                ], REST_Controller::HTTP_BAD_REQUEST); 
		} else {

			if ($this->Input_model->deleteInput($id) > 0) {
				$this->response([
                    'status' => true,
                    'id' => $id,
                    'message'=> 'deleted!'
                ], REST_Controller::HTTP_OK);

			} else {
				$this->response([
                    'status' => false,
                    'message' => 'id not found'
                ], REST_Controller::HTTP_BAD_REQUEST);  
			}
		}

	}


	public function index_post()
	{
		$data = 
			[
				'name' => $this->post('name'),
				'penerima' => $this->post('penerima'),
				'email' => $this->post('email'),
				'alamat' => $this->post('alamat'),
				'hp' => $this->post('hp'),
				'paket' => $this->post('paket')

			];


		if ($this->Input_model->createInput($data) > 0 )
		{
			$this->response([
                    'status' => true,
                    'message' => 'Input Success!'
                ], REST_Controller::HTTP_CREATED); 

		} else {
			$this->response([
                    'status' => false,
                    'message' => 'Input Failed!'
                ], REST_Controller::HTTP_BAD_REQUEST); 
		}

	}


	public function index_put()
	{
		$id = $this->put('id');
		$data = 
			[
				'name' => $this->put('name'),
				'penerima' => $this->put('penerima'),
				'email' => $this->put('email'),
				'alamat' => $this->put('alamat'),
				'hp' => $this->put('hp'),
				'paket' => $this->put('paket')

			];

		if ($this->Input_model->updateInput($data, $id) > 0 )
		{
			$this->response([
                    'status' => true,
                    'message' => 'Update Success!'
                ], REST_Controller::HTTP_OK); 

		} else {
			$this->response([
                    'status' => false,
                    'message' => 'Update Failed!'
                ], REST_Controller::HTTP_BAD_REQUEST); 
		}

	}
}