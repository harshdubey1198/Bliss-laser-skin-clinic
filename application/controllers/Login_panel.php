<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_panel extends CI_Controller {

	public function login()
	{
		$this->load->view('admin/login_panel');
	}

	public function login_action()
	{
		$this->form_validation->set_rules('u_id', 'User Id', 'trim|required');
		$this->form_validation->set_rules('pass', 'Password', 'trim|required');

		if($this->form_validation->run()== FALSE)
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('admin');
		}
		else{

			$u_id = $this->security->xss_clean($this->input->post('u_id'));
			$pass = $this->security->xss_clean($this->input->post('pass'));

			$user = $this->Main_model->login_panel_action($u_id, $pass);

			if($user)
			{
				$userdata = array(
					'id' => $user->id,
					'authenicated' => TRUE
				);

				$this->session->set_userdata('sessiondata', $userdata);
				//echo 'Success';
				redirect('admin/dashboard');
			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid User Id Or Password');
				redirect('admin');
			}
		}
	}
}
