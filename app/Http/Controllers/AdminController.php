<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    private $extract;
    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
        $this->extract->tuneSelection('slider')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('layout')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('stage_images')->sortBy('sorter','DESC');
    }

    public function getIndex(){
        return view('back.layout');
    }

    public function getMain(){
        $main_block= $this->extract->getBlock('main_block');
        return view('back.blocks.main_block', [
            'main_block' => $main_block
        ]);
    }

    public function getAbout(){
        $about = $this->extract->getBlock('about');
        return view('back.blocks.about', [
            'about' => $about
        ]);
    }

    public function getGallery(){
        $gallery = $this->extract->getBlock('gallery');
        return view('back.blocks.gallery', [
            'gallery' => $gallery
        ]);
    }

    public function getStages(){
        $stages = $this->extract->getBlock('stages');
        return view('back.blocks.stages', [
            'stages' => $stages
        ]);
    }

    public function getStagesItem( $id ){
        $stages_item = $this->extract->getGroupItem('dom_stages', $id);
        return view('back.groups.dom_stages.dom_stages', [
            'item' => $stages_item
        ]);
    }

    public function getFlats(){
        $flats = $this->extract->getBlock('flats');
        return view('back.blocks.flats', [
            'flats' => $flats
        ]);
    }

    public function getFlatsItem( $id ){
        $flat_item = $this->extract->getGroupItem('dom_flat', $id);
        return view('back.groups.dom_flat.dom_flat', [
            'item' => $flat_item
        ]);
    }

    public function getContacts(){
        $contacts = $this->extract->getBlock('contacts');
        return view('back.blocks.contacts', [
            'contacts' => $contacts
        ]);
    }

    public function getCourse(){
        $course = $this->extract->getBlock('prices');
        return view('back.blocks.prices', [
            'course' => $course
        ]);
    }

    public function getMeta(){
        $meta = $this->extract->getBlock('main_block');
        $scripts = $this->extract->getBlock('scripts');
        return view('back.blocks.meta', [
            'meta' => $meta,
            'scripts' => $scripts
        ]);
    }

    public function getMails(){
        $call = $this->extract->getBlock('call');
        return view('back.blocks.mails', [
            'call' => $call
        ]);
    }


    public function getRequestsExcel(Request $request){
        $date_start = date('Y-m-d', strtotime($request->date_start));
        $date_end = date('Y-m-d', strtotime($request->date_end));

        $requests = DB::table('fbmails')
            ->select('id', 'body', 'mailed', 'created_at')
            ->whereBetween('created_at', [$date_start, $date_end])
            ->get();

        Excel::create('Заявки', function($excel) use ($requests) {
            $excel->sheet('таблица', function($sheet) use ($requests) {
                $sheet->appendRow(['Номер заявки', 'Имя', 'Телефон', 'Доставлено', 'Время отправки']);
                foreach ($requests as $request) {
                    $request_name = substr($request['body'], strrpos($request['body'], '<p>Имя: ') + 11, -60);
                    $request_phone = substr($request['body'], strrpos($request['body'], '<p>Телефонный номер: ') + 36, 15);
                    $sheet->appendRow([$request['id'], $request_name, $request_phone, $request['mailed'], $request['created_at']]);
                }
            });
        })->export('xls');
    }

}
