<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    public $fillable = ['title_tm', 'title_en', 'title_ru', 
                        'description_tm', 'description_en', 'description_ru',
                        'content_tm', 'content_en', 'content_ru'];


    public function getTitleAttribute()
    {
        $locale = app()->getLocale();
        $property = "title_{$locale}";

        return $this->{$property};
    }

    public function getDescriptionAttribute()
    {
        $locale = app()->getLocale();
        $property = "description_{$locale}";

        return $this->{$property};
    }

    public function getContentAttribute()
    {
        $locale = app()->getLocale();
        $property = "content_{$locale}";

        return $this->{$property};
    }
}
