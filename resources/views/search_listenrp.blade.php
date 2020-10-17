@extends('pages.layout.app')
@section('content')
<div class="container mt-4">
    <div class="row">
      <div class="col-md-8 offset-2">
        <div class="card">
          <div class="card-header bg-success text-white ">
          </div>
          <div class="card-body">
            @livewire('search-enrp')
          </div>
        </div>
      </div>
    </div>
</div>
@endsection