<?php

namespace App\Repositories;

use App\Models\Pelanggan;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PelangganRepository
 * @package App\Repositories
 * @version March 19, 2018, 7:43 am UTC
 *
 * @method Pelanggan findWithoutFail($id, $columns = ['*'])
 * @method Pelanggan find($id, $columns = ['*'])
 * @method Pelanggan first($columns = ['*'])
*/
class PelangganRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nama_Pemilik',
        'Nama_Kucing',
        'Jenis_Kucing',
        'Nomor_Telepon',
        'Alamat',
        'Tanggal_Masuk',
        'Pesan'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pelanggan::class;
    }
}
