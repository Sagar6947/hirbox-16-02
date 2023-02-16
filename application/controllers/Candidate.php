<?php
class Candidate extends CI_Controller

{

    public function __construct()
    {
        parent::__construct();
        if (sessionId('candidate_id') == "") {
            redirect(base_url('candidate/login'));
        }

        date_default_timezone_set("Asia/Kolkata");
    }

    public function index()
    {
        if (!$this->session->has_userdata('candidate_id')) {
            redirect(base_url('candidate/login'));
        }

        if (count($_POST) > 0) {
            $post = $this->input->post();
            $post['not_employeed'] = ((isset($post['not_employeed']) ? '1' : '0'));
            $technologies_used = $this->input->post('technologies_used');
            $post['technologies_used'] = json_encode($technologies_used);

            $role_looking_for = $this->input->post('role_looking_for');
            $post['role_looking_for'] = json_encode($role_looking_for);

            $industries = $this->input->post('industries');
            $post['industries'] = json_encode($industries);


            $resume = $post['resume'];

            if ($_FILES['resume_temp']['name'] != '') {
                $img = resumeUpload('resume_temp', 'uploads/resume/');
                $post['resume'] = $img;
                if ($resume != "") {
                    unlink('uploads/resume/' . $resume);
                }
            }

            $image = $post['image'];

            if ($_FILES['img']['name'] != '') {
                $img = imageUpload('img', 'uploads/candidate/');
                $post['image'] = $img;
                if ($$image != "") {
                    unlink('uploads/candidate/' . $$image);
                }
            }


            $update = $this->CommonModal->updateRowById('tbl_candidate_registration', 'candidate_id ', sessionId('candidate_id'), $post);
            if ($update) {
                $this->session->set_flashdata('msg', 'Profile Updated successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Profile Updated successfully');
                $this->session->set_flashdata('msg_class', 'alert-success');
            }
            redirect(base_url() . 'candidate');
        }

        $data['role'] = $this->CommonModal->getAllrows('tbl_role');
        $data['industries'] = $this->CommonModal->getAllrows('tbl_industries');
        $data['currency'] = $this->CommonModal->getAllrows('currency');
        $data['tech'] = $this->CommonModal->getAllrows('technologies');
        $data['country_code'] = $this->CommonModal->getAllRowsInOrder('country', 'name', 'asc');

        $data['candidate_detail'] = $this->CommonModal->getRowById('candidate_registration', 'candidate_id', sessionId('candidate_id'));

        $data['experience_data'] = $this->CommonModal->getRowById('candidate_experience', 'candidate_id', sessionId('candidate_id'));

        $data['academic_data'] = $this->CommonModal->getRowById('candidate_academic', 'candidate_id', sessionId('candidate_id'));
        $data['aca_data'] = $this->CommonModal->getRowByMoreId('candidate_academic', array('ace_id' => $editacaId, 'candidate_id' => $editcandidateId));

        // print_r( $data['candidate_detail']);
        $data['title'] = "Candidate Dashboard | Hirbox";
        $this->load->view('candidate/overview', $data);
    }

    public function show_acadmices()
    {
        $data['academic_data'] = $this->CommonModal->getRowById('candidate_academic', 'candidate_id', sessionId('candidate_id'));
        $this->load->view('candidate/sho-acadmices', $data);
    }

    public function delete_acadmices()
    {
        $acaId = $this->input->post('acaId');
        $candidateId = $this->input->post('candidateId');

        $insert = $this->CommonModal->runQuery("DELETE FROM `tbl_candidate_academic` WHERE ace_id = $acaId AND candidate_id = $candidateId");
        echo '1';
    }


