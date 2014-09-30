<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jobs extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('url','form','html','xml'));
    $this->load->model('job_model');
    $this->load->library('session');
  }

  public function index()
  {
    $data = array(
      'data' => array(
        'category' => $this->job_model->category(),
        'tab' => $this->job_model->category(),
        ),
      'view' => array('carousel','post_job','content','login'),
    );

    foreach($data['data']['tab'] as $content)
    {
      $data['data']['result'][$content['category_id']] = $this->job_model->show_jobs($content['category_id'])->result_array();
    }

    $this->load->view('template',$data);
  }

  public function category($id)
  {
    $data = array(
      'data' => array(
        'category' => $this->job_model->category($id),
      ),
      'view' => array('post_job','jobs/category','login'),
    );

    $this->load->view('template',$data);

  }

  public function new_job()
  {
    $data = array(
      'data' => array('category' => $this->job_model->category()),
      'view' => array('jobs/new','login'),
    );

    $this->load->view('template',$data);
  }

  public function search()
  {
    $data = array(
      'data' => array(
        'search' => $this->job_model->search(),
      ),
      'view' => array('post_job','jobs/search','login'),
    );

    $this->load->view('template',$data);
  }

  public function show($id)
  {
    $this->load->library('markdown');
    $data = array(
      'data' => array(
        'category' => $this->job_model->category(),
        'detail' => $this->job_model->get_jobs($id),
      ),
      'view' => array('post_job','jobs/show','login'),
    );

    $this->load->view('template',$data);
  }

  public function rss($id)
  {
    $data['encoding'] = 'utf-8';
    $data['feed_name'] = 'copy_66K';
    $data['feed_url'] = 'http://localhost/copy_66k';
    $data['page_description'] = 'Code Igniter, PHP, and the World of Web Design';
    $data['page_language'] = 'en-ca';
    $data['creator_email'] = 'Derek Allard is at derek at derekallard dot com';
    $data['rss'] = $this->job_model->get_rss($id);
    header("Content-Type: application/rss+xml");
    $this->load->view('jobs/rss', $data);
  }

  public function create_jobs()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_message('required', ' %s 不能空白');
    $this->form_validation->set_message('integer', ' %s 必須為數字');
    $this->form_validation->set_message('greater_than', ' %s 必須 6,6000元 以上');

    $this->form_validation->set_error_delimiters('<span class="label label-default label-danger">', '</span>');

    $this->form_validation->set_rules('job_title', '職位名稱', 'required');
    $this->form_validation->set_rules('category', '分類', 'required');

    $this->form_validation->set_rules('lower_bound', '薪水下限', 'required|integer|greater_than[65999]');
    $this->form_validation->set_rules('higher_bound', '薪水上限', 'required|integer|greater_than[65999]');

    $this->form_validation->set_rules('work_place', '工作地點', 'required');
    $this->form_validation->set_rules('description', '工作敘述', 'required');
    $this->form_validation->set_rules('how_hire', '如何應徵', 'required');
    $this->form_validation->set_rules('company', '公司 / 組織名稱', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    if ($this->form_validation->run() == FALSE)
    {
      $this->new_job();
    }
    else
    {
      $this->load->library('markdown');
      $data = array(
        'data' => array(
          'category' => $this->job_model->category(),
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
          'jobs_update' => date('Y-m-d H:i:s')
        ),
        'view' => array('jobs/preview','login'),
      );

      $this->load->view('template',$data);
    }
  }

  public function done()
  {
    $data = array(
      'data' => array(
        'category' => $this->job_model->category(),
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
        'jobs_update' => date('Y-m-d H:i:s')
      ),
      'view' => array('jobs/done','login'),
    );

    $this->load->view('template',$data);
  }

  public function insert_jobs()
  {
    $this->job_model->create_jobs();
    redirect('jobs');
  }

  public function register()
  {
    $data = array(
      'data' => array(
      ),
      'view' => array('login','register'),
    );

    $this->load->view('template',$data);

  }

  public function create_user()  
  {  
    $this->load->library('form_validation');
    $this->form_validation->set_rules('user_name', 'E-Mail', 'required|valid_email|is_unique[user.user_name]');
    $this->form_validation->set_rules('user_password', '密碼',  'required');
    $this->form_validation->set_rules('user_passconf', '確認密碼', 'required|matches[user_password]');
    $this->form_validation->set_message('required', ' %s 不能空白');
    $this->form_validation->set_message('is_unique', ' %s 已被使用');
    $this->form_validation->set_message('matches', '請再次確認密碼');
    $this->form_validation->set_error_delimiters('<span class="label label-default label-danger">', '</span>');

    if ($this->form_validation->run() == FALSE)
    {
      $this->register();
    }
    else
    {
      $this->job_model->register();
      $data = array(
        'data' => array(
        ),
        'view' => array('login','register_done'),
      );

      $this->load->view('template',$data);
    }
  }
  //     $this->load->view('register');
  // }

  public function login()
  {
    $user_check = $this->job_model->user_check();
    $user = array(
      'user_name' => $this->input->post('user_name'),
      'user_password' => $this->input->post('user_password')
      );

    if ($user_check == null)
    {
      $data = array(
        'data' => array(
        ),
        'view' => array('login','login_fail'),
      );

      $this->load->view('template',$data);
    }
    else
    {
      $this->session->set_userdata($user);
      $data = array(
        'data' => array(
          'user_login' => $this->session->userdata('user_name'),
        ),
        'view' => array('login','login_success'),
      );

      $this->load->view('template',$data);
    }

  }

  public function about()  
  {  
    $data = array(
      'data' => array(
      ),
      'view' => array('login','pages/about'),
    );

    $this->load->view('template',$data);
  }

  public function express()  
  {  
    $data = array(
      'data' => array(
      ),
      'view' => array('login','pages/express'),
    );

    $this->load->view('template',$data);
  }

}

/* End of file jobs.php */
/* Location: ./application/controllers/jobs.php */