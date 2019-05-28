<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Log;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;


class FrontController extends Controller
{
    private $extract;

    public function __construct(ExtractAgent $ext)
    {
        $this->extract = $ext;
        $this->extract->tuneSelection('dom_flat')->sortBy('sorter', 'ASC');
        $this->extract->tuneSelection('layout')->sortBy('sorter', 'ASC');
        $this->extract->tuneSelection('slider')->sortBy('sorter', 'DESC');
        $this->extract->tuneSelection('dom_stages')->sortBy('sorter', 'DESC');
    }


    public function getIndex()
    {
        $main_block = $this->extract->getBlock('main_block');
        $about = $this->extract->getBlock('about');
        $gallery = $this->extract->getBlock('gallery');
        $stages = $this->extract->getBlock('stages');
        $flats = $this->extract->getBlock('flats');
        $contacts = $this->extract->getBlock('contacts');
        $prices = $this->extract->getBlock('prices');
        $scripts = $this->extract->getBlock('scripts');

        $main_block_flats = [];
        foreach ($flats->dom_flat_group as $item) {
            $min = null;
            $i = 1;
            foreach ($item->layout_group as $layout_item) {
                if ($layout_item->meter_in_tg > 0) {
                    if ($layout_item->discount) {
                        $price = round($layout_item->discount * $layout_item->area * $prices->dollar);
                    } else {
                        $price = round($layout_item->meter_in_tg * $layout_item->area);
                    }
                } else {
                    if ($layout_item->discount) {
                        $price = round($layout_item->discount * $layout_item->area * $prices->dollar);
                    } else {
                        $price = round($layout_item->meter_cost * $layout_item->area * $prices->dollar);
                    }
                }
                if ($i === 1) {
                    $min = $price;
                } else {
                    $min = $price < $min ? $price : $min;
                }
                $i++;
            }
            if ($min === null) {
                continue;
            }
            $main_block_flats[] = ['name' => $item->dom_flat_name, 'min_price' => $min];
        }

        return view('front.index.index', [
            'main_block' => $main_block,
            'main_block_flats' => $main_block_flats,
            'about' => $about,
            'gallery' => $gallery,
            'stages' => $stages,
            'flats' => $flats,
            'contacts' => $contacts,
            'prices' => $prices,
            'scripts' => $scripts
        ]);
    }

    public function getThanks()
    {
        $scripts = $this->extract->getBlock('scripts');
        return view('front.index.thanks', [
            'scripts' => $scripts
        ]);
    }
}
