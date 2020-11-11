<?php

Route::post('login',"LoginController@login");
Route::get('info',"UserController@info");
Route::post('logout',"LoginController@logout");
