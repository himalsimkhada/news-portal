<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Admin\Category;

class ReorderChildrenCategory extends Component {
    public $category_id;

    public function mount($category_id) {
        $this->category_id = $category_id;
    }

    public function childPositionReorder($lists) {
        foreach ($lists as $list) {
            Category::find($list['value'])->update(['position' => $list['order']]);
        }
        $this->emit('reorderingComplete');
    }

    public function render() {
        $category = Category::find($this->category_id);
        return view('livewire.admin.category.reorder-children-category', compact('category'));
    }
}
