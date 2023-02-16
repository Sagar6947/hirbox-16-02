<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $get['title'] = "Admin Login | Hirbox";
        if ($this->session->userdata('admin_id')) {
            redirect(base_url('admin_Dashboard'));
        } else {
            $this->load->view('admin/login', $get);
        }
    }

    public function adminlogin()
    {
        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
        if ($this->form_validation->run()) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $data =  $this->CommonModal->getRowById('tbl_admin', 'username', $username);
            if ($data) {
                $id = $data[0]['admin_id'];
                $f_username = $data[0]['username'];
                $f_password = $data[0]['password'];

                if ($password != $f_password) {
                    flashData('login_error', 'Enter a valid Password.');
                } else {
                    $this->session->set_userdata(array('admin_id' => $id, 'username' => $username));
                    redirect('Admin_Dashboard');
                }
            } else {
                flashData('login_error', 'Enter a valid Username ');
            }
        }
        $this->load->view('admin/login');
    }

    public function logout()
    {
        //load session library
        $this->load->library('session');
        $this->session->unset_userdata('admin_id');
        redirect(base_url('admin'));
    }


    public function candidate_registration()
    {
        $data['title'] = "Candidate Register | Hirbox";
        if (count($_POST) > 0) {
            $activationcode = md5($this->input->post('email') . time());
            $post['email_verify'] = 0;
            $_POST['activationcode'] = $activationcode;

            $count_mobile = $this->CommonModal->getNumRows('candidate_registration', array('number' => $this->input->post('number')));
            $count_email = $this->CommonModal->getNumRows('candidate_registration', array('email' => $this->input->post('email')));
            if ($count_mobile > 0 || $count_email > 0) {
                $this->session->set_userdata('msg', '<h6 class="alert alert-danger">You have already registered with this email id or contact no.</h6>');

                redirect(base_url('candidate/register'));
            } else {
                $post = $this->input->post();
                $lastid = $this->CommonModal->insertRowReturnId('candidate_registration', $post);
                $data = $this->CommonModal->getRowById('candidate_registration', 'candidate_id', $lastid);

                // $this->session->set_userdata(array('candidate_id' => $data[0]['candidate_id'], 'cname' => $data[0]['name'], 'number' => $data[0]['number'], 'cemail' => $data[0]['email']));
                $this->session->set_userdata('msg', '<h6 class="alert alert-success">Registerd Successfully. Verify your email address, check your inbox</h6>');
                $message = candidatemail('Hirbox', base_url('Email/email_verification/' . $activationcode));
               $mailing = mailmsg($post['email'], 'Registered with Hirbox | Welcome User', $message);
               
                redirect('candidate/login');
            }
        }

        $data['country_code'] = $this->CommonModal->getAllRowsInOrder('country', 'name', 'asc');
        $this->load->view('candidate/register', $data);
    }


    public function candidate_login()
    {
        $get['title'] = "Candidate Login";

        if ($this->session->userdata('candidate_id')) {
            redirect(base_url('candidate'));
        } else {
            $this->load->view('candidate/login', $get);
        }
    }


    public function candidatelogin()
    {
        $this->form_validation->set_rules('email', 'User Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
        if ($this->form_validation->run()) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $data =  $this->CommonModal->getRowById('tbl_candidate_registration', 'email', $email);
            if ($data) {
                if($data[0]['email_verify'] == '1'){
                // $this->session->set_userdata(array('candidate_id' => $data[0]['candidate_id'], 'cname' => $data[0]['name'], 'number' => $data[0]['number'], 'cemail' => $data[0]['email']));

                    if ($data[0]['cstatus'] != '1') {
                        $id = $data[0]['candidate_id'];
                        $f_username = $data[0]['email'];
                        $f_password = $data[0]['password'];
    
                        if ($password != $f_password) {
                            $this->session->set_userdata('msg', '<h6 class="alert alert-danger">Enter a valid password</h6>');
                            redirect(base_url('candidate/login'));
                        } else {
                            // $this->session->set_userdata(array('candidate_id' => $id, 'number' => $data[0]['number']));
                $this->session->set_userdata(array('candidate_id' => $data[0]['candidate_id'], 'cname' => $data[0]['name'], 'number' => $data[0]['number'], 'cemail' => $data[0]['email']));
                            redirect('candidate');
                        }
                    } else {
                        $this->session->set_userdata('msg', '<h6 class="alert alert-danger">There is no longer any activity on your account</h6>');
                        redirect('candidate/login');
                    }
                }else{
                    $this->session->set_userdata('msg', '<h6 class="alert alert-danger">Your Email is not verified. please verify it.</h6>');
                        redirect('candidate/login');
                }
            } else {
                $this->session->set_userdata('msg', '<h6 class="alert alert-danger">Enter a valid Email</h6>');
            }
        }
        redirect(base_url('candidate/login'));
    }

    public function clogout()
    {
        //load session library
        $this->load->library('session');
        $this->session->unset_userdata('candidate_id');
        $this->session->unset_userdata('number');
        redirect(base_url('candidate/login'));
    }
}
