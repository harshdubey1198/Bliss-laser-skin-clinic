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
$route['default_controller'] = 'Front';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['index/(:num)'] = 'Front/index/$1';
$route['about-us'] = 'Front/about';
$route['service'] = 'Front/service';
$route['doctor'] = 'Front/doctor';
$route['blog'] = 'Front/blog';
// $route['blog-detail/(:any)'] = 'Front/blogDetail/$1';
$route['gallary'] = 'Front/gallary';
$route['contact'] = 'Front/contact';
$route['blog-detail/(:any)'] = 'Front/blog_detail/$1';
//Services
$route['hydrafacial-treatment'] = 'Front/hydrafacial_treatment';
$route['botox-treatment'] = 'Front/botox_treatment';
$route['carbon-laser-facial'] = 'Front/carbon_laser_facial';
$route['cosmetology'] = 'Front/cosmetology';
$route['facial-wrinkles-removal'] = 'Front/facial_wrinkles_removal';
$route['chemical-peels'] = 'Front/chemical_peels';
$route['tattoo-removal'] = 'Front/tattoo_removal';
$route['permanent-makeup'] = 'Front/permanent_makeup';
$route['gallery'] = 'Front/gallery';



/***************Admin*************/
$route['admin'] = 'login_panel/login';
$route['admin/dashboard'] = 'Admin_panel/dashboard';
$route['admin/post_blog'] = 'Admin_panel/post_blog';
$route['admin/manage-blog'] = 'Admin_panel/manage_blog';
$route['admin/edit_pass'] = 'Admin_panel/edit_password';
$route['admin/blog-category'] = 'Admin_panel/blog_category';
$route['admin/category-edit/(:any)'] = 'Admin_panel/category_edit/$1';
$route['admin/edit-blog/(:any)'] = 'Admin_panel/edit_blog/$1';


/* --------------- Crop ROute --------- */
$route['my-form'] = "MyFormController";
$route['my-form-upload'] = "MyFormController/post";