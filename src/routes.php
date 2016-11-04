<?php

Route::group(['middleware' => ['web']], function () {
   Route::get('timezones/{timezone}', 
  'lararavelnewpackage\timezones\TimezonesController@index');

   Route::get('mycontroller', 
  'lararavelnewpackage\timezones\MyController@index');

});