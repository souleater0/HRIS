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
$route['default_controller'] = 'home';
$route['404_override'] = 'home/error_page';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'home/login_page';
$route['logout'] = 'home/logout';

// department routes
$route['add-department'] = 'department';
$route['insert-department'] = 'department/insert';
$route['manage-department'] = 'department/manage_department';
$route['edit-department/(:num)'] = 'department/edit/$1';
$route['update-department'] = 'department/update';
$route['delete-department/(:num)'] = 'department/delete/$1';

// leave type
$route['add-leavetype'] = 'leavetype';
$route['insert-leavetype'] = 'leavetype/insert';
$route['manage-leavetype'] = 'leavetype/manage_leavetype';
$route['edit-leavetype/(:num)'] = 'leavetype/edit/$1';
$route['update-leavetype'] = 'leavetype/update';
$route['delete-leavetype/(:num)'] = 'leavetype/delete/$1';

// Line of business
$route['add-lob'] = 'lob';
$route['insert-lob'] = 'lob/insert';
$route['manage-lob'] = 'lob/manage_lob';
$route['edit-lob/(:num)'] = 'lob/edit/$1';
$route['update-lob'] = 'lob/update';
$route['delete-lob/(:num)'] = 'lob/delete/$1';

// position
$route['add-position'] = 'position';
$route['insert-position'] = 'position/insert';
$route['manage-position'] = 'position/manage_position';
$route['edit-position/(:num)'] = 'position/edit/$1';
$route['update-position'] = 'position/update';
$route['delete-position/(:num)'] = 'position/delete/$1';

// mode of payroll
$route['add-modeofpayroll'] = 'modeofpayroll';
$route['insert-modeofpayroll'] = 'modeofpayroll/insert';
$route['manage-modeofpayroll'] = 'modeofpayroll/manage_modeofpayroll';
$route['edit-modeofpayroll/(:num)'] = 'modeofpayroll/edit/$1';
$route['update-modeofpayroll'] = 'modeofpayroll/update';
$route['delete-modeofpayroll/(:num)'] = 'modeofpayroll /delete/$1';

// employeestatus
$route['add-employeestatus'] = 'employeestatus';
$route['insert-employeestatus'] = 'employeestatus/insert';
$route['manage-employeestatus'] = 'employeestatus/manage_employeestatus';
$route['edit-employeestatus/(:num)'] = 'employeestatus/edit/$1';
$route['update-employeestatus'] = 'employeestatus/update';
$route['delete-employeestatus/(:num)'] = 'employeestatus /delete/$1';

//staff routes
$route['add-staff'] = 'staff';
$route['manage-staff'] = 'staff/manage';
$route['insert-staff'] = 'staff/insert';
$route['delete-staff/(:num)'] = 'staff/delete/$1';
$route['edit-staff/(:num)'] = 'staff/edit/$1';
$route['update-staff'] = 'staff/update';
// credential
$route['add-credential'] = 'credential';
$route['insert-credential'] = 'employeestatus/credential';
$route['manage-credential'] = 'credential/manage_credential';
$route['edit-credential/(:num)'] = 'credential/edit/$1';
$route['update-credential'] = 'credential/update';
$route['delete-credential/(:num)'] = 'credential /delete/$1';

//salary routes
$route['add-salary'] = 'salary';
$route['manage-salary'] = 'salary/manage';
$route['view-salary'] = 'salary/view';
$route['salary-invoice/(:num)'] = 'salary/invoice/$1';
$route['print-invoice/(:num)'] = 'salary/invoice_print/$1';
$route['delete-salary/(:num)'] = 'salary/delete/$1';

$route['apply-leave'] = 'leave';
$route['approve-leave'] = 'leave/approve';
$route['leave-history'] = 'leave/manage';
$route['leave-approved/(:num)'] = 'leave/insert_approve/$1';
$route['leave-rejected/(:num)'] = 'leave/insert_reject/$1';
$route['view-leave'] = 'leave/view';
$route['salaryinvoice/(:num)'] = 'salary/invoicestaff/$1';