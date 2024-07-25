@extends('admin.layout.master')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">تعديل دورة</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('update_category', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">اسم الدورة</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}" required>
            </div>
            <div class="form-group">
                <label for="description">وصف الدورة</label>
                <textarea class="form-control" id="description" name="description" required>{{ old('description', $category->description) }}</textarea>
            </div>
            <div class="form-group">
                <label for="parent">التفرع</label>
                <select class="form-control" id="parent" name="parent">
                    <option value="0" {{ $category->parent == 0 ? 'selected' : '' }}>لا يوجد</option>
                    @foreach ($cats as $cat)
                        <option value="{{ $cat->id }}" {{ $category->parent == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">تحديث</button>
        </form>
    </div>
</div>
@endsection
