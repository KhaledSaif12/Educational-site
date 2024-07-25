@extends('admin.layout.master')
@section('content')


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">تعديل بيانات المسنخدم  {{ $user->name }} </h3>
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class=" alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <p>
                        {{$error}}
                    </p>
                        
                    @endforeach

                </div>
            @endif
            <form action="{{ route('update_user', $user->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">الاسم</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="email">البريد الألكتروني</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="current_password">كلمة المرور الصحيحة</label>
                    <input type="password" class="form-control" id="current_password" name="current_password" placeholder="كلمة المرور الصحيحة">
                </div>
                <div class="form-group">
                    <label for="new_password">كلمة المرور الجديدة</label>
                    <input type="password" class="form-control" id="new_password" name="new_password" placeholder="كلمة المرور الجديدة">
                </div>
                <div class="form-group">
                    <label for="new_password_confirmation">تجديد كلمة المرور الجديدة</label>
                    <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" placeholder="تجديد كلمة المرور الجديدة">
                </div>
                <button type="submit" class="btn btn-primary">تعديل</button>
            </form>
        </div>
  </div>

@endsection
