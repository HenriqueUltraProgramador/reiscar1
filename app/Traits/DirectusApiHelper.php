<?php

namespace App\Traits;

use App\Enums\CmsLanguages;
use Illuminate\Support\Facades\App;


trait DirectusApiHelper
{
    protected function getDirectusApi($item, $id, $isAllFields, $sort, $lang = null)
    {
        $baseUrl = config('directus-laravel.base_cms_url').
            '/items/'.
            $item;

        if ($id) {
            $baseUrl = $baseUrl.'/'.$id;
        }

        if ($isAllFields) {
            $baseUrl = $baseUrl.'?fields=*.*.*';
        }

        if (App::getLocale() && !is_null($lang)) {
            $baseUrl = $baseUrl . $this->getLanguage(App::getLocale());
        }

        if ($sort) {
            $baseUrl = $baseUrl . '&sort='.$sort;
        }

        // output url to be parsed throught GuzzleHTTP client
        return $baseUrl;
    }

    protected function getLanguage($lang)
    {
        $param = '&deep[translations][_filter][languages_code][_eq]=';
        switch ($lang) {
            case "en":
                $param =  $param . 'en-US';
                break;
            default:
                $param =  $param . 'pt-BR';
                break;
        }
        return $param;
    }
}
