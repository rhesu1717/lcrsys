<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Death extends Model
{
    use HasFactory;

    protected $table = "deaths";
    protected $primaryKey = "id";

    public function getFullNameAttribute(){
        return str_replace("Ã‘", "Ñ", "{$this->LAST}, {$this->FIRST} {$this->MI}");
    }
}
