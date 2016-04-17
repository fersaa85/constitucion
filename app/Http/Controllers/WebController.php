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


session_start();


class WebController extends Controller
{

    public function __construct(){
        View::share('site_domine', URL::to('/') );
        View::share('viewshare', null);
    }

    public function getIndex()
    {
        Cookie::queue(Cookie::forget('email'));
        Cookie::queue(Cookie::forget('essay'));
        Cookie::queue(Cookie::forget('questinarie'));

        $this->getViewShareActive(array('home'=>'active'));
        return View::make('web.home');
    }



    public function getRedirectOptions(){
        Session::put('option',  Request::input('option'));
        return $this->getRedirect();
    }

    public function getRegistroOpcional(){
        //Cookie::queue(Cookie::forget('email'));
        //Cookie::queue(Cookie::forget('essay'));
        //Cookie::queue(Cookie::forget('questinarie'));
        Session::put('option',  Request::input('option'));
        return View::make('web.register-optional');
    }


    public function getMasTarde(){
        return $this->getRedirect();
    }

    public function getRegistro(){
        return View::make('web.register');
    }

    public function  getLineamientosGenerales(){
        $this->getViewShareActive(array('general-guidelines'=>'active'));
        return View::make('web.general-guidelines');
    }

    public function  getOpinionYAnalisis(){
        $this->getViewShareActive(array('opinion-analitycs'=>'active'));
        return View::make('web.opinion-analitycs');
    }

    public function getOpiniones(){
        $this->getViewShareActive(array('opinions'=>'active'));
        return View::make('web.interest-site');
    }

    public function getBusqueda(){
        $this->getViewShareActive(array('search'=>'active'));
        return View::make('web.search');
    }



    public function getEnsayo() {
        return View::make('web.essay');
    }

    public function getReglasEnsayo() {
        return View::make('web.essay-rules');
    }


    public function getCuestinario(){
        return View::make('web.cuestinarie');
    }



    public function getAvisoDePrivacidad(){
        return View::make('web.notice-privacy');
    }


    public function getConvocatoria(){
        return View::make('web.participation');
    }

    public function getQueEs(){
        $this->getViewShareActive(array('what-it-is'=>'active'));
        return View::make('web.what-is-it');
    }

    public function getVerMas(){
        return View::make('web.see-more');
    }


    /*
     * POST
     */

    public function postRegister(){



        $Register = Register::where('email', '=', Request::input('email'))->first();
        if(  $Register !== null ){

                if( Cookie::has('essay') ){
                    if( empty($Register->essay) ){
                        Session::flash('thanks', true);
                        return  $this->getRegisterComplete($Register);
                    }
                }


                if( Cookie::has('questinarie') ){
                    if( empty($Register->questinarie) ){
                        Session::flash('thanks', true);
                        return  $this->getRegisterComplete($Register);
                    }
                }


                $validator = Validator::make(  Request::all(), [
                    'email' => 'required|unique:register',
                ]);

                if ($validator->fails()) {
                    return Redirect::back()
                        ->withErrors($validator)
                        ->withInput();
                }

        }else{


            $validator = Validator::make(  Request::all(), [
                'email' => 'required|unique:register',
            ]);

            if ($validator->fails()) {
                return Redirect::back()
                    ->withErrors($validator)
                    ->withInput();
            }


            $Register = new Register( Request::all() );
            $Register->save();


            Session::flash('thanks', true);
            return  $this->getRegisterComplete($Register);

        }




    }


    public function postRegisterContinue(){




        $validator = Validator::make(  Request::all(), [
                                                        'email' => 'required|unique:register',
                                                    ]);
        if ($validator->fails()) {
            return Redirect::back()
                    ->withErrors($validator)
                    ->withInput();
            }


        $Register = new Register( Request::all() );
        $Register->save();

        Cookie::queue("email", $Register->email, (60*24*365));


        return $this->getRedirect();

    }


    public function postSearch(){

        $type = Request::input('type', 'adult');
        $search =  Request::input('search');

        $title = "";
        if( $type == 'boy' ){
            $Constitucion = ConstitucionNino::where('description', 'LIKE', "%{$search}%")->get();
            $title = "Constitucion para niños";
        }else{
            $Constitucion = Constitucion::where('description', 'LIKE', "%{$search}%")->get();
            $title = "Constitución Política de los Estados Unidos Mexicanos";
        }



        $this->getViewShareActive(array('search'=>'active'));
        return View::make('web.search-list', compact('Constitucion',
                                                     'title'));
    }





    public function postUpload(){

        $file 	   = Input::file("file");
        $name = date("YmdHis") ."-". $file->getClientOriginalName() ;
        Cookie::queue("essay",  $name, (60*24*365));


        //indicamos que queremos guardar un nuevo archivo en el disco local
        Storage::disk('local')->put("uploads/{$name}",  File::get($file));
        $getRegisterComplete = $this->getRegisterComplete();

        return $getRegisterComplete;


    }


    public function postQuestinarie(){
        $Questinarie = new Questinarie( Request::all() );
        $Questinarie->save();



        Cookie::queue("questinarie",  $Questinarie->id, (60*24*365));


        if(!empty(Cookie::get('email'))){
            Session::flash('thanks', true);
            return $this->getRegisterComplete();
        }else{
            return Redirect::to('registro');
        }




    }



    private function  getRedirect(){
        $option = Session::get('option');
        if($option == 'questinarie'){
            $redirect = 'cuestinario';
        }
        else if($option == 'essay'){
            $redirect = 'reglas-ensayo';
        }
        else{
            $redirect = 'reglas-ensayo';
        }
        return Redirect::to("$redirect");
    }





    private function getRegisterComplete($Register = null){
        

        if(!empty(Cookie::get('email'))){
            $Register = Register::where('email', '=', Cookie::get('email'))->first();


            if(Cookie::get('essay')){

                if( empty($Register->essay) ){
                    $Register->essay = Cookie::get('essay');
                }

            }

            if(Cookie::get('questinarie')){

                if( empty($Register->questinarie) ){
                    $Register->questinarie = Cookie::get('questinarie');
                }

            }

            $Register->save();
            if (Request::ajax()) {
                return Response::json(array("model" => true,));
            }
        }



        if(!empty($Register) ){

            if(Cookie::has('essay')){
                $Register->essay = Cookie::get('essay');

            }

            if(Cookie::has('questinarie')){
                $Register->questinarie = Cookie::get('questinarie');
            }

            $Register->save();

        }

        if (Request::ajax()){
            return Response::json(array("model"=>false,));
        }
        return Redirect::to('index');


    }



    private function getViewShareActive($active){
        View::share('viewshare', $active);
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
