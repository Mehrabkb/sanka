<?php

namespace App\Models\Management;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagementTable extends Model
{
    protected $table = 'management__tables';
    use HasFactory;
}
