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


$routes->get('/admin/faq','Adminpanel\Home::faq');
$routes->post('/admin/get_all_faq','Adminpanel\Home::get_all_faq');
$routes->get('/admin/addfaq','Adminpanel\Home::add_faq');
$routes->post('/admin/insert_faq','Adminpanel\Home::insert_faq');


$routes->get('/admin/news','Adminpanel\Home::news');
$routes->post('/admin/get_all_news','Adminpanel\Home::get_all_news');
$routes->get('/admin/addnews','Adminpanel\Home::add_news');
$routes->post('/admin/insert_news','Adminpanel\Home::insert_news');


$routes->get('/admin/author','Adminpanel\Home::author');
$routes->post('/admin/get_all_author','Adminpanel\Home::get_all_author');
$routes->get('/admin/addauthor','Adminpanel\Home::add_author');
$routes->post('/admin/insert_author','Adminpanel\Home::insert_author');


$routes->get('/admin/googlerating','Adminpanel\Home::google_rating');
$routes->post('/admin/get_all_google_rating','Adminpanel\Home::get_all_google_rating');
$routes->get('/admin/addgooglerating','Adminpanel\Home::add_google_rating');
$routes->post('/admin/insert_google_rating','Adminpanel\Home::insert_google_rating');


$routes->get('/admin/category','Adminpanel\Home::category');
$routes->post('/admin/get_all_category','Adminpanel\Home::get_all_category');
$routes->get('/admin/addcategory','Adminpanel\Home::add_category');
$routes->post('/admin/insert_category','Adminpanel\Home::insert_category');


$routes->get('/admin/video','Adminpanel\Home::video');
$routes->post('/admin/get_all_video','Adminpanel\Home::get_all_video');
$routes->get('/admin/addvideo','Adminpanel\Home::add_video');
$routes->post('/admin/insert_video','Adminpanel\Home::insert_video');

















$routes->get('/admin/client','Adminpanel\Home::client');
$routes->post('/admin/clientlist','Adminpanel\Home::get_all_client');
$routes->get('/admin/addclient','Adminpanel\Home::add_client');
$routes->post('/admin/insertclient','Adminpanel\Home::insert_client');


$routes->get('/admin/examinee','Adminpanel\Home::examinee');
$routes->post('/admin/examineelist','Adminpanel\Home::get_all_exminee');
$routes->get('/admin/addexaminee','Adminpanel\Home::add_examniee');
$routes->post('/admin/insertexaminee','Adminpanel\Home::insert_examinee');




$routes->get('/admin/question','Adminpanel\Home::question');
$routes->post('/admin/questionlist','Adminpanel\Home::get_all_question');


$routes->get('/admin/adminuser','Adminpanel\Home::adminuser');
$routes->post('/admin/adminlist','Adminpanel\Home::get_all_admin_user');

$routes->get('/admin/report','Adminpanel\Home::report');
$routes->post('/admin/userreport','Adminpanel\Home::get_user_report');