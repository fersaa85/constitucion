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
use Cookie;
use Validator;
use View;

//use Form;
//use Image;

use App\Models\Register;
use App\Models\Constitucion;
use App\Models\Questinarie;
use App\Models\ConstitucionNino;
use App\User;

use App\Http\Controllers\CoreController;




class AdminController extends Controller
{
    public $core;

    public function __construct(){
        View::share('site_domine', URL::to('/') );
        View::share('viewshare', null);
        
        $this->core = new CoreController();
    }

    public function getIndex(){
        return View::make('admin.login');
    }

    public function getResultados(){

        $total = Questinarie::all()->count();
        

       $getStaticsManWonman =  $this->getStaticsManWonman($total);

        //dd($Questinarie);

        return View::make('admin.results', compact('getStaticsManWonman'));

    }




    /**********
     *  POST
     **********/
    public function postLogin(){

        $params["redirect"] = URL::to('admin/resultados');
        return $this->core->loginAuth('http',  $params);

    }


    /****************
     * PRIVATE
     ***************/
    private function getPorcent($number,$total){
        return ($number * 100) / $total;
    }


    private function getStaticsManWonman($total){
        $array = array('m' => '', 'h' => '');

        foreach ($array as $key => $value){
            $Questinarie = Questinarie::where('sex', '=', $key )->count();
            $array[$key] = $this->getPorcent($Questinarie,$total);
        }
        return $array;
    }




    /***************
     * ADMIN
     ***************/
    public function getUsers(){

        $User = new User();
        $User->name = 'fer';
        $User->email = 'fersaavedra85@hotmail.com';
        $User->password = Hash::make('123qaz');
        $User->save();

    }




}
