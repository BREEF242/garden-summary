@extends('layout.master')

@section('title')
  <title>Sir Nicholas Nuttall Tropical Coral Reef Sculpture Garden, Nassau, Bahamas | Bahamas Reef Environment Education Foundation (BREEF)</title>
  <meta name="keywords" content="BREEF, Coral, Sculpture Garden, Underwater Art, Tropical Underwater Garden, Ocean Atlas, Virtuoso Man, Reef Ball Foundation">
  <meta name="description" content="The Bahamas Reef Environment Education Foundation (BREEF) created the country’s first underwater living art gallery, the Sir Nicholas Nuttall Coral Reef Sculpture Garden, off the south west coast of New Providence in Clifton Heritage National Park. The centrepiece sculpture “Ocean Atlas” is the largest underwater sculpture in the world.">
@stop

@section('sharing')
  <meta property="og:site_name" content="Sir Nicholas Nuttall Tropical Coral Reef Sculpture Garden, Nassau, Bahamas | Bahamas Reef Environment Education Foundation (BREEF)">
  <meta name="twitter:image:alt" content="Sir Nicholas Nuttall Tropical Coral Reef Sculpture Garden, Nassau, Bahamas | Bahamas Reef Environment Education Foundation (BREEF)">
  <meta property="og:image" content="{{cloudinary('c_scale,h_313,w_600/v1511466319/garden/thumbnail')}}.png">
  <meta property="og:description" content="In 2014 The Bahamas Reef Environment Education Foundation (BREEF) created the Bahamas'first underwater living art gallery off the south west coast of New Providence Island in Clifton Heritage National Park.">
@stop

@section('content')
  <div class="fullpage-site-with-menu">

    @include('sections.front')
    @include('sections.why')
    @include('sections.art')
    @include('sections.press')
    @include('sections.photos')
    @include('sections.visit')
    @include('sections.breef')
  </div>
@stop
