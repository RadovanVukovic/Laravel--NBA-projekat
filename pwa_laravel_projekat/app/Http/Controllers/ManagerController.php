<?php

namespace App\Http\Controllers;

use App\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function show(Manager $manager)
    {

        return view('manager.show', ['manager'=> $manager]);
    }
}
