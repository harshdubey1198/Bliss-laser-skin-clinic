<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_panel extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		if(!$this->session->userdata('sessiondata'))
		{
			redirect('admin');
		}
	}

	public function dashboard()
	{
		$this->load->view('admin/dashboard');
	}


	public function post_blog()
	{
		$data['d'] = $this->Main_model->fetch_data('tbl_blog_cat', ['status'=>0], 'id DESC');
		$this->load->view('admin/post_blog', $data);
	}

	public function manage_blog()
	{
		$data['d'] = $this->Main_model->fetch_data('post_blog', ['status'=>0], 'id DESC');
		$this->load->view('admin/manage_blog', $data);
	}

	public function sign_out()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}

	public function blog_category()
	{
		$data['d'] = $this->Main_model->fetch_data('tbl_blog_cat', ['status'=>0], 'id DESC');
		$this->load->view('admin/blog_category', $data);
	}

	public function category_edit()
	{
		$url = $this->uri->segment(3);

		if(isset($url))
		{
			$data['u'] = $url;	
			$data['get'] = $this->Main_model->fetch_data('tbl_blog_cat',['id'=>$url],'');
	        $this->load->view('admin/category_edit',$data);
		}
	}


	public function post_blog_action()
	{
		$this->form_validation->set_rules('cat', 'Category', 'trim|required');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('msg', 'Message', 'trim|required');

		if($this->form_validation->run()== FALSE)
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('new_post');
		}
		else{

			$cat = $this->security->xss_clean($this->input->post('cat'));
			$name = $this->security->xss_clean($this->input->post('name'));
			$title = $this->security->xss_clean($this->input->post('title'));
			$img = $this->security->xss_clean($this->input->post('img'));
			$msg = $this->security->xss_clean($this->input->post('msg'));
            $config['file_name'] = time().$_FILES['img']['name'];
			$config['upload_path']      = './uploads/blog/';
            $config['allowed_types']    = 'gif|jpg|png';
            //$config['max_size']             = 100;
            //$config['max_width']            = 1024;
            //$config['max_height']           = 768;

            $this->upload->initialize($config);

			if(! $this->upload->do_upload('img'))
                {
                    $error = $this->upload->display_errors();

				$this->session->set_flashdata('error', $error);
				return redirect('admin/post_blog');
			}
			else
			{
            	$file_name = $this->upload->data('file_name');

            	if($this->Main_model->post_blog_action($cat, $name, $title, $file_name, $msg))
				{
					$this->session->set_flashdata('error', 'Successfully Add');
					return redirect('admin/post_blog');
				}
				else{
					$this->session->set_flashdata('error', 'Not Add');
					return redirect('admin/post_blog');
				}

            }
		}
	}
	public function edit_blog()
	{
		$url = $this->uri->segment(3);

		if(isset($url))
		{
			$data['u'] = $url;	
			$data['get'] = $this->Main_model->fetch_data('post_blog',['id'=>$url],'');
	        $this->load->view('admin/edit_blog',$data);
		}
	}

	public function update_blog_action()
	{	
		$u_id = $this->input->post('u_id');
		$cat = $this->input->post('cat');
		$name = $this->input->post('name');
		$title = $this->input->post('title');
		$path = $this->input->post('path');
		$msg = $this->input->post('msg');

		if(isset($u_id))
		{
          if($_FILES['img']['name']!='')
          {
          	$config['file_name'] = time().$_FILES['img']['name'];
			$config['upload_path']      = './uploads/blog/';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['max_size']         = 2000;
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('img'))
                {
                 $error = $this->upload->display_errors();

				$this->session->set_flashdata('error', $error);
				return redirect('admin/post_blog');
			}
			else
				{
				$file_name = $this->upload->data('file_name');
				unlink($config['upload_path'].$path);
			     }

		  }
		  if($this->Main_model->update('post_blog', ['id'=>$u_id], 
				array(
					'cat' => $cat,
					'name' => $name,
					'title' => $title,
					'imgPath' => (!empty($file_name))?$file_name:$path,
					'msg' => $msg,
				)))
			{
				$this->session->set_flashdata('error', 'Successfuly Update');
				return redirect('admin/manage-blog');
			}
			else
			{
				$this->session->set_flashdata('error', 'Not Update');
				return redirect('admin/manage-blog');
			}
		}
		else
		{
			return redirect('admin/dashboard');
		}
	}

	public function delete_blog()
	{
		$id = $this->uri->segment(3);

		if(isset($id))
		{
			$config['upload_path']      = './uploads/blog/';
			$this->upload->initialize($config);

			$path = $this->Main_model->single_row('post_blog',['id'=>$id],'imgPath');

			unlink($config['upload_path'].$path);

			$this->Main_model->delete('post_blog', ['id'=>$id]);

			$this->session->set_flashdata('error', 'Successfuly Deleted');
			redirect('admin/manage-blog');
		}
		else
		{
			return redirect('dashboard');
		}
	}

	public function edit_password()
	{
		$this->load->view('admin/edit_password');
	}

	public function change_pass()
	{
        $user_id = $this->session->userdata['sessiondata']['id'];
        
		$this->form_validation->set_rules('old_pass', 'old password', 'required');
        $this->form_validation->set_rules('new_pass', 'new password', 'required');
        $this->form_validation->set_rules('passconf', 'confirm password', 'required|matches[new_pass]');

        if($this->form_validation->run() == false)
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin/edit_pass');
        }
        else {
            if($this->Main_model->num_rows('admin',['password'=>trim($this->input->post('old_pass')) ,'id'=>$user_id])>0)
            {

            $new_pass = $this->input->post('new_pass');

            $this->Main_model->update_user($user_id, array('password' => $new_pass));
            $this->session->set_flashdata('error', 'Password change successfuly....');

             return redirect('admin/edit_pass');
            }
            else
            {
           $this->session->set_flashdata('error', 'The old password wrong');
           return redirect('admin/edit_pass');

            }
            
        }
    }
	
	public function password_check($old_pass)
    {
        $user_id = $this->session->set_userdata('id');
        $admin = $this->Main_model->get_user($user_id);

        if($admin->password !== $old_pass) {
            $this->form_validation->set_message('password_check', 'The {Old Password} does not match');
            return false;
        }

        return true;
    }

    public function add_blog_category()
    {

    	$this->form_validation->set_rules('cat_name', 'Name', 'trim|required');

    	if ($this->form_validation->run()==FALSE)
    	{
    		$this->session->set_flashdata('error', validation_errors());
    		return redirect('admin/blog-category');
    	}
    	else{
    		$cat_name = $this->input->post('cat_name');

    		if ($this->Main_model->add_blog_category($cat_name)) {
    			
    			$this->session->set_flashdata('error', 'Successfuly Add');
    			return redirect('admin/blog-category');
    		}
    		else{
    			$this->session->set_flashdata('error', 'Something Error');
    			return redirect('admin/blog-category');
    		}
    	}
    }

    public function cat_editor_action()
    {
    	$u_id = $this->input->post('uid');

    	$cat_name = $this->input->post('cat_name');

		if(isset($u_id))
		{
			if($this->Main_model->update('tbl_blog_cat', ['id'=>$u_id], 
				[
					'cat_name' => $cat_name
				]))
			{
				$this->session->set_flashdata('error', 'Successfuly Add');
				return redirect('admin/blog-category');
			}
			else
			{
				$this->session->set_flashdata('error', 'Not Add');
				return redirect('admin/blog-category');
			}
		}
		else
		{
			$this->session->set_flashdata('error', 'Please Check Your Query');
			return redirect('admin/dashboard');
		}
    }

    public function category_delete()
	{
		$id = $this->uri->segment(3);

		if(isset($id))
		{

			$this->Main_model->delete('tbl_blog_cat', ['id'=>$id]);

			$this->session->set_flashdata('error', 'Successfuly Deleted');
			redirect('admin/blog-category');
		}
		else
		{
			return redirect('dashboard');
		}
	}
}