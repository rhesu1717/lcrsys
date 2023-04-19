<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marriage extends Model
{
    use HasFactory;

    protected $table = "marriages";
    protected $primaryKey = "id";

    public function getGNameAttribute(){
        return "{$this->G_LNAME}, {$this->G_FNAME} {$this->G_MI}";
    }

    public function getWNameAttribute(){
        return "{$this->W_LNAME}, {$this->W_FNAME} {$this->W_MI}";
    }

    // public function getGFNameAttribute(){
    //     return "{$this->G_FLAST}, {$this->G_FFIRST} {$this->G_FMI}";
    // }

    // public function getWFNameAttribute(){
    //     return "{$this->W_FLAST}, {$this->W_FFIRST} {$this->W_FMI}";
    // }

    // public function getGMNameAttribute(){
    //     return "{$this->G_MLAST}, {$this->G_MFIRST} {$this->G_MMI}";
    // }

    // public function getWMNameAttribute(){
    //     return "{$this->W_MLAST}, {$this->W_MFIRST} {$this->W_MMI}";
    // }
}
