<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class Alternatif extends Model
{
    use HasFactory, Loggable, Sluggable;

    protected $fillable = [
        'nama',
        'slug',
        'alamat',
        'deskripsi',
    ];

    protected $primaryKey = 'id';
    protected $table = 'alternatif';
    const tableName = 'alternatif';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    public function nilais()
    {
        return $this->hasMany(AlternatifNilai::class, 'alternatif_id', 'id');
    }
}
