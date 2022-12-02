<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Birth extends Model
{
    use HasFactory;

    protected $table = "births";
    protected $primaryKey = "id";

    public function getFullNameAttribute(){
        return str_replace("Ã‘", "Ñ", "{$this->LAST}, {$this->FIRST} {$this->MI}");
    }

    public function getMotherNameAttribute(){
        return str_replace("Ã‘", "Ñ", "{$this->MLAST}, {$this->MFIRST} {$this->MMI}");
    }

    public function getFatherNameAttribute(){
        return str_replace("Ã‘", "Ñ", "{$this->FLAST}, {$this->FFIRST} {$this->FMI}");
    }
}
