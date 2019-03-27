<?php
/**
 * Created by PhpStorm.
 * User: bhps690
 * Date: 3/22/2019
 * Time: 5:32 PM
 */
Route::get('/getMailsds/{id}','Gkblabs\Phani\MailsController@retrieveMails');
Route::get('/getMail/{id}','Gkblabs\Phani\mailSearchController@getMail');
Route::get('/createDB','Gkblabs\Phani\InsertUserController@createSchema');
Route::get('/insertUsers','Gkblabs\Phani\InsertUserController@insertClient');
Route::get('/insertUser',function(){

    return redirect('/insertUsers');
});
