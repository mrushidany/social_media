<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DatabaseManagementController extends Controller
{

    public function migrate(){
        Artisan::call('migrate');
        return redirect()->route('db_management');
    }

    public function rollback(){
        Artisan::call('migrate:rollback');
        return redirect()->route('db_management');
    }

    public function clear_cache(){
        Artisan::call('cache:clear');
        return redirect()->route('db_management');
    }
}
