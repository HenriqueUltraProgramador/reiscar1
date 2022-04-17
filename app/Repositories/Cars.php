<?php

namespace App\Repositories;

use App\Enums\CmsFilters;
use App\Enums\CmsCollection;
use App\Traits\DirectusApiHelper;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class Cars
{
    use DirectusApiHelper;

    public function __construct()
    {
        $this->pathAssets = config('directus-laravel.path_assets');
        $this->carsUrl = $this->getDirectusApi(
            CmsCollection::CARS,
            null,
            true,
            null,
            true
        );
    }

    public function getCars()
    {
        $items = [];

        try {
            $request = Http::get($this->carsUrl);
            $response = json_decode($request->getBody()->getContents());
            if ($response) {
                foreach ($response->data as $data) {
                    $translation = head($data->translations);
                    $item = [
                        'id' => $data->id ?? '',
                        'brand' => $data->car_brand ?? '',
                        'model' => $data->car_model ?? '',
                        'price' => $data->car_price ?? 'n/a',
                        'description' => $translation->car_description ?? '',
                        'state' => $translation->cars_state ?? '',
                        'image' => !empty($data->car_photos->id)
                            ? $this->pathAssets . $data->car_photos->id
                            : '',
                    ];
                    array_push($items, $item);
                }
            }
        } catch (\Exception $error) {
            Log::error('Cant fetch CMS banners data');
        }
        return $items;
    }

    public function getOneCar(string $id)
    {
        $items = [];

        try {
            $request = new Client([$this->carsUrl]);

            $response = json_decode($request->getBody()->getContents());
            $data = $response->data;
            $translation = head($data->translations);

            $item = [
                'id' => $data->id ?? '',
                'brand' => $data->car_brand ?? '',
                'model' => $data->car_model ?? '',
                'price' => $data->car_price ?? 'n/a',
                'description' => $translation->car_description ?? '',
                'state' => $translation->cars_state ?? '',
                'image' => !empty($data->car_photos->id)
                    ? $this->pathAssets . $data->car_photos->id
                    : '',
            ];
            array_push($items, $item);
        } catch (\Exception $error) {
            Log::error('Cant fetch CMS banners data');
        }
        return $items;
    }
}
