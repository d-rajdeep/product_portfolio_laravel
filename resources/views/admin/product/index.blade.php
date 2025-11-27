@extends('admin.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Manage Products</h4>
                <a href="{{ route('product.create') }}" class="btn btn-light btn-sm">
                    <i class="bi bi-plus-circle"></i> Add New Product
                </a>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if ($product->count())
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Text</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Date</th>
                                    <th width="180">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ Str::limit($item->text, 50) }}</td>
                                        <td>{{ $item->price}}</td>
                                        <td>
                                            @if ($item->image)
                                                <img src="{{ asset('storage/' . $item->image) }}" alt="Product Image"
                                                    style="height: 60px; width: auto; object-fit: cover;"
                                                    class="border rounded">
                                            @endif
                                        </td>
                                        <td>{{ $item->created_at}}</td>
                                        <td>
                                            <a href="{{ route('product.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </a>
                                            <form action="{{ route('product.destroy', $item->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this entry?')">
                                                    <i class="bi bi-trash"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-muted">No About entries found. Start by adding one.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
