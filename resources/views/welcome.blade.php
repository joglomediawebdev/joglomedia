@extends('layouts.app')

@section('content')
    @include('partials.hero')
    @include('partials.packages')
    @include('partials.services')
    @include('partials.team')
    @include('partials.portfolio')
@endsection

{{-- No @push('scripts') here unless you have specific JS ONLY for the homepage that isn't already in main.js or layouts.app --}}