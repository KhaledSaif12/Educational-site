@extends('admin.layout.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><a href="{{route('addcate')}}" >اضافة دورة</a></h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered border-top mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>اسم الدورة </th>
                        <th>وصف الدورة</th>
                        <th>التفرع</th>
                        <th>تاريخ انشاء الدورة</th>
                    </tr>
                </thead>
                <tbody>
                    
                        @foreach ($all_category as $item)
                        <tr>
                            <th>{{$item->id}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->parent}}</td>
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
