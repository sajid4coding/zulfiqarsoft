@extends('layouts.frontendmaster')
@section('frontend_content')
<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="{{ asset('frontend_assets') }}/img/team_hero_bg.jpeg">
    <div class="container">
      <div class="cs-page_heading_in">
        <h1 class="cs-page_title cs-font_50 cs-white_color">Our Team</h1>
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
          <li class="breadcrumb-item active">Team</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- End Hero -->
  <!-- End Why Choose -->
  <div class="cs-height_145 cs-height_lg_80"></div>
  <!-- Start Team Section -->
  <section>
    <div class="container">
      <div class="cs-section_heading cs-style1 text-center">
        <h3 class="cs-section_subtitle">Our Team</h3>
        <h2 class="cs-section_title">Awesome team <br>members</h2>
      </div>
      <div class="cs-height_90 cs-height_lg_45"></div>
    </div>
    <div class="container">
      <div class="row">
        @foreach ($teams as $team)
            <div class="col-lg-3 col-sm-6">
              <div class="cs-team cs-style1">
                <div class="cs-member_thumb">
                  <img src="{{ asset('storage/member_images') }}/{{ $team->member_image }}" alt="Member">
                  <div class="cs-member_overlay"></div>
                </div>
                <div class="cs-member_info">
                  <h2 class="cs-member_name"><a href="{{ route('team.detail', $team->id) }}">{{ $team->name }}</a></h2>
                  <div class="cs-member_designation">{{ $team->position }}</div>
                </div>
              </div>
              <div class="cs-height_80 cs-height_lg_30"></div>
            </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- End Team Section -->
  <div class="cs-height_70 cs-height_lg_50"></div>
  <!-- Start CTA -->
    <x-frontend.contact.contact />
  <!-- End CTA -->
@endsection
