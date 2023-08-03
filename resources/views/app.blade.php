@extends('layouts.master')
@section('content')
<div>
    <div class="container">
        <div class="max-w-3xl mx-auto py-10 px-12 mt-5 shadow-lg border rounded-3xl">
            <h1 class="mb-10 text-4xl font-bold">Resizer app</h1>
            <form action="{{ route('proceed_image') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" value="{{ csrf_token() }}">
                <input type="file" name="picture" class="mb-5" />
                <div>
                    <button type="submit"
                        class="w-full bg-blue-400 shadow-sm text-white rounded-3xl py-4 px-6">Proceed</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop