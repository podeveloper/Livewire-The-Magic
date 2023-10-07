<div>
    <div class="card">
        <div class="card-header">
            <h3>Products</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <input type="text" class="form-control" wire:model="searchQuery" placeholder="Type a product name here">
                </div>
                <div class="col-md-3">
                    <select wire:model="searchCategory" class="form-control">
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <hr>
            <table class="table">
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{$products->links()}}
        </div>
    </div>
</div>
