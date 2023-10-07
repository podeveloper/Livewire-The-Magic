<div>
    <div class="card">
        <div class="card-header">
            <h3>Products</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <input wire:model="searchQuery" type="text" class="form-control" placeholder="Type a product name here">
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
            <div wire:loading class="alert alert-success col-md-12">
                Loading data...
            </div>
            <table class="table">
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                            <button onclick="return confirm('Are you sure?') || event.stopImmediatePropagation()"
                                    wire:click="deleteProduct({{$product->id}})"
                                    class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{$products->links()}}
        </div>
    </div>
</div>
