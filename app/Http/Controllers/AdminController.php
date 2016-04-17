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
    public $arrayColor = array('bg-red','bg-green', 'bg-black', 'opacity');

    public $returnTmp = array( 'value'=>'',
                                'color'=> '',
                                'highlight' => '',
                                'label'=>'',);
    public $return;

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

    private function  getStaticsStudy($total){
        $array = array('primaria', 'secundario', 'preparatoria', 'universidad', 'posgrado', 'otro');

        $i = 0;
        $this->return = array();
        foreach ($array as  $value){
            $Questinarie = Questinarie::where('school', '=',  $value )->count();

            $this->returnTmp['value']  =  $this->getPorcent($Questinarie,$total);
            $this->returnTmp['color'] =  $returnTmp['highlight'] = $this->arrayColor[$i];
            $this->returnTmp['label'] = $value;

            $i++;

            $this->return[] =  $this->returnTmp;

        }

        return   $this->return;

    }

    private function  getStaticsOcupation($total){
        $array = array( 'estudiante'=>'Estudiante',
                        'empleado'=>'Empleado',
                        'desempleado'=>'Desempleado',
                        'empresario'=>'Empresario',
                        'hogar'=>'Hogar');

        $i = 0;
        $this->return = array();
        foreach ($array as  $key => $value){
            $Questinarie = Questinarie::where('ocupation', '=',   $key )->count();

            $this->returnTmp['value']  =  $this->getPorcent($Questinarie,$total);
            $this->returnTmp['color'] =  $returnTmp['highlight'] = $this->arrayColor[$i];
            $this->returnTmp['label'] = $value;

            $i++;

            $this->return[] =  $this->returnTmp;

        }

        return   $this->return;

    }


    private function  getStaticsParticipation($total){


        $this->return = array();

       $Questinarie = Questinarie::where(function($query){
                                            $query->orWhereNotNull('essay');
                                            $query->orWhereNotNull('questinarie');
                                        })->count();


            $this->returnTmp['value']  =  $this->getPorcent($Questinarie,$total);
            $this->returnTmp['color'] =  $returnTmp['highlight'] = $this->arrayColor[1];
            $this->returnTmp['label'] ="participacion";



            $this->return[] =  $this->returnTmp;



            $this->returnTmp['value']  =  100 - $this->getPorcent($Questinarie,$total) ;
            $this->returnTmp['color'] =  $returnTmp['highlight'] = $this->arrayColor[0];
            $this->returnTmp['label'] ="Registro";

        $this->return[] =  $this->returnTmp;



        return   $this->return;

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
