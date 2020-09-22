<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Key;
use App\Vehicle;
use App\Technician;
use App\Order;

class ApiController extends Controller
{
    /* API KEYS */
    
    public function getAllKeys() {
        $keys = Key::get();
        //var_dump($keys);exit();
        return response($keys, 200);
    }

    public function createKey(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'item_name' => 'required|max:25',
            'description' => 'required|max:225',
            'price' => 'required|numeric',
        ]);

        if ($validator->fails()) {       
            $errors = $validator->errors();
            return response()->json([
            "message" => $errors
            ], 201);
        }
        
        $key = new Key;
        $key->item_name = $request->item_name;
        $key->description = $request->description;
        $key->price = $request->price;
        $key->save();

        return response()->json([
            "message" => "key record created"
        ], 201);
    
    }

    public function getKey($id) {
       if (Key::where('id', $id)->exists()) {
        $key = Key::where('id', $id)->get();
        return response($key, 200);
      } else {
        return response()->json([
          "message" => "Key not found"
        ], 404);
      }
    }

    public function updateKey(Request $request, $id) {
      if (Key::where('id', $id)->exists()) {
        $key = Key::find($id);
        $key->item_name = is_null($request->item_name) ? $key->item_name : $request->item_name;
        $key->description = is_null($request->description) ? $key->description : $request->description;
        $key->price = is_null($request->price) ? $key->price : $request->price;
        $key->save();

        return response()->json([
            "message" => "Key records updated successfully"
        ], 200);
        } else {
        return response()->json([
            "message" => "Key not found"
        ], 404);
        
    }
    }

    public function deleteKey ($id) {
        if(Key::where('id', $id)->exists()) {
        $key = Key::find($id);
        $key->delete();

        return response()->json([
          "message" => "Key records deleted"
        ], 202);
        } else {
        return response()->json([
          "message" => "Key not found"
        ], 404);
      }
    }
    
    
    /* API VEHICLES */
    
    public function getAllVehicles() {
        $vehicles = Vehicle::get();
        return response($vehicles, 200);
    }

    public function createVehicle(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'year' => 'required|numeric',
            'make' => 'required|max:25',
            'model' => 'required|max:25',
            'vin' => 'required',
        ]);

        if ($validator->fails()) {       
            $errors = $validator->errors();
            return response()->json([
            "message" => $errors
            ], 201);
        }
        
        
        $vehicle = new Vehicle;
        $vehicle->key_id = $request->key_id;
        $vehicle->year = $request->year;
        $vehicle->make = $request->make;
        $vehicle->model = $request->model;
        $vehicle->vin = $request->vin;
        $vehicle->save();

        return response()->json([
            "message" => "Vehicle record created"
        ], 201);
    
    }

    public function getVehicle($id) {
       if (Vehicle::where('id', $id)->exists()) {
        $vehicle = Vehicle::where('id', $id)->get();
        return response($vehicle, 200);
      } else {
        return response()->json([
          "message" => "Vehicle not found"
        ], 404);
      }
    }

    public function updateVehicle(Request $request, $id) {
      if (Vehicle::where('id', $id)->exists()) {
        $vehicle = Vehicle::find($id);
        $vehicle->key_id = is_null($request->key_id) ? $vehicle->key_id : $request->key_id;
        $vehicle->year = is_null($request->year) ? $vehicle->year : $request->year;
        $vehicle->make = is_null($request->make) ? $vehicle->make : $request->make;
        $vehicle->model = is_null($request->model) ? $vehicle->model : $request->model;
        $vehicle->vin = is_null($request->vin) ? $vehicle->vin : $request->vin;
        $vehicle->save();

        return response()->json([
            "message" => "Vehicle records updated successfully"
        ], 200);
        } else {
        return response()->json([
            "message" => "Vehicle not found"
        ], 404);
        
    }
    }

    public function deleteVehicle ($id) {
        if(Vehicle::where('id', $id)->exists()) {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();

        return response()->json([
          "message" => "Vehicle records deleted"
        ], 202);
        } else {
        return response()->json([
          "message" => "Vehicle not found"
        ], 404);
      }
    }
    
    
    /* API TECHNICIANS */
    
    public function getAllTechnicians() {
        $technicians = Technician::get();
        return response($technicians, 200);
    }

    public function createTechnician(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:25',
            'last_name' => 'required|max:25',
            'truck_number' => 'required|numeric',
        ]);

        if ($validator->fails()) {       
            $errors = $validator->errors();
            return response()->json([
            "message" => $errors
            ], 201);
        }
        
        
        $technician = new Technician;
        $technician->first_name = $request->first_name;
        $technician->last_name = $request->last_name;
        $technician->truck_number = $request->truck_number;
        $technician->save();

        return response()->json([
            "message" => "Technician record created"
        ], 201);
    
    }

    public function getTechnician($id) {
       if (Technician::where('id', $id)->exists()) {
        $technician = Technician::where('id', $id)->get();
        return response($technician, 200);
      } else {
        return response()->json([
          "message" => "Technician not found"
        ], 404);
      }
    }

    public function updateTechnician(Request $request, $id) {
      if (Technician::where('id', $id)->exists()) {
        $technician = Technician::find($id);
        $technician->first_name = is_null($request->first_name) ? $technician->first_name : $request->first_name;
        $technician->last_name = is_null($request->last_name) ? $technician->last_name : $request->last_name;
        $technician->truck_number = is_null($request->truck_number) ? $technician->truck_number : $request->truck_number;
        $technician->save();

        return response()->json([
            "message" => "Technician records updated successfully"
        ], 200);
        } else {
        return response()->json([
            "message" => "Technician not found"
        ], 404);
        
    }
    }

    public function deleteTechnician ($id) {
        if(Technician::where('id', $id)->exists()) {
        $technician = Technician::find($id);
        $technician->delete();

        return response()->json([
          "message" => "Technician records deleted"
        ], 202);
        } else {
        return response()->json([
          "message" => "Technician not found"
        ], 404);
      }
    }
}
