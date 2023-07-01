<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class AlternatifNilai extends Model
{
    use HasFactory, Loggable;

    protected $fillable = [
        'alternatif_id',
        'kirteria_id',
        'kirteria_nilai_id',
    ];

    protected $primaryKey = 'id';
    protected $table = 'alternatif_nilai';
    const tableName = 'alternatif_nilai';

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'alternatif_id', 'id');
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, 'kriteria_id', 'id');
    }

    public function nilai()
    {
        return $this->belongsTo(AlternatifNilai::class, 'kirteria_nilai_id', 'id');
    }
}
