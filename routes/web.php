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
        'name' => 'New Xpander',
        'price' => '254930000',        
        'path' => 'New-Xpander-Ultimate-CVT',
        'desc' => 'BE THE LIFE XPANDER<br/>Terus expand adventure dalam hidup Anda bersama keluarga. The New Xpander hadir untuk membuat momen bersama keluarga lebih menyenangkan dengan fitur-fitur baru yang mengesankan.',
        'transmission' => 'AT CVT, MT',
        'seater' => '7 Seater',
        'fuel' => 'Petrol',
        'detailsName' => 'New Xpander',
        'detailsSpecification' => (object) [
            'exterior' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Front Bumper Grille Design</h3>', 'exterior-new-front-bumper-grille-designjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New T-Shape Head Light</h3>', 'exterior-new-t-shape-head-lightjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New 17" Two Tone Alloy Wheel</h3>', 'exterior-new-17-two-tone-alloy-wheeljpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Rear Design</h3>', 'exterior-new-rear-designjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New T-Shape Tail Light</h3>', 'exterior-new-t-shape-tail-lightjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Spacious Luggage</h3>', 'exterior-spacious-luggagejpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Rear Window Defogger</h3>', 'exterior-rear-window-defoggerjpg.jpg'],
            ],
            'interior' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Horizontal Axis Design Dashboard with Soft Pad Material</h3>', 'interior-new-horizontal-axis-design-dashboard-with-soft-pad-materialjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Horizontal Axis Design Dashboard (Sport)</h3>', 'interior-new-horizontal-axis-design-dashboard-sportjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Meter Cluster Design With Opening Animation</h3>', 'interior-meter-cluster-with-new-design-and-opening-animationjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Door Trim with Soft Touch and Real Stitches</h3>', 'interior-new-door-trim-with-soft-touch-and-real-stitchesjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New 8" Audio Head Unit with Smartphone Connectivity</h3>', 'interior-new-8-inch-touchscreen-audio-with-smartphone-connectivityjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Digital AC</h3>', 'interior-new-digital-acjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Front Console Tray with Card Holder, USB Port and Power Outlet</h3>', 'interior-large-open-tray-with-card-holder-usb-port-and-power-outletjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New CVT Transmission</h3>', 'interior-new-cvt-transmissionjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Electric Parking Brake (EPB) with Brake Auto Hold (BAH)</h3>', 'interior-new-electric-parking-brake-epb-with-brake-auto-hold-bahjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Floor Console with Arm Rest</h3>', 'interior-new-floor-console-with-arm-restjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Rear Usb Charging Port On Floor Console</h3>', 'interior-new-2nd-row-dual-usb-portsjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Armrest with Cup Holder on 2nd Row</h3>', 'interior-rear-arm-rest-with-new-cup-holderjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">3rd Row Power Outlet</h3>', 'interior-3rd-row-power-outletjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Cruise Control</h3>', 'interior-cruise-controljpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Rear Camera</h3>', 'interior-rear-camerajpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">KOS + Start Stop Engine Button</h3>', 'interior-kosstartstop-engine-buttonjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Tilt &amp; Telescopic Steering</h3>', 'interior-tilt-telescopic-steeringjpg.jpg']
            ],
            'safety' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Rise Body (Reinforce Impact Safety Evolution)</h3>', 'safety-rise-body-reinforce-impact-safety-evolutionjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Rigid Body Structure</h3>', 'safety-rigid-body-structurejpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Pedestrian Protector</h3>', 'safety-pedestrian-protectorjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Dual SRS Airbags</h3>', 'safety-dual-srs-airbagsjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">ABS (Anti-lock Braking System), EBD (Electronic Brake Distribution) with Brake Assist</h3>', 'safety-abs-anti-lock-braking-system-ebd-electronic-brake-distribution-with-brake-assistjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">HSA (Hill Start Assist)</h3>', 'safety-hill-start-assist-hsajpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">ESS (Emergency Stop Signal System)</h3>', 'safety-ess-emergency-stop-signal-systemjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">ASC (Active Stability Control)</h3>', 'safety-active-stability-control-ascjpg.jpg']
            ],
            'performance' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">1.5 MIVEC DOHC 16 Valve</h3>', 'performance-15-l-mivec-dohc-16-valvejpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New CVT Gearbox</h3>', 'performance-new-cvt-gearboxjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Special Tuned Suspension</h3>', 'performance-special-tuned-suspensionjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Ground Clearance 220mm and New Overall Dimension</h3>', 'performance-ground-clearance-220mm-and-new-overall-dimensionjpg.jpg'],
            ]
        ],
        'relatedPath' => 'related-new-xpander.jpg',
        'relatedDetails' => [
            ['Ultimate CVT', 'Rp698,700,000'],
            ['Sport CVT', 'Rp639,700,000'],
            ['Sport MT', 'Rp590,700,000'],
            ['Exceed CVT', 'Rp532,800,000'],
            ['Exceed MT', 'Rp517,800,000'],
            ['GLS CVT', 'Rp542,800,000'],
            ['GLS MT', 'Rp']
        ]
    ],
    (object) [
        'slug' => 'eclipse',
        'name' => 'Eclipse Cross',
        'price' => '495400000',
        'path' => 'Eclipse-Ultimate-AT-1.5L-Turbo',
        'desc' => 'BUILT TO IMPRESS<br/>Hadir pertama kali di Indonesia dengan desain dan fitur yang meningkatkan rasa percaya diri, untuk mereka yang dinamis dan progresif. Dengan tiga keunggulan utama: stimulating design, confident inspiring driving, dan human connectivity membuat Eclipse Cross menjadi pilihan tepat bagi Anda pencinta SUV',
        'transmission' => 'AT CVT',
        'seater' => '5 Seater',
        'fuel' => 'Petrol',
        'detailsName' => 'Eclipse Cross',
        'detailsSpecification' => (object) [
            'exterior' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Dynamic Shield</h3>', 'exterior-dynamic-shieldjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Projector LED Headlamp</h3>', 'exterior-ledjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Shark Fin Antenna</h3>', 'exterior-shark-finjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Outdoor Door Handles</h3>', 'exterior-outdor-deer-handlessjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Power Door Mirrors</h3>', 'exterior-power-deer-mirrorsjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Rear Luggage Lamp</h3>', 'exterior-rear-luggage-lamp-2jpg.jpg']
            ],
            'interior' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Rear Seat Adjustment</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Terdapat 9 pengaturan kemiringan pada jok belakang dan jarak geser hingga 200mm untuk ruang kaki yang lebih lega. Bagasi yang luas dapat diperbesar dengan melipat kursi belakang untuk memberi tambahan ruang.</div>', 'interior-rear-seat-adjustmentsjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Keyless Operation System (KOS)</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Dengan hanya membawa kunci, Anda cukup menekan tombol untuk mengunci atau membuka seluruh pintu dan menekan tombol di kokpit untuk menyalakan mesin.</div>', 'interior-keylessjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Thin Display Audio</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Audio dengan layar sentuh dapat mengontrol sistem audio dan menampilkan gambar dari kamera belakang.</div>', 'interior-audio-displayjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Color LCD Multi-Information Display</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">LCD 4.2-inch di tengah panel meter memudahkan Anda untuk memantau informasi penting seputar perjalanan dan status kendaraan.</div>', 'interior-multi-lcdjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">USB Port</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Soket USB terletak di bawah tuas akselerasi hingga mudah dijangkau dari kursi penumpang maupun pengemudi.</div>', 'interior-usbjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Luxury Black Interior</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Rasakan detak jantung Anda berpacu dengan sensasi berkendara yang belum pernah Anda rasakan sebelumnya. Dalam ruang kemudi ini, setiap detail meningkatkan fokus dan kontrol Anda dalam berkendara, transisi kecepatan pun terasa mulus dan responsif.</div>', 'interior-interiorjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Power Panoramic Sunroof</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Twin sunroof yang stylish, dapat dioperasikan secara terpisah. Bagian depan dapat dibuka secara otomatis dan mampu menaikkan mood bagi semua yang berkendara di dalamnya</div>', 'interior-sunroofjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Touchpad Controller</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Memudahkan penggunaan multimedia tanpa harus menjangkau display.</div>', 'interior-trackpadjpg.jpg'], 
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Head Up display (HUD)</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Fitur ini memudahkan Anda memantau informasi berkendara melalui display yang berada dalam jangkauan mata. Layarnya terangkat secara otomatis saat mobil dinyalakan</div>', 'interior-hudjpg.jpg']
            ],
            'safety' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Active Yaw Control (AYC)</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Fungsi kontrol pengereman AYC meningkatkan performa saat bermanuver dengan mengoptimalkan tenaga pada rem depan. Anda dapat melihat performa AYC pada indikator yang terpampang di meter display.</div>', 'safety-aycjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Active Stability &amp; Traction Control (ASTC)</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Saat roda kehilangan kendali di jalanan licin, ASTC akan menyala otomatis, mengatur kecepatan mesin dan mengaktifkan rem pada roda tertentu, untuk menghindari selip.</div>', 'safety-astcjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Forward Collision Mitigation System (FCM)</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Membantu pencegahan benturan depan, atau meminimalkan dampaknya jika benturan tak dapat dihindari. Fitur ini mendeteksi kendaraan lain dan pejalan kaki melalui kamera dan radar laser.</div>', 'safety-fcm-2jpg.jpg'], 
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">7 SRS Airbags &amp; Advanced Safety Features</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Front airbag, side airbag, curtain airbag dan knee airbag di bagian pengemudi akan melindungi Anda dan penumpang jika terjadi benturan.</div>', 'safety-safetyjpg.jpg']
            ],
            'performance' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">INVECS-III CVT with 8-Speed Sport Mode</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Sistem CVT mutakhir di Eclipse Cross menghasilkan efisiensi bahan bakar dan akselerasi yang bertenaga. Kontrol pun berada sepenuhnya di tangan Anda dengan 8-Speed Sport Mode yang memberikan sensasi sporty saat perpindahan gigi.</div>', 'performance-8-speedjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Paddle Shift</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Memudahkan pemindahan gigi secara manual, tanpa harus melepas setir kemudi.</div>', 'performance-paddle-shiftjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Auto Headlights</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Lampu depan akan menyala otomatis apabila keadaan di sekeliling mobil gelap, sehingga keamanan Anda tetap terjaga di malam hari atau saat melewati terowongan.</div>', 'performance-auto-headlightjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Rain Sensor</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Sensor hujan akan otomatis mengaktifkan wiper saat air terdeteksi di kaca depan.</div>', 'performance-rain-sensorjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Adaptive Cruise Control (ACC)</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Anda dapat dengan mudah mengaktifkan fitur Adaptive Cruise Control dengan menekan tombol di sisi kanan setir.</div>', 'performance-cruise-controljpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Electric Parking Brake with Brake Auto Hold</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Tuas rem parkir yang mudah dioperasikan cukup dengan menarik untuk mengerem dan menekan untuk melepaskannya. Jika Brake Auto Hold aktif, mobil akan tetap diam walaupun pedal rem dilepaskan.</div>', 'performance-electronic-parking-brakejpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Heated Seat</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Jok pengemudi dan penumpang depan memiliki fungsi pemanas yang dapat diaktifkan dari tombol akses cepat.</div>', 'performance-heated-seatjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">1.5L DIRECT-INJECTION TURBOCHARGED GASOLINE ENGINE</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Kapasitas mesin diminimalkan untuk menambah efisiensi. Turbocharged membuat torsi lebih bertenaga pada RPM rendah hingga menengah. Teknologi mesin terbaru memungkinkan akselerasi responsif yang didukung direct fuel injection dengan satu cylinder head exhaust manifold-integrated, sodium-filled exhaust valve, MIVEC (sistem Mitsubishi Innovative Valve timing Electronic Control), dan berbagai kecanggihan lainnya.</div>', 'performance-15l-turbojpg.jpg']
            ]
        ],
        'relatedPath' => 'related-eclipse.jpg',
        'relatedDetails' => [
            ['Ultimate A/T 1.5L Turbo', 'Rp283,800,000'],
        ]
    ],
    (object) [
        'slug' => 'l300',
        'name' => 'L300 Pickup',
        'price' => '210000000',
        'path' => 'L300-Pickup-Standard',
        'desc' => 'TANGGUH UNTUK SEGALA KEBUTUHAN USAHA<br/>Lebih efisien, karena memiliki ruang kargo luas yang didukung oleh mesin bertenaga sehingga Anda dapat mengangkut muatan secara maksimal dan cepat sampai tujuan.',
        'transmission' => 'MT',
        'seater' => 'Pickup',
        'fuel' => 'Diesel',
        'detailsName' => 'L300 Pickup',
        'detailsSpecification' => (object) [
            'interior' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Dashboard Luas</h3>', 'interior-dashboardjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Laci</h3>', 'interior-lacijpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Spidometer</h3>', 'interior-spidometerjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">CD/MP3 Player</h3>', 'interior-car-audiojpg.jpg'],
            ],
            'performance' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Mesin Diesel 4D56</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Mesin Diesel legendaris Cyclone 2.500cc sudah teruji ketangguhannya!</div>', 'performance-mesin-4d56jpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Power Steering</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Lebih ringan dan nyaman</div>', 'performance-power-steeringjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Kargo Luas</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Lebih efisien dengan kargo luas yang didukung oleh mesin bertenaga</div>', 'performance-bak-luasjpg.jpg'],
            ]
        ],
        'relatedPath' => 'related-l300.jpg',
        'relatedDetails' => [
            ['Pickup Standard', 'Rp283,800,000'],
            ['Pickup Flat Bed', 'Rp283,800,000'],
            ['Cab Chassis', 'Rp283,800,000'],
        ]
    ],
    (object) [
        'slug' => 'new-pajero-sport',
        'name' => 'New Pajero Sport',
        'price' => '551500000',
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
        'name' => 'New Xpander Cross',
        'price' => '284100000',
        'path' => 'New-Xpander-Cross-Premium-Package-CVT',
        'desc' => 'XPAND YOUR ADVENTURE<br/>Xpander Cross adalah sebuah crossover yang memadukan kenyamanan sebuah MPV dengan ketangguhan SUV. Dengan tampilan yang lebih sporty dan tangguh, Xpander Cross siap untuk memberikan petualangan baru untuk mengejar ambisi',
        'transmission' => 'AT CVT, MT',
        'seater' => '7 Seater',
        'fuel' => 'Petrol',
        'detailsName' => 'New Xpander Cross',
        'detailsSpecification' => (object) [
            'exterior' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Black Metallic Grille</h3>', 'exterior-new-front-grilljpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">17" Inch Alloy Wheel</h3>', 'exterior-17-inch-alloy-wheeljpgjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Roof Rail</h3>', 'exterior-oof-railjpgjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Wheel Arch Molding</h3>', 'exterior-wheel-arch-moldingjpgjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Tailgate Garnish</h3>', 'exterior-tailgate-garnishjpgjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Rear Bumper</h3>', 'exterior-rear-bumperjpgjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Shark Fin Antenna</h3>', 'exterior-shark-fin-antennajpgjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Side Body Garnish</h3>', 'exterior-side-body-garnishjpgjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">LED Head Lamp &amp; Fog Lamp</h3>', 'exterior-led-head-lamp-led-fog-lampjpgjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Rear Window Defogger</h3>', 'exterior-rear-window-defoggerjpgjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Auto-Folding Door Mirror</h3>', 'exterior-auto-folding-door-mirrorjpgjpg.jpg']
            ],
            'interior' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Horizontal Axis Design Dashboard with Soft Pad Material</h3>', 'interior-modern-interiorjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Steering Wheel</h3>', 'interior-new-steering-wheeljpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Dual Tone Synthetic Leather Seat with Heat Guard</h3>', 'interior-new-dual-tone-syntethic-leather-seat-with-heat-guard-functionjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Electric Parking Brake (EPB) with Brake Auto Hold (BAH)</h3>', 'interior-new-electric-parking-brake-epb-with-brake-auto-hold-bahjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New 9" Audio Head Unit with Smartphone Connectivity</h3>', 'interior-new-9-audio-headunit-with-smartphone-connectivityjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Luggage Under Tray</h3>', 'interior-luggage-under-trayjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Armrest with Cup Holder on 2nd Row</h3>', 'interior-2nd-row-arm-rest-with-cup-holderjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">KOS + Start Stop Engine Button</h3>', 'interior-stop-button-kosjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Softpad Material</h3>', 'interior-softpad-materialjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Floor Console with Armrest</h3>', 'interior-closed-storage-box-cvtjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Rear USB Charging Port on Floor Console</h3>', 'interior-new-2nd-row-dual-usb-portsjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Instrument panel side pocket</h3>', 'interior-instrument-panel-side-pocketjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Tilt and Telescopic Steering</h3>', 'interior-tilt-and-telescopic-steeringjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">1st Row Power Outlet</h3>', 'interior-1st-row-power-outletjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Multifunction Seat Back Pocket</h3>', 'interior-multifunction-seat-back-pocketjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Console Tray with Card Holder</h3>', 'interior-console-tray-with-card-holderjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">3rd Row Power Outlet</h3>', 'interior-3rd-row-power-outletjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Seat Under Tray</h3>', 'interior-seat-under-trayjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Digital AC</h3>', 'interior-new-digital-acjpg.jpg']
            ],
            'safety' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">ABS (Anti-lock Braking System), EBD (Electronic Brake Distribution) with Brake Assist</h3>', 'safety-abs-anti-lock-braking-system-ebd-electronic-brake-distribution-with-brake-assistjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">ESS (Emergency Stop Signal System)</h3>', 'safety-ess-emergency-stop-signal-systemjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">HSA (Hill Start Assist)</h3>', 'safety-hill-start-assist-hsajpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">ASC (Activy Stability Control)</h3>', 'safety-active-stability-control-ascjpg.jpg'], 
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Dual SRS Airbag</h3>', 'safety-dual-srs-airbagsjpg.jpg'], 
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Rise Body (Reinforce Impact Safety Evolution)</h3>', 'safety-rise-body-reinforce-impact-safety-evolutionjpg.jpg']
            ],
            'performance' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Good Eyepoint and Visibility</h3>', 'performance-good-eyepoint-and-visibilityjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Soundproof Cabin</h3>', 'performance-soundproof-cabinjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Cruise Control</h3>', 'performance-cruise-controljpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">1.5 L MIVEC DOHC 16 Valve</h3>', 'performance-15-l-mivec-dohc-16-valvejpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New CVT Transmission</h3>', 'performance-new-cvt-transmissionjpg.jpg'], 
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">5 Speed Manual Transmission</h3>', 'performance-5-speed-manual-transmisionjpg.jpg'], 
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Special Tuned Suspension</h3>', 'performance-special-tuned-suspensionjpg.jpg']
            ]
        ],
        'relatedPath' => 'related-new-xpander-cross.jpg',
        'relatedDetails' => [
            ['Premium Package CVT', 'Rp698,700,000'],
            ['CVT', 'Rp639,700,000'],
            ['MT', 'Rp590,700,000'],
        ]
    ],
    (object) [
        'slug' => 'triton',
        'name' => 'Triton HDX',
        'price' => '278700000',
        'path' => 'Triton-HDX-MT-Double-cab-4WD',
        'desc' => 'ENGINEERED BEYOND TOUGH<br/>New Triton merupakan hasil dari uji coba yang menyeluruh untuk menghasilkan ketangguhan dan kehandalan yang terbaik. Karena tangguh saja tidak cukup, kini New Triton hadir dengan design Dynamic Shield yang mempertegas kesan tangguh untuk menghadapi medan petualangan.',
        'transmission' => 'AT, MT',
        'seater' => 'Double Cabin',
        'fuel' => 'Diesel',
        'detailsName' => 'Triton HDX',
        'detailsSpecification' => (object) [
            'exterior' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Dynamic Shield Front Face design</h3>', 'exterior-fascia-depanjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Sturdy Rear Bumper</h3>', 'exterior-rear-bumperjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Chrome Outer Door Handles</h3>', 'exterior-handle-pintujpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Chrome Power Door Mirrors</h3>', 'exterior-spionjpg.jpg'], 
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Chrome Rear Gate Handle</h3>', 'exterior-chrome-gatejpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">LED Rear Combination Lamps</h3>', 'exterior-lampu-belakangjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Side Steps</h3>', 'exterior-sidestepjpg.jpg'], 
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Cargo with Bed Liner</h3>', 'exterior-bedlinerjpg.jpg'], 
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Sharp Look LED Headlamp with DRL</h3>', 'exterior-led-headlampjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">18" Alloy Wheels (Ultimate)</h3>', 'exterior-r18jpg.jpg'], 
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">17" Alloy Wheels (EXceed)</h3>', 'exterior-r17jpg.jpg']
            ],
            'interior' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">New Leather Interior</h3>', 'interior-new-interiorjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Multi Information LCD Display and Speedometer High-Contrast</h3>', 'interior-speedometerjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Premium Wide 2DIN Entertainment System/USB &amp; MP3 Player</h3>', 'interior-audiojpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Cruise Control</h3>', 'interior-cruise-controljpg.jpg'],
            ],
            'performance' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Mesin Diesel 4D56</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Mesin Diesel legendaris Cyclone 2.500cc sudah teruji ketangguhannya!</div>', 'performance-mesin-4d56jpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Power Steering</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Lebih ringan dan nyaman</div>', 'performance-power-steeringjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Kargo Luas</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Lebih efisien dengan kargo luas yang didukung oleh mesin bertenaga</div>', 'performance-bak-luasjpg.jpg'],
            ]
        ],
        'relatedPath' => 'related-l300.jpg',
        'relatedDetails' => [
            ['Pickup Standard', 'Rp283,800,000'],
            ['Pickup Flat Bed', 'Rp283,800,000'],
            ['Cab Chassis', 'Rp283,800,000'],
        ]
    ],
    (object) [
        'slug' => 'xpander-cross-rf',
        'name' => 'Xpander Cross RF',
        'price' => '308650000',
        'path' => 'Xpander-Cross-Rockford-Fosgate-Black-Edition',
        'desc' => 'XPAND YOUR MUSIC ADVENTURE<br/>The new adventure will be more exciting with perfect combination of Rockford Fosgate Audio system, all black interior color and bold-look interior',
        'transmission' => 'AT CVT, MT',
        'seater' => '7 Seater',
        'fuel' => 'Petrol',
        'detailsName' => 'Xpander Cross Rockford Fosgate Black Edition',
        'detailsSpecification' => (object) [
            'exterior' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Black Grille</h3>', 'exterior-xpandercross-rf-grillepngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Black Alloy Wheel</h3>', 'exterior-xpandercross-rf-rimspngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Black Door Mirror</h3>', 'exterior-xpandercross-rf-mirrorpngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Black Roof Rail</h3>', 'exterior-xpandercross-rf-roofrackpngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Rear Tailgate Garnish</h3>', 'exterior-xpandercross-rf-reartailgategarnishpngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Emblem Rockford Fosgate Black Edition</h3>', 'exterior-xpandercross-rf-badgepngpng.png'],
            ],
            'interior' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Rockford Fosgate Audio System</h3>', 'interior-rf-audiojpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">All Black Leather Seats</h3>', 'interior-xpandercross-rf-leatherseatpngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Cruise Control</h3>', 'interior-cruise-controljpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Start/Stop Button &amp; KOS (Kunci Remote)</h3>', 'interior-start-stop-button-kos-kunci-remotejpg.jpg'],
            ],
            'performance' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">1.5 L MIVEC DOHC 16 Valve</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Nikmati pengalaman berkendara terbaik di mana pun medannya, berkat performa tangguh hasil kombinasi mesin MIVEC 1.5 L dan suspensi canggih dengan katup peredam guncangan.</div>', 'performance-15-l-mivec-dohc-16-valvejpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">SUSPENSI LEBIH STABIL DAN NYAMAN DI KELASNYA</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Mitsubishi Xpander dilengkapi shock absorber valve baik di depan maupun belakang, dikembangkan khusus dengan quick response sehingga membuat kendaraan lebih stabil.</div>', 'performance-suspensi-lebih-stabil-dan-nyaman-di-kelasnyajpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">MEMILIKI GROUND CLEARANCE TERTINGGI</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Mitsubishi Xpander Cross memiliki ground clearance tertinggi di kelasnya, sehingga lebih nyaman dikendarai.</div>', 'performance-high-ground-clearance-rfjpegjpeg.jpeg'],
            ]
        ],
        'relatedPath' => 'related-xpander-cross-rf.jpg',
        'relatedDetails' => [
            ['Xpander Cross Rockford Fosgate Black Edition', 'Rp308,650,000'],
        ]
    ],
    (object) [
        'slug' => 'xpander-rf',
        'name' => 'Xpander RF BE',
        'price' => '273900000',
        'path' => 'Xpander-Rockford-Fosgate-Black-Edition',
        'desc' => 'XPAND YOUR MUSIC ADVENTURE<br/>Now comes for all new adventures with bolder exterior accent, black interior details, 7-inch head unit with smartphone connectivity and enchanced audio system by Rockford Fosgate',
        'transmission' => 'AT, MT',
        'seater' => '7 Seater',
        'fuel' => 'Petrol',
        'detailsName' => 'Xpander Cross Rockford Fosgate Black Edition',
        'detailsSpecification' => (object) [
            'exterior' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Black Grille</h3>', 'exterior-xpander-rf-grillepngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Black Dynamic Shield</h3>', 'exterior-xpander-rf-blackdynamicshieldpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Black Alloy Wheel</h3>', 'exterior-xpander-rf-alloypngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Black Door Mirror</h3>', 'exterior-xpander-rf-mirrorpngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Emblem Rockford Fosgate Black Edition</h3>', 'exterior-xpander-rf-badgepngpng.png'],
            ],
            'interior' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Rockford Fosgate Audio System</h3>', 'interior-xpander-rf-subwooferpngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">7-INCH AUDIO HEAD UNIT WITH SMARTPHONE CONNECTIVITY</h3>', 'interior-xpander-rf-headunitpngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Push Start Stop Engine Button</h3>', 'interior-xpander-rf-ssbuttonpngpng.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">HIGH CONTRAST METER CLUSTER (COLOR MID)</h3>', 'interior-xpander-rf-midpngpng.png'],
            ],
            'performance' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">MEMILIKI GROUND CLEARANCE TERTINGGI</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Mitsubishi Xpander memiliki ground clearance tertinggi di kelasnya, sehingga lebih nyaman dikendarai.</div>', 'performance-rn-sam-hitam-depanjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">1.5 L MIVEC DOHC 16 Valve</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Nikmati pengalaman berkendara terbaik di mana pun medannya, berkat performa tangguh hasil kombinasi mesin MIVEC 1.5 L dan suspensi canggih dengan katup peredam guncangan.</div>', 'performance-15l-mivec-dohcjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">SUSPENSI LEBIH STABIL DAN NYAMAN DI KELASNYA</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Mitsubishi Xpander dilengkapi shock absorber valve baik di depan maupun belakang, dikembangkan khusus dengan quick response sehingga membuat kendaraan lebih stabil.</div>', 'performance-suspensi-stabiljpg.jpg'],
            ]
        ],
        'relatedPath' => 'related-xpander-rf.jpg',
        'relatedDetails' => [
            ['Xpander Rockford Fosgate Black Edition A/T', 'Rp283,800,000'],
            ['Xpander Rockford Fosgate Black Edition M/T', 'Rp273,900,000']
        ]
    ],
    (object) [
        'slug' => 'xpander',
        'name' => 'Xpander',
        'price' => '254930000',
        'path' => 'Xpander-Ultimate-AT',
        'desc' => 'PILIH XPANDER PINTER BENER<br/>Mobil keluarga yang bener dengan biaya kepemilikan pinter. Ada banyak petualangan menanti di luar sana. Jangan ragu memulainya karena Mitsubishi Xpander punya banyak fitur unggulan yang memastikan Anda sekeluarga merasakan nikmatnya berkendara dengan lebih aman dan nyaman, ke mana pun perjalanannya.',
        'transmission' => 'AT, MT',
        'seater' => '7 Seater',
        'fuel' => 'Petrol',
        'detailsName' => 'Xpander',
        'detailsSpecification' => (object) [
            'exterior' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">16 Inch Wheel</h3>', 'exterior-16-inch-wheeljpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Front & Rear Bumper</h3>', 'exterior-font-rear-bumperjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Modern Rear Spoiler</h3>', 'exterior-moderm-rear-spoilerjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Rear Window Defogger</h3>', 'exterior-rear-window-defoggerjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Shark Fin Antenna</h3>', 'exterior-shark-fin-antenajpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Back Car Baggage</h3>', 'exterior-xpander-backjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Rear Camera</h3>', 'exterior-rear-camerajpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Rear Parking Sensor</h3>', 'exterior-new-rear-parkingjpg.jpg'],
            ],
            'interior' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">7-SEATER COMFORT</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Kenyamanan berkendara dan kemewahan jadi hal pokok yang selalu diimpikan keluarga Indonesia. Mitsubishi Xpander hadir dengan kabin luas dipadu pilihan material dan desain interior layaknya MPV kelas atas.</div>', 'interior-7-seater-comfortjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">Pengaturan Kursi 4 Penumpang + Sandaran Lengan</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Dengan melipat kursi baris ke-3 untuk muatan besar dan panjang.</div>', 'interior-pengaturan-kursi-4-penumpang-sandaran-lenganjpgjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">SEATING ARRANGEMENT YANG FLEKSIBEL</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">
                Generasi baru dari kursi tiga baris yang dapat dilipat dan diatur dengan sangat mudah, bahkan saat Anda membutuhkan permukaan yang rata.</div>', 'interior-seating-arrangement-fleksibeljpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">HIGH CONTRAST METER CLUSTER (COLOR MID)</h3>', 'interior-xpander-rf-midpngpng.png'],
            ],
            'safety' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">RISE BODY (REINFORCED IMPACT SAFETY EVOLUTION)</h3>', 'safety-risejpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">ABS (ANTI-LOCK BRAKING SYSTEM)</h3>', 'safety-absjpgjpg.jpg']
            ],
            'performance' => (object) [
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">TOP CLASS HIGH GROUND CLEARANCE</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Mitsubishi Xpander memiliki ground clearance tertinggi di kelasnya, sehingga lebih nyaman dikendarai. (tipe ULTIMATE, SPORT dan EXCEED).</div>', 'performance-xpander-hitam-1png.png'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">1.5 L MIVEC DOHC 16 Valve</h3><div class="mg-b-60-sm fs-14-sm fs-16-md">Nikmati pengalaman berkendara terbaik di mana pun medannya, berkat performa tangguh hasil kombinasi mesin MIVEC 1.5 L dan suspensi canggih dengan katup peredam guncangan.</div>', 'performance-15l-mivec-dohcjpg.jpg'],
                ['<h3 class="title-primary_medium--alt fw-bold mg-b-15-sm mg-b-30-md">SUSPENSI LEBIH STABIL DAN NYAMAN DI KELASNYA</h3>', 'performance-suspensi-stabiljpg.jpg'],
            ]
        ],
        'relatedPath' => 'related-xpander.jpg',
        'relatedDetails' => [
            ['ULTIMATE A/T', 'Rp283,800,000'],
            ['SPORT A/T', 'Rp273,900,000'],
            ['SPORT M/T', 'Rp273,900,000'],
            ['EXCEED A/T', 'Rp273,900,000'],
            ['EXCEED M/T', 'Rp273,900,000'],
            ['GLS A/T', 'Rp273,900,000'],
            ['GLS M/T', 'Rp273,900,000'],
        ]
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