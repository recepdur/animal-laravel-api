<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Animal extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id, 
            'status' => $this->status,
            'gender' => $this->gender,
            'ear_no' => $this->ear_no,
            'name' => $this->name,
            'race' => $this->race,
            'mother_ear_no' => $this->mother_ear_no,
            'father_ear_no' => $this->father_ear_no,
            'description' => $this->description,
            'birth_date' => $this->birth_date,
            'arrival_date' => $this->arrival_date,
            'created_at' => $this->created_at->format('m/d/Y'),
            'updated_at' => $this->updated_at->format('m/d/Y'),
        ];
    }
}