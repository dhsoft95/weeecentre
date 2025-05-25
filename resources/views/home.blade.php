@extends('layouts.app')

@section('title', 'Home - ' . config('app.name', 'Laravel SPA'))

@section('content')
    @include('sections.first')
    @include('sections.about')
    @include('sections.projects')
    @include('sections.team')
    @include('sections.services')
    @include('sections.contact')
@endsection
