@extends('layout')
@section('title', 'Contact Us')


@section('content')
    <h1>Contact us</h1>
    @if ( ! session()->has('message'))
    <form action="/contact" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
            <div>{{ $errors->first('name')}}</div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ old('email')}}" class="form-control">
            <div>{{ $errors->first('email')}}</div>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10"
                class="form-control">{{ old('message') }}</textarea>
            <div>{{ $errors->first('message')}}</div>
        </div>

        <button type="submit" class="btn btn-primary">Send Email</button>

        @csrf
    </form>
    @endif
@endsection

