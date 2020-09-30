@extends('pages.layout.app')
@section('content')

  <table>
      <thead>
        <tr>
          <td>FILENAME</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($NERPS as $item)
        <tr>
          <td>
            {{ $item->filename }}
          </td>
        </tr>
        @endforeach
        
      </tbody>
  </table>
@endsection