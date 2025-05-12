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
$routes->get('/service/(:any)', 'Home::service/$1');

$routes->get('/videos', 'Home::videos');
$routes->get('/videos/(:any)', 'Home::videos/$1');

$routes->get('/knowledge-center', 'Home::knowledge_center');
$routes->get('/knowledge-center/(:any)', 'Home::knowledge_center_page/$1');

$routes->get('/patient-testimonials', 'Home::patient_testimonials');
$routes->get('/patient-testimonials/(:any)', 'Home::patient_testimonial/$1');

$routes->get('/travel-visa', 'Home::travel_visa');
$routes->get('/travel-visa/(:any)', 'Home::travel_visa_page/$1');

$routes->get('/cost/(:any)', 'Home::cost/$1');

$routes->get('/hospitals', 'Home::hospital');
$routes->get('/hospitals/(:any)', 'Home::hospital/$1');
$routes->get('/hospital/(:any)', 'Home::hospital_page/$1');
$routes->post('/gethospital','Home::get_hospital_data');

$routes->get('/doctors', 'Home::doctor');
$routes->get('/doctors/(:any)', 'Home::doctor/$1');
$routes->get('/doctor/(:any)', 'Home::doctor_page/$1');
$routes->post('/getdoctor','Home::get_doctor_data');

$routes->get('/consult-online', 'Home::consult_online');
$routes->get('/test_data', 'Home::test_data');
$routes->post('/genericform','Home::generic_form');


$routes->get('/suggestions/(:any)', 'Home::suggestions/$1');



//Dashboard
$routes->get('/admin/login','Adminpanel\Auth::index');
$routes->post('/adminlogin','Adminpanel\Auth::loginme');
$routes->get('/admin/logout','Adminpanel\Auth::logout');
$routes->get('/admin','Adminpanel\Home::index');
$routes->post('/admin/get_sells_data','Adminpanel\Home::get_sells_data');


$routes->get('/admin/faq','Adminpanel\Home::faq');
$routes->post('/admin/get_all_faq','Adminpanel\Home::get_all_faq');
$routes->get('/admin/addfaq','Adminpanel\Home::add_faq');
$routes->post('/admin/insert_faq','Adminpanel\Home::insert_faq');
$routes->get('/admin/editfaq/(:any)','Adminpanel\Home::edit_faq/$1');
$routes->post('/admin/update_faq','Adminpanel\Home::update_faq');

$routes->get('/admin/news','Adminpanel\Home::news');
$routes->post('/admin/get_all_news','Adminpanel\Home::get_all_news');
$routes->get('/admin/addnews','Adminpanel\Home::add_news');
$routes->post('/admin/insert_news','Adminpanel\Home::insert_news');


$routes->get('/admin/author','Adminpanel\Home::author');
$routes->post('/admin/get_all_author','Adminpanel\Home::get_all_author');
$routes->get('/admin/addauthor','Adminpanel\Home::add_author');
$routes->post('/admin/insert_author','Adminpanel\Home::insert_author');
$routes->get('/admin/editauthor/(:any)','Adminpanel\Home::edit_author/$1');
$routes->post('/admin/update_author','Adminpanel\Home::update_author');


$routes->get('/admin/googlerating','Adminpanel\Home::google_rating');
$routes->post('/admin/get_all_google_rating','Adminpanel\Home::get_all_google_rating');
$routes->get('/admin/addgooglerating','Adminpanel\Home::add_google_rating');
$routes->post('/admin/insert_google_rating','Adminpanel\Home::insert_google_rating');
$routes->get('/admin/editgooglerating/(:any)','Adminpanel\Home::edit_google_rating/$1');
$routes->post('/admin/update_google_rating','Adminpanel\Home::update_google_rating');


$routes->get('/admin/category','Adminpanel\Home::category');
$routes->post('/admin/get_all_category','Adminpanel\Home::get_all_category');
$routes->get('/admin/addcategory','Adminpanel\Home::add_category');
$routes->post('/admin/insert_category','Adminpanel\Home::insert_category');
$routes->get('/admin/editcategory/(:any)','Adminpanel\Home::edit_category/$1');
$routes->post('/admin/update_category','Adminpanel\Home::update_category');


$routes->get('/admin/video','Adminpanel\Home::video');
$routes->post('/admin/get_all_video','Adminpanel\Home::get_all_video');
$routes->get('/admin/addvideo','Adminpanel\Home::add_video');
$routes->post('/admin/insert_video','Adminpanel\Home::insert_video');
$routes->get('/admin/editvideo/(:any)','Adminpanel\Home::edit_video/$1');
$routes->post('/admin/update_video','Adminpanel\Home::update_video');


$routes->get('/admin/patienttestimonial','Adminpanel\Home::patient_testimonial');
$routes->post('/admin/get_all_patient_testimonial','Adminpanel\Home::get_all_patient_testimonial');
$routes->get('/admin/addpatienttestimonial','Adminpanel\Home::add_patient_testimonial');
$routes->post('/admin/insert_patient_testimonial','Adminpanel\Home::insert_patient_testimonial');
$routes->get('/admin/editpatienttestimonial/(:any)','Adminpanel\Home::edit_patient_testimonial/$1');
$routes->post('/admin/update_patient_testimonial','Adminpanel\Home::update_patient_testimonial');


