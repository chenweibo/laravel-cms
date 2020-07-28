<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Content;
use Faker\Generator as Faker;

$factory->define(Content::class, function (Faker $faker) {
    $extra = [
        [
            'size' => [
            ],
            'type'  => 'OneImgupload',
            'label' => 'thumbnail',
            'range' => 'global',
            'title' => '缩略图',
            'value' => null,
        ],
        [
            'size' => [
            ],
            'type'  => 'switch',
            'label' => 'recommend',
            'range' => 'global',
            'title' => '推荐',
            'value' => false,
        ],
        [
            'size' => [
            ],
            'type'  => 'imgMoreUpload',
            'label' => 'moreImg',
            'range' => 'global',
            'title' => '多图上传',
            'value' => [
            ],
        ],
        [
            'size' => [
            ],
            'type'  => 'fileUpload',
            'label' => 'down',
            'range' => 'global',
            'title' => '文件上传',
            'value' => [
            ],
        ],
        [
            'size' => [
            ],
            'type'  => 'input',
            'label' => 'keywords',
            'range' => 'global',
            'title' => 'SEO关键词',
            'value' => null,
        ],
        [
            'size' => [
            ],
            'type'  => 'input',
            'label' => 'description',
            'range' => 'global',
            'title' => 'SEO描述',
            'value' => null,
        ],
    ];

    return [
        'title'     => $faker->name,
        'sort'      => 99,
        'time'      => now(),
        'menus_id'  => 4,
        'extra'     => $extra,
        'page_views'=> 0,
        'detail'    => '',
        'path' =>'0-3-4',
        'status'    => true,
    ];
});
