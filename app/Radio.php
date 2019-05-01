<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Radio extends Model
{
    protected $table = 'radio';

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['checked'];

    public function getCheckedAttribute() {
        return false;
    }
}
