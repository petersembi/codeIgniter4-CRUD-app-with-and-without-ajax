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
/*
Home is the name of the controller (name of controller file must match name of the controller inside the file)
Index is the name of the function inside the controller
*/
$routes->get('products', 'ProductController::getIndex');
$routes->get('products/(:any)', 'ProductController::find/$1');

/*
- Groups are used to add a prefix to routes instead of typing the prefix to each of the routes to be included in the group
- Down here, we specify the function here instead of defining it inside a controller
*/
$routes->group('users', static function ($routes) {
   
    $routes->get('profile', function(){
        return "This is the user profile";
    });
    
    $routes->get('orders', function(){
        return "These are the user orders";
    });

});


$routes->get('students', 'StudentController::index');
$routes->get('/students/create','StudentController::create');
$routes->post('/students/add', 'StudentController::store');
$routes->get('/students/edit/(:num)', 'StudentController::edit/$1');
$routes->put('student/update/(:num)', 'StudentController::update/$1');
$routes->get('student/delete/(:num)', 'StudentController::delete/$1');
$routes->get('/student/confirm-delete/(:num)', 'StudentController::confirmdelete/$1');


// num used above indicates that only integer values should be accepted. 

// AjaxStudent Routes
$routes->get('ajaxStudent', 'AjaxStudentController::index');
$routes->post('/ajaxstudent/store', 'AjaxStudentController::store');
$routes->get('/ajax-students/getdata', 'AjaxStudentController::fetch');
$routes->post('ajax-student/viewstudent', 'AjaxStudentController::view');
$routes->post('ajax-student/edit', 'AjaxStudentController::edit');
$routes->post('ajax-student/update', 'AjaxStudentController::update');
$routes->post('ajax-student/delete', 'AjaxStudentController::delete');



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
