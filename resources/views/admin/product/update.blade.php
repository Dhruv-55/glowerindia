@extends('admin.template.layout')
@section('title','Product Update')
@section('content')
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product/</span> Update</h4>

  <div class="row">
    <div class="col-md-xl ">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          {{-- <h5 class="mb-0">Basic Layout</h5> --}}
          {{-- <small class="text-muted float-end">Default label</small> --}}
        </div>
        <div class="card-body">
          <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label" for="basic-default-fullname"> Name</label>
                  <input type="text" name="name" value="{{ $product->name }}" class="form-control" id="basic-default-fullname"  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Slug</label>
                  <input type="text" class="form-control" id="basic-default-company" name="slug"  value="{{ $product->slug }}" />
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                      <label for="exampleFormControlSelect1" class="form-label">Category</label>
                      <select class="form-select" name="category_id" id="exampleFormControlSelect1" aria-label="Default select example">
                        <option value="">Select Category</option>
                        @foreach (\App\Models\Category::active()->get() as $category)
                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }} >{{ $category->name }}</option>                            
                        @endforeach
                      </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                      <label for="exampleFormControlSelect1" class="form-label">Brand</label>
                      <select class="form-select" name="brand_id" id="exampleFormControlSelect1" aria-label="Default select example">
                        <option value="">Select Brand</option>
                        @foreach (\App\Models\Brand::active()->get() as $brand)
                            <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }} >{{ $brand->name }}</option>                            
                        @endforeach
                      </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                      <label for="exampleFormControlSelect1" class="form-label">Trending</label>
                      <select class="form-select" name="trending" id="exampleFormControlSelect1" aria-label="Default select example">
                        <option value="">Select Trending Status</option>
                        <option value="1"  {{ $product->trending == 1 ? 'selected' : '' }} >Yes</option>
                        <option value="2" {{ $product->trending == 2 ? 'selected' : '' }}>No</option>
                      </select>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Short Description</label>
                        <textarea
                          id="basic-default-message"
                          class="form-control"
                          name="short_description"
                        > {{ $product->short_description }} </textarea>
                      </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label" for="basic-default-message">Description</label>
                  <textarea
                    id="basic-default-message"
                    class="form-control"
                    name="description"
                  > {{ $product->description }} </textarea>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-company">Original Price</label>
                      <input type="number" class="form-control" id="basic-default-company" name="original_price"  value="{{ $product->original_price }}" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                      <label class="form-label" for="basic-default-company">Selling Price</label>
                      <input type="number" class="form-control" id="basic-default-company" name="selling_price"  value="{{ $product->selling_price }}" />
                    </div>
                </div>
                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label" for="basic-default-company">Quantity</label>
                    <input type="number" class="form-control" id="basic-default-company" name="quantity"  value="{{ $product->quantity }}" />
                  </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                      <label for="exampleFormControlSelect1" class="form-label">Status</label>
                      <select class="form-select" name="status" id="exampleFormControlSelect1" aria-label="Default select example">
                        <option value="">Select Trending Status</option>
                        <option value="1"  {{ $product->status == 1 ? 'selected' : '' }} >Active</option>
                        <option value="2" {{ $product->status == 2 ? 'selected' : '' }}>In Active</option>
                      </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </div>
  
  </div>
  </div>
</div>
  @stop