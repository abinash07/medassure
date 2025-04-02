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

