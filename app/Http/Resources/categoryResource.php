<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class categoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'created_at'=>date("d/m/y",strtotime($this->created_at)),
            'status'=>$this->status,
            'ten_admin_create'=>$this->ten_admin_create,
            'apiCreateBy'=>[
                    'nameCreateBy'=>'Phạm Minh Thiện',
                    'statusCode'=>'200',
            ],

        ];
    }
    public function with($request)
    {
        return [
            'meta' => [
                'key' => 'value',
            ],
        ];
    }
}
