<table border="">

<tr>
        <th>Id</th>
        <th>Name</th>
        <th>Status</th>
    </tr>

@foreach($data as $row)
    <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->name}}</td>
        <td>{{$row->status}}</td>
    </tr>
    @endforeach
    </table>
    {!! $data->links('vendor.pagination.bootstrap-4',['paginator'=>$data])!!}
