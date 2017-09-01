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
            <div class="form-group">
                <label>Текст под заголовком</label>
                <textarea class="form-control text"
                          data-name="text"
                          data-type="text"
                          data-block="main_block"
                          data-id="0">{{$main_block->text_field}}</textarea>
            </div>
        </div>
    </div>
@endsection