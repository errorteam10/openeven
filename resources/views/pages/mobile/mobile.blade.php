@extends('layouts.ticketing')
@section('content')
  <video id="preview"></video>
@endsection
@section('js')
<script src="{{url('/')}}/js/instascan/instascan.min.js"></script>
  <script>window.scanner = new scanner();</script>
@endsection