$routes->get('/admin/lowestquote','Adminpanel\Home::lowest_quote');
$routes->post('/admin/get_all_lowest_quote','Adminpanel\Home::get_all_lowest_quote');
$routes->get('/admin/addlowestquote','Adminpanel\Home::add_lowest_quote');
$routes->post('/admin/insert_lowest_quote','Adminpanel\Home::insert_lowest_quote');
$routes->get('/admin/editlowestquote/(:any)','Adminpanel\Home::edit_lowest_quote/$1');
$routes->post('/admin/update_lowest_quote','Adminpanel\Home::update_lowest_quote');


$routes->get('/admin/multispecialty','Adminpanel\Home::multi_specialty');
$routes->post('/admin/get_all_multi_specialty','Adminpanel\Home::get_all_multi_specialty');
$routes->get('/admin/addmultispecialty','Adminpanel\Home::add_multi_specialty');
$routes->post('/admin/insert_multi_specialty','Adminpanel\Home::insert_multi_specialty');
$routes->get('/admin/editmultispecialty/(:any)','Adminpanel\Home::edit_multi_specialty/$1');
$routes->post('/admin/update_multi_specialty','Adminpanel\Home::update_multi_specialty');


$routes->get('/admin/travelvisa','Adminpanel\Home::travel_visa');
$routes->post('/admin/get_all_travel_visa','Adminpanel\Home::get_all_travel_visa');
$routes->get('/admin/addtravelvisa','Adminpanel\Home::add_travel_visa');
$routes->post('/admin/insert_travel_visa','Adminpanel\Home::insert_travel_visa');


$routes->get('/admin/blog','Adminpanel\Home::blog');
$routes->post('/admin/get_all_blog','Adminpanel\Home::get_all_blog');
$routes->get('/admin/addblog','Adminpanel\Home::add_blog');
$routes->post('/admin/insert_blog','Adminpanel\Home::insert_blog');


$routes->get('/admin/department','Adminpanel\Home::department');
$routes->post('/admin/get_all_department','Adminpanel\Home::get_all_department');
$routes->get('/admin/adddepartment','Adminpanel\Home::add_department');
$routes->post('/admin/insert_department','Adminpanel\Home::insert_department');
$routes->get('/admin/editdepartment/(:any)','Adminpanel\Home::edit_department/$1');
$routes->post('/admin/update_department','Adminpanel\Home::update_department');


$routes->get('/admin/cost','Adminpanel\Home::cost');
$routes->post('/admin/get_all_cost','Adminpanel\Home::get_all_cost');
$routes->get('/admin/addcost','Adminpanel\Home::add_cost');
$routes->post('/admin/insert_cost','Adminpanel\Home::insert_cost');
$routes->get('/admin/editcost/(:any)','Adminpanel\Home::edit_cost/$1');
$routes->post('/admin/update_cost','Adminpanel\Home::update_cost');


$routes->get('/admin/treatment','Adminpanel\Home::treatment');
$routes->post('/admin/get_all_treatment','Adminpanel\Home::get_all_treatment');
$routes->get('/admin/addtreatment','Adminpanel\Home::add_treatment');
$routes->post('/admin/insert_treatment','Adminpanel\Home::insert_treatment');
$routes->get('/admin/edittreatment/(:any)','Adminpanel\Home::edit_treatment/$1');
$routes->post('/admin/update_treatment','Adminpanel\Home::update_treatment');


$routes->get('/admin/hospital','Adminpanel\Home::hospital');
$routes->post('/admin/get_all_hospital','Adminpanel\Home::get_all_hospital');
$routes->get('/admin/addhospital','Adminpanel\Home::add_hospital');
$routes->post('/admin/insert_hospital','Adminpanel\Home::insert_hospital');
$routes->get('/admin/edithospital/(:any)','Adminpanel\Home::edit_hospital/$1');
$routes->post('/admin/update_hospital','Adminpanel\Home::update_hospital');


$routes->get('/admin/doctor','Adminpanel\Home::doctor');
$routes->post('/admin/get_all_doctor','Adminpanel\Home::get_all_doctor');
$routes->get('/admin/adddoctor','Adminpanel\Home::add_doctor');
$routes->post('/admin/insert_doctor','Adminpanel\Home::insert_doctor');
$routes->get('/admin/editdoctor/(:any)','Adminpanel\Home::edit_doctor/$1');
$routes->post('/admin/update_doctor','Adminpanel\Home::update_doctor');


$routes->get('/admin/enquiry','Adminpanel\Home::enquiry');
$routes->post('/admin/get_all_enquiry','Adminpanel\Home::get_all_enquiry');
$routes->get('/admin/addenquiry','Adminpanel\Home::add_enquiry');
$routes->post('/admin/insert_enquiry','Adminpanel\Home::insert_enquiry');


$routes->get('/admin/tophospital','Adminpanel\Home::top_hospital');
$routes->post('/admin/get_all_top_hospital','Adminpanel\Home::get_all_top_hospital');
$routes->get('/admin/edittophospital/(:any)','Adminpanel\Home::edit_top_hospital/$1');
$routes->post('/admin/update_top_hospital','Adminpanel\Home::update_top_hospital');

$routes->post('/admin/delete_me','Adminpanel\Home::delete_me');


$routes->get('/admin/service','Adminpanel\Home::service');
$routes->post('/admin/get_all_service','Adminpanel\Home::get_all_service');
$routes->get('/admin/addservice','Adminpanel\Home::add_service');
$routes->post('/admin/insert_service','Adminpanel\Home::insert_service');
$routes->get('/admin/editservice/(:any)','Adminpanel\Home::edit_service/$1');
$routes->post('/admin/update_service','Adminpanel\Home::update_service');










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