@extends('admin.index')

@section('content')
    <div class="row m-5">
        <div class="col-md-6 mx-auto">
            @include('alert.error')
            <form action="{{route('admin.dashboard.store')}}" method="post" class="border rounded p-3" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <lable for = "file" class = "form-label">تصویر</lable>
                    <input type="file" name="file" class="form-control @error('keyword') border-danger @enderror"
                    >
                </div>
                <div class="row mb-3 ">
                    <lable for = "title" class = "form-label">عنوان</lable>
                    <input type="text" name="title" class="form-control @error('title') border-danger @enderror"
                           value="{{old('title')}}" placeholder="عنوان" autocomplete="off">
                </div>
                <div class="row mb-3 ">
                    <lable for = "price" class = "form-label">قیمت</lable>
                    <input type="number" name="price" class="form-control @error('price') border-danger @enderror"
                           value="{{old('price')}}" placeholder="قیمت"autocomplete="off">
                </div>
                <div class="row mb-3 ">
                    <lable for = "keyword" class = "form-label">کلید واژه</lable>
                    <input type="text" name="keyword" class="form-control @error('keyword') border-danger @enderror"
                           value="{{old('keyword')}}" placeholder="کلید واژه"autocomplete="off">
                </div>
                <div class="row mb-3 ">
                    <lable for = "about" class = "form-label">درباره محصول</lable>
                    <input type="text" id="about" name="about" class="form-control @error('about') border-danger @enderror"
                           value="{{old('about')}}"placeholder="درباره"autocomplete="off">
                </div>
                <div class="row">
                    <input type="submit" value="افزودن محصول" class="btn btn-success form-control">
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#about'
        });
    </script>
@endsection
