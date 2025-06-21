@extends('layouts.app')

@section('title', trans('shop::messages.nickname_login.title'))

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h1 class="card-title text-center mb-3">{{ trans('shop::messages.nickname_login.title') }}</h1>
                        <p class="text-muted text-center mb-4">{{ trans('shop::messages.nickname_login.description') }}</p>

                        <form method="POST" action="{{ route('shop.nickname.login') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" name="nickname" placeholder="{{ trans('shop::messages.fields.nickname') }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">{{ trans('shop::messages.nickname_login.button') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
