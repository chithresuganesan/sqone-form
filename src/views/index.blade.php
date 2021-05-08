@extends('form::layouts.main')

@section('main-content')
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
              Sample Contact Form - {{ config('form.phone') }}
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="{{ route('contact') }}" class="btn btn-primary">Go Create</a>
              <a href="{{ route('show') }}" class="btn btn-primary">Go visit</a>
            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div>
    </div>
@endsection
