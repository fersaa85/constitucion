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

session_start();


class WebController extends Controller
{

    public function __construct(){
        View::share('site_domine', URL::to('/web') );
    }

    public function getIndex()
    {
        Cookie::queue(Cookie::forget('email'));
        Cookie::queue(Cookie::forget('essay'));
        Cookie::queue(Cookie::forget('questinarie'));
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


    public function  getOpinionYAnalisis(){
        return View::make('web.opinion-analitycs');
    }

    public function getSitiosDeInteres(){
        return View::make('web.interest-site');
    }

    public function getBusqueda(){
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








    /*
     * POST
     */

    public function postRegister(){
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
        $search =  Request::input('search');
        $Constitucion = Constitucion::where('description', 'LIKE', "%{$search}%")->get();
        return View::make('web.search-list', compact('Constitucion'));
    }





    public function postUpload(){

        $file 	   = Input::file("file");
        $name = $file->getClientOriginalName() ;
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
            return Redirect::to('web/registro');
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
        return Redirect::to("web/$redirect");
    }





    private function getRegisterComplete($Register = null){
        

        if(!empty(Cookie::get('email'))){
            $Register = Register::where('email', '=', Cookie::get('email'))->first();


            if(Cookie::get('essay')){
                $Register->essay = Cookie::get('essay');


            }

            if(Cookie::get('questinarie')){
                $Register->questinarie = Cookie::get('questinarie');
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
        return Redirect::to('/web/index');


    }
}