    public function academic_add()
    {
        if (!$this->session->has_userdata('candidate_id')) {
            redirect(base_url('candidate/login'));
        }


        $degree = $this->input->post('degree');
        $eduboard = $this->input->post('eduboard');
        $institute = $this->input->post('institute');
        $city = $this->input->post('city');
        $passingyear = $this->input->post('passingyear');
        $candidate_id = sessionId('candidate_id');

        $add = array('candidate_id' => $candidate_id, 'degree' => $degree, 'specialization' => $eduboard, 'institute' => $institute, 'city' => $city, 'pass_year' => $passingyear);
        $insert = $this->CommonModal->insertRow('candidate_academic', $add);

        if ($insert) {
            $this->session->set_userdata('msg', 'Academic Add Successfully');
            $this->session->set_userdata('msg_class', 'alert-success');
        } else {
            $this->session->set_userdata('msg', 'Academic Add Successfully');
            $this->session->set_userdata('msg_class', 'alert-success');
        }
        echo '1';
    }
    public function academic_edit()
    {
        if (!$this->session->has_userdata('candidate_id')) {
            redirect(base_url('candidate/login'));
        }


        $degree = $this->input->post('degree');
        $eduboard = $this->input->post('eduboard');
        $institute = $this->input->post('institute');
        $city = $this->input->post('city');
        $passingyear = $this->input->post('passingyear');
        $aceid = $this->input->post('aceid');

        $mydata = array('degree' => $degree, 'specialization' => $eduboard, 'institute' => $institute, 'city' => $city, 'pass_year' => $passingyear);
        // print_r($mydata);
        // exit(); 
        $update = $this->CommonModal->updateRowById('candidate_academic', 'ace_id', $aceid, $mydata);

        if ($update) {
            $this->session->set_userdata('msg', 'Academic Add Successfully');
            $this->session->set_userdata('msg_class', 'alert-success');
        } else {
            $this->session->set_userdata('msg', 'Academic Add Successfully');
            $this->session->set_userdata('msg_class', 'alert-success');
        }
        echo '1';
    }

    public function show_experience()
    {
        $data['experience_data'] = $this->CommonModal->getRowById('candidate_experience', 'candidate_id', sessionId('candidate_id'));
        $this->load->view('candidate/sho-experience', $data);
    }

    public function edit_acadmices()
    {
        $editacaId = $this->input->post('editacaId');
        $editcandidateId = $this->input->post('editcandidateId');
        $data['aca_data'] = $this->CommonModal->getRowByMoreId('candidate_academic', array('ace_id' => $editacaId, 'candidate_id' => $editcandidateId));
        $this->load->view('candidate/edit-acadmices', $data);
    }

    public function edit_exp()
    {
        $editexpId = $this->input->post('editexpid');
        $editcandidateid = $this->input->post('editcandidateId');
        $data['exp_data'] = $this->CommonModal->getRowByMoreId('candidate_experience', array('exp_id' => $editexpId, 'candidate_id' => $editcandidateid));
        $data['role'] = $this->CommonModal->getAllrows('tbl_role');
        $data['industries'] = $this->CommonModal->getAllrows('tbl_industries');
        $data['tech'] = $this->CommonModal->getAllrows('technologies');
        $this->load->view('candidate/edit-exp', $data);
    }



    public function getjobs()
    {
        $category = ((isset($_POST['category'])) ? $_POST['category'] : '');
        $conditions  = array();
        $query = "SELECT * FROM `tbl_job_post` ";
        $query .= "WHERE";
        if ($category != '') {
            $cate = implode("','", $category);
            $conditions[] = "  industry IN('" . $cate . "') AND ";
        }
        if (count($conditions) > 0) {
            $query .= "   " . implode(' AND ', $conditions);
        }
        $query .= "  status = '0' ";
        $query .= "ORDER BY job_id DESC";
        $data['job_list'] = $this->CommonModal->runQuery($query);


        // $data['job_list'] = $this->CommonModal->getAllRowsInOrder('tbl_job_post', 'job_id', 'desc');
        $this->load->view('candidate/getjob', $data);
    }

    public function delete_experience()
    {
        $expid = $this->input->post('expId');
        $expcandidateid = $this->input->post('expcandidateId');
        $delet_exp = $this->CommonModal->runQuery("DELETE FROM `tbl_candidate_experience` WHERE exp_id = $expid AND candidate_id = $expcandidateid");

        echo '1';
    }

    public function email_verification($email)
    {
        print_r($email);
        exit();
    }

    public function experience_add()
    {
        if (!$this->session->has_userdata('candidate_id')) {
            redirect(base_url('candidate/login'));
        }

        $exprole = $this->input->post('exprole');
        $otherexproles = $this->input->post('otherexproles');
        $expcompany = $this->input->post('expcompany');
        $expindustry = $this->input->post('expindustry');
        $expjoindate = $this->input->post('expjoindate');
        $expleavedate = $this->input->post('expleavedate');
        $expkeyskill = $this->input->post('expkeyskill');
        $expkeyskillencode = json_encode($expkeyskill);
        $expnoticeperiod = $this->input->post('expnoticeperiod');
        $expdesc = $this->input->post('expdesc');
        $stillwork = $this->input->post('stillwork');
        $candidate_id = sessionId('candidate_id');

        $addexp = array('candidate_id' => $candidate_id, 'role' => $exprole, 'expotherrole' => $otherexproles, 'company' => $expcompany, 'industry_company' => $expindustry, 'joining_date' => $expjoindate, 'leaving_date' => $expleavedate, 'stillwork' => $stillwork, 'key_skill' => $expkeyskillencode, 'notice_period' => $expnoticeperiod, 'description' => $expdesc);
        $insert = $this->CommonModal->insertRow('tbl_candidate_experience', $addexp);


        if ($insert) {
            $this->session->set_flashdata('msg', 'Experience Add Successfully');
            $this->session->set_flashdata('msg_class', 'alert-success');
        } else {
            $this->session->set_flashdata('msg', 'Experience Add Successfully');
            $this->session->set_flashdata('msg_class', 'alert-success');
        }
        echo '1';
    }

