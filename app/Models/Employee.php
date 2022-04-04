<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\SearchTraits;

class Employee extends Model
{
    use HasFactory;
    use SearchTraits;
    protected $fillable = [
        'employee_code', 'name','department', 'position', 'hire_date', 'status'
    ];
    protected $searchable = ['name'];
    protected $dates = ['created_at', 'updated_at', 'hire_date'];

    public function getHireDate(): string
    {
        return $this->hire_date->format('M d, Y');
    }
    public static function search($search)
    {
        return empty($search)
            ? static::query()
            : static::query()->where('employee_code', 'like', '%' . $search . '%')
            ->orWhere('name', 'like', '%' . $search . '%');
    }
}
