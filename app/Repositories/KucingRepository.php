<?php

namespace App\Repositories;

use App\Models\Kucing;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class KucingRepository
 * @package App\Repositories
 * @version March 18, 2018, 10:38 am UTC
 *
 * @method Kucing findWithoutFail($id, $columns = ['*'])
 * @method Kucing find($id, $columns = ['*'])
 * @method Kucing first($columns = ['*'])
*/
class KucingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nama_kucing',
        'Jenis_kucing',
        'makanan',
        'keterangan'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Kucing::class;
    }
}
