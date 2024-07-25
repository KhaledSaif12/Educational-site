@extends('admin.layout.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">تعديل محتويات الدورة</h3>
    </div>
        <div class="card-body">
            <form action="{{ route('update_article', $article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">عنوان المقال</label>
                    <input type="text" class="form-control" id="title" name="arttitle" value="{{ $article->title }}">
                </div>
                <div class="form-group">
                    <label for="content">وصف المقال</label>
                    <textarea class="form-control" id="content" name="articlecontant">{{ $article->content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="category">التصنيف</label>
                    <select class="form-control" id="category" name="articlecat">
                        @foreach($cats as $cat)
                            <option value="{{ $cat->id }}" {{ $cat->id == $article->category_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">الصورة</label>
                    <input type="file" class="form-control-file" id="image" name="artimage">
                    <img src="{{ $article->image }}" width="100px" class="mt-2">
                </div>
                <button type="submit" class="btn btn-primary">تحديث</button>
            </form>
        </div>
    </div>

@endsection
