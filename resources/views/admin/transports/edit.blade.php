@extends('layouts.admin')

@section('title') Edit Transport @endsection


@section('content')


    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1>Edit Category</h1>

            {!! Form::model($category, ['method'=>'PATCH', 'action'=>['Admin\AdminTransportsController@update', $category->id]]) !!}

            <div class="form-group">

                {!! Form::label('name', 'Price') !!}

                {!! Form::number('price', null, ['class' => 'form-control']) !!}

            </div>

            <div class="form-group">

                {!! Form::label('name', 'Weight') !!}

                {!! Form::number('weight', null, ['class' => 'form-control']) !!}

            </div>

            <div class="form-group">
                {!! Form::submit('Update', ['class'=>'btn btn-primary btn-block']) !!}
            </div>

            {!! Form::close() !!}




            {!! Form::open(['method'=>'DELETE', 'action'=>['Admin\AdminTransportsController@destroy', $category->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) !!}
            </div>

            {!! Form::close() !!}
        </div>

    </div>






@endsection