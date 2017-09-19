<?php

namespace App\Http\Controllers;

use App\Novel;
use App\Category;
use Illuminate\Http\Request;

class NovelController extends Controller
{
    private $novel;
    private $category;

    /**
     * NovelController constructor.
     * @param Novel $novel
     * @param Category $category
     */
    public function __construct(Novel $novel, Category $category)
    {
        $this->novel = $novel;
        $this->category = $category;
    }

    public function index($category = '')
    {
        $category = $this->category->findFirstByName($category);

        if($category) {
            $items = $this->novel->getByCategory($category->name);
        } else {
            $items = $this->novel->paginate();
        }

        return view('novels.index')->with(compact('items', 'category'));
    }

    public function show($id)
    {
        $novel = $this->novel->find($id);
        return view('novels.show')->with(compact('novel'));
    }
}
