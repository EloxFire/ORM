<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class User extends JsonResources
{
  /**
  * Transform the resource collection into an array.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return array
  */
  public function toArray($request){
    return [
      'id' => $this->id,
      'name' => $name->name,
      'email' => $email->email,
      'created_at' => $this->created_at,
      'updated_at' => $this->updated_at,
    ];
  }
}
