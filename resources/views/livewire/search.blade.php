
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <input type="text"  class="form-control" placeholder="Search" wire:model="searchTerm" />

            <table class="table table-bordered" style="margin: 10px 0 10px 0;">
                <tr>
                    <th>{{ $message }}</th>
                    <th>No Kad Pengenalan</th>
                    <th>No Akaun</th>
                    <th>Status</th>
                </tr>
                @foreach ($EMANDATE_ENRP as $item)
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
            {{ $EMANDATE_ENRP->links() }}
        </div>
    </div>
</div>

