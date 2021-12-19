<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use App\Models\Animal;
use App\Http\Resources\Animal as AnimalResource;
   
class AnimalController extends BaseController
{
    public function index()
    {
        $animals = Animal::all();
        return $this->sendResponse(AnimalResource::collection($animals), 'Posts fetched.');
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
        $animal = Animal::create($input);
        return $this->sendResponse(new AnimalResource($animal), 'Post created.');
    }

    public function show($id)
    {
        $animal = Animal::find($id);
        if (is_null($animal)) {
            return $this->sendError('Post does not exist.');
        }
        return $this->sendResponse(new AnimalResource($animal), 'Post fetched.');
    }

    public function update(Request $request, Animal $animal)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'ear_no' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }

        $animal->ear_no = $input['ear_no'];
        $animal->save();
        
        return $this->sendResponse(new AnimalResource($animal), 'Post updated.');
    }
   
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return $this->sendResponse([], 'Post deleted.');
    }
}