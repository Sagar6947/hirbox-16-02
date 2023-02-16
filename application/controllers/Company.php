<?php
class Company extends CI_Controller

{
    public function index()
    {
        if (!$this->session->has_userdata('login_company_id')) {
            redirect(base_url('company/login'));
        }
        $data['applied_candidate'] = $this->CommonModal->getRowById('tbl_applied_candidate', 'company_id', sessionId('login_company_id'));
        $data['get_company'] = $this->CommonModal->getRowById('tbl_company_registration', 'company_id', sessionId('login_company_id'));
        $data['total_applicants'] = $this->CommonModal->getNumRows('tbl_applied_candidate', array('company_id' => sessionId('login_company_id')));
        $data['total_jobs'] = $this->CommonModal->getNumRows('tbl_job_post', array('company_id' => sessionId('login_company_id')));
        $data['total_members'] = $this->CommonModal->getNumRows('tbl_company_members', array('company_id' => sessionId('login_company_id')));
        $data['title'] = "Company dashboard | Hirbox";
        $this->load->view('company/dashboard', $data);
    }


    public function datatable()
    {
        $this->load->view('datatable');
    }
    public function lockscreen()
    {
        $this->load->view('lockscreen');
    }
    public function logout()
    {
        $this->load->view('logout');
    }
    public function profile()
    {
        $this->load->view('profile');
    }

