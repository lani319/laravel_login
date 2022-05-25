@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Create Page</h1>
            <form action="{{ route('blogs.store') }}" method="POST">
                @csrf
                <input type="text" name="title" placeholder="title"><br>
                <input type="text" name="description" placeholder="description"><br>
            <button type="submit">save</button>
            </form>

        </div>
    </div>
</div>
@endsection
