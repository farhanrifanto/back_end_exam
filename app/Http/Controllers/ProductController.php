<?php

namespace App\Http\Controllers;
use App\UnitRumah;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    function CreateUnit(Request $request){

         try{
        
                    $this->validate($request,[
                        'Kavling' => 'required',
                        'Blok' => 'required',
                        'No_Rumah' => 'required',
                        'Harga_Rumah' => 'required',
                        'Luas_Tanah' => 'required',
                        'Luas_Bangunan' => 'required',
                        'customers_id' => 'required',
                        
                    
                        
        
                    ]);

        $unit = new UnitRumah;
        $unit->Kavling =  $request->input('Kavling');
        $unit->Blok = $request->input('Blok');
        $unit->No_Rumah =$request->input('No_Rumah');
        $unit->Harga_Rumah= $request->input('Harga_Rumah');
        $unit->Luas_Tanah=$request->input('Luas_Tanah');
        $unit->Luas_Bangunan=$request->input('Luas_Bangunan');
        $unit->customers_id=$request->input('customers_id');
        $unit->save();
        return response()->json(['message' =>'Berhasil'], 200);
         }
    catch(\Exception $e){
        
        //return "Gagal";
        return response()->json(['message' =>'Failed to create unit, exception:' + $e], 500);
    }
    
    }

    function DeleteUnit(Request $request){
        $id = $request->input('id');
        $unit_del = DB::delete(
            'delete from unit_rumahs
            where id =?',[$id]);
        
        return response()->json($unit_del, 200);
    }
}
