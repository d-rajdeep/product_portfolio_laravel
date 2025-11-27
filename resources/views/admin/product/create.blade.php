@extends('admin.layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Add New Product</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="text" class="form-label">Text</label>
                        <textarea name="text" id="text-editor" class="form-control" rows="5" required>{{ old('text') }}</textarea>
                        @error('text')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}"
                            required>
                        @error('price')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" required>
                        @error('image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success"><i class="bi bi-check-circle"></i> Save</button>
                    <a href="{{ route('product.index') }}" class="btn btn-secondary"><i class="bi bi-x-circle"></i> Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{-- ✅ CKEditor 5 CDN --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            ClassicEditor
                .create(document.querySelector('#text-editor'), {
                    toolbar: {
                        items: [
                            'heading', '|',
                            'bold', 'italic', 'underline', 'link', '|',
                            'bulletedList', 'numberedList', '|',
                            'undo', 'redo'
                        ]
                    },
                    removePlugins: [
                        'Image', 'ImageToolbar', 'ImageCaption', 'ImageStyle',
                        'ImageUpload', 'MediaEmbed', 'EasyImage'
                    ]
                })
                .then(editor => {
                    console.log('CKEditor initialized successfully ✅', editor);
                })
                .catch(error => {
                    console.error('CKEditor initialization failed ❌', error);
                });
        });
    </script>
@endsection
