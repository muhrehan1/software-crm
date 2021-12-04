<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoftwareCrmController extends Controller
{
        function index()
        {
            $data  =  [

                'title'=>'Software CRM',
                'managecrm'=>'Build Your Own CRM',
                'getlatestupdates'=>'Get Latest Updates'
            ];

            return view('software-crm-front.layouts.master',$data);

        }
}
