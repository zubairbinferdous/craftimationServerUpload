@extends('admin.admin_dashboard')
@section('admin')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl" style="margin: 3% 20%">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <small class="text-muted float-end">Edit brand all</small>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('brand.update') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $brand->id }}">
                            <input type="hidden" name="old_img" value="{{ $brand->brand_images }}">

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Brand Name</label>
                                <input type="text" name="brand_name" class="form-control" id="basic-default-fullname"
                                    required value="{{ $brand->brand_name }}" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-upload-file">Brand pic</label>
                                <input type="file" name="brand_img" class="form-control"
                                    id="basic-default-upload-file" />
                            </div>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="toast" aria-label="Close">Update
                                Brand</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    @endsection
