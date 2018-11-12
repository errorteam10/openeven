@extends('layouts.ticketing')
@section('content')
<style>video{height: 100%; width: 100%;}</style>
  <video id="preview"></video>
@endsection
@section('js')
<script src="{{url('/')}}/js/instascan/instascan.min.js"></script>
  <script>window.scanner = new scanner();</script>
@endsection