    public function size_add()
    {
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $lastid = $this->CommonModal->insertRowReturnId('tbl_size', $post);
        }
    }

    public function login()
    {
        if ($this->session->has_userdata('login_company_id')) {
            redirect(base_url('company/index'));
        }

        if (count($_POST) > 0) {
            extract($this->input->post());
            $table = "company_registration";
            $login_data = $this->CommonModal->getRowByMoreId($table, array('email' => $email));
            $get_member = $this->CommonModal->getRowByMoreId('tbl_company_members', array('email' => $email));
            $get_company = $this->CommonModal->getRowByMoreId('company_registration', array('company_id' => $get_member[0]['company_id']));


            if (!empty($get_member)) {
                if ($get_member[0]['password'] == $password) {

                    $this->session->set_userdata(array('login_comapny_member' => $get_member[0]['member_id'], 'login_company_id' => $get_company[0]['company_id'], 'login_company_name' => $get_company[0]['company_name'], 'login_company_email' => $get_company[0]['email'], 'login_company_number' => $get_company[0]['number']));
                    redirect(base_url('company/index'));
                } else {
                    $this->session->set_userdata('msg', '<h6 class="alert alert-danger">The <b>password</b> you entered is <b>incorrect</b> Please try again.</h6>');
                    redirect(base_url('company/login'));
                }
            }

            if (!empty($login_data)) {
                if ($login_data[0]['password'] == $password) {
                    $this->session->set_userdata(array('login_company_id' => $login_data[0]['company_id'], 'login_company_name' => $login_data[0]['company_name'], 'login_company_email' => $login_data[0]['email'], 'login_company_number' => $login_data[0]['number']));
                    redirect(base_url('company/index'));
                } else {
                    $this->session->set_userdata('msg', '<h6 class="alert alert-danger">The <b>password</b> you entered is <b>incorrect</b> Please try again.</h6>');
                    redirect(base_url('company/login'));
                }
            } else {
                $this->session->set_flashdata('loginError', '<h6 class="alert alert-warning">Username or password doesnt match</h6>');
                redirect(base_url('company/login'));
            }
        }

        $data['title'] = "Company Login | Hirbox";

        $this->load->view('company/login', $data);
    }
    public function register()
    {

        if ($this->session->has_userdata('login_company_id')) {
            redirect(base_url('company/index'));
        }

        $data['title'] = "Company Registration | Hirbox";
        if (count($_POST) > 0) {
            $contact = $this->input->post('number');
            $count_mobile = $this->CommonModal->getNumRows('company_registration', array('number' => $this->input->post('mobile')));
            $count_email = $this->CommonModal->getNumRows('company_registration', array('email' => $this->input->post('email')));

            if ($count_mobile > 0 || $count_email > 0) {
                $this->session->set_userdata('msg', '<h6 class="alert alert-danger">You have already registered with this email id or contact no.</h6>');
                redirect(base_url('Company/register'));
            } else {
                $post = $this->input->post();
                if ($post['password'] !=  $post['cpassword']) {
                    $this->session->set_userdata('msg', '<h6 class="alert alert-warning">Your Password and Confirm Password are not match .</h6>');
                    redirect(base_url('Company/register'));
                } else {
                    $lastid = $this->CommonModal->insertRowReturnId('company_registration', $post);
                    $get_company = $this->CommonModal->getRowById('company_registration', 'company_id', $lastid);
                    $this->session->set_userdata(array('login_company_id' => $get_company[0]['company_id'], 'login_company_name' => $get_company[0]['company_name'], 'login_company_email' => $get_company[0]['email'], 'login_company_number' => $get_company[0]['number']));
                    redirect(base_url('Company/index'));
                }
            }
        }

        $data['title'] = "Company Registration | Hirbox";
        $data['country_code'] = $this->CommonModal->getAllRowsInOrder('country', 'name', 'asc');
        $this->load->view('company/register', $data);
    }

    public function add_job()
    {
        if (!$this->session->has_userdata('login_company_id')) {
            redirect(base_url('company/index'));
        }


        if (count($_POST) > 0) {
            $post = $this->input->post();
            $post['company_id'] = sessionId('login_company_id');
            $insert = $this->CommonModal->insertRowReturnId('job_post', $post);
            if ($insert) {
                $this->session->set_userdata('msg', '<h6 class="alert alert-success">New Job Posted Successfully.</h6>');
                redirect(base_url('company/add_job'));
            } else {
                $this->session->set_userdata('msg', '<h6 class="alert alert-danger">Failed to post this job</h6>');
                redirect(base_url('company/add_job'));
            }
        }

        $data['tag'] = 'Add';
        $data['state_list'] = $this->CommonModal->getAllRows('tbl_state');
        $data['industry'] = $this->CommonModal->getRowById('tbl_industries', 'category_status', '0');
        $data['title'] = "Add Job | Hirbox";
        $this->load->view('company/add-job', $data);
    }

    public function delete_job()
    {
        $BdID = $this->input->get('BdID');
        if ($BdID != '') {
            $delete = $this->CommonModal->deleteRowById('job_post', array('job_id' => $BdID));
            if ($delete) {
                $this->session->set_flashdata('msg', '<h6 class="alert alert-success">Job Post Deleted Successfully</h6>');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', '<h6 class="alert alert-danger">Somethig Went Wrong try again later</h6>');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }
            redirect(base_url('company/view-post-job'));
            exit;
        }
    }


    public function update_job($jid)
    {
        if (!$this->session->has_userdata('login_company_id')) {
            redirect(base_url('company/index'));
        }
        $data['title'] = "Edit Job Post | Hirbox";
        $data['job'] = $this->CommonModal->getRowByIdInOrder('job_post', array('company_id' => sessionId('login_company_id')), 'job_id', 'ASC');

        $get_id = $jid;
        $data['tag'] = 'Edit';
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $update = $this->CommonModal->updateRowById('job_post', 'job_id', $get_id, $post);
            if ($update) {
                $this->session->set_flashdata('msg', 'Job post Updated Successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Somthing Went Wrong! please try again');
                $this->session->set_flashdata('msg_class', 'alert-success');
            }
            redirect(base_url('company/view-post-job'));
        } else {
            $this->load->view('company/add-job', $data);
        }
    }

    public function view_post_job()
    {
        if (!$this->session->has_userdata('login_company_id')) {
            redirect(base_url('company/index'));
        }

        $data['job'] = $this->CommonModal->getRowById('job_post', 'company_id', sessionId('login_company_id'));
        $data['title'] = "Job Posting Report | Hirbox";
        $this->load->view('company/view-post-job', $data);
    }

    public function view_job_details($jdid, $title)
    {

        $job_id = $jdid;
        $data['job_detail'] = $this->CommonModal->getRowById('tbl_job_post', 'job_id', $job_id);

        $data['title'] = "Candidate Job List | Hirbox";
        $this->load->view('candidate/view-job-details', $data);
    }






    public function apply_candidate_report()
    {
        $data['applied_candidate'] = $this->CommonModal->getRowById('tbl_applied_candidate', 'company_id', sessionId('login_company_id'));
        $data['get_company'] = $this->CommonModal->getRowById('tbl_company_registration', 'company_id', sessionId('login_company_id'));


        $data['title'] = "Applied Candidate | Hirbox";
        $this->load->view('company/apply-candidate-report', $data);
    }


    public function view_candidate_profile($cpid)
    {
        $candidate_id = $cpid;
        $data['get_candidate'] = $this->CommonModal->getRowById('tbl_candidate_registration', 'candidate_id', $candidate_id);
        $data['title'] = "View Candidate Profile | Hirbox";
        $this->load->view('company/candidate_profile', $data);
    }


    public function add_team()
    {
        if (!$this->session->has_userdata('login_company_id')) {
            redirect(base_url('company/login'));
        }

        if (count($_POST) > 0) {
            // $name = $this->input->post('name');
            // $email = $this->input->post('email');
            // $number = $this->input->post('number');
            // $role = $this->input->post('role');
            $post = $this->input->post();
            $mobile_valid = $this->CommonModal->getNumRows('company_members', array('number' => $this->input->post('number')));
            $email_valid = $this->CommonModal->getNumRows('company_members', array('email' => $this->input->post('email')));

            if ($mobile_valid > 0 || $email_valid > 0) {
                $this->session->set_userdata('msg', '<h6 class="alert alert-danger">Member already exists with this email or phone number</h6>');
                redirect(base_url('company/add-team-member'));
            } else {
                $add_member = $this->CommonModal->insertRowReturnId('company_members', $post);
                if ($add_member) {
                    $table = "company_registration";
                    $login_data = $this->CommonModal->getRowByMoreId($table, array('company_id' => sessionId('login_company_id')));
                    $message = sendmail($post['name'], $login_data[0]['number'], $login_data[0]['password'], $post['role']);
                    mailmsg($post['email'], 'new Team member | Welcome User', $message);

                    $this->session->set_userdata('msg', '<span class="alert alert-success">Team member Added Successfully.</span>');
                    redirect(base_url('company/add-team-member'));
                } else {
                    $this->session->set_userdata('msg', '<span class="alert alert-success">Somthing Went wrong ! please try again</span>');
                    redirect(base_url('company/add-team'));
                }
            }
        }

        $data['title'] = "Add team members | Hirbox";
        $this->load->view('company/add-team', $data);
    }

    public function update_member_access($member_id, $access)
    {
        if (!$this->session->has_userdata('login_company_id')) {
            redirect(base_url('company/login'));
        }
        $update = $this->CommonModal->updateRowById('tbl_company_members', 'member_id', $member_id, array('access' => $access));
        redirect(base_url('company/manage-team-member'));
    }

    public function manage_team()
    {

        $table = "company_members";
        $data['team'] = $this->CommonModal->getRowByMoreId($table, array('company_id' => sessionId('login_company_id')));
        $data['title'] = "Manage Team Menbers | Hirbox";
        $this->load->view('company/manage-team', $data);
    }

    public function delete_member()
    {
        $BdID = $this->input->get('BdID');
        if ($BdID != '') {
            $delete = $this->CommonModal->deleteRowById('company_members', array('member_id' => $BdID));
            if ($delete) {
                $this->session->set_flashdata('msg', '<h6 class="alert alert-success">Member Deleted Successfully</h6>');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', '<h6 class="alert alert-danger">Somethig Went Wrong try again later</h6>');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }
            redirect(base_url('company/manage-team-member'));
            exit;
        }
    }

    public function reject_candidate($coid, $cid, $jid)
    {
        $company_id = $coid;
        $candidate_id = $cid;
        $job_id = $jid;

        $delete = $this->CommonModal->runQuery("DELETE FROM `tbl_applied_candidate` WHERE company_id = $company_id  AND candidate_id = $candidate_id AND job_id = $job_id");
        if ($delete) {
            $this->session->set_flashdata('msg', '<h6 class="alert alert-success">Candidate Rejected</h6>');
            $this->session->set_flashdata('msg_class', 'alert-success');
        } else {
            $this->session->set_flashdata('msg', '<h6 class="alert alert-danger">Somethig Went Wrong try again later</h6>');
            $this->session->set_flashdata('msg_class', 'alert-danger');
        }
        redirect(base_url('company/apply-candidate-report'));
        exit;
    }

    public function company_profile()
    {
        if (!$this->session->has_userdata('login_company_id')) {
            redirect(base_url('company/login'));
        }
        $data['title'] = "Company Profile | Hirbox";
        $data['company'] = $this->CommonModal->getRowById('company_registration', 'company_id', sessionId('login_company_id'));
        $data['size'] = $this->CommonModal->getAllRows('tbl_size');
        $data['industry'] = $this->CommonModal->getRowById('tbl_industries', 'category_status', '0');
        $data['country_code'] = $this->CommonModal->getAllRowsInOrder('country', 'name', 'asc');

        if (count($_POST) > 0) {

            $post = $this->input->post();
            $uid = sessionId('login_company_id');

            $logo_image = $post['logo_image'];

            if ($_FILES['logo_image_temp']['name'] != '') {
                $img = imageUpload('logo_image_temp', 'uploads/company/');
                $post['logo_image'] = $img;
                if ($logo_image != "") {
                    unlink('uploads/company/' . $logo_image);
                }
            }


            $company_image = $post['company_image'];
            if ($_FILES['company_image_temp']['name'] != '') {
                $img = imageUpload('company_image_temp', 'uploads/company/');
                $post['company_image'] = $img;
                if ($company_image != "") {
                    unlink('uploads/company/' . $company_image);
                }
            }

            $insert = $this->CommonModal->updateRowById('company_registration', 'company_id', $uid, $post);

            if ($insert) {
                $this->session->set_userdata('msg', '<span class="alert alert-success">Profile Update successfully.</span>');
                redirect(base_url() . 'company-profile');
            } else {
                $this->session->set_userdata('msg', '<span class="alert alert-danger">Profile not update.</span>');
                redirect(base_url() . 'company-profile');
            }
        } else {
            $this->load->view('company/company-profile', $data);
        }
    }

    public function getcity()
    {


        $state = $this->input->post('state');
        $data['city'] = $this->CommonModal->getRowByIdInOrder('cities', array('state_id' => $state), 'name', 'asc');
        $this->load->view('select_city', $data);
    }

    public function company_logout()
    {
        $this->session->unset_userdata('login_company_id');
        $this->session->unset_userdata('login_company_name');
        $this->session->unset_userdata('login_company_email');
        $this->session->unset_userdata('login_company_number');
        redirect(base_url());
    }
}
