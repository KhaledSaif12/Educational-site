@extends('admin.layout.master')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card m-b-20">
            <div class="card-header">
                <h3 class="card-title">أنشاء محاور الدورة</h3>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('save_article')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">عنوان الدورة</label>
                                <input type="text" name="arttitle" class="form-control" id="name1"  placeholder="عنوان الدورة">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState" class="col-form-label">التفرع</label>
                            <select id="inputState" name="articlecat" class="form-control">
                                
                                @foreach($cats as $atpare)
                                 <option value="{{$atpare->id}}">{{$atpare->name}}</option>
                                 @endforeach
                            </select>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">وصف</label>
                        <textarea name="atriclecontant" class="form-control"  rows="4" ></textarea>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">صورة</label>
                        <input type="file" name="artimage" class="form-control">
                    </div>
                    
                   
                 
                    <button type="submit" class="btn btn-primary ">أنشاء</button>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection