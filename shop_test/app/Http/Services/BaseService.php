<?php


namespace App\Http\Services;


class BaseService
{
    function updateFile($request,$key,$nameFolder){
        return $request->file($key)->store($nameFolder,'public');
    }
}
