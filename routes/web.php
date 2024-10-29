<?php

Route::get('/', function () {

    $menuLinks = [
        [
            'name' => 'Characters',
            'current' => false, 
        ],
        [
            'name' => 'Comics',
            'current' => true,
        ],
        [
            'name' => 'Movies',
            'current' => false,
        ],
        [
            'name' => 'TV',
            'current' => false,
        ],
        [
            'name' => 'Games',
            'current' => false,
        ],  
        [
            'name' => 'Videos',
            'current' => false,
        ],
        [
            'name' => 'News',
            'current' => false,
        ],
    ];
    $menuItems = [
        [
            'name' => 'Digital Comics',
            'img' => 'buy-comics-digital-comics.png',
        ], 
        [
            'name' => 'DC Merchandise',
            'img' => 'buy-comics-merchandise.png',
        ],  
        [
            'name' => 'Subscription',
            'img' => 'buy-comics-subscriptions.png',
        ],  
        [
            'name' => 'Comic Shop Locator',
            'img' => 'buy-comics-shop-locator.png',
        ],   
        [
            'name' => 'DC Power Visa',
            'img' => 'buy-dc-power-visa.svg',
        ], 
    ];
    $menuLinksDcComics = [
        [
            'name' => 'Characters',
            'link' => '#',
        ],
        [
            'name' => 'Comics',
            'link' => '#',
        ],
        [
            'name' => 'Movies',
            'link' => '#',
        ],
        [
            'name' => 'TV',
            'link' => '#',
        ],
        [
            'name' => 'Games',
            'link' => '#',
        ],
        [
            'name' => 'Videos',
            'link' => '#',
        ],
        [
            'name' => 'News',
            'link' => '#',
        ],
    ];
    $menuLinksShop = [
        [
            'name' => 'Shop DC',
            'link' => '#',
        ],
        [
            'name' => 'Shop DC Collectibles',
            'link' => '#',
        ],
    ];
    $menuLinksDc = [
        [
            'name' => 'Terms Of Use',
            'link' => '#',
        ],
    ];
    $menuLinksSites = [
        [
            'name' => 'DC',
            'link' => '#',
        ],
        [
            'name' => 'MAD Magazine',
            'link' => '#',
        ],
        [
            'name' => 'DC Kids',
            'link' => '#',
        ],
        [
            'name' => 'DC Universe',
            'link' => '#',
        ],
        [
            'name' => 'DC Power Visa',
            'link' => '#',
        ],
    ];


$comics = config('comics');

return view('pages.welcome', compact('menuLinks', 'comics', 'menuItems', 'menuLinksDcComics', 'menuLinksShop', 'menuLinksDc', 'menuLinksSites'));
})->name('homePage');

Route::get('/chi-siamo', function () {
    return view('subpages.about');
});
