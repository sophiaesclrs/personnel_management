<?php

use App\Http\Controllers\logs\{
    welcome_controller,
    BOD_login_controller,
    DH_login_controller
};

use App\Http\Controllers\BOD_ADMIN\{
    dashboard_controller,
    crud_controller
};
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;

// bago nga route for 2nd ADMIN = DEPARTMENT HEADS
use App\Http\Controllers\DH_ADMIN\{
    dashboard_controllers,
    crud_controllers
};

Route::get('/', [
    welcome_controller::class,
    'landing']) -> name('welcome');



Route::get('/DH_login', [
    DH_login_controller::class,
    'dhLogin']) -> name('auth.DH_login');



Route::post('auth/authenticate_dh', [DH_login_controller::class, 'authenticate_bod'])->name('auth.authenticate_dh');
// 1st-admin [BOD] page

Route::middleware(['auth'])->group(function () {
// routing for the 2nd ADMIN starts here
// routing for IA
Route::get('/ia-dashboard', [
    dashboard_controllers::class,
    'internal_audit']) -> name('2nd_admin.IA.ia_dashboard');

// routing for sub-channels of IA Head

Route::get('/ia-dashboard/userfeedback', [
    dashboard_controllers::class,
    'user_feedback']) -> name('2nd_admin.IA.userfeedback');

Route::get('/ia-dashboard/whistleblower', [
    dashboard_controllers::class,
    'whistleblower']) -> name('2nd_admin.IA.whistleblower');

Route::get('/ia-dashboard/complaints', [
    dashboard_controllers::class,
    'complaints']) -> name('2nd_admin.IA.complaints');

Route::get('/ia-dashboard/bod_res', [
    dashboard_controllers::class,
    'bod_res0']) -> name('2nd_admin.IA.bod_res');

// routing for HR

Route::get('/hr-dashboard', [
    dashboard_controllers::class,
    'human_resource']) -> name('2nd_admin.HR.hr_dashboard');

// routing for sub-channels of HR Head

Route::get('/hr-dashboard/members', [
    dashboard_controllers::class,
    'members']) -> name('2nd_admin.HR.members');

Route::get('/hr-dashboard/jobs', [
    dashboard_controllers::class,
    'jobs']) -> name('2nd_admin.HR.job_lists');

Route::get('/hr-dashboard/available_jobs', [
    dashboard_controllers::class,
    'avail_jobs']) -> name('2nd_admin.HR.available_jobs');

Route::get('/hr-dashboard/bod_res', [
    dashboard_controllers::class,
    'bod_res1']) -> name('2nd_admin.HR.bod_res');


// routing for MMD

Route::get('/mmd-dashboard', [
    dashboard_controllers::class,
    'MMD']) -> name('2nd_admin.MMD (Marketing).mmd_dashboard');

// routing for sub-channels of MMD Head

Route::get('/mmd-dashboard/bdirectory', [
    dashboard_controllers::class,
    'bdirectory']) -> name('2nd_admin.MMD (Marketing).bdirectory');

Route::get('/mmd-dashboard/bodres_view', [
    dashboard_controllers::class,
    'bodres_view']) -> name('2nd_admin.MMD (Marketing).bodres_view');

Route::get('/mmd-dashboard/news', [
    dashboard_controllers::class,
    'news']) -> name('2nd_admin.MMD (Marketing).news');

Route::get('/mmd-dashboard/membership/schedules', [
    dashboard_controllers::class,
    'schedules']) -> name('2nd_admin.MMD (Marketing).schedules');

Route::get('/mmd-dashboard/membership/clients', [
    dashboard_controllers::class,
    'clients']) -> name('2nd_admin.MMD (Marketing).clients');

Route::get('/mmd-dashboard/membership/done_clients', [
    dashboard_controllers::class,
    'done_clients']) -> name('2nd_admin.MMD (Marketing).done_clients');

Route::get('/mmd-dashboard/membership/dec_app', [
    dashboard_controllers::class,
    'dec_app']) -> name('2nd_admin.MMD (Marketing).dec_app');

Route::get('/mmd-dashboard/reports/analytics', [
    dashboard_controllers::class,
    'analytics']) -> name('2nd_admin.MMD (Marketing).analytics');

Route::get('/mmd-dashboard/reports/members', [
    dashboard_controllers::class,
    'm3mbers']) -> name('2nd_admin.MMD (Marketing).members');

Route::get('/mmd-dashboard/reports/reg_clients', [
    dashboard_controllers::class,
    'reg_clients']) -> name('2nd_admin.MMD (Marketing).reg_clients');


// routing for AM Head

Route::get('/am-dashboard', [
    dashboard_controllers::class,
    'AM']) -> name('2nd_admin.AM.am_dashboard');

// routing for subchannels of AM Head

Route::get('/am-dashboard/bod_res', [
    dashboard_controllers::class,
    'bod_res']) -> name('2nd_admin.AM.bod_res');

Route::get('/am-dashboard/providential/loan_app', [
    dashboard_controllers::class,
    'loan_app']) -> name('2nd_admin.AM.loan_app');

Route::get('/am-dashboard/providential/loan_calc', [
    dashboard_controllers::class,
    'loan_calc']) -> name('2nd_admin.AM.loan_calc');

Route::get('/am-dashboard/providential/loan_notif', [
    dashboard_controllers::class,
    'loan_notif']) -> name('2nd_admin.AM.loan_notif');

// routing for EXECUTIVE Head

Route::get('/executive-dashboard', [
    dashboard_controllers::class,
    'executives']) -> name('2nd_admin.EXECUTIVE.executive_dashboard');

// routing for subchannels of EXECUTIVE Head

Route::get('/executive-dashboard/bod_resolution/memo', [
    dashboard_controllers::class,
    'bodres_memo']) -> name('2nd_admin.EXECUTIVE.memo');

Route::get('/executive-dashboard/bod_resolution/pakigsayud', [
    dashboard_controllers::class,
    'bodres_pakigsayud']) -> name('2nd_admin.EXECUTIVE.pakigsayud');

Route::get('/executive-dashboard/bod_resolution/dlforms', [
    dashboard_controllers::class,
    'bodres_dlforms']) -> name('2nd_admin.EXECUTIVE.dlforms');

Route::get('/executive-dashboard/coop_manuals/savings', [
    dashboard_controllers::class,
    'coopman_savings']) -> name('2nd_admin.EXECUTIVE.savings');

Route::get('/executive-dashboard/coop_manuals/cash_and_loans', [
    dashboard_controllers::class,
    'coopman_loans']) -> name('2nd_admin.EXECUTIVE.cash&loans');

Route::get('/executive-dashboard/coop_manuals/allied_businesses', [
    dashboard_controllers::class,
    'coopman_business']) -> name('2nd_admin.EXECUTIVE.allied_businesses');

Route::get('/executive-dashboard/coop_manuals/member_benefits', [
    dashboard_controllers::class,
    'coopman_member_bene']) -> name('2nd_admin.EXECUTIVE.member_benefits');

Route::get('/executive-dashboard/coop_manuals/products_and_services', [
    dashboard_controllers::class,
    'coopman_services']) -> name('2nd_admin.EXECUTIVE.products&services');

// routing for the 2nd ADMIN ends here

// routing for the 2nd ADMIN CRUD operations starts here

Route::get('/jobs/add', [
    crud_controllers::class,
    'add_jobs']) -> name('2nd_admin.HR.actions.job_add');

Route::get('/jobs/edit', [
    crud_controllers::class,
    'edit_jobs']) -> name('2nd_admin.HR.actions.job_edit');

Route::get('/news/add', [
    crud_controllers::class,
    'add_news']) -> name('2nd_admin.MMD (Marketing).actions.add_news');

Route::get('/news/edit', [
    crud_controllers::class,
    'edit_news']) -> name('2nd_admin.MMD (Marketing).actions.edit_news');

Route::get('membership/bdirectory/add', [
    crud_controllers::class,
    'add_bdirectory']) -> name('2nd_admin.MMD (Marketing).actions.add_bdirectory');

Route::get('membership/bdirectory/edit', [
    crud_controllers::class,
    'edit_bdirectory']) -> name('2nd_admin.MMD (Marketing).actions.edit_bdirectory');

Route::get('bodres/memo/add', [
    crud_controllers::class,
    'add_memo']) -> name('2nd_admin.EXECUTIVE.actions.add_memo');

Route::get('bodres/memo/edit', [
    crud_controllers::class,
    'edit_memo']) -> name('2nd_admin.EXECUTIVE.actions.edit_memo');

Route::get('bodres/pakigsayud/add', [
    crud_controllers::class,
    'add_pakigsayud']) -> name('2nd_admin.EXECUTIVE.actions.add_pakigsayud');

Route::get('bodres/pakigsayud/edit', [
    crud_controllers::class,
    'edit_pakigsayud']) -> name('2nd_admin.EXECUTIVE.actions.edit_pakigsayud');

Route::get('coop_manuals/savings/add', [
    crud_controllers::class,
    'add_savings']) -> name('2nd_admin.EXECUTIVE.actions.add_savings');

Route::get('coop_manuals/savings/edit', [
    crud_controllers::class,
    'edit_savings']) -> name('2nd_admin.EXECUTIVE.actions.edit_savings');

Route::get('coop_manuals/cash_and_loans/add', [
    crud_controllers::class,
    'add_cash_and_loans']) -> name('2nd_admin.EXECUTIVE.actions.add_cash_and_loans');

Route::get('coop_manuals/cash_and_loans/edit', [
    crud_controllers::class,
    'edit_cash_and_loans']) -> name('2nd_admin.EXECUTIVE.actions.edit_cash_and_loans');

Route::get('coop_manuals/member_benefits/add', [
    crud_controllers::class,
    'add_member_benefits']) -> name('2nd_admin.EXECUTIVE.actions.add_member_benefits');

Route::get('coop_manuals/member_benefits/edit', [
    crud_controllers::class,
    'edit_member_benefits']) -> name('2nd_admin.EXECUTIVE.actions.edit_member_benefits');

Route::get('coop_manuals/allied_businesses/add', [
    crud_controllers::class,
    'add_allied_businesses']) -> name('2nd_admin.EXECUTIVE.actions.add_allied_businesses');

Route::get('coop_manuals/allied_businesses/edit', [
    crud_controllers::class,
    'edit_allied_businesses']) -> name('2nd_admin.EXECUTIVE.actions.edit_allied_businesses');

Route::get('coop_manuals/products_and_services/add', [
    crud_controllers::class,
    'add_products_and_services']) -> name('2nd_admin.EXECUTIVE.actions.add_products_and_services');

Route::get('coop_manuals/products_and_services/edit', [
    crud_controllers::class,
    'edit_products_and_services']) -> name('2nd_admin.EXECUTIVE.actions.edit_products_and_services');


// routing for the 2nd ADMIN CRUD operations ends here


Route::get('/auth/logout', [DH_login_controller::class, 'logout'])->name('auth2.logout');
});


