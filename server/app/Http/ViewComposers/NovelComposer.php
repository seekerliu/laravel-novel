<?php
namespace App\Http\ViewComposers;

use App\Novel;
use Illuminate\View\View;

class NovelComposer
{
    private $novel;

    /**
     * NovelComposer constructor.
     * @param Novel $novel
     */
    public function __construct(Novel $novel)
    {
        $this->novel = $novel;
    }

    public function compose(View $view)
    {
        $hotRank = $this->novel->hotRank();
        $view->with('hotRank', $hotRank);
    }
}