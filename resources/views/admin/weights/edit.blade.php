@extends('layouts.admin')

@section('title') Edit Transport @endsection


@section('content')


    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1>Edit Weight</h1>

            {!! Form::model($weight, ['method'=>'PATCH', 'action'=>['Admin\AdminWeigthsController@update', $weight->id]]) !!}

            <div class="form-group">

                {!! Form::label('name', 'Price') !!}

                {!! Form::number('price', null, ['class' => 'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('name', 'Weight') !!}

                {!! Form::number('weight', null, ['class' => 'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('name', 'Weight') !!}

                <select name="product_id">
                    @foreach($products as $product)
                        <option @if($weight->product_id == $product->id) selected @endif value="{{$product->id}}">{{$product->brand}}</option>
                    @endforeach
                </select>

            </div>

            <div class="form-group">
                {!! Form::submit('Update', ['class'=>'btn btn-primary btn-block']) !!}
            </div>

            {!! Form::close() !!}




            {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\AdminWeigthsController@destroy', $weight->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) !!}
            </div>

            {!! Form::close() !!}
        </div>

    </div>






@endsection