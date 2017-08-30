@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'О комплексе'])
    <div class="box box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Заголовок</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$about->block_title_field}}"
                       data-name="block_title"
                       data-type="string"
                       data-block="about"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Текст под заголовком</label>
                <textarea class="form-control text-editor"
                          data-name="text"
                          data-type="text"
                          data-block="about"
                          data-id="0">{{$about->text_field}}</textarea>
            </div>
        </div>
    </div>
@endsection