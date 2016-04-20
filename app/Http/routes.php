<?php

Route::resource('admin', 'AdminController');

Route::resource('users', 'UserController');
Route::resource('activities', 'ActivitiesController');
Route::resource('brigades', 'BrigadesController');
Route::resource('citizens', 'CitizensController');
Route::resource('colonies', 'ColoniesController');
Route::resource('colonyScopes', 'ColonyScopesController');
Route::resource('notifications', 'NotificationsController');
Route::resource('permissions', 'PermissionsController');
Route::resource('personalInformations', 'PersonalInformationsController');
Route::resource('problemTypes', 'ProblemTypesController');
Route::resource('requests', 'RequestsController');
Route::resource('requestsPriorities', 'RequestPrioritiesController');
Route::resource('requestRejections', 'RequestRejectionsController');
Route::resource('requestsStates', 'RequestStatesController');
Route::resource('requestsTypes', 'RequestTypesController');
Route::resource('roles', 'RolesController');
Route::resource('sectors', 'SectorsController');
Route::resource('settings', 'SettingsController');
Route::resource('settementTypes', 'SettlementTypesController');
Route::resource('supervicionables', 'SupervicionablesController');
Route::resource('supervitions', 'SupervitionsController');
Route::resource('typologies', 'TypologiesController');

// Authentication routes...
Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');