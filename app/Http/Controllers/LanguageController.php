<?php

namespace App\Http\Controllers;

use App;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Admin\Language;
use Response;

class LanguageController extends Controller
{
    /* Obtener todos los lenguajes */
    public static function getLanguageAll(){

        return Language::all();
    }
}
