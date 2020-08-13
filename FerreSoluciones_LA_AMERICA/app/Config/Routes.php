<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->post('/Product/add', 'ProductController::add');
$routes->post('/Customer/add', 'CustomerController::add');
$routes->post('/User/add', 'UserController::add');
$routes->post('/Product/search', 'ProductController::search');
$routes->post('/Customer/search', 'CustomerController::search');
$routes->post('/User/search', 'UserController::search');
$routes->get('/Product/remove/:any', 'ProductController::remove/$1');
$routes->get('/Customer/remove/:any', 'CustomerController::remove/$1');
$routes->get('/User/remove/:any', 'UserController::remove/$1');
$routes->post('/Product/update', 'ProductController::update');
$routes->post('/Customer/update', 'CustomerController::update');
$routes->post('/User/update', 'UserController::update');

$routes->get('/about', 'AboutController::index');
$routes->get('/products', 'ProductsController::index');
$routes->get('/registration', 'RegistrationController::index');
$routes->get('/customer', 'CustomerController::index');
$routes->get('/Home', 'Home::index');
/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
