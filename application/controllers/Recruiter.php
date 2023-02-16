<?php
class Recruiter extends CI_Controller

{
    public function index()
    {

        if (!$this->session->has_userdata('login_recruiter_id')) {
            redirect(base_url('Recruiter/login'));
        }
        // $data['latest_blogs'] = $this->Commonmodel->getAllRows('latest_blogs');
        $this->load->view('recruiter/home');
    }


    public function home()
    {
        $this->load->view('recruiter/home');
    }

    public function login()
    {

        if ($this->session->has_userdata('login_recruiter_id')) {
            redirect(base_url('Recruiter/index'));
        }

        if (count($_POST) > 0) {
            extract($this->input->post());
            $table = "tbl_recruiter_registration";
            $login_data = $this->CommonModal->getRowByMoreId($table, array('email' => $email));


            if (!empty($login_data)) {
                if ($login_data[0]['password'] == $password) {
                    $this->session->set_userdata(array('login_recruiter_id' => $login_data[0]['recruiter_id'], 'login_recruiter_name' => $login_data[0]['company_name'], 'login_recruiter_email' => $login_data[0]['email'], 'login_recruiter_number' => $login_data[0]['number']));

                    redirect(base_url('recruiter/index'));
                } else {
                    $this->session->set_userdata('msg', '<h6 class="alert alert-danger">The <b>password</b> you entered is <b>incorrect</b> Please try again.</h6>');
                    redirect(base_url('recruiter/login'));
                }
            } else {
                $this->session->set_flashdata('loginError', '<h6 class="alert alert-warning">Username or password doesnt match</h6>');
                redirect(base_url('recruiter/login'));
            }
        }
        $this->load->view('recruiter/login');
    }

    public function register()
    {

        if ($this->session->has_userdata('login_recruiter_id')) {
            redirect(base_url('Recruiter/index'));
        }

        if (count($_POST) > 0) {
            $contact = $this->input->post('number');
            $count_mobile = $this->CommonModal->getNumRows('tbl_recruiter_registration', array('number' => $this->input->post('mobile')));
            $count_email = $this->CommonModal->getNumRows('tbl_recruiter_registration', array('email' => $this->input->post('email')));
            if ($count_mobile > 0 || $count_email > 0) {
                $this->session->set_userdata('msg', '<h6 class="alert alert-danger">You have already registered with this email id or contact no.</h6>');
                redirect(base_url('Company/register'));
            } else {
                $post = $this->input->post();
                if ($post['password'] !=  $post['cpassword']) {
                    $this->session->set_userdata('msg', '<h6 class="alert alert-warning">Your Password and Confirm Password are not match .</h6>');
                    redirect(base_url('recruiter/register'));
                } else {
                    $lastid = $this->CommonModal->insertRowReturnId('tbl_recruiter_registration', $post);
                    $get_recruiter = $this->CommonModal->getRowById('tbl_recruiter_registration', 'recruiter_id', $lastid);
                    $this->session->set_userdata(array('login_recruiter_id' => $get_recruiter[0]['recruiter_id'], 'login_recruiter_name' => $get_recruiter[0]['company_name'], 'login_recruiter_email' => $get_recruiter[0]['email'], 'login_recruiter_number' => $get_recruiter[0]['number']));
                    redirect(base_url('Recruiter/index'));
                }
            }
        }
        $data['title'] = "Recruiter registration | Hirbox";
        $data['country_code'] = $this->CommonModal->getAllRowsInOrder('country', 'name', 'asc');
        $this->load->view('recruiter/register', $data);
    }

    public function recruiter_profile()
    {


        if (count($_POST) > 0) {
            $post = $this->input->post();
            $uid = sessionId('login_recruiter_id');
            print_r($post);
            exit();
            $insert = $this->CommonModal->updateRowById('tbl_recruiter_registration', 'recruiter_id', $uid, $post);
        }
        $data['recruiter'] = $this->CommonModal->getRowById('recruiter_registration', 'recruiter_id', $this->session->has_userdata('login_recruiter_id'));
        $data['country_code'] = $this->CommonModal->getAllRowsInOrder('country', 'name', 'asc');
        $data['industry'] = $this->CommonModal->getAllRowsInOrder('tbl_industries', 'category', 'asc');
        $this->load->view('recruiter/profile', $data);
    }

    public function add_save_job($recruiter_id, $job_id, $panel)
    {
        if (!$this->session->has_userdata('candidate_id')) {
            redirect(base_url('candidate/login'));
        }
        $datarow = $this->CommonModal->getRowByMoreId('tbl_saved_job', array('recruiter_id' => $recruiter_id, 'job_id' => $job_id, 'panel' => $panel));
        if ($datarow != '') {
            $insert = $this->CommonModal->runQuery("DELETE FROM `tbl_saved_job` WHERE job_id = $job_id AND recruiter_id = $recruiter_id AND panel = $panel");
        } else {
            $insert = $this->CommonModal->insertRowReturnId('tbl_saved_job',  array('recruiter_id' => $recruiter_id, 'job_id' => $job_id, 'panel' => $panel));
        }
        // redirect(base_url() . 'candidate/view_jobs'); 
        redirect($_SERVER["HTTP_REFERER"]);
    }

    public function assign_team()
    {
        $this->load->view('recruiter/assign-team');
    }

    public function job_details()
    {
        $this->load->view('recruiter/job-details');
    }

    public function apply_candidates()
    {
        $this->load->view('recruiter/apply-candidates');
    }

    public function mapped_jobs()
    {
        $this->load->view('recruiter/mapped-jobs');
    }

    public function mapped_candidates()
    {
        $this->load->view('recruiter/mapped-candidates');
    }

    public function search_jobs()
    {
        $this->load->view('recruiter/search-jobs');
    }

    public function faq()
    {
        $this->load->view('recruiter/faq');
    }

    public function videos()
    {
        $this->load->view('recruiter/videos');
    }

    public function add_job()
    {
        $this->load->view('recruiter/add-job');
    }

    public function need_help()
    {
        $this->load->view('recruiter/need-help');
    }

    public function recruiter_logout()
    {
        $this->session->unset_userdata('login_recruiter_id');
        $this->session->unset_userdata('login_recruiter_name');
        $this->session->unset_userdata('login_recruiter_email');
        $this->session->unset_userdata('login_recruiter_number');
        redirect(base_url('Recruiter/login'));
    }
}
