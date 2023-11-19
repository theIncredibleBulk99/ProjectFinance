<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = "transaksi";
    protected $primaryKey ='id_transaksi';
    protected $fillable = [
        'nama_transaksi',
        'tanggal_transaksi',
        'jumlah_transaksi',
        'jenis_transaksi',
        'bukti_transaksi',
        'pihak_terlibat',
        'catatan'
    ];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [];
    public static function getAll()
    {
        return self::all();
    }
}
