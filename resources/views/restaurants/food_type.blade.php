@extends('template')

@section('header')
    <header class="small-page-header">
        <div class="header-content">
            <div class="header-content-inner">
                <h1>編輯餐廳資訊</h1>
                <hr>
                <p>餐廳資訊跟人的心一樣，常常是善變的，為了提供最好的建議，需要您的協助。</p>
                <a href="{{ url('restaurants/create') }}" role="btn" class="btn btn-primary btn-xl">新增餐廳</a>
            </div>
        </div>
    </header>
@stop

@section('content')
    <section class="container">
        <!-- <a href="{{ url('restaurants/create') }}" role="btn" class="btn btn-info">新增</a> -->
        <table class="table table-striped table-hover">
                <tr>
                    <th>食物類型</th>
                    <th></th>
                    <th></th>
                </tr>
            @foreach ( $query as $var )
                <tr>
                    <td>{{$var -> title}}</td>
                    
                </tr>
            @endforeach
        </table>
    </section>
@stop