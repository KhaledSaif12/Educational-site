@extends('admin.layout.master')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card m-b-20">
            <div class="card-header">
                <h3 class="card-title">أدراة المستخدمين</h3>
            </div>
            <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    @if($errors->any())
                        <div class=" alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <p>
                                {{$error}}
                            </p>
                                
                            @endforeach

                        </div>
                    @endif
                </div>
            </div>
                <form method="post" action="{{url('/save_user')}}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">اسم المستخدم</label>
                                <input type="text" name="user_name" class="form-control" id="name1"  placeholder="اسم المستخدم">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState" class="col-form-label">الصلاحية</label>
                            <select id="inputState" name="user_role" class="form-control">
                               
                                @foreach($roles as $role)
                                 <option value="{{$role->id}}">{{$role->display_name}}</option>
                                 @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">البريد الالكتروني</label>
                                <input type="email" name="user_email" class="form-control" id="name1"  placeholder="البريد الالكتروني">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">كلمة المرور</label>
                                <input type="password" name="user_pass" class="form-control" id="name1"  placeholder="كلمة المرور">
                            </div>
                        </div>


                    </div>
                   
                    
                   
                 
                    <button type="submit" class="btn btn-primary ">أنشاء</button>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection