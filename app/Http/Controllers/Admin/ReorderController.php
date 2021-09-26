<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;

class ReorderController extends Controller {
    public function categoryChildrenReorder(Category $category) {
        return view('admin.category.children-reorder', compact('category'));
    }
}
