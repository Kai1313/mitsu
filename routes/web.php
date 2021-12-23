<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$dummy = [
    (object) [
        'slug' => 'new-xpander',
        'name' => 'New Xpander Ultimate CVT',
        'price' => '272580000',
        'path' => 'New-Xpander-Ultimate-CVT'
    ],
    (object) [
        'slug' => 'eclipse',
        'name' => 'Eclipse Ultimate AT 1.5L Turbo',
        'price' => '493750000',
        'path' => 'Eclipse-Ultimate-AT-1.5L-Turbo'
    ],
    (object) [
        'slug' => 'l300-pickup',
        'name' => 'L300 Pickup Standard',
        'price' => '194000000',
        'path' => 'L300-Pickup-Standard'
    ],
    (object) [
        'slug' => 'new-pajero-sport',
        'name' => 'New Pajero Sport Dakar Ultimate 4x4 AT',
        'price' => '698700000',
        'path' => 'New-Pajero-Sport-Dakar-Ultimate-4x4-AT'
    ],
    (object) [
        'slug' => 'new-xpander-cross',
        'name' => 'New Xpander Cross Premium Package CVT',
        'price' => '291410000',
        'path' => 'New-Xpander-Cross-Premium-Package-CVT'
    ],
    (object) [
        'slug' => 'triton-hdx',
        'name' => 'Triton HDX MT Double cab 4WD',
        'price' => '398000000',
        'path' => 'Triton-HDX-MT-Double-cab-4WD'
    ],
    (object) [
        'slug' => 'xpander-cross',
        'name' => 'Xpander Cross Rockford Fosgate Black Edition',
        'price' => '308650000',
        'path' => 'Xpander-Cross-Rockford-Fosgate-Black-Edition'
    ]
];
Route::get('/', function () use($dummy) {
    return view('home', ['data'=>$dummy]);
});
Route::get('cars-lineup', function () use($dummy){
    return view('cars-lineup', ['data'=>$dummy]);
});
Route::get('cars-details/{id}', function ($id) use($dummy){
    foreach ($dummy as $dm) {
        if ($dm->slug == $id) {
            $details = array(
                'slug' => $dm->slug,
                'name' => $dm->name,
                'price' => $dm->price,
                'path' => $dm->path
            );
        }
    }
    return view('cars-details', ['details'=>$details]);
});