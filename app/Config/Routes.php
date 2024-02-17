<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('applicant_action', 'Home::applicant_action');



//$routes->get('admin', 'Admin\Admin::index');
$routes->get('admin', 'Admin\Login::index');
$routes->post('admin/login_action', 'Admin\Login::login_action');
$routes->get('admin/logout', 'Admin\Login::logout');

$routes->get('admin/applicant', 'Admin\Applicant::index');
$routes->post('admin/applicant_update_status', 'Admin\Applicant::update_status');



