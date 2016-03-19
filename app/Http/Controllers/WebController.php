<?php

namespace App\Http\Controllers;

use Auth;
use Config;
use DB;
use File;
use Hash;
use Input;
use Mail;
use Redirect;
use Request;
use Response;
use Session;
use Storage;
use URL;
use Validator;
use View;

//use Form;
//use Image;


class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return View::make('web.register');
    }

	

}
