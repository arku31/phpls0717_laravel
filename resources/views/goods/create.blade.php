@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Goods</div>

                    <div class="panel-body">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>

                    <div class="panel-body">
                        <form action="/good/store" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <table class="table">
                                <tr>
                                    <td>name</td>
                                    <td><input type="text" name="name"></td>
                                </tr>
                                <tr>
                                    <td>price</td>
                                    <td><input type="text" name="price"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="file" name="image"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <input type="submit" name="submitbtn">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>

                    <div class="panel-body">
                        {!! Form::open(array('url' => 'foo/bar')) !!}
                        {!! Form::token()  !!}
                        {!! Form::text('email', 'example@gmail.com')  !!}
                        {!! Form::submit() !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
