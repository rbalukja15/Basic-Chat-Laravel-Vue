<?php

use Illuminate\Support\Facades\Route;
Route::get('/', 'ProjectsController@home');

//To Try Later
//Route::resource('projects', 'ProjectsController');

// Route::get('/login', 'ProjectsController@login');

// Route::get('/signup', 'ProjectsController@signup');

// Route::get('/logout', 'ProjectsController@logout');

// Route::get('/about', 'ProjectsController@about');


/*Routes For Projects 
/////////           ///////////
////////            //////////
*/

Route::get('/projects/create', 'ProjectsController@create');

Route::post('/projects', 'ProjectsController@store');

Route::get('/projects/showall', 'ProjectsController@showall');

//What we can do with different requests
Route::get('/projects/{project}', 'ProjectsController@show'); //Show the requested project by wildcard {project}

Route::get('/projects/{project}/edit', 'ProjectsController@edit'); //Edit the requested project by wildcard

Route::patch('/projects/{project}', 'ProjectsController@update'); //If we receive a patch request update the project

Route::delete('/projects/{project}', 'ProjectsController@destroy'); //If we receive a delete request, create the destroy method
/*
////////////  //////////////
///////////   /////////////
*/


//TASKS CONTROLLER
//Add a new task to the project
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

//Mark The task as complete route
Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');






/*Routes For Users
*/

Route::get('/users/home', 'UsersController@index'); //Show the welcome page for a user
Route::post('/users', 'UsersController@store'); //Store the new user created
//Route::post('/users/login', 'UsersController@login');
Route::get('users/showall', 'UsersController@showall'); //Show All the users requested by admin

/*Routes For Departments
*/

Route::get('/departments/users/{department}', 'DepartmentsUserController@show'); //Show the department and its corresponding users requested by admin

//Create new Department
Route::get('/departments/create', 'DepartmentsController@create');

//Store the new department
Route::post('/departments', 'DepartmentsController@store');

//Route::get('/show/department/{department}', 'DepartmentsUserController@displayAll');//Get the submitted button from the home forms



/*Routes For Authentication
*/
Auth::routes();

//Get the post method from the auth home page
//Route::get('/users/profile', 'DepartmentsUserController@index'); //Show the welcome page for a user

Route::get('/home', 'HomeController@index')->name('home');


/*Routes For Chat
*/

Route::get('/chat', 'ChatController@index');
Route::get('/messages', 'ChatController@show');
Route::post('/messages', 'ChatController@store');