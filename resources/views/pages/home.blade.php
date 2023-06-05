@extends('layouts.default')
@section('content')
    <!-- hero start -->
    @include('2-hero/hero')
    <!-- hero end -->

    <!-- about start -->
    @include('3-about/about')
    <!-- about end -->

    <!-- features start -->
    @include('4-features/features')
    <!-- features end -->

    <!-- portfolio start -->
    @include('5-portfolio/portfolio')
    <!-- portfolio end -->

    <!-- pricing start -->
    @include('6-pricing/pricing')
    <!-- pricing end -->

    <!-- contact start -->
    @include('7-contact/contact')
    <!-- contact end -->
@stop
