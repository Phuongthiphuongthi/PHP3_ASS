@extends('layout.admin.master')
@section('title', 'Sửa tin')

@section('title', 'Sửa bài viết')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid bg-white p-3">
                <h2>Sửa bài viết</h2>
                <form action="{{ route('edittinpost', $tin->id) }}" method="post" class="w-100 mt-4"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label for="" class="form-label">Tiêu đề</label>
                                <input type="text" name="title" class="form-control" value="{{ $tin->title }}">
                            </div>

                            <div>
                                @error('title')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-2">
                                <label for="" class="form-label">Ảnh</label>
                                <input type="file" name="img" class="form-control">

                                <img src="{{env('APP_URL')}}/public/storage/imgs/{{$tin->img}}" alt="">
                            </div>

                            <div class="mb-2 w-25">
                                <label for="" class="form-label">Nội dung</label>
                                <textarea name="content" id="content" cols="30" rows="10">{{ $tin->content }}</textarea>
                            </div>
                            <div>
                                @error('content')
                                    <p class="alert alert-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-2 w-25">
                                <label for="" class="form-label">Lượt thích</label>
                                <input type="number" name="view" class="form-control" value="{{ $tin->view }}">
                            </div>

                            <div class="mb-2">
                                <label for="" class="form-label">Danh mục</label>
                                <select name="id_loaitin" id="" class="form-select">
                                    @foreach ($dm as $loaiTin)
                                        <option value="{{ $loaiTin->id }}"
                                            {{ $tin->id_loaitin == $loaiTin->id ? 'selected' : '' }}>{{ $loaiTin->name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="mb-2">
                                <label for="" class="form-label">Tác giả</label>
                                <select name="id_tacgia" id="" class="form-select">
                                    @foreach ($dataTacGia as $tacGia)
                                        <option value="{{ $tacGia->id }}" {{ $tin->id_tacgia == $tacGia->id ? 'selected' : '' }}>{{ $tacGia->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="mt-3 text-white btn btn-success">Thêm</button>
                    </div>
                </form>

            </div> <!-- container-fluid -->
        </div>
    </div>



    @include('layout.admin.partials.ckeditor')

@endsection
