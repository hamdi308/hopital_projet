<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;



class HomeController extends Controller
{
    public function redirect(){
        $doctors= Doctor::all();
        if(Auth::id()){
            if(Auth::user()->user_type == '0'){
                return view('user.home',compact('doctors'));
            }else return view('admin.home',compact('doctors'));

        }else{
            return redirect()->back();
        }
    }
    public function index(){
        $doctors= Doctor::all();
        if(Auth::id()){
            return redirect('/home',compact('doctors'));}
        else{
        return view('user.home',compact('doctors'));}
    }
    public function appointement(Request $request){
        $data=new appointment;
        $data->user_nom=$request->user_nom;
        $data->user_prenom=$request->user_prenom;
        $data->user_email=$request->user_email;
        $data->user_tel=$request->user_tel;
        if(Auth::id()){
        $data->user_id=Auth::user()->id;
        }
        $data->date=$request->date;
        $data->medecin=$request->medecin;
        $data->status="en cours...";
        $data->message=$request->message;
        $data->save();
        return redirect()->back()->with('message','votre demande d\'avis ete bien enregistrer nous allons vous contactez prochainement');


    }
    public function mesavis(){
        if(Auth::id()){

            $user_id=Auth::user()->id;
            $appointments=Appointment::where('user_id',$user_id)->get();
        return view('user.mes_avis',compact('appointments'));
        }else{
            return redirect()->back();
        }
    }
    public function supprimerAvis($id){
        $data=Appointment::find($id);
        $data->delete();
        return redirect()->back();
    }
}
