<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*===========================
=           users           =
=============================*/

Route::apiResource('/users', \App\Http\Controllers\API\UserController::class);
Route::group([
   'prefix' => 'users',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\UserController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\UserController::class, 'permanentDelete']);
});
/*=====  End of users   ======*/

/*===========================
=           companies           =
=============================*/

Route::apiResource('/companies', \App\Http\Controllers\API\CompanyController::class);
Route::group([
   'prefix' => 'companies',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\CompanyController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\CompanyController::class, 'permanentDelete']);
});
/*=====  End of companies   ======*/

/*===========================
=           companyContacts           =
=============================*/

Route::apiResource('/companyContacts', \App\Http\Controllers\API\CompanyContactController::class);
Route::group([
   'prefix' => 'companyContacts',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\CompanyContactController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\CompanyContactController::class, 'permanentDelete']);
});
/*=====  End of companyContacts   ======*/

/*===========================
=           companyRequisites           =
=============================*/

Route::apiResource('/companyRequisites', \App\Http\Controllers\API\CompanyRequisiteController::class);
Route::group([
   'prefix' => 'companyRequisites',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\CompanyRequisiteController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\CompanyRequisiteController::class, 'permanentDelete']);
});
/*=====  End of companyRequisites   ======*/

/*===========================
=           companyPayments           =
=============================*/

Route::apiResource('/companyPayments', \App\Http\Controllers\API\CompanyPaymentController::class);
Route::group([
   'prefix' => 'companyPayments',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\CompanyPaymentController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\CompanyPaymentController::class, 'permanentDelete']);
});
/*=====  End of companyPayments   ======*/

/*===========================
=           companyStuffs           =
=============================*/

Route::apiResource('/companyStuffs', \App\Http\Controllers\API\CompanyStuffController::class);
Route::group([
   'prefix' => 'companyStuffs',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\CompanyStuffController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\CompanyStuffController::class, 'permanentDelete']);
});
/*=====  End of companyStuffs   ======*/

/*===========================
=           companyExtracts           =
=============================*/

Route::apiResource('/companyExtracts', \App\Http\Controllers\API\CompanyExtractController::class);
Route::group([
   'prefix' => 'companyExtracts',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\CompanyExtractController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\CompanyExtractController::class, 'permanentDelete']);
});
/*=====  End of companyExtracts   ======*/

/*===========================
=           companyWarehouses           =
=============================*/

Route::apiResource('/companyWarehouses', \App\Http\Controllers\API\CompanyWarehouseController::class);
Route::group([
   'prefix' => 'companyWarehouses',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\CompanyWarehouseController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\CompanyWarehouseController::class, 'permanentDelete']);
});
/*=====  End of companyWarehouses   ======*/
/*===========================
=           stuffDocuments           =
=============================*/

Route::apiResource('/stuffDocuments', \App\Http\Controllers\API\StuffDocumentController::class);
Route::group([
   'prefix' => 'stuffDocuments',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\StuffDocumentController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\StuffDocumentController::class, 'permanentDelete']);
});
/*=====  End of stuffDocuments   ======*/

/*===========================
=           stuffStatements           =
=============================*/

Route::apiResource('/stuffStatements', \App\Http\Controllers\API\StuffStatementController::class);
Route::group([
   'prefix' => 'stuffStatements',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\StuffStatementController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\StuffStatementController::class, 'permanentDelete']);
});
/*=====  End of stuffStatements   ======*/

/*===========================
=           planAccounts           =
=============================*/

Route::apiResource('/planAccounts', \App\Http\Controllers\API\PlanAccountController::class);
Route::group([
   'prefix' => 'planAccounts',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\PlanAccountController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\PlanAccountController::class, 'permanentDelete']);
});
/*=====  End of planAccounts   ======*/

/*===========================
=           companyPurchases           =
=============================*/

Route::apiResource('/companyPurchases', \App\Http\Controllers\API\CompanyPurchaseController::class);
Route::group([
   'prefix' => 'companyPurchases',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\CompanyPurchaseController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\CompanyPurchaseController::class, 'permanentDelete']);
});
/*=====  End of companyPurchases   ======*/

/*===========================
=           companySales           =
=============================*/

Route::apiResource('/companySales', \App\Http\Controllers\API\CompanySaleController::class);
Route::group([
   'prefix' => 'companySales',
], function() {
    Route::get('{id}/restore', [\App\Http\Controllers\API\CompanySaleController::class, 'restore']);
    Route::delete('{id}/permanent-delete', [\App\Http\Controllers\API\CompanySaleController::class, 'permanentDelete']);
});
/*=====  End of companySales   ======*/
