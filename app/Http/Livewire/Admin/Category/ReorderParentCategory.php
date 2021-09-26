<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Admin\Category;

class ReorderParentCategory extends Component {
    public function updateParentCategories($lists) {
        foreach ($lists as $list) {
            Category::find($list['value'])->update(['position' => $list['order']]);
        }
        $this->emit('reorderingComplete');
    }

    public function render() {
        $parentCategories = Category::whereNull('category_id')->with('childrenCategories')->orderBy('position')->get();
        return view('livewire.admin.category.reorder-parent-category', compact('parentCategories'));
    }
}
