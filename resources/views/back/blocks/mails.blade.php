@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Почта'])

    <div class="box box-info group-item-widget"
         data-block="call_mailto">
        <div class="box-header with-border">
            <h3 class="box-title"> Получатели писем </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($call->call_mailto_group as $item)
                    @include('back.groups.call_mailto.call_mailto_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>

    <div class="box box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Выгрузка заявок</h3>
        </div>
        <form class="box-body js_get_requests_form">
            <div class="form-group">
                <label>С</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" id="mytarget1" class="form-control" data-mask="00.00.0000">
                    <div class="monthly" id="mycalendar1" style="top: 100%;z-index: 5;"></div>
                </div>
            </div>
            <div class="form-group">
                <label>По</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" id="mytarget2" class="form-control" data-mask="00.00.0000">
                    <div class="monthly" id="mycalendar2" style="top: 100%;z-index: 5;"></div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Выгрузить заявки</button>
            </div>
            <div class="place-filler"></div>
        </form>
    </div>

    <style>
        .monthly-past-day:after{
            display: none;
        }
        .place-filler{
            height: 160px;
        }
    </style>
@endsection