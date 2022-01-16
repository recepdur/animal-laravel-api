<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Animal;
use App\Http\Resources\Animal as AnimalResource;
   
class AnimalController extends BaseController
{
    public function index()
    {
        $userid = Auth::user()->id;
        $animals = Animal::where('user_id',$userid)->get();
        //$animals = Animal::all();
        return $this->sendResponse(AnimalResource::collection($animals), 'Animals fetched.');
    }
    
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'ear_no' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }

        $userid = Auth::user()->id; 
        $input["user_id"] = $userid; 

        $animal = Animal::create($input);
        return $this->sendResponse(new AnimalResource($animal), 'Animal created.');
    }

    public function show($id)
    {
        $animal = Animal::find($id);
        if (is_null($animal)) {
            return $this->sendError('Animal does not exist.');
        }
        return $this->sendResponse(new AnimalResource($animal), 'Animal fetched.');
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'ear_no' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }

        $animal = Animal::find($id);
        if (is_null($animal)) {
            return $this->sendError('Animal does not exist.');
        }
        
        $animal->ear_no = $input['ear_no'];
        $animal->save();
        
        return $this->sendResponse(new AnimalResource($animal), 'Post updated.');
    }
   
    public function destroy($id)
    { 
        $animal = Animal::find($id);
        if (is_null($animal)) {
            return $this->sendError('Animal does not exist.');
        }
        $animal->delete();
        return $this->sendResponse([], 'Animal deleted.');
    }

    public function search($name)
    {
        return Animal::where('name', 'like', '%'.$name.'%')->get();
    }
}