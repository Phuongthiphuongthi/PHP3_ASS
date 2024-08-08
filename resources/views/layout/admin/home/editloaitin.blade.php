@extends('layout.admin.master')
@section('title', 'Sửa loại tin')


@section('content')
<div class="main-content">

<div class="container pt-5">
    <div class="card mt-5">
        <div class="card-header">
            <h5>Sửa Loại Tin</h5>
        </div>
        <div class="card-body">
            <form action="{{route('editloaitinpost',$loaiTin->id)}}" id="edit-form" method="POST">
                @csrf
                @method('PUT') <!-- Sử dụng phương thức PUT cho cập nhật -->
                <div class="mb-3">
                    <label for="id-field" class="form-label">ID</label>
                    <input type="text" id="id-field" name="id" class="form-control" value="{{$loaiTin->id}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="name-field" class="form-label">Tên tin</label>
                    <input type="text" id="name-field" name="name" class="form-control" value="{{$loaiTin->name}}" required>
                </div>
                <div class="mb-3">
                    <label for="created-at-field" class="form-label">Ngày tạo</label>
                    <input type="text" id="created-at-field" name="created_at" class="form-control" value="{{$loaiTin->created_at}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="updated-at-field" class="form-label">Ngày sửa</label>
                    <input type="text" id="updated-at-field" name="updated_at" class="form-control" value="{{$loaiTin->updated_at}}" readonly>
                </div>
                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                <a href="" class="btn btn-secondary">Quay lại</a>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const updatedAtField = document.getElementById('updated-at-field');
    const currentDateTime = new Date().toLocaleString();
    updatedAtField.value = currentDateTime; // Cập nhật ngày giờ hiện tại vào trường "Ngày sửa"
});
</script>

</div>
@endsection
