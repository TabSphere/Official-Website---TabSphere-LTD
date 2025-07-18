@extends('website.layouts.app')

@section('title', 'TabSphere - Home')
@section('description', '')
@section('keywords', '')

@section('content')
    @include('website.sections.hero')
    @include('website.sections.about')
{{--    @include('website.sections.features')--}}
{{--    @include('website.sections.features-tabs')--}}
    @include('website.sections.services')
    @include('website.sections.portfolio')
{{--    @include('website.sections.call-to-action')--}}
    @include('website.sections.testimonials')
{{--    @include('website.sections.stats')--}}
    @include('website.sections.pricing')
{{--    @include('website.sections.faq')--}}
{{--    @include('website.sections.team')--}}
    @include('website.sections.contact')
@endsection
