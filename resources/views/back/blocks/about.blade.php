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

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"> Преимущества в деталях </h3>
        </div>
        <div class="box-body">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"> 1-ый блок </h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$about->title1_field}}"
                               data-name="title1"
                               data-type="string"
                               data-block="about"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Текст под заголовком</label>
                        <textarea class="form-control text"
                                  data-name="text1"
                                  data-type="text"
                                  data-block="about"
                                  data-id="0">{{$about->text1_field}}</textarea>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"> 2-ой блок </h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$about->title2_field}}"
                               data-name="title2"
                               data-type="string"
                               data-block="about"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Текст под заголовком</label>
                        <textarea class="form-control text"
                                  data-name="text2"
                                  data-type="text"
                                  data-block="about"
                                  data-id="0">{{$about->text2_field}}</textarea>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"> 3-ий блок </h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$about->title3_field}}"
                               data-name="title3"
                               data-type="string"
                               data-block="about"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Текст под заголовком</label>
                        <textarea class="form-control text"
                                  data-name="text3"
                                  data-type="text"
                                  data-block="about"
                                  data-id="0">{{$about->text3_field}}</textarea>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"> 4-ый блок </h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$about->title4_field}}"
                               data-name="title4"
                               data-type="string"
                               data-block="about"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Текст под заголовком</label>
                        <textarea class="form-control text"
                                  data-name="text4"
                                  data-type="text"
                                  data-block="about"
                                  data-id="0">{{$about->text4_field}}</textarea>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"> 5-ый блок </h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$about->title5_field}}"
                               data-name="title5"
                               data-type="string"
                               data-block="about"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Текст под заголовком</label>
                        <textarea class="form-control text"
                                  data-name="text5"
                                  data-type="text"
                                  data-block="about"
                                  data-id="0">{{$about->text5_field}}</textarea>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"> 6-ой блок </h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$about->title6_field}}"
                               data-name="title6"
                               data-type="string"
                               data-block="about"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Текст под заголовком</label>
                        <textarea class="form-control text"
                                  data-name="text6"
                                  data-type="text"
                                  data-block="about"
                                  data-id="0">{{$about->text6_field}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection