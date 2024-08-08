@extends('layout.admin.master')

@section('title', 'Quản trị loại tin')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    @if (session('message'))
                        <p class="alert alert-success">{{ session('message') }}</p>
                    @endif
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Quản trị loại tin</h4>
                            </div><!-- end card header -->


                            <div class="card-body">
                                <div class="listjs-table" id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                <button class="btn btn-success ">
                                                    <a href="{{ route('addloaitin') }}">Thêm mới</a>
                                                </button>
                                                {{-- <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button> --}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive table-card mt-3 mb-1">
                                        <table class="table align-middle table-nowrap" id="customerTable">
                                            <thead class="table-light">
                                                <tr>
                                                    </th>
                                                    <th class="sort">ID</th>
                                                    <th class="sort" data-sort="email">Tên loại tin</th>
                                                    <th class="sort" data-sort="date">Ngày tạo</th>
                                                    <th class="sort" data-sort="status">Ngày sửa</th>
                                                    <th class="sort" data-sort="action" colspan="2">Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">

                                                @foreach ($data as $loaitin)
                                                    <tr>
                                                        <td>{{ $loaitin->id }}</td>
                                                        <td>{{ $loaitin->name }}</td>
                                                        <td>{{ $loaitin->created_at }}</td>
                                                        <td>{{ $loaitin->updated_at }}</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-success edit-item-btn">
                                                                <a href="{{ route('editloaitin', $loaitin->id) }}">Sửa</a>
                                                            </button>
                                                        </td>

                                                        <td>
                                                            <form action="{{ route('deleteloaitin', $loaitin->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit"
                                                                    class="btn btn-sm btn-danger remove-item-btn"
                                                                    onclick="return confirm('Xóa')">Xóa</button>
                                                            </form>
                                                        </td>

                                                    </tr>
                                                @endforeach     


                                            </tbody>
                                        </table>
                                        <div>{{ $data->links() }}</div>
                                        <div class="noresult" style="display: none">
                                            <div class="text-center">
                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                    colors="primary:#121331,secondary:#08a88a"
                                                    style="width:75px;height:75px"></lord-icon>
                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                <p class="text-muted mb-0">We've searched more than 150+ Orders We did not
                                                    find any orders for you search.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->



                <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    id="close-modal"></button>
                            </div>
                            <form class="tablelist-form" autocomplete="off">
                                <div class="modal-body">
                                    <div class="mb-3" id="modal-id" style="display: none;">
                                        <label for="id-field" class="form-label">ID</label>
                                        <input type="text" id="id-field" class="form-control" placeholder="ID"
                                            readonly />
                                    </div>

                                    <div class="mb-3">
                                        <label for="customername-field" class="form-label">Tên loại tin</label>
                                        <input type="text" id="customername-field" class="form-control"
                                            placeholder="Nhập tên" required />
                                        <div class="invalid-feedback">Please enter a customer name.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="customername-field" class="form-label">Ngày tạo</label>
                                        <input type="text" id="customername-field" class="form-control"
                                            placeholder="Ngày tạo" required />
                                        <div class="invalid-feedback">Please enter a customer name.</div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="customername-field" class="form-label">Ngày sửa</label>
                                        <input type="text" id="customername-field" class="form-control"
                                            placeholder="Ngày sửa" required />
                                        <div class="invalid-feedback">Please enter a customer name.</div>
                                    </div>



                                </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="button" class="btn btn-light"
                                            data-bs-dismiss="modal">Đóng</button>
                                        <button type="submit" class="btn btn-success" id="add-btn">Thêm</button>
                                        <!-- <button type="button" class="btn btn-success" id="edit-btn">Sửa</button> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <!-- Xóa -->
                    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        id="btn-close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mt-2 text-center">
                                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                            colors="primary:#f7b84b,secondary:#f06548"
                                            style="width:100px;height:100px"></lord-icon>
                                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                            <h4>Are you Sure ?</h4>
                                            <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                        <button type="button" class="btn w-sm btn-light"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes,
                                            Delete It!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end modal -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

        </div>

    @endsection
