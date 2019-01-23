<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Status
 * @package App\Models\Admin
 * @version August 28, 2018, 11:03 pm CEST
 *
 * @property \Illuminate\Database\Eloquent\Collection Language
 * @property \Illuminate\Database\Eloquent\Collection tagTranslations
 * @property string code
 */
class Status extends Model
{
    use SoftDeletes;

    public $table = 'statuses';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'code'
    ];

    protected $appends = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'code' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function languages()
    {
        return $this->hasMany(\App\Models\Admin\Language::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function statusTranslations()
    {
        return $this->hasMany(\App\Models\Admin\StatusTranslation::class);
    }

    /**
     * Return the StatusTranslation in current languague.
     *
     * @return StatusTranslation
     **/
    public function statusTranslation()
    {
        $language = Language::where('code', \App::getLocale())->first();
        return $this->statusTranslations->filter(function($statusTranslation) use($language){
            return $statusTranslation->language_id == $language->id;
        })->first();
    }

    /**
     * Get the name in the given translation (Accessor).
     *
     * @return string
     */
    public function getNameAttribute()
    {
        return isset($this->statusTranslation()->name) ? $this->statusTranslation()->name : '';
    }
}
