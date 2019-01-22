<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TagTranslation extends Model
{
    use SoftDeletes;

    public $table = 'tag_translations';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'tag',
        'value',
        'screen',
        'section',
        'language_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tag' => 'string',
        'value' => 'string',
        'screen' => 'integer',
        'section' => 'integer',
        'language_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

}
