{{--
  Template Name: Nosotros plantilla
--}}

@extends('layouts.app')

@section('content')
@include('partials.page-header')

  @while(have_posts()) @php the_post() @endphp
{{--@include('partials.content-page')--}}
    @include('partials.nosotros-content')
  @endwhile
@endsection