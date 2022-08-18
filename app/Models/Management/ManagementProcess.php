<?php

namespace App\Models\Management;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class ManagementProcess extends Model
{
    use HasFactory;
    protected $table = 'management__processes';

    protected function processStatus(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value == 1 ? "فعال":"غیر فعال"
        );
    }
}
