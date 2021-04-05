@extends('app')

@section('content')
    <h1 class="text-center mt-5">Welcome to the Skill Challenge</h1>
    <p class="text-center mb-5 w-50 mx-auto">This skill challenge is created as a way to assess skills, design, and interpretation of design into a web site.  Some portion of the desktop mockups will be turned into mobile mockups, but the sections that are not I want you to interpret to fit a mobile page.  This page should be fully responsive.  Do not try to copy the mockup to the pixel dimensions.  Make sure that the site <</p>
    <p class="text-center mb-0">Main File Located: /resources/views/skill-challenge.blade.php</p>
    <p class="text-center mb-5">It holds all other files/partials that you need to complete this.</p>
    <p class="text-center mb-0">Bootstrap CSS is loaded by default in this project.  Use it as you wish.</p>
    <p class="text-center mb-5"><strong>Refrain from using jQuery.</strong></p>
    <p class="text-center mb-0">JS File Located: /resources/js/custom.js</p>
    <p class="text-center mb-0">Main SASS File Located: /resources/sass/_theme.scss</p>
    <p class="text-center mb-0">Variables SASS File Located: /resources/sass/_variables.scss</p>
    <p class="text-center mb-5">Typography SASS File Located: /resources/sass/_typography.scss</p>

    
    @include('blocks.banner')
    @include('blocks.one-column')
    @include('blocks.two-column-icon')
    @include('blocks.two-column')
@endsection
