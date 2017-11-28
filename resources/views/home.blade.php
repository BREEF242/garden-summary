@extends('layout.master')

@section('title')
  <title>Sir Nicholas Nuttall Tropical Coral Reef Sculpture Garden, Nassau, Bahamas | Bahamas Reef Environment Education Foundation (BREEF)</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
@stop

@section('sharing')
  <meta property="og:site_name" content="Bahamas Fishing Regulations presented by BREEF &amp; Bahamas Ministry of Tourism">
  <meta name="twitter:image:alt" content="Bahamas Fishing Regulations presented by BREEF &amp; Bahamas Ministry of Tourism">
  <meta property="og:image" content="">
@stop

@section('content')
  <div class="fullpage-site-with-menu">

    @include('sections.front')
    @include('sections.about')
    @include('sections.exhibits')
    @include('sections.press')
    @include('sections.visit')
    @include('sections.contact')
  </div>
@stop