// admin-login-page
Route::get('/BOD_login', [
    BOD_login_controller::class,
    'bodLogin']) -> name('auth.BOD_login');

Route::post('/login', [BOD_login_controller::class, 'authenticate_bod'])->name('login.submit');


Route::middleware(['auth'])->group(function () {
Route::get('/bodres-dashboard', [
    dashboard_controller::class,
    'dashboard']) -> name('1st_admin.dashboard');

Route::get('/BOD-dashboard', [
    dashboard_controller::class,
    'bod_dashboard']) -> name('1st_admin.bod_dashboard');

Route::get('/BOD-Com-dashboard', [
    dashboard_controller::class,
    'bod_com_dashboard']) -> name('1st_admin.bod_com_dashboard');

Route::get('/dh-dashboard', [
    dashboard_controller::class,
    'dh_dashboard']) -> name('1st_admin.dh_dashboard');

Route::get('/dh-logs', [
    dashboard_controller::class,
    'dh_logs']) -> name('1st_admin.dh_logs');

Route::get('/BOD', [
    dashboard_controller::class,
    'bod_dashboard_main']) -> name('1st_admin.BOD (view only).BOD_dashboard');

Route::get('/BOD-committee', [
    dashboard_controller::class,
    'bod_committee_dashboard']) -> name('1st_admin.BOD (view only).BOD_committee');

Route::get('/BOD-resolution', [
    dashboard_controller::class,
    'bod_resolution_dashboard']) -> name('1st_admin.BOD (view only).BOD_resolution');

Route::get('/Dept_head', [
    dashboard_controller::class,
    'department_head_dashboard']) -> name('1st_admin.BOD (view only).BOD_DH');


// CRUD [BOD] page

// Define routes for adding a resolution
Route::get('/bodres/add', [crud_controller::class, 'bodres_add'])->name('add_resolution');
Route::post('/bodres/store', [crud_controller::class, 'bodres_store'])->name('store_resolution');

// Define routes for editing a resolution
Route::get('/bodres/edit/{id}', [crud_controller::class, 'bodres_edit'])->name('edit_resolution');
Route::put('/bodres/update/{id}', [crud_controller::class, 'bodres_update'])->name('update_resolution');

// Define route for deleting a resolution
Route::delete('/bodres/destroy/{id}', [crud_controller::class, 'bodres_destroy'])->name('destroy_resolution');

// Define routes for adding a BOD
Route::get('/bod/add', [
    crud_controller::class,
    'bod_add']) -> name('1st_admin.actions.bod_add');
Route::post('/bod/store', [crud_controller::class, 'bod_store'])->name('bod_store');
 Route::put('/bod/update/{id}', [crud_controller::class, 'bod_update'])->name('bod.update');
Route::get('/storage/BOD_image/{filename}', function ($filename) {
    return response()->file(storage_path('app/public/BOD_image/' . $filename));
})->where('filename', '.*');

// Define routes for editing a BOD
Route::get('/bod/edit/{id}', [
    crud_controller::class,
    'bod_edit']) -> name('1st_admin.actions.bod_edit');
// Define routes for delete a BOD
Route::delete('/bod/delete/{id}', [crud_controller::class, 'bod_delete'])->name('bod_delete');



Route::get('/bodcom/add', [
    crud_controller::class,
    'bodcom_add']) -> name('1st_admin.actions.bodcom_add');
// Route for storing a new committee
Route::post('/bodcom/store', [crud_controller::class, 'bodcom_store'])->name('committees.store');

// Edit form route
Route::get('/bodcom/edit/{id}', [
    crud_controller::class,
    'bodcom_edit'
])->name('1st_admin.actions.bodcom_edit');

// Route for updating a committee
Route::put('/bodcom/update/{id}', [
    crud_controller::class,
    'bodcom_update'
])->name('committees.update');


// Route for deleting a committee
Route::delete('/bodcom/destroy{id}', [crud_controller::class, 'bodcom_destroy'])->name('committees.destroy');


Route::get('/dh/add', [
    crud_controller::class,
    'dh_add']) -> name('1st_admin.actions.dh_add');

// Add this to your routes file
Route::post('/dh/store', [crud_controller::class, 'dh_store'])->name('dh.store');


Route::get('/dh/edit/{id}', [
    crud_controller::class,
    'dh_edit']) -> name('1st_admin.actions.dh_edit');

Route::put('/dh/update/{id}', [crud_controller::class, 'dh_update'])->name('dh.update');


Route::delete('/dh/{id}', [crud_controller::class, 'dh_delete'])->name('dh.delete');


// Display the form for updating the profile
Route::get('/profile/{id}/edit', [crud_controller::class, 'update_profile'])
->name('1st_admin.actions.update-profile');

// Handle the form submission for updating the profile
Route::put('/profile/{id}/edit', [crud_controller::class, 'edit_Profile'])
->name('profile.update');


Route::get('/logout', [BOD_login_controller::class, 'logout'])->name('logout');


Route::get('/api/logs/chart', [LogController::class, 'getChartData'])->name('api.logs.chart');;
});

// Show add user form
Route::get('/add-user', [UserController::class, 'showAddUserForm'])->name('user.showAddForm');

// Store user data
Route::post('/store-user', [UserController::class, 'store_User'])->name('user.store');
