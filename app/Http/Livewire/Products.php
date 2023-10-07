<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\ProductCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $categories;
    public $searchQuery;
    public $searchCategory;

    public function mount()
    {
        $this->categories = ProductCategory::get(['id','name']);
        $this->searchQuery = '';
        $this->searchCategory = '';
    }

    public function render()
    {
        $products = Product::with('category')
            ->when( $this->searchQuery != '', function ($query){
               $query->where('name','like','%'.$this->searchQuery.'%');
            })
            ->when( $this->searchCategory != '', function ($query){
               $query->where('category_id',$this->searchCategory);
            })
            ->simplePaginate(10);

        return view('livewire.products', [
            'products' => $products
        ]);
    }

    public function deleteProduct($id)
    {
        Product::find($id)->delete();
    }
}
