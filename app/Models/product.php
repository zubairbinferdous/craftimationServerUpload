<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\subCategory;

class product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function catagory()
    {
        return $this->belongsTo(catagory::class, 'category_id', 'id');
    }


    public function subCate()
    {
        return $this->belongsTo(subCategory::class, 'sub_id', 'id');
    }
}
