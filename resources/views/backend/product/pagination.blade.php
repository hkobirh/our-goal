<form action="" method="post" id="MyForm">
    <table class="table table-bordered">

        <tr>
            <th>
                <input type="checkbox" id="checkAll">
            </th>
            <th>Image</th>
            <th>Name</th>
            <th>Category</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Featured</th>
            <th>B. Price</th>
            <th>S. Price</th>
            <th>SP. Price</th>
            <th>Status</th>
            <th>Create by</th>
            <th style="width: 130px">Action</th>
        </tr>

        @foreach($data as $row)
            <tr>
                <th>
                    <input type="checkbox" class="check-item" name="checkbox[]" value="{{$row->id}}">
                </th>
                <td>
                    <div class="product-img bg-transparent border">
                        <a href="{{route('product',$row->slug)}}"><img src="{{$row->thumbnail}}" style="width: 35px" alt=""></a>
                    </div>
                </td>
                <td><a target="_blank" href="{{route('product',$row->slug)}}">{{substr($row->name,0,12)}}</a></td>
                <td>{{$row->category->name}}</td>
                <td>{{$row->brand->name}}</td>
                <td>{{$row->model}}</td>
                <td>
                    <input type="checkbox" {{$row->featured ? 'checked':''}} class="featured-image" data-url="{{route('staff.product.featured',$row->id)}}" name="checkbox[]" value="{{$row->featured}}">
                </td>
                <td><input type="text" class="form-control price-update" data-id="{{$row->id}}" data-url="{{route('staff.product.update.price',$row->id)}}" data-price-type="buying_price" value="{{$row->buying_price}}" style="width: 70px"></td>
                <td><input type="text" class="form-control price-update" data-id="{{$row->id}}" data-url="{{route('staff.product.update.price',$row->id)}}" data-price-type="selling_price" value="{{$row->selling_price}}" style="width: 70px"></td>
                <td><input type="text" class="form-control price-update" data-id="{{$row->id}}" data-url="{{route('staff.product.update.price',$row->id)}}" data-price-type="special_price" value="{{$row->special_price}}" style="width: 70px"></td>
                <td>
                <span class="badge badge-{{$row->status == 'Active'?'info':'danger'}}">{{$row->status}}
                </span>
                </td>
                <td>{{$row->user->name}}</td>
                <td>
                    <a href="{{route('staff.product.edit',$row->id)}}" class="btn btn-warning btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm remove-item"
                            data-url="{{route('staff.product.destroy',$row->id)}}" data-id="{{$row->id}}">Delete
                    </button>
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="2">
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" disabled data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Action
                    </button>
                    <div class="dropdown-menu">
                        <button type="button" class="dropdown-item" onclick="submitForm('{{route('staff.product.status')}}','active')">Active</button>
                        <button type="button" class="dropdown-item" onclick="submitForm('{{route('staff.product.status')}}','inactive')">Inactive</button>
                        <button type="button" class="dropdown-item" onclick="submitForm('{{route('staff.product.delete')}}')">Delete</button>
                    </div>
                </div>
            </td>
            <td colspan="10">

            </td>
        </tr>
    </table>
</form>
{!! $data->links('vendor.pagination.bootstrap-4',['paginator'=>$data])!!}
