<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LogR extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       //return parent::toArray($request);
       return [
        'id' => $this->id,
        'id_user' =>$this->id_user,
        'activity' => $this->activity,
        'date_relase' => date_format($this->created_at, 'd-m-Y h:i:s')
    ];
    }
}
