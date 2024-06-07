<?php

Route::get('/', function(){
    return view("bemvindo");
});

Route::get('/employees', [App\Http\Controllers\EmployeeController::class, 'list'])->name("employee");

Route::get('/autor', function(){
    return "<h3 style='text-align:center;'>O autor da página é <b><i>Pablo Balman</i></b></h3>";
});

?>