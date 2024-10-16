<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

	public function single_row($table , $condtion , $columns)     
	{
		return $this->db->get_where($table , $condtion)->row($columns);
	}
	public function num_rows($table, $condition)
	{
		return $this->db->get_where($table , $condition)->num_rows();
	}

	public function fetch_data($table , $condtion, $sort)
	{
		return $this->db->order_by($sort)->get_where($table , $condtion)->result_array();
	}

	public function fetch_data_by_like($table , $condtion,$like)
	{
		return $this->db->like($like,'match')->get_where($table , $condtion)->result_array();
	} 
	public function fetch_data_by_limit($table , $condtion, $sort , $start , $limit)
	{
		return $this->db->order_by($sort)->limit($limit , $start)->get_where($table , $condtion)->result_array();
	}
	public function update($table , $condition , $data)
	{
		return $this->db->where($condition)->set($data)->update($table);
	}
	public function delete($table, $condition)
	{
		return $this->db->delete($table, $condition);
	}
	public function insert($table , $data)
	{
		return $this->db->insert($table , $data);
	}

	public function login_panel_action($u_id, $pass)
	{
		$this->db->where('u_id', $u_id);
		$this->db->where('password', $pass);

		$query = $this->db->get('admin');

		if($query->num_rows() == 1)
		{
			return $query->row();
		}

		return false;
	}

	public function post_blog_action($cat, $name, $title, $file_name, $msg)
	{
		$data = array(
			'slug' => url_title($title , '-',TRUE),
			'cat' => $cat,
			'name' => $name,
			'title' => $title,
			'imgPath' => $file_name,
			'msg' => $msg
		);

		return $this->db->insert('post_blog', $data);
	}
	public function get_product($limit, $offset, $count)
	{
		$this->db->select('*');
		$this->db->from('post_blog')->order_by('id','DESC');
		if($count){
			return $this->db->count_all_results();
		}
		else{
			$this->db->limit($limit, $offset);
			$querry = $this->db->get();
			if($querry->num_rows()> 0)
			{
				return $querry->result_array();
			}
		}
	}
	
	
	public function get_user($user_id)
    {
        $this->db->where('id', $user_id);
        $query = $this->db->get('admin');
        return $query->row();
    }

    public function update_user($user_id, $userdata)
    {
        return $this->db->where('id', $user_id)->set($userdata)->update('admin');
    }

    public function add_blog_category($cat_name)
    {
	    $data = array(
			'cat_name' => $cat_name,
		);
		return $this->db->insert('tbl_blog_cat', $data);
	}

}
