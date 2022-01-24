<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Notifications\MaPremierNotification;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_doctor');
    }
    public function upload(Request $request){
        $doctor = new Doctor;
        
        if($request->has('image_med')) {
            $image = $request->file('image_med');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('doctorimage'), $filename);
            $doctor->image_med = $request->file('image_med')->getClientOriginalName();
        }
        $doctor->nom_med=$request->nom_med;
        $doctor->prenom_med=$request->prenom_med;
        $doctor->N_telephone=$request->N_telephone;
        $doctor->specialite=$request->specialite;
        $doctor->N_chambre=$request->N_chambre;
        $doctor->save();
        return redirect()->back()->with('message', 'medecin bien ajoutee');
 }
 public function afficheAvis(){
     $appointments=Appointment::all();
    return view('admin.afficheavis',compact('appointments'));
 }
 public function approuverStatus($id){
     $appointment=Appointment::find($id);
      $appointment->status="approuvee";
      $appointment->save();
      return redirect()->back();
 }
 public function rejecterStatus($id){
    $appointment=Appointment::find($id);
    $appointment->status="annulee";
    $appointment->save();
    return redirect()->back();
 }
 public function afficheMedecins(){
     $doctors=Doctor::all();
     return view('admin.affichemedecins',compact('doctors'));

 }
 public function afficheProfileMedecins($id){
     $doctors=Doctor::find($id);
     $img=$doctors->image_med;
       return view('admin.profiles_med',compact('doctors','img'));
 }
 public function updateview($id){
    $doctors=Doctor::find($id);
    return view('admin.update_medecin',compact('doctors'));
}
 public function updateMedecins(Request $request,$id){
    $doctors=Doctor::find($id);
    if($request->has('image_med')) {
        $image = $request->file('image_med');
        $filename = $image->getClientOriginalName();
        $image->move(public_path('doctorimage'), $filename);
        $doctors->image_med = $request->file('image_med')->getClientOriginalName();
    }
    $doctors->N_telephone=$request->N_telephone;
    $doctors->N_chambre=$request->N_chambre;
    $doctors->save();
    return redirect()->back()->with('message', 'profil de DR. '.$doctors->nom_med.' '.$doctors->prenom_med.' est bien modifier');

 }
 public function supprimerMedecins($id){
      $doctor=Doctor::find($id);
      $doctor->delete();
      return redirect()->back();
 }
 public function envoyerEmailView($id){
    $avis=Appointment::find($id);
    return view('admin.envoyer_email', compact('avis'));
 }
 public function envoyerEmail(Request $request,$id){
     $avis=Appointment::find($id);
       $p=[
        'greeting'=>$request->greeting,
        'body'=>$request->body,
        'actiontext'=>$request->actiontext,
        'actionurl'=>$request->actionurl,
        'endpart'=>$request->endpart,

       ];
       Notification::send($avis, new MaPremierNotification($p));
     return redirect()->back();
 }

}
