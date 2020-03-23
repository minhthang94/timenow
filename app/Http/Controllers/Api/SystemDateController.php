<?php


namespace App\Http\Controllers\Api;


use Carbon\Carbon;

class SystemDateController
{
    public function __construct()
    {

    }

    public  function show(){
        return response()->json(["timenow"=>Carbon::now()]);
    }
}
