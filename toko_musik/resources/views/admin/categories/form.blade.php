@extends('admin.layout')

@section('content')

@php
$formTitle = !empty($category) ? 'Update' : 'New'
@endphp

@section('content')
<div class="content">
  <div class="row">
    <div class="col-lg-6">
      <div class="card mb-grid">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h2>{{ $formTitle }} Category</h2>
        </div>
        <div class="card-body">
          @include('admin.part.flash', ['$errors' => $errors])
          @if (!empty($category))
          {!! Form::model($category, ['url' => ['admin/categories', $category->id], 'method' => 'PUT']) !!}
          {!! Form::hidden('id') !!}
          @else
          {!! Form::open(['url' => 'admin/categories']) !!}
          @endif
          <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'category name']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('parent_id', 'Parent') !!}
            {!! Form::label('parent_id', 'Parent') !!}
            {!! General::selectMultiLevel('parent_id', $categories, ['class' => 'form-control', 'selected' => !empty(old('parent_id')) ? old('parent_id') : (!empty($category['parent_id']) ? $category['parent_id'] : ''), 'placeholder' => '-- Choose Category --']) !!}
          </div>
          <div class="form-footer pt-5 border-top">
            <button type="submit" class="btn btn-primary btn-default">Save</button>
            <a href="{{ url('admin/categories') }}" class="btn btn-secondary btn-default">Back</a>
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>

@endsection