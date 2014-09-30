<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Job_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function category($id = FALSE)
  {
    if($id === FALSE)
    {
      $query = $this->db->get('category');
      return $query->result_array();
    }
    $query = $this->db->order_by('jobs_id','desc')->get_where('jobs',array('jobs_category'=>$id));
    return $query->result_array();
  }

  public function get_jobs($id)
  {
    $query = $this->db->get_where('jobs',array('jobs_id'=>$id));
    return $query->result_array();
  }

  public function show_jobs($id = FALSE)
  {
    if($id === FALSE)
    {
      $query = $this->db->get('jobs');
      return $query;
    }
    $query = $this->db->order_by('jobs_update','desc')->get_where('jobs',array('jobs_category'=>$id));
    return $query;
  }

  public function get_rss($id)
  {
    $query = $this->db->order_by('jobs_id','desc')->get_where('jobs',array('jobs_category'=>$id));
    return $query;
  }

  public function create_jobs()
  {
    $data = array(
      'jobs_title' => $this->input->post('job_title'),
      'jobs_category' => $this->input->post('category'),
      'jobs_lower' => $this->input->post('lower_bound'),
      'jobs_higher' => $this->input->post('higher_bound'),
      'jobs_place' => $this->input->post('work_place'),
      'jobs_description' => $this->input->post('description'),
      'jobs_hire' => $this->input->post('how_hire'),
      'jobs_company' => $this->input->post('company'),
      'jobs_url' => $this->input->post('url'),
      'jobs_email' => $this->input->post('email'),
      'jobs_update' => $this->input->post('jobs_update')
    );
    $this->db->insert('jobs',$data);
  }

  public function search()
  {
    $search = $this->input->post('search');
    $this->db->like('jobs_title',$search);
    $this->db->or_like('jobs_company',$search);
    $this->db->or_like('jobs_place',$search);
    $this->db->or_where('jobs_higher <=',$search);
    $this->db->or_where('jobs_lower >=',$search);

    $query = $this->db->get('jobs');
    return $query->result_array();

  }

  public function register()
  {
    $data = array(
      'user_name' => $this->input->post('user_name'),
      'user_password' => $this->input->post('user_password')
      );
    $this->db->insert('user',$data);
  }

  public function user_check()
  {
    $user_name = $this->input->post('user_name');
    $user_password = $this->input->post('user_password');
    $query = $this->db->get_where('user', array('user_name'=>$user_name,'user_password'=>$user_password));
    
    if ($query->num_rows() > 0) {
      return $query->row();
    }
    else
    {
      return null;
    }

  }

}

/* End of file job.php */
/* Location: ./application/models/job.php */