@extends('layouts.front')
@section('content')
    @include('front.partials.header')
    @include('front.partials.hero')
    @include('front.partials.topBar')
    @include('front.sections.about')
    @include('front.sections.menu')
    @include('front.sections.specials')
    @include('front.sections.events')
    @include('front.sections.chefs')
    @include('front.sections.gallery')
    @include('front.sections.book')
    @include('front.sections.contact')
    @include('front.sections.testimonials')
    @include('front.sections.whu')
    @include('front.partials.footer')
@endsection
