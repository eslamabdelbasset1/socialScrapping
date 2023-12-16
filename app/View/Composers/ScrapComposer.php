<?php

namespace App\View\Composers;

use Illuminate\View\View;

class ScrapComposer
{
    /**
     * Create a new profile composer.
     */
    public function __construct(
    ) {}

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $view->with([
            'search' => 'Search',
            'select_app' => ' Select App'
        ]);
    }
}
