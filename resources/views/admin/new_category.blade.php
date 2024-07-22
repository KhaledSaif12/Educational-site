@extends('admin.layout.master')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card m-b-20">
            <div class="card-header">
                <h3 class="card-title">أنشاء دورة</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{url('/save_cate')}}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">اسم الدورة</label>
                                <input type="text" name="name" class="form-control" id="name1"  placeholder="First Name">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState" class="col-form-label">التفرع</label>
                            <select id="inputState" name="parent" class="form-control">
                                <option value="0" >تصنيف رئيسي</option>
                                @foreach($cats as $catparent)
                                 <option value="{{$catparent->id}}">{{$catparent->name}}</option>
                                 @endforeach
                            </select>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">وصف التصنيف</label>
                        <textarea name="description" class="form-control"  rows="4" placeholder="Address.."></textarea>
                    </div>
                    
                   
                 
                    <button type="submit" class="btn btn-primary ">أنشاء</button>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection