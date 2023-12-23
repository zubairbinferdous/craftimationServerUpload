@extends('admin.admin_dashboard')
@section('admin')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl" style="margin: 3% 20%">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <small class="text-muted float-end">Add New product</small>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">product Name</label>
                                <input type="text" name="product_name" class="form-control" id="basic-default-fullname"
                                    placeholder="" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">product stock</label>
                                <input type="text" name="product_qty" class="form-control" id="basic-default-fullname"
                                    placeholder="" />
                            </div>


                            <div class="md-3">
                                <label class="form-label" for="multicol-country">category</label>
                                <select name="category_id" id="multicol-country" class="select2 form-select"
                                    data-allow-clear="true">
                                    @foreach ($category as $cate)
                                        <option value=" {{ $cate->id }}"> {{ $cate->cate_name }} </option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="md-3">
                                <label class="form-label" for="multicol-country"> Sub category</label>
                                <select name="sub_id" id="multicol-country" class="select2 form-select"
                                    data-allow-clear="true">
                                    <option value='{{ 0 }}'> Null </option>
                                    @foreach ($sub as $sub)
                                        <option value=" {{ $sub->id }}"> {{ $sub->Sub_category }} </option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="md-3">
                                <label class="form-label" for="multicol-country"> Area Select</label>
                                <select name="site_id" id="multicol-country" class="select2 form-select"
                                    data-allow-clear="true">
                                    <option value='{{ 0 }}'> Null </option>
                                    <option value='{{ 1 }}'> Best Sellers </option>
                                    <option value='{{ 2 }}'> New Arrival </option>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">product Price</label>
                                <input type="text" name="product_price" class="form-control" id="basic-default-fullname"
                                    placeholder="" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-upload-file">product pic 1</label>
                                <input type="file" name="product_img" class="form-control" id="basic-default-upload-file"
                                    required />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-upload-file">product pic 2</label>
                                <input type="file" name="product_img2" class="form-control"
                                    id="basic-default-upload-file" required />
                            </div>

                            {{-- <div class="mb-3">
                                <label class="form-label" for="basic-default-upload-file">multi pic</label>
                                <input type="file" name="multi_img[]" class="form-control" id="basic-default-upload-file"
                                    required multiple />
                            </div> --}}

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Text area</label>
                                <div class="col-sm-10">
                                    <textarea name="product_message" id="basic-default-message" class="form-control" placeholder=""
                                        aria-describedby="basic-icon-default-message2">
                                    </textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    @endsection
