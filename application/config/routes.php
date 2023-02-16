<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'Company';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['company/dashboard'] = 'Company/index';
$route['datatable'] = 'Company/datatable';
$route['company-logout'] = 'Company/company_logout';
$route['company-profile'] = 'Company/company_profile';
$route['lockscreen'] = 'Company/lockscreen';
$route['company/login'] = 'Company/login';
$route['company/register'] = 'Company/register';
$route['post-a-job'] = 'Company/add_job';
$route['company/view-post-job'] = 'Company/view_post_job';
$route['company/apply-candidate-report'] = 'Company/apply_candidate_report';
$route['company/add-team-member'] = 'Company/add_team';
$route['company/manage-team-member'] = 'Company/manage_team';
$route['company/getcity'] = 'Company/getcity';
$route['company-profile'] = 'Company/company_profile';
// $route['home'] = 'dashboard/home';

$route['update-job/(:any)'] = 'Company/update_job/$1';
$route['delete-job'] = 'Company/delete_job';
$route['delete-member'] = 'Company/delete_member';



$route['recruiter-dashboard'] = 'Recruiter/home';
$route['recruiter-login'] = 'Recruiter/login';
$route['recruiter-register'] = 'Recruiter/register';
$route['company-details'] = 'Recruiter/company_details';
$route['assign-team'] = 'Recruiter/assign_team';
$route['job-details'] = 'Recruiter/job_details';
$route['apply-candidates'] = 'Recruiter/apply_candidates';
$route['mapped-jobs'] = 'Recruiter/mapped_jobs';
$route['mapped-candidates'] = 'Recruiter/mapped_candidates';
$route['search-jobs'] = 'Recruiter/search_jobs';
$route['faq'] = 'Recruiter/faq';
$route['videos'] = 'Recruiter/videos';
$route['add-job'] = 'Recruiter/add_job';
$route['need-help'] = 'Recruiter/need_help';



// --------------candidate login -----------
$route['candidate/login'] = 'admin/candidate_login';
$route['candidate/register'] = 'admin/candidate_registration';
