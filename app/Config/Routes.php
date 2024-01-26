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
$routes->get('/privacy', 'Home::privacy');
$routes->get('/imprint', 'Home::imprint');

$routes->get('/login', 'Home::login');
// reset password
$routes->get('/LupaPass', 'Home::LupaPass');
$routes->get('/reset_password/new_password', 'Home::new_password');
$routes->post('pass/reset', 'Home::send_email');
$routes->post('/reset_password', 'Home::update_password');

// halaman dashboard koordinator
$routes->get('/profil', 'Home::profil', ['filter' => 'client']); //koordinator
$routes->get('/profileKoordinator', 'Home::profileKoordinator', ['filter' => 'client']); //profile koordinator
$routes->post('update_koordinators/(:any)', 'Home::update_koordinatorss/$1', ['filter' => 'client']); //proses edit koordinator
$routes->get('delete/(:any)', 'Home::hapusKoordinator/$1', ['filter' => 'client']); //koordinator

// halaman dashboard kandidat
$routes->get('/profil-kandidat', 'Home::profil_kandidat', ['filter' => 'kandidat']); //kandidat
$routes->get('/profil_data_kandidat', 'Home::profil_data_kandidat', ['filter' => 'kandidat']); //halaman profile kandidat
$routes->post('update_kandidats/(:any)', 'Home::UpdateProfilKandidat/$1', ['filter' => 'kandidat']); //proses edit profile kandidat
$routes->get('deleteKandidat/(:any)', 'Home::hapusKandidat/$1', ['filter' => 'kandidat']); // hapus akun kandidat

// $routes->get('/profil-kandidat', 'Home::profil_kandidat', ['filter' => 'kandidat']);
// $routes->get('delete/(:any)', 'Home::hapus/$1', ['filter' => 'kandidat']);


$routes->post('/simpan-koordinator', 'Home::simpan_koordinator');
$routes->post('/simpan-kandidat', 'Home::simpan_kandidat');
$routes->post('/cek-login', 'Home::cek_login');

$routes->get('/admin', 'Home::admin', ['filter' => 'admin']);
$routes->get('/data-kandidat', 'Home::data_kandidat', ['filter' => 'admin']);
$routes->get('/data-koordinator', 'Home::data_koordinator', ['filter' => 'admin']);
// $routes->post('/gantistatus', 'Home::gantistatus', ['filter' => 'admin']);
$routes->post('update_kandidat/(:any)', 'Home::editKandidat/$1', ['filter' => 'admin']); //update status kandidat
$routes->get('/halaman_upKor/(:any)', 'Home::data_edit_kode_koordinator/$1', ['filter' => 'admin']); //halaman update kode koordinator kandidat
$routes->post('update_kandidat_koord/(:any)', 'Home::update_kandidat_koord/$1', ['filter' => 'admin']); //update kode koordinator kandidat
$routes->post('/kandidat/hapus/(:any)', 'Home::hapus_kandidat/$1', ['filter' => 'admin']); //hapus kandidat
$routes->post('update_koordinator/(:any)', 'Home::editKoordinator/$1', ['filter' => 'admin']); // edit status koordinator
$routes->get('/profile-admin', 'Home::PageProfilAdmin', ['filter' => 'admin']); //halaman profil admin
$routes->get('/Editprofil', 'Home::EditProfil', ['filter' => 'admin']); //halaman edit profil admin
$routes->post('update/(:any)', 'Home::UpdateProfil/$1', ['filter' => 'admin']); //proses edit profile admin

// $routes->post('/gantistatus-koord', 'Home::gantistatus_koord', ['filter' => 'admin']);
// $routes->post('/hapus-kandidat', 'Home::hapus_kandidat', ['filter' => 'admin']);


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
