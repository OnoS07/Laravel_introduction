<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Scopes\ScopePerson;

class Person extends Model
{
    public function getData(){
        return $this->id . ':' . $this->name . '(' . $this->age . ')';
    }

    public function scopeNameEqual($query, $str){
        return $query->where('name', $str);
    }

    protected static function boot(){
        parent::boot();
        static::addGlobalScope(new ScopePerson);
    }
}
