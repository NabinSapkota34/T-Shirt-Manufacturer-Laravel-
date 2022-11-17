<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tshop;

class ShopListController extends Controller
{
    public function index()
    {
        return view('welcome', ['shop'=>Tshop::all()]);
    }
    //
    public function saveList(Request $req){
      
         $shopObj = new Tshop();
         $shopObj->batchno = $req->batchno;
         $shopObj->quantity = $req->quantity;
         $shopObj->status = $req->status;
         $shopObj->remarks = $req->remarks;


         $shopObj->save();
        //save Data to the Database
                 

    return redirect('/');
        
    }

    
    public function edit($id){
      
        $data = Tshop::find($id);
        return view('edit',['data'=>$data]);
           
       }
       public function updateList(Request $req){
      
        $shopObj = Tshop::find($req->id);
        $shopObj->batchno = $req->batchno;
        $shopObj->quantity = $req->quantity;
        $shopObj->status = $req->status;
        $shopObj->remarks = $req->remarks;


        $shopObj->save();
       //save Data to the Database
                

   return redirect('/');
       
   }
    
    public function deleteList($id){
      
     
        $data = Tshop::find($id);
        $data->delete();
                    
    
       return redirect('/');
           
       }
}
