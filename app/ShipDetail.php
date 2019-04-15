<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShipDetail extends Model
{
    protected $table = 'ship_detail';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ref_no', 'radio_id', 'merk', 'type', 'serial_number', 'approval',
    ];
}
