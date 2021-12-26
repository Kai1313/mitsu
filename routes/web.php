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
        'details-main-path' => 'new-expander-details-main',
        'desc' => 'Terus expand adventure dalam hidup Anda bersama keluarga. The New Xpander hadir untuk membuat momen bersama keluarga lebih menyenangkan dengan fitur-fitur baru yang mengesankan.',
        'details-specification' => [
            (object) [
                'safety' => (object) [
                    ['Rise Body (Reinforce Impact Safety Revolution)', "jpg"],
                    'Rigid Body Structure',
                    'Pedestrian Protector',
                    'Dual SRS Airbag',
                    'ABS (Anti-lock Braking System), EBD (Electronic Brake Distribution) with Brake Assist',
                ],
                'performance' => (object) [
                    'HSA (Hill Start Assist)',
                    'ESS (Emergency Stop Signal System)',
                    'ASC (Active Stability Control)'
                ]
            ]
        ],        
        'path' => 'New-Xpander-Ultimate-CVT'
    ],
    (object) [
        'slug' => 'eclipse',
        'name' => 'Eclipse Ultimate AT 1.5L Turbo',
        'price' => '493750000',
        'path' => 'Eclipse-Ultimate-AT-1.5L-Turbo',
        'desc' => 'abc'
    ],
    (object) [
        'slug' => 'l300-pickup',
        'name' => 'L300 Pickup Standard',
        'price' => '194000000',
        'path' => 'L300-Pickup-Standard',
        'desc' => 'abc'
    ],
    (object) [
        'slug' => 'new-pajero-sport',
        'name' => 'New Pajero Sport Dakar Ultimate 4x4 AT',
        'price' => '698700000',
        'path' => 'New-Pajero-Sport-Dakar-Ultimate-4x4-AT',
        'desc' => 'THE KING OF SUV WILL TAKE YOU TO YOUR DREAM ADVENTURE <br/>Temukan dunia baru melalui eksplorasi tanpa batas dengan New Pajero Sport yang kini hadir lebih tangguh dan nyaman, dengan teknologi canggih untuk menemani Anda melalui segala petualangan',
        'transmission' => 'AT, MT',
        'seater' => '7 Seater',
        'fuel' => 'Diesel',
        'detailsName' => 'New Pajero Sport',
        'detailsSpecification' => (object) [
            'exterior' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Dynamic Shield</h3>', 'exterior-dynamic-shieldpngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Power Tailgate with Kick Sensors</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Power tailgate baru hadir lebih mudah dengan sistem tanpa kunci</div>', 'exterior-power-tailgatejpgjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New LED Headlamp Design</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Hadir dengan desain lampu depan LED yang atraktif dengan DRL yang memberi kesan tegas dan dinamis</div>', 'exterior-head-lamppngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Active Cornering Lamp</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Sentuhan terbaru, lampu otomatis yang menyala sesuai arah kendaraan, pertajam pandangan Anda saat menikung</div>', 'exterior-cornering-lampjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Rear Combination Lamp</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Lampu belakang baru yang didesain unik dengan garis yang lebih dinamis, tapi tetap memperhatikan visibilitas</div>', 'exterior-rear-lightpngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Sunroof</h3>', 'exterior-sunroofpngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New 18" Sporty Alloy Wheel</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Menghadirkan desain baru velg dual-tone untuk tampilan lebih modern dan sporty</div>', 'exterior-velgpngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Shark Fin Antenna</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Desain antena model sirip hiu yang stylish, memperkuat karakter yang mendominasi dan memberikan kesan aerodinamis</div>', 'exterior-pajero-shark-fin-antenna-dakar-ultimate-4x4pngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Sporty Rear Spoiler</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Desain spoiler belakang baru memberikan kesan kokoh dan aerodinamis</div>', 'exterior-spoilerjpgjpg.jpg']
            ],
            'interior' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Tough and Luxury Interior</h3>', 'interior-pajero-dashboard-dakar-ultimate-sunroof-openedpngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New 8 Inch Color LCD Meter</h3>', 'interior-lcdjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Head Unit with Smartphone-Link Display Audio</h3>', 'interior-head-unitjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Auto Dimming Rear View Mirror</h3>', 'interior-acc-auto-dimmerpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Stylish Floor Console with Soft Pad</h3>', 'interior-soft-touchpngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Dual Zone Automatic AC</h3>', 'interior-dual-zonejpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Electric Parking Brake + New Brake Auto Hold</h3>', 'interior-epbjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Comfortable Interior Side</h3>', 'interior-pajero-interior-front-dakar-ultimate-4x4pngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">2nd Row Power Outlet</h3>', 'interior-2nd-row-power-outletpngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Comfortable 2nd Row Seat with Arm Rest &amp; Cup Holder</h3>', 'interior-pajero-interior-side-dakar-ultimate-4x4pngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Roof Monitor*</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">*hanya tersedia di varian Dakar Ultimate 4x2 AT</div>', 'interior-lcd-monitorpngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Spacious Baggage</h3>', 'interior-pajero-spacious-baggage-dakar-ultimate-4x4pngpng.png']
            ],
            'safety' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Rear Cross Traffic Alert (RCTA)</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Indikator akan menyala di Combination Meter Display saat RCTA aktif. Sensor radar di bumper belakang akan menampilkan peringatan di multi-information display disertai dengan indikator berkedip di kedua spion dan bunyi buzzer, jika mendeteksi kendaraan lain saat gigi mundur aktif</div>', 'safety-rctajpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Forward Collision Mitigation System (FCM)</h3><div class="mg-b-60-sm fs-14-sm fs-16-md"><p>Membantu mencegah benturan depan dan meminimalisir dampaknya jika benturan tak dapat dihindari. Fitur ini mendeteksi kendaraan lain melalui radar.</p></div>', 'safety-fcmjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Ultrasonic misacceleration Mitigation System (UMS)</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Sistem akan menyalakan suara serta menampilkan peringatan saat sensor depan atau belakang mendeteksi objek yang menghalangi jalur saat parkir dan mengontrol tenaga mesin untuk mencegah mobil melaju mendadak tanpa disengaja</div>', 'safety-umsjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Blind Spot Warning (BSW) with Lane Change Assist (LCA)</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Radar sensor pada bumper belakang ini mampu mendeteksi kendaraan di blind spot belakang, serta kanan dan kiri mobil. Saat kendaraan lain terdeteksi, indikator peringatan disertai dengan buzzer akan muncul di kaca spion</div>', 'safety-pajero-bsw-v1gifgifgif.gif']
            ],
            'performance' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">MESIN DIESEL BERTENAGA DAN RAMAH LINGKUNGAN DENGAN VARIABLE GEOMETRY TURBO (VGT)</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Mesin Diesel 4N15 2.4L MIVEC dengan Turbocharged dan Intercooled yang ramah lingkungan, mampu menghasilkan tenaga besar 181PS pada 3500 rpm dan torsi 430 Nm pada 2500 rpm</div>', 'performance-mesin-bertenagapngpngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">8-SPEED AUTOMATIC TRANSMISSION</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Nikmati pengalaman berkendara yang lebih responsif, stabil dan perpindahan gear yang lebih halus</div>', 'performance-transmissionpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">PADDLE SHIFTERS</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Memudahkan pengemudi dalam memindahkan gigi secara manual pada saat berkendara tanpa harus melepas kemudi sehingga memberikan sensasi yang lebih sporty dan kontrol lebih saat berkendara</div>', 'performance-pajero-paddle-shift-dakar-ultimate-4x4pngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">5-SPEED MANUAL TRANSMISSION</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Untuk merasakan kontrol penuh, Anda dapat memilih 5-speed manual transmission dengan rasio gigi dan pengoperasian kopling yang sangat efisien</div>', 'performance-pajero-at-tranmission-shifter-exceed-mtpngpng.png'],
            ]
        ],
        'relatedPath' => 'related-new-pajero-sport.jpg',
        'relatedDetails' => [
            ['Dakar Ultimate (4x4) AT', 'Rp698,700,000'],
            ['Dakar Ultimate (4x2) AT', 'Rp639,700,000'],
            ['Dakar (4x2) AT', 'Rp590,700,000'],
            ['Exceed (4x2) AT', 'Rp532,800,000'],
            ['Exceed (4X2) MT', 'Rp517,800,000'],
            ['GLX (4x4) MT', 'Rp542,800,000']
        ]
    ],
    (object) [
        'slug' => 'new-xpander-cross',
        'name' => 'New Xpander Cross Premium Package CVT',
        'price' => '291410000',
        'path' => 'New-Xpander-Cross-Premium-Package-CVT',
        'desc' => 'abc'
    ],
    (object) [
        'slug' => 'triton-hdx',
        'name' => 'Triton HDX MT Double cab 4WD',
        'price' => '398000000',
        'path' => 'Triton-HDX-MT-Double-cab-4WD',
        'desc' => 'abc'
    ],
    (object) [
        'slug' => 'xpander-cross',
        'name' => 'Xpander Cross Rockford Fosgate Black Edition',
        'price' => '308650000',
        'path' => 'Xpander-Cross-Rockford-Fosgate-Black-Edition',
        'desc' => 'abc'
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
            return view('cars-details', ['details'=>$dm]);
        }
    }
    abort(404);
});