<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
//use Carbon\Carbon;

class FacultiesCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
           // 'data' => [
                'faculties' => $this->collection->map(function($data) {
                    return [
                        '_id'         => $data->_id,
                        'fac_id'       => $data->fac_id,
                        'fac_name_th'  => $data->fac_name_th,
                        //'created_at'    => Carbon::parse($data->created_at)->toDateTimeString()
                    ];
                }),
                //'faculties_counts' =>$this->collection->count()
           // ]
        ];
        //return parent::toArray($request);
    }

    public function with($request)
    {
        return [
            'isSuccess' => true,
            'type' => 'ResourceCollection',
            'counts' =>$this->collection->count()
        ];
    }
}
