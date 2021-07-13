@extends ('admin.layout')

@section ('content')

<div class="row">
  <div class="col">
    <!-- Table with border -->
    <div class="card mb-grid">
      <div class="card-header d-flex justify-content-between align-items-center">
        <div class="card-header-title">Table with border</div>
      </div>
      <div class="card-body">
        @include('admin.part.flash')
        <table class="table table-actions table-bordered table-hover mb-0">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Slug</th>
              <th>Parent</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($categories as $category)
            <tr>
              <td>{{$category ->id}}</td>
              <td>{{$category ->name}}</td>
              <td>{{$category ->slug}}</td>
              <td>{{ $category->parent ? $category->parent->name : '' }}</td>
              <td>
                <a href="{{ url('admin/categories/'. $category->id .'/edit') }}" class="btn btn-secondary btn-sm">edit</a>

                {!! Form::open(['url' => 'admin/categories/'. $category->id, 'class' => 'delete', 'style' => 'display:inline-block']) !!}
                {!! Form::hidden('_method', 'DELETE') !!}
                {!! Form::submit('hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="5">Tidak ada data kategori</td>
            </tr>
            @endforelse
          </tbody>
        </table>
        {{ $categories->links('pagination::bootstrap-4') }}

      </div>
      <div class="card-footer text-right">
        <a href="{{ url('admin/categories/create') }}" class="btn btn-primary">Tambah</a>
      </div>
      <!-- // Table with border -->

    </div>

    @endsection