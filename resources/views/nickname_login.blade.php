@extends('layouts.app')

@section('title', trans('shop::messages.nickname_login.title'))

@section('content')
    <h1>{{ trans('shop::messages.nickname_login.title') }}</h1>

    <form method="POST" action="{{ route('shop.nickname.login') }}" class="mt-3">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" name="nickname" placeholder="{{ trans('shop::messages.fields.nickname') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">{{ trans('shop::messages.nickname_login.button') }}</button>
    </form>
@endsection
