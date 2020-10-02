@extends('pages.layout.app')
@section('content')


<style>
    @media (min-width: 1280px){
      .container {
      max-width: 100vw !important;
     }
    }
  
  </style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <input type="text"  class="form-control" placeholder="Search" wire:model="searchTerm" />

            <table class="table table-bordered" style="margin: 10px 0 10px 0;">
                <tr>
                    <th>Nama</th>
                    <th>No Kad Pengenalan</th>
                    <th>No Akaun</th>
                    <th>Status</th>
                </tr>
                @foreach ($NERPS_search as $item)
                <tr>
                    <td>
                        {{ $item->buyername }}
                    </td>
                    <td>
                        {{ $item->idnum }}
                    </td>
                    <td>
                        {{ $item->payrefnm }}
                    </td>
                    <td>
                        {{ $item->processflag }}
                    </td>
                </tr>
                @endforeach
            </table>
            {{ $NERPS_search->links() }}
        </div>
    </div>
</div>
@endsection

