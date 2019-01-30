@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Create Category
        </div>
        <div class="card-body">
            <form action="{{ route('categories.store') }}" method="post">
                {{ csrf_field() }}
               @include('categories._form')
            </form>
        </div>
    </div>
</div>
@endsection
