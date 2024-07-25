@extends('admin.layout.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('أدارة صلاحيات المستخدم ') . $user->name }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('edit_user', $user->id) }}">
                        @csrf

                        <!-- Select the role -->
                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">الصلاحية</label>

                            <div class="col-md-6">
                                <select id="role" class="form-control @error('role') is-invalid @enderror" name="role" required>
                                    <option value="" disabled>{{ __('Select Role') }}</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}" {{ $role->id == old('role', $user->roles->first()->id ?? '') ? 'selected' : '' }}>
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('تحديث الصلاحية') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
