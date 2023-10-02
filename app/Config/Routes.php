<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/koordinator', 'Home::koordinator');
$routes->get('/kandidat', 'Home::kandidat');
$routes->get('/dokumen', 'Home::dokumen');
$routes->get('/partner', 'Home::partner');

$routes->get('/login', 'Home::login');
// reset password
$routes->get('/LupaPass' , 'Home::LupaPass');
$routes->post('pass/reset' , 'Home::send_email');
$routes->get('/reset_password/new_password' , 'Home::new_password');
$routes->post('/reset_password', 'Home::update_password');

$routes->get('/profil', 'Home::profil', ['filter' => 'client']);
$routes->get('delete/(:any)', 'Home::hapusKoordinator/$1', ['filter' => 'client']);
$routes->get('/profil-kandidat', 'Home::profil_kandidat', ['filter' => 'kandidat']);
$routes->get('delete/(:any)', 'Home::hapus/$1', ['filter' => 'kandidat']);
$routes->post('/simpan-koordinator', 'Home::simpan_koordinator');
$routes->post('/simpan-kandidat', 'Home::simpan_kandidat');
$routes->post('/cek-login', 'Home::cek_login');

$routes->get('/admin', 'Home::admin', ['filter' => 'admin']);
$routes->get('/data-kandidat', 'Home::data_kandidat', ['filter' => 'admin']);
$routes->get('/data-koordinator', 'Home::data_koordinator', ['filter' => 'admin']);
$routes->post('/gantistatus', 'Home::gantistatus', ['filter' => 'admin']);
$routes->post('/gantistatus-koord', 'Home::gantistatus_koord', ['filter' => 'admin']);
$routes->post('/hapus-kandidat', 'Home::hapus_kandidat', ['filter' => 'admin']);


$routes->get('/terms', 'Home::terms');
$routes->get('/logout', 'Home::logout');
$routes->get('/(:any)', 'Home::logout');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
