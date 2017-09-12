<?php
/**
 * author: seekerliu
 * createTime: 2017/9/11 下午9:40
 * Description:
 */

namespace App\Http\ViewComposers;

use App\Category;
use Illuminate\View\View;

class CategoryComposer
{
    public function compose(View $view)
    {
        $categories = Category::all('name', 'alias');
        $view->with('categories', $categories);
    }
}