    public function dashboard()
    {
        if (!$this->session->has_userdata('candidate_id')) {
            redirect(base_url('candidate/login'));
        }
        $data['candidate'] = $this->CommonModal->getRowById('candidate_registration', 'candidate_id', sessionId('candidate_id'));
        $data['title'] = "Candidate Dashboard | Hirbox";
        $this->load->view('candidate/dashboard', $data);
    }


    public function profile()
    {
        if (!$this->session->has_userdata('candidate_id')) {
            redirect(base_url('candidate/login'));
        }
        $id = sessionId('candidate_id');
        $data['role'] = $this->CommonModal->getAllrows('tbl_role');
        $data['tech'] = $this->CommonModal->getAllrows('technologies');
        $data['title'] = "Complete Profile  | Hirbox";
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $post['image'] = imageUpload('image', 'uploads/candidate/');
            $update = $this->CommonModal->updateRowById('tbl_candidate_registration', 'candidate_id ', $id, $post);
            redirect(base_url() . 'candidate/preferences');
        } else {
            $this->load->view('candidate/profile', $data);
        }
    }

    public function view_profile()
    {
        $data['title'] = "My Profile |Hirbox";
        $data['get_candidate'] = $this->CommonModal->getRowById('tbl_candidate_registration', 'candidate_id', sessionId('candidate_id'));
        $this->load->view('candidate/view-profile', $data);
    }
    public function preferences()
    {
        if (!$this->session->has_userdata('candidate_id')) {
            redirect(base_url('candidate/login'));
        }
        $data['role'] = $this->CommonModal->getAllrows('tbl_role');
        $data['currency'] = $this->CommonModal->getAllrows('currency');
        $data['title'] = "Complete Profile  | Hirbox";
        $data['industries'] = $this->CommonModal->getAllrows('tbl_industries');
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $role_looking_for = $this->input->post('role_looking_for');
            $post['role_looking_for'] = json_encode($role_looking_for);
            $industries = $this->input->post('industries');
            $post['industries'] = json_encode($industries);
            $update = $this->CommonModal->updateRowById('tbl_candidate_registration', 'candidate_id ', sessionId('candidate_id'), $post);
            redirect(base_url() . 'candidate/culture');
        } else {
            $this->load->view('candidate/preferences', $data);
        }
    }


    public function culture()
    {
        if (!$this->session->has_userdata('candidate_id')) {
            redirect(base_url('candidate/login'));
        }


        $data['tech'] = $this->CommonModal->getAllrows('technologies');
        $data['title'] = "Complete Culture  | Hirbox";
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $technologies_used = $this->input->post('technologies_used');
            $post['technologies_used'] = json_encode($technologies_used);;
            $update = $this->CommonModal->updateRowById('tbl_candidate_registration', 'candidate_id ', sessionId('candidate_id'), $post);
            redirect(base_url() . 'candidate/resume');
        } else {
            $this->load->view('candidate/culture', $data);
        }
    }

    public function resume()
    {
        if (!$this->session->has_userdata('candidate_id')) {
            redirect(base_url('candidate/login'));
        }


        $data['title'] = "Complete Resume  | Hirbox";
        if (count($_FILES) > 0) {

            $post = $this->input->post();
            $post['resume'] = resumeUpload('resume', 'uploads/resume/');

            $update = $this->CommonModal->updateRowById('tbl_candidate_registration', 'candidate_id ', sessionId('candidate_id'), $post);
            redirect(base_url() . 'candidate/related_jobs');
        } else {
            $this->load->view('candidate/resume', $data);
        }
    }

    public function upload_resume()
    {
        $data['job_list'] = $this->CommonModal->getAllRowsInOrder('tbl_job_post', 'job_id', 'desc');
        $data['title'] = "Candidate Job List | Hirbox";
        $this->load->view('candidate/upload_resume', $data);
    }


    public function view_jobs()
    {
        $data['job_list'] = $this->CommonModal->getAllRowsInOrder('tbl_job_post', 'job_id', 'desc');
        $data['industries'] = $this->CommonModal->getRowById('tbl_industries', 'category_status', '0');
        $data['title'] = "Candidate Job List | Hirbox";
        $this->load->view('candidate/view-jobs', $data);
    }

    public function view_job_details($jdid, $title)
    {

        $job_id = $jdid;
        $data['job_detail'] = $this->CommonModal->getRowById('tbl_job_post', 'job_id', $job_id);
        $data['user_candidate'] = $this->CommonModal->getRowById('tbl_candidate_registration', 'candidate_id', sessionId('candidate_id'));
        $company = $this->CommonModal->getRowById('tbl_company_registration', 'company_id', $data['job_detail'][0]['company_id']);
        $data['saved_info'] = $this->CommonModal->getRowByMoreId('tbl_saved_job', array('job_id' => $job_id, 'candidate_id' => sessionId('candidate_id')));
        $data['applied_validation'] = $this->CommonModal->getRowByMoreId('tbl_applied_candidate', array('job_id' => $job_id, 'candidate_id' => sessionId('candidate_id')));
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $post['candidate_id'] = sessionId('candidate_id');
            $post['job_id'] = $job_id;
            $post['company_id'] = $company[0]['company_id'];
            $insert_req = $this->CommonModal->insertRowReturnId('tbl_applied_candidate', $post);
            if ($insert_req) {
                $this->session->set_userdata('msg', '<script type="text/javascript">
                    alert("Your application is successfully send to the HR");
                    </script>');
                redirect(base_url('candidate/view_job_details/' . $job_id . '/' . $data['job_detail'][0]['job_title']));
            } else {
                $this->session->set_userdata('msg', '<script type="text/javascript">

                    alert("Something Went Wrong, please try again later");
                    </script>');
                redirect(base_url('candidate/view_job_details/' . $job_id . '/' . $data['job_detail'][0]['job_title']));
            }
        }
        $data['title'] = "Candidate Job List | Hirbox";
        $this->load->view('candidate/view-job-details', $data);
    }

    public function add_save_job($candidate_id, $job_id, $panel)
    {
        if (!$this->session->has_userdata('candidate_id')) {
            redirect(base_url('candidate/login'));
        }
        $datarow = $this->CommonModal->getRowByMoreId('tbl_saved_job', array('candidate_id' => $candidate_id, 'job_id' => $job_id, 'panel' => $panel));
        if ($datarow != '') {
            $insert = $this->CommonModal->runQuery("DELETE FROM `tbl_saved_job` WHERE job_id = $job_id AND candidate_id = $candidate_id AND panel = $panel");
        } else {
            $insert = $this->CommonModal->insertRowReturnId('tbl_saved_job',  array('candidate_id' => $candidate_id, 'job_id' => $job_id, 'panel' => $panel));
        }
        // redirect(base_url() . 'candidate/view_jobs'); 
        redirect($_SERVER["HTTP_REFERER"]);
    }

    public function favorite_jobs()
    {
        $data['saved'] = $this->CommonModal->getRowById('tbl_saved_job', 'candidate_id', sessionId('candidate_id'));
        $data['title'] = "Candidate Fav Profile | Hirbox";
        $this->load->view('candidate/favorite-jobs', $data);
    }

    public function related_jobs()
    {
        $data['job_list'] = $this->CommonModal->getAllRowsInOrder('tbl_job_post', 'job_id', 'desc');
        $data['title'] = "Related Jobs | Hirbox";
        $this->load->view('candidate/releated-jobs', $data);
    }

    public function apply_jobs()
    {

        $data['app_jobs'] = $this->CommonModal->getRowById('tbl_applied_candidate', 'candidate_id', sessionId('candidate_id'));
        $data['title'] = "Apply Jobs | Hirbox";
        $this->load->view('candidate/apply-jobs', $data);
    }

    public function getcurrency()
    {
        $currency = $_POST['currency'];
        $curr = $this->CommonModal->getRowById('tbl_currency', 'c_id', $currency);
        print_r($curr[0]['symbol']);
    }

    public function logout()
    {
        //load session library
        $this->load->library('session');
        $this->session->unset_userdata('candidate_id');
        redirect(base_url('candidate/login'));
    }
}
