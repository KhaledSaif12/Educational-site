@extends('admin.layout.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><a href="{{route('addcate')}}" >أنشاء محاور الدورة</a></h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered border-top mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>عنوان الدورة</th>
                        <th>وصف الدورة</th>
                        <th>التفرع</th>
                        <th>الصورة</th>
                        <th>الكاتب</th>
                        <th>عدد المشاهدات</th>
                        <th>تاريخ انشاء الدورة</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    
                        @foreach ($all_article as $item)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <td><a href="{{route('show_article',$item->id)}}" >{{$item->title}}</a></td>
                            <td>{{$item->content}}</td>
                            <td>{{$item->writerc->name}}</td>
                            <td><img class="rounded" width="100px" src="{{$item->image}}" ></td>
                            <td>{{$item->writeru->name}}</td>
                            <td>{{$item->views}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>

                                <div class="but-group mb-1">
                                    <button class="btn btn-outline-success btn-pill" type="button">تعديل </button>
                                    <button class="btn btn-outline-danger btn-pill" type="button"> حذف</button>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
