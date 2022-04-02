<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Traits\SearchTraits;

class Employee extends Model
{
    use HasFactory;
    // use SearchTraits;
    protected $fillable = [
        'employee_code', 'name','department', 'position', 'hire_date', 'status'
    ];
    protected $searchable = ['name'];

    public static function search($search)
    {
        return empty($search)
        ? static::query()
        : static::query()->where('id', 'like', '%'.$search.'%')
            ->orWhere('name', 'like', '%'.$search.'%');

    }
}
