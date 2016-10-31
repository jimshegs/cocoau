@extends('layouts.master')
@section('title', $steward->name)

@section('style')
  <link href="/assets/css/blog.css" rel="stylesheet">
@stop

@section('page-header')
  <header class="intro-header"
          style="background-image: url('{{ page_image($steward->page_image) }}')">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <div class="post-heading">
            <img src="{{ page_image($steward->profile_photo) }}" style="width:250px; height:250px; float:left; border-style: solid; border-width: 5px; border-radius:50%; margin-right:25px;">
            <h2 style="color:white">{{ $steward->name }}</h2>
            <h2 class="subheading" style="color:white">{{ $steward->office }}</h2>
          </div>
        </div>
      </div>
    </div>
  </header>
@stop

@section('content')

  {{-- The Steward --}}
  <article>
    <div class="container">
      <div class="well col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <div class="row">
          <div class="col-md-3" style="font-size: 20px; padding-top:10px">
            <label for="department" class="control-label">
              Department:
            </label>
          </div>
          <div class="col-md-9 col-md-offset" style="font-size: 20px">
            <div class="panel panel-default">
              <div class="panel-body">
                  <div class="col-md-6">
                    {!! $steward->department !!}
                  </div>
                <br>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3" style="font-size: 20px; padding-top:10px">
            <label for="level" class="control-label">
              Level:
            </label>
          </div>
          <div class="col-md-9" style="font-size: 20px">
            <div class="panel panel-default">
              <div class="panel-body">
                  <div class="col-md-6">
                    {!! $steward->level !!}
                  </div>
                <br>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3" style="font-size: 20px;">
            <label for="bible_character" class="control-label">
              Favorite Bible Character:
            </label>
          </div>
          <div class="col-md-9" style="font-size: 20px">
            <div class="panel panel-default">
              <div class="panel-body">
                  <div class="col-md-6">
                    {!! $steward->bible_character !!}
                  </div>
                <br>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3" style="font-size: 20px;">
            <label for="bible_passage" class="control-label">
              Favorite Bible Passage:
            </label>
          </div>
          <div class="col-md-9" style="font-size: 20px">
            <div class="panel panel-default">
              <div class="panel-body">
                  <div class="col-md-12">
                    {!! $steward->bible_passage !!}
                  </div>
                <br>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8 col-md-offset-3">
            <ul class="social-links list-inline">
                <li class="facebook"><a href="https://facebook.com/{!! $steward->facebook !!}/"><i class="fa fa-facebook"></i></a></li>
                <li class="twitter"><a href="https://twitter.com/{!! $steward->twitter !!}/"><i class="fa fa-twitter"></i></a></li>
                <li class="instagram"><a href="https://instagram.com/{!! $steward->instagram !!}/"><i class="fa fa-instagram"></i></a></li>
              </ul>
          </div>
        </div>




      </div>
    </div>
  </article>

  {{-- The Pager --}}
  <div class="container">
    <div class="row">
      <ul class="pager">
        @if ($steward->previousSteward())
            <li class="previous">
              <a href="{!! $steward->previousSteward()->url() !!}">
                <i class="fa fa-long-arrow-left fa-lg"></i>
                Previous Steward
              </a>
            </li>
        @endif
        @if ($steward->nextSteward())
            <li class="next">
              <a href="{!! $steward->nextSteward()->url() !!}">
                Next Steward
                <i class="fa fa-long-arrow-right"></i>
              </a>
            </li>
        @endif
      </ul>
    </div>
  </div>
@stop