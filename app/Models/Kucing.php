<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Kucing
 * @package App\Models
 * @version March 18, 2018, 10:38 am UTC
 *
 * @property string Nama_kucing
 * @property string Jenis_kucing
 * @property string makanan
 * @property string keterangan
 */
class Kucing extends Model
{
    use SoftDeletes;

    public $table = 'kucings';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Nama_kucing',
        'Jenis_kucing',
        'makanan',
        'keterangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nama_kucing' => 'string',
        'Jenis_kucing' => 'string',
        'makanan' => 'string',
        'keterangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nama_kucing' => 'required',
        'Jenis_kucing' => 'required',
        'makanan' => 'required',
        'keterangan' => 'required'
    ];

    
}
