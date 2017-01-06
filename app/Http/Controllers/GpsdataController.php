<?php
 
namespace App\Http\Controllers;
 
use App\Gpsdata;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

 
class GpsdataController extends Controller{
 
 
    public function index(){
 
        $gpsdata  = Gpsdata::all();
 
        return response()->json($gpsdata);
 
    }
 
    public function getGpsData(){
 
        $gpsdata  = Gpsdata::all(); 
 
        return response()->json(['greet' => 'hello there','size'=>count($gpsdata),'data'=>$gpsdata, 'isSuccess'=>true]);
    }

    public function insertdata(){
        DB::table('gpsdatas')->insert(
            ['routename' => 'krk to knl', 'routebus' => '2204', 'lat' =>'222.00', 'long' => '111.00']
        );
    }
 
    public function saveGpsdata(Request $request){

        $gpsdata = Gpsdata::create($request->all());
 
        return response()->json($gpsdata);
 
    }
 
    public function deleteGpsdata(Request $request){
        $id = $request->input('id');

        $gpsdata  = Gpsdata::find($id);
 
        $gpsdata->delete();
 
        return response()->json('success');
    }
 
    public function updateGpsData(Request $request,$id){
        $gpsdata  = Gpsdata::find($id);
 
        $gpsdata->routename = $request->input('routename');
        $gpsdata->routebus = $request->input('routebus');
 
        $gpsdata->save();
 
        return response()->json($gpsdata);
    }
 
}