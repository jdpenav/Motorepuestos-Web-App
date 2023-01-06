<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

/*Inicio Rutas CRUD*/

//Categorias
$route['categorias/crear'] = 'categoria/crear';
$route['categorias/update/(:any)'] = 'categoria/update/$1';
$route['categorias/delete/(:any)'] = 'categoria/delete/$1';
$route['categorias/imprimir'] = 'categoria/imprimir';

//$route['categorias/modificar'] = 'categorias/modificar';
//$route['categorias/eliminar'] = 'categorias/eliminar';

//Articulos
$route['articulos/crear'] = 'articulo/crear';
$route['articulos/update/(:any)'] = 'articulo/update/$1';
$route['articulos/delete/(:any)'] = 'articulo/delete/$1';
$route['articulos/imprimir'] = 'articulo/imprimir';

//$route['articulos/modificar'] = 'articulos/modificar';
//$route['articulos/eliminar'] = 'articulos/eliminar';

//Empleados
$route['empleados/crear'] = 'empleado/crear';
$route['empleados/update/(:any)'] = 'empleado/update/$1';
$route['empleados/delete/(:any)'] = 'empleado/delete/$1';
//$route['empleados/modificar'] = 'empleados/modificar';
//$route['empleados/eliminar'] = 'empleados/eliminar';

//Clientes
$route['clientes/crear'] = 'cliente/crear';
$route['clientes/update/(:any)'] = 'cliente/update/$1';
$route['clientes/delete/(:any)'] = 'cliente/delete/$1';
$route['categorias/imprimir'] = 'cliente/imprimir';


//Proveedores
$route['proveedores/crear'] = 'proveedor/crear';
$route['proveedores/update/(:any)'] = 'proveedor/update/$1';
$route['proveedores/delete/(:any)'] = 'proveedor/delete/$1';

$route['logout'] = 'login/logout';

/*Fin Rutas CRUD*/

$route['default_controller'] = 'login';
$route['404_override'] = 'dftep';
$route['translate_uri_dashes'] = FALSE;







//$route['crear'] = 'crear';

//$route->post('crear', 'Categorias::crear');
