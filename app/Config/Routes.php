<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/about-us', 'Home::about_us');
$routes->get('/medassure-services', 'Home::medassure_services');
$routes->get('/medassure-vision-mission-objective', 'Home::medassure_mission_vision_objective');
$routes->get('/our-team', 'Home::our_team');
$routes->get('/frequently-asked-questions', 'Home::frequently_asked_questions');
$routes->get('/contact', 'Home::contact');
$routes->get('/jobs-medassure', 'Home::jobs_medassure');
$routes->get('/medassure-hospital-services', 'Home::medassure_hospital_services');
$routes->get('/opd-camps', 'Home::opd_camps');
$routes->get('/medassure-doctor-services', 'Home::medassure_doctor_services');
$routes->get('/partner-medassure', 'Home::partner_medassure');
$routes->get('/privacy-policy', 'Home::privacy_policy');
$routes->get('/editorial-policy', 'Home::editorial_policy');
$routes->get('/terms-use', 'Home::terms_use');
$routes->get('/india', 'Home::india');
$routes->get('/turkey', 'Home::turkey');
$routes->get('/thailand', 'Home::thailand');

$routes->get('/consult-online', 'Home::consult_online');

$routes->get('/test_data', 'Home::test_data');

$routes->post('/genericform','Home::generic_form');






//Dashboard
$routes->get('/admin/login','Adminpanel\Auth::index');
$routes->post('/adminlogin','Adminpanel\Auth::loginme');
$routes->get('/admin/logout','Adminpanel\Auth::logout');


$routes->get('/admin','Adminpanel\Home::index');


$routes->get('/admin/client','Adminpanel\Home::client');
$routes->post('/admin/clientlist','Adminpanel\Home::get_all_client');
$routes->get('/admin/addclient','Adminpanel\Home::add_client');
$routes->post('/admin/insertclient','Adminpanel\Home::insert_client');


$routes->get('/admin/examinee','Adminpanel\Home::examinee');
$routes->post('/admin/examineelist','Adminpanel\Home::get_all_exminee');
$routes->get('/admin/addexaminee','Adminpanel\Home::add_examniee');
$routes->post('/admin/insertexaminee','Adminpanel\Home::insert_examinee');


$routes->get('/admin/category','Adminpanel\Home::category');
$routes->post('/admin/categorylist','Adminpanel\Home::get_all_category');


$routes->get('/admin/question','Adminpanel\Home::question');
$routes->post('/admin/questionlist','Adminpanel\Home::get_all_question');


$routes->get('/admin/adminuser','Adminpanel\Home::adminuser');
$routes->post('/admin/adminlist','Adminpanel\Home::get_all_admin_user');

$routes->get('/admin/report','Adminpanel\Home::report');
$routes->post('/admin/userreport','Adminpanel\Home::get_user_report');