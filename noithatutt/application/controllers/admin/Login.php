<?php
Class Login extends MY_Controller{
	function  index()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');

			if ($this->input->post())
			{
				$this->form_validation->set_rules('login','login','callback_check_login');
				if ($this->form_validation->run())
				{
					$this->session->set_userdata('login',true);
				redirect(admin_url('home'));
			}
		}
		
		$this->load->view('admin/login/index');
	}

	//Kiem tra usename vs password
	function check_login()
	{
		//Lay username & password
		$username =$this->input->post('username');
		$password =$this->input->post('password');
		//ma hoa password
		$password =md5($password);

		//load model admin
		$this->load->model('admin_model');
		//so sanh username va password nhap vao co giong o database >?
		$where =array('username'=>$username, 'password'=>$password);
		//neu  ton tai tra ve true nguoc lai ve fasle
		if ($this->admin_model->check_exists($where))
		{
			return true;
		}
		$this->form_validation->set_message(__FUNCTION__,'không đăng nhập thành công');
		return false;
	}
}
