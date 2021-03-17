

<table class="table table-bordered">

    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Category</th>
        <th>Brand</th>
        <th>Model</th>
        <th>B. Price</th>
        <th>S. Price</th>
        <th>SP. Price</th>
        <th>Status</th>
        <th>Create by</th>
        <th style="width: 130px">Action</th>
    </tr>

    @foreach($data as $row)
        <tr class="tr{{$row->id}}">
            <td>
                <div class="product-img bg-transparent border">
                    <img src="{{$row->thumbnail}}" style="width: 50px">
                </div>
            </td>
            <td>{{$row->name}}</td>
            <td>{{$row->category->name}}</td>
            <td>{{$row->brand->name}}</td>
            <td>{{$row->model}}</td>
            <td>{{$row->buying_price}}</td>
            <td>{{$row->selling_price}}</td>
            <td>{{$row->special_price}}</td>
            <td>
                <span class="badge badge-{{$row->status == 'Active'?'info':'danger'}}">{{$row->status}}
                </span> 
            </td>
            <td>{{$row->user->name}}</td>
            <td>
                <a href="{{route('staff.product.edit',$row->id)}}" class="btn btn-warning btn-sm">Edit</a>
                <button class="btn btn-danger btn-sm remove-item" data-url="{{route('staff.product.destroy',$row->id)}}" data-id="{{$row->id}}">Delete</button>
            </td>
        </tr>
    @endforeach
</table>

{!! $data->links('vendor.pagination.bootstrap-4',['paginator'=>$data])!!}
