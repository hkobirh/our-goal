@if($data->isEmpty())
   <li>No more data</li>
@else
    @php($sl=0)
        @foreach($data as $row)
            <li>{{$row->id}}==>{{$row->name}}</li>
            @php($last_id = $row->id)
            @php($sl++)
        @endforeach

@endif
@if($sl > 14)
<button id="loadMoreBtn" data-id="{{$last_id}}">Load maore</button>
@endif
