@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Титульный блок'])
    <div class="box box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Заголовок</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$main_block->block_title_field}}"
                       data-name="block_title"
                       data-type="string"
                       data-block="main_block"
                       data-id="0">
            </div>
            {{--<div class="form-group">
                <label>Текст под заголовком</label>
                <textarea class="form-control text"
                          data-name="text"
                          data-type="text"
                          data-block="main_block"
                          data-id="0">{{$main_block->text_field}}</textarea>
            </div>--}}
            {{--<div class="form-group">
                <label>Скидка "ОТ"</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$main_block->price_from_field}}"
                       data-name="price_from"
                       data-type="string"
                       data-block="main_block"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Скидка "ДО"</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$main_block->price_up_field}}"
                       data-name="price_up"
                       data-type="string"
                       data-block="main_block"
                       data-id="0">
            </div>

            <div class="form-group">
                <label>Минимальная цена 1-комнатной квартиры</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$main_block->price_1}}"
                       data-name="price_1"
                       data-type="string"
                       data-block="main_block"
                       data-id="0">
            </div>

            <div class="form-group">
                <label>Минимальная цена 2-комнатной квартиры</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$main_block->price_2}}"
                       data-name="price_2"
                       data-type="string"
                       data-block="main_block"
                       data-id="0">
            </div>

            <div class="form-group">
                <label>Минимальная цена 3-комнатной квартиры</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$main_block->price_3}}"
                       data-name="price_3"
                       data-type="string"
                       data-block="main_block"
                       data-id="0">
            </div>

            <div class="form-group">
                <label>Минимальная цена 4-комнатной квартиры</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$main_block->price_4}}"
                       data-name="price_4"
                       data-type="string"
                       data-block="main_block"
                       data-id="0">
            </div>--}}
        </div>
    </div>
@endsection