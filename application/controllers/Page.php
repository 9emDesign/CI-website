<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{

	public function view($page)
	{
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			show_404();
		}

		$data['title'] = $page;
		$this->load->view('includes/header', $data);
		$this->load->view('pages/' . $page, $data);
		$this->load->view('includes/footer', $data);
	}



	public function endSession()
	{
		$this->load->library('session');
		$this->session->unset_userdata('email');
		$this->session->sess_destroy();
	}

	public function saveData()
	{
		$this->load->model('Database');
		$this->load->view('pages/registration');
		if ($this->input->post('save')) {
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$mobile = $this->input->post('mobile');
			$this->Database->saverecords($name, $email, $password, $mobile);
			redirect('page/displayData');
		}
	}

	public function displayData()
	{
		$this->load->model('Database');
		$results['data'] = $this->Database->displayrecords();
		$this->load->view('pages/display', $results);
	}

	public function updateData()
	{
		$this->load->model('Database');
		$id = $this->input->get('id');
		$result['data'] = $this->Database->displayRecordsById($id);
		$this->load->view('pages/edit', $result);
		if ($this->input->post('update')) {
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$mobile = $this->input->post('mobile');
			$this->Database->updateRecords($name, $email, $password, $mobile, $id);
			redirect('page/displaydata');
		}
	}


	public function deletedata()
	{
		$this->load->model('Database');
		$id = $this->input->get('id');
		$this->Database->deleteRecords($id);
		redirect('page/displayData');
	}

	public function signup()
	{
		$data['title'] = 'Sign-up';
		$this->load->view('pages/signup', $data);
	}

	public function loginUser()
	{
		$email = $this->input->post('email');
		$this->session->set_userdata('email', $email);
	}
}

/* End of file Page.php */
