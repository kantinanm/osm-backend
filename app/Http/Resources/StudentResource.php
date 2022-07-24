<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    
    public static $wrap='students';
    public function toArray($request)
    {
        return [
            'fullname' => $this->fullname,
            'student_id' => $this->student_id,
            'gpa' => $this->gpa,
            'position' => $this->class,
        ];

        //return parent::toArray($request);
    }

    public function with($request)
    {
        return ['status' =>'success'];
    }

}
