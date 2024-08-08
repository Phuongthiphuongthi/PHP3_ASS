@extends('layout.admin.master')
@section('title', 'Thêm loại tin')


@section('content')
    <div class="main-content">

        <div class="container pt-5">
            <div class="card mt-5">
                <div class="card-header">
                    <h5>Thêm Loại Tin</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('addloaitinpost') }}" id="edit-form" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name-field" class="form-label">Tên tin</label>
                            <input type="text" id="name-field" name="name" class="form-control" value=""
                                required>
                        </div>
                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                        <a href="" class="btn btn-secondary">Quay lại</a>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const updatedAtField = document.getElementById('updated-at-field');
                const currentDateTime = new Date().toLocaleString();
                updatedAtField.value = currentDateTime; // Cập nhật ngày giờ hiện tại vào trường "Ngày sửa"
            });
        </script>

    </div>
@endsection
