
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <input type="text"  class="form-control" placeholder="Search" wire:model="searchTerm" />

            <table class="table table-bordered" style="margin: 10px 0 10px 0;">
                <tr>
                    <th style='width: 200px;'>{{ $message }}</th>
                    <th style='width: 200px;'>No Kad Pengenalan</th>
                    <th style='width: 200px;'>No Akaun</th>
                    <th style='width: 200px;'>Status</th>
                </tr>
                @foreach ($EMANDATE_ENRP as $item)
                <tr>
                        <td style='text-align:center;vertical-align:middle'>
                            <a href="#">   {{ $item->buyername }} </a>
                        </td>
                        <td style='text-align:center;vertical-align:middle'>
                            <a href="#">   {{ $item->idnum }} </a>
                        </td>
                        <td style='text-align:center;vertical-align:middle'>
                            <a href = "#">   {{ $item->payrefnum }} </a>
                        </td>
                         <td style='text-align:center;vertical-align:middle'>
                            <a href="#">   {{ $item->processflag }} </a>
                        </td>
                        <td>
                            <a href= '{{ url('link/'.$item->payrefnum.'')}}' >
                                <div class="py-8 bg-grey-lighter hover:bg-grey-light text-indigo-darker rounded rounded-t-none text-center uppercase font-bold flex items-center justify-center"><span style="color:blue">View</span>
                                </div>
                            </a>
                        </td>
                </tr>
                @endforeach
            </table>
            {{ $EMANDATE_ENRP->links() }}
        </div>
    </div>
</div>
