@extends('admin.layout.master')
@section('content')

<div class="card">
<div class="card-header">
    <a href="{{ route('list_user') }}" class="btn btn-primary mb-2">Add User</a>
</div>
<div class="card-body">
<div class="table-responsive">
    <table class="table table-bordered border-top mb-0">
        <thead>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                <thead>
                    <tr>
                        <th>الاسم</th>
                        <th>البريد الالكتروني</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_users as $users)
                        <tr>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->email }}</td>
                        
                            <td>
                                <div class="but-group mb-1">
                                    <a href="{{ route('edit_user', $users->id) }}" class="btn btn-outline-warning btn-pill">تعديل</a>
                                    <form action="{{ route('de_user', $users->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-pill">حذف</button>
                                    </form>
                                    
                                    <a href="{{ route('userpermissions', $users->id) }}" class="btn btn-outline-info btn-pill">ادارة الصلاحية</a>
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
