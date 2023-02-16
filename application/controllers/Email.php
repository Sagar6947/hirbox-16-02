<?php
class Email extends CI_Controller

{
    public function email_verification($email)
    {
        $getcandidate = $this->CommonModal->getRowById('candidate_registration', 'activationcode', $email);
        if($getcandidate[0]['email_verify'] == '0'){
            
            $mydata = array('email_verify' => '1');
            $update = $this->CommonModal->updateRowById('candidate_registration', 'activationcode', $email, $mydata);
            if($update){
                $this->session->set_userdata('msg', '<h6 class="alert alert-success">Your Email is verified. Login to continue.</h6>');
                redirect('candidate/login');
            }else{
                $this->session->set_userdata('msg', '<h6 class="alert alert-danger">Something is wrong. please try again</h6>');
                redirect('candidate/login');
            }
        }else{
            $this->session->set_userdata('msg', '<h6 class="alert alert-success">Your Email is verified.</h6>');
            redirect('candidate/login');
        }
    }
}