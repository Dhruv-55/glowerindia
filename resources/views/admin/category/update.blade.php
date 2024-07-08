@extends('admin.template.layout')
@section('title','Category Update')
@section('content')
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Category/</span> Update</h4>

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
                  <input type="text" name="name" value="{{ $category->name }}" class="form-control" id="basic-default-fullname"  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label" for="basic-default-company">Slug</label>
                  <input type="text" class="form-control" id="basic-default-company" name="slug"  value="{{ $category->slug }}" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="formFile" class="form-label">Image</label>
                  <input class="form-control" type="file" name="image" id="formFile" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label class="form-label" for="basic-default-message">Description</label>
                  <textarea
                    id="basic-default-message"
                    class="form-control"
                    name="description"
                  > {{ $category->description }} </textarea>
                </div>
              </div>
            </div>
          <div class="row">
            <div class="col-md-6">
              <img src="{{ env('CATEGORY_IMAGE_URL').$category->image }}" class="img-thumbnail" alt="">
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label for="exampleFormControlSelect1" class="form-label">Status</label>
                <select class="form-select" name="status" id="exampleFormControlSelect1" aria-label="Default select example">
                  <option selected>Select Status</option>
                  <option value="1" {{ $category->status == 1 ? 'selected' : null}}>Active</option>
                  <option value="2" {{ $category->status == 2 ? 'selected' : null}} >In active</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>  
          </div>          
          </form>
        </div>
      </div>
    </div>
  
  </div>
  </div>
</div>
  @stop