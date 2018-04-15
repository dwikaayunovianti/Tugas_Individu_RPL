<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pelanggan
 * @package App\Models
 * @version March 19, 2018, 7:43 am UTC
 *
 * @property string Nama_Pemilik
 * @property string Nama_Kucing
 * @property string Jenis_Kucing
 * @property string Nomor_Telepon
 * @property string Alamat
 * @property string Tanggal_Masuk
 * @property string Pesan
 */
class Pelanggan extends Model
{
    use SoftDeletes;

    public $table = 'pelanggans';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Nama_Pemilik',
        'Nama_Kucing',
        'Jenis_Kucing',
        'Nomor_Telepon',
        'Alamat',
        'Tanggal_Masuk',
        'Pesan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nama_Pemilik' => 'string',
        'Nama_Kucing' => 'string',
        'Jenis_Kucing' => 'string',
        'Nomor_Telepon' => 'string',
        'Alamat' => 'string',
        'Tanggal_Masuk' => 'string',
        'Pesan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nama_Pemilik' => 'required',
        'Nama_Kucing' => 'required',
        'Jenis_Kucing' => 'required',
        'Nomor_Telepon' => 'required',
        'Alamat' => 'required',
        'Tanggal_Masuk' => 'required',
        'Pesan' => 'required'
    ];

    
}
