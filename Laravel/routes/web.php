<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    route;;post('/simpan',function(){
        echo "Data berhasil disimpan";
    });
    route;;put('/update{id}',function($id){
        echo "Data berhasil diperbarui dengan ID:".$id;
    });
    route;;patch('/update2{id}',function($id){
        echo "Data berhasil diperbarui dengan ID:".$id;
    });
    route;;delete('/hapus{id}',function($id){
        echo "Data berhasil diperbarui dengan ID:".$id;
    });
    route;;get('/test-method',function($id){
        return view('test_method');
    });
});
