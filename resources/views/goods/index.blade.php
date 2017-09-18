@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Goods</div>
                    <div class="panel-body">
                        <div>
                            <a href="/good/create">
                                <button>Create</button>
                            </a>
                        </div>
                        <table class="table">
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>price</th>
                                <th>controls</th>
                            </tr>
                        @foreach ($goods as $good)
                                <tr>

                                    <td><a href="/good/show/{{$good->id}}">{{$good->id}}</a></td>
                                    <td><a href="/good/show/{{$good->id}}">{{$good->name}}</a></td>
                                    <td><a href="/good/show/{{$good->id}}">{{$good->price}}</a></td>

                                    <td>
                                        <a href="/good/destroy/{{$good->id}}">
                                            <button>Удалить</button>
                                        </a>
                                        <a href="/good/edit/{{$good->id}}">
                                            <button>Редактировать</button>
                                        </a>
                                    </td>
                                </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
