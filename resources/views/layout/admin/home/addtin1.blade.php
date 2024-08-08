@extends('layout.admin.master')
@section('title', 'Thêm tin')


@section('content')
<div class="main-content">
    <div class="container pt-5">
        <div class="card m-5 pb-5">
            <div class="card-header">
                <h5>Thêm Tin</h5>
            </div>



























            <div class="card-body">
                <form action="{{ route('addloaitin') }}" id="edit-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Sử dụng phương thức PUT cho cập nhật -->
                    <div class="mb-3">
                        <label for="id-field" class="form-label">ID</label>
                        <input type="text" id="id-field" name="id" class="form-control" value="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="title-field" class="form-label">Tên tin</label>
                        <input type="text" id="title-field" name="title" class="form-control" value="" required>
                    </div>
                    <div class="mb-3">
                        <label for="img-field" class="form-label">Ảnh</label>
                        <input type="file" id="img-field" name="img" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="content-field" class="form-label">Nội dung</label>
                        <input type="text" id="content-field" name="content" class="form-control" value="" required>
                    </div>
                    <div class="mb-3">
                        <label for="view-field" class="form-label">Lượt xem</label>
                        <input type="text" id="view-field" name="view" class="form-control" value="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="created-at-field" class="form-label">Ngày tạo</label>
                        <input type="text" id="created-at-field" name="created_at" class="form-control" value="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="updated-at-field" class="form-label">Ngày sửa</label>
                        <input type="text" id="updated-at-field" name="updated_at" class="form-control" value="" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="type-field" class="form-label">Loại tin</label>
                        <select id="type-field" name="type_id" class="form-control" required>
                            <!-- Options will be loaded via JavaScript -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="author-field" class="form-label">Tác giả</label>
                        <select id="author-field" name="author_id" class="form-control" required>
                            <!-- Options will be loaded via JavaScript -->
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                    <a href="#" class="btn btn-secondary">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const updatedAtField = document.getElementById('updated-at-field');
    const currentDateTime = new Date().toLocaleString();
    updatedAtField.value = currentDateTime; // Cập nhật ngày giờ hiện tại vào trường "Ngày sửa"

    // Load types and authors from the server
    $.get('/api/types', function(data) {
        const typeField = document.getElementById('type-field');
        data.forEach(function(type) {
            const option = document.createElement('option');
            option.value = type.id;
            option.textContent = type.name;
            typeField.appendChild(option);
        });
    });

    $.get('/api/authors', function(data) {
        const authorField = document.getElementById('author-field');
        data.forEach(function(author) {
            const option = document.createElement('option');
            option.value = author.id;
            option.textContent = author.name;
            authorField.appendChild(option);
        });
    });
});
</script>




@endsection
