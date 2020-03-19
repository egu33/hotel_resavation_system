<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resavation;
use App\Http\Requests\Validator;

class ResavationController extends Controller
{
    public function index(){
        $resavations = Resavation::orderBy('created_at', 'asc')->get();
        return view('resavations' , ['resavations' => $resavations],);
    }
    //
    public function create(Request $request){
        return view("resavation_confirm" , $request); 
    }

    public function store(Validator $request){

        if ($request->get('action') == 'back') {
            // 戻る
            return redirect('resavations')
                ->withInput($request->except(['action', 'confirming']));
        }

        $resavation = New Resavation();
        $resavation->name = $request->name;
        $resavation->start_date = $request->start_date;
        $resavation->end_date = $request->end_date;
        $resavation->save();

        return redirect('resavations');
    }

    public function destroy(Resavation $resavation){
        $resavation->delete();
        return redirect("resavations");

    }
}
