<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CityArea;
use App\Area;
use Illuminate\Support\Facades\DB;
class CityAreaController extends Controller
{
    public function get_area($city_id){
        $cities=DB::select('SELECT * FROM area_pk where city_id='.$city_id.' order by area_pk.area');
        return $cities;
    }
    public function index(){
        $cities=DB::select('SELECT area_pk.*,cities_pk.name FROM area_pk join cities_pk on cities_pk.id = area_pk.city_id order by cities_pk.name');
        //dd($cities);

        return view('city_area.index',compact('cities'));
    }

    public function create(){
        $cities=DB::select('SELECT * FROM  cities_pk order by cities_pk.name');

        return view('city_area.create',compact('cities'));
    }
    public function store(Request $request){
        $request->validate([
            'city_id' => 'required',
            'area' => 'required',
        ]);
        Area::create([
            'city_id'=>$request->city_id,
            "area" => $request->area
        ]);
        return redirect()->route('index.area');
    }
    public function delete($id) {
        Area::destroy($id);
        return redirect()->route('index.area');
    }
}
