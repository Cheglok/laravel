<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected array $newsCategories = [
        'physic',
        'stocks',
        'space',
        'psychology',
        'medicine'
    ];

    protected array $newsList = [
        ['id' => '1',
            'category' => 'physic',
            'title' => 'Новость о физике 1',
            'text' => 'Текст новости о физике 1'
        ],
        ['id' => '2',
            'category' => 'physic',
            'title' => 'Новость о физике 2',
            'text' => 'Текст новости о физике 2'
        ],
        ['id' => '3',
            'category' => 'physic',
            'title' => 'Новость о физике 3',
            'text' => 'Текст новости о физике 3'
        ],
        ['id' => '4',
            'category' => 'physic',
            'title' => 'Новость о физике 4',
            'text' => 'Текст новости о физике 4'
        ],
        ['id' => '5',
            'category' => 'stocks',
            'title' => 'Новость о биржах 1',
            'text' => 'Текст новости о биржах 1'
        ],
        ['id' => '6',
            'category' => 'stocks',
            'title' => 'Новость о биржах 2',
            'text' => 'Текст новости о биржах 2'
        ],
        ['id' => '7',
            'category' => 'stocks',
            'title' => 'Новость о биржах 3',
            'text' => 'Текст новости о биржах 3'
        ],
        ['id' => '8',
            'category' => 'stocks',
            'title' => 'Новость о биржах 4',
            'text' => 'Текст новости о биржах 4'
        ],
        ['id' => '9',
            'category' => 'psychology',
            'title' => 'Новость о психологии 1',
            'text' => 'Текст новости о психологии 1'
        ],
        ['id' => '10',
            'category' => 'psychology',
            'title' => 'Новость о психологии 2',
            'text' => 'Текст новости о психологии 2'
        ],
        ['id' => '11',
            'category' => 'psychology',
            'title' => 'Новость о психологии 3',
            'text' => 'Текст новости о психологии 3'
        ],
        ['id' => '12',
            'category' => 'psychology',
            'title' => 'Новость о психологии 4',
            'text' => 'Текст новости о психологии 4'
        ],
        ['id' => '13',
            'category' => 'space',
            'title' => 'Новость о космосе 1',
            'text' => 'Текст новости о космосе 1'
        ],
        ['id' => '14',
            'category' => 'space',
            'title' => 'Новость о космосе 2',
            'text' => 'Текст новости о космосе 2'
        ],
        ['id' => '15',
            'category' => 'space',
            'title' => 'Новость о космосе 3',
            'text' => 'Текст новости о космосе 3'
        ],
        ['id' => '16',
            'category' => 'space',
            'title' => 'Новость о космосе 4',
            'text' => 'Текст новости о космосе 4'
        ],
        ['id' => '17',
            'category' => 'medicine',
            'title' => 'Новость о медицине 1',
            'text' => 'Текст новости о медицине 1'
        ],
        ['id' => '18',
            'category' => 'medicine',
            'title' => 'Новость о медицине 2',
            'text' => 'Текст новости о медицине 2'
        ],
        ['id' => '19',
            'category' => 'medicine',
            'title' => 'Новость о медицине 3',
            'text' => 'Текст новости о медицине 3'
        ],
        ['id' => '20',
            'category' => 'medicine',
            'title' => 'Новость о медицине 4',
            'text' => 'Текст новости о медицине 4'
        ],
    ];
}
