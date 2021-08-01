@extends('admin.index')

@section('content')
    <div class="container" style="margin-top: 60px; margin-left: 220px;">
        <div class="row">
            <div class="col-md-7">
                <table class="table" style="direction: rtl">
                    <thead class="table-danger">
                    <tr>
                        <th>ردیف</th>
                        <th>عنوان</th>
                        <th>قیمت</th>
                        <th>درباره</th>
                        <th>کلیدواژه</th>
                        <th>تصویر</th>
                        <th>تاریخ</th>
                        <th>تنظیمات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($post as $row=> $post)
                        <tr>
                            <td>{{++$row}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->price}}</td>
                            <td>{{$post->about}}</td>
                            <td>{{$post->keyword}}</td>
                            <td><img src="{{url($post->image)}}" class="img-fluid rounded" style="height: 60px" alt=""></td>
                            <td>{{jdate($post->created_at)}}</td>
                            <td>
                                <a href="" class="btn btn-dark btn-sm rounded">حذف</a>
                                <a href="{{route('admin.dashboard.edit' , $post->id)}}" class="btn btn-success btn-sm rounded">ویرایش</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>
@endsection

