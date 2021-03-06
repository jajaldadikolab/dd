@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-grid">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2>Products</h2>
                    </div>
                    <div class="card-body">
                        @include('admin.part.flash')
                        <table class="table table-actions table-bordered table-hover mb-0">
                            <thead>
                                <th>#</th>
                                <th>SKU</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                    <tr>    
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->sku }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->status }}</td>
                                        <td>
                                            <a href="{{ url('admin/products/'. $product->id .'/edit') }}" class="btn btn-warning btn-sm">edit</a>

                                            {!! Form::open(['url' => 'admin/products/'. $product->id, 'class' => 'delete', 'style' => 'display:inline-block']) !!}
                                            {!! Form::hidden('_method', 'DELETE') !!}
                                            {!! Form::submit('remove', ['class' => 'btn btn-danger btn-sm']) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">No records found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ url('admin/products/create') }}" class="btn btn-primary">Add New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection