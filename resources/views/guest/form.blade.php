@extends('layouts.app')

@section('title', __('shop::messages.guest.title'))

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('shop.guest.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="nameInput">@lang('shop::messages.guest.name')</label>
                    <input type="text" id="nameInput" name="name" class="form-control @error('name') is-invalid @enderror" required>
                    @error('name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">@lang('shop::messages.guest.continue')</button>
            </form>
        </div>
    </div>
@endsection
