<?php
defined('BASEPATH') or exit('no direct access allowed');

class Admin_Dashboard extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if (sessionId('admin_id') == "") {
            redirect(base_url('admin'));
        }
        date_default_timezone_set("Asia/Kolkata");
    }

    public function index()
    {
        $data['title'] = "Admin Dashboard | Hirbox";
        $data['company_count'] = $this->CommonModal->getNumRow('tbl_company_registration');
        $data['user_count'] = $this->CommonModal->getNumRow('tbl_candidate_registration');
        $data['recruiter_count'] = $this->CommonModal->getNumRow('tbl_recruiter_registration');
        $data['jobs_count'] = $this->CommonModal->getNumRow('tbl_job_post');
        $this->load->view('admin/dashboard', $data);
    }

    public function company_list()
    {
        $data['title'] = "Companies | Hirbox";
        $data['company_count'] = $this->CommonModal->getNumRow('tbl_company_registration');
        $data['get_companies'] = $this->CommonModal->getAllRows('tbl_company_registration');
        $this->load->view('admin/company-list', $data);
    }

    public function job_list()
    {
        $data['title'] = "Job Lists | Hirbox";
        $data['get_jobs'] = $this->CommonModal->getAllRows('tbl_job_post');
        $this->load->view('admin/job-list', $data);
    }

    public function candidate_list()
    {
        $data['title'] = "Candidate Lists | Hirbox";
        $data['get_candidate'] = $this->CommonModal->getAllRows('tbl_candidate_registration');
        $this->load->view('admin/candidate-list', $data);
    }

    public function view_candidate_profile($cpid)
    {
        $candidate_id = $cpid;
        $data['get_candidate'] = $this->CommonModal->getRowById('tbl_candidate_registration', 'candidate_id', $candidate_id);
        $data['title'] = "Candidate Profile | Hirbox";
        $this->load->view('admin/candidate_profile', $data);
    }

    public function view_job_details($jdid)
    {
        $job_id = $jdid;
        $data['job_detail'] = $this->CommonModal->getRowById('tbl_job_post', 'job_id', $job_id);
        $data['title'] = "Candidate Job List | Hirbox";
        $this->load->view('candidate/view-job-details', $data);
    }

    public function active_deactive($candidate_id, $access)
    {
        $update = $this->CommonModal->updateRowById('tbl_candidate_registration', 'candidate_id', $candidate_id, array('cstatus    ' => $access));
        redirect($_SERVER["HTTP_REFERER"]);
    }

    public function job_status($job_id, $status)
    {
        $update = $this->CommonModal->updateRowById('tbl_job_post', 'job_id', $job_id, array('status' => $status));
        redirect($_SERVER["HTTP_REFERER"]);
    }

    public function delete_candidate()
    {
        $BdID = $this->input->get('BdID');
        if ($BdID != '') {
            $delete = $this->CommonModal->deleteRowById('tbl_candidate_registration', array('candidate_id' => $BdID));
            if ($delete) {
                $this->session->set_flashdata('msg', '<h6 class="alert alert-success">Candidate Deleted Successfully</h6>');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', '<h6 class="alert alert-danger">Somethig Went Wrong try again later</h6>');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }
            redirect($_SERVER["HTTP_REFERER"]);
            exit;
        }
    }

    public function contact_detail()
    {
        $data['title'] = "Admin Dashboard | Hirbox";
        $this->load->view('admin/contact-detail', $data);
    }

    public function social_links()
    {
        $data['title'] = "Admin Dashboard | Hirbox";
        $this->load->view('admin/social-links', $data);
    }

    public function privacy_policy()
    {
        $data['title'] = "Admin Dashboard | Hirbox";
        $this->load->view('admin/privacy_policy', $data);
    }
    public function term_condition()
    {
        $data['title'] = "Admin Dashboard | Hirbox";
        $this->load->view('admin/term-condition', $data);
    }

    public function job_roles()
    {
        $data['title'] = "Jobs Role";
        $BdID = $this->input->get('BdID');
        if (decryptId($BdID) != '') {
            $delete = $this->CommonModal->deleteRowById('tbl_role', array('rid' => decryptId($BdID)));
            redirect('Admin_Dashboard/job_roles');
            exit;
        }

        $data['role'] = $this->CommonModal->getAllRowsInOrder('tbl_role', 'rid', 'DESC');

        if (count($_POST) > 0) {
            $post = $this->input->post();
            if ($this->Dashboard_model->insertdata('tbl_role', $post)) {

                $this->session->set_flashdata('msg', 'Job Roles Add successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Soemthing went wrong Please try again!!');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }

            redirect(base_url('Admin_Dashboard/job_roles'));
        }
        $this->load->view('admin/jobroles', $data);
    }

    public function work_technologies()
    {
        $data['title'] = "Work Technologies";
        $BdID = $this->input->get('BdID');
        if (decryptId($BdID) != '') {
            $delete = $this->CommonModal->deleteRowById('tbl_technologies', array('tid' => decryptId($BdID)));
            redirect('Admin_Dashboard/work_technologies');
            exit;
        }

        $data['tech'] = $this->CommonModal->getAllRowsInOrder('tbl_technologies', 'tid', 'DESC');

        if (count($_POST) > 0) {
            $post = $this->input->post();
            if ($this->Dashboard_model->insertdata('tbl_technologies', $post)) {

                $this->session->set_flashdata('msg', 'Technologies Add successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Soemthing went wrong Please try again!!');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }

            redirect(base_url('Admin_Dashboard/work_technologies'));
        }
        $this->load->view('admin/work_technologies', $data);
    }

    public function industries()
    {
        $data['title'] = "Industries";
        $BdID = $this->input->get('BdID');
        if (decryptId($BdID) != '') {
            $delete = $this->CommonModal->deleteRowById('tbl_industries', array('cate_id' => decryptId($BdID)));
            redirect('Admin_Dashboard/industries');
            exit;
        }

        $data['indus'] = $this->CommonModal->getAllRowsInOrder('tbl_industries', 'cate_id', 'DESC');

        if (count($_POST) > 0) {
            $post = $this->input->post();
            if ($this->Dashboard_model->insertdata('tbl_industries', $post)) {

                $this->session->set_flashdata('msg', 'Industries Add successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Soemthing went wrong Please try again!!');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }

            redirect(base_url('Admin_Dashboard/industries'));
        }
        $this->load->view('admin/industries', $data);
    }
}
