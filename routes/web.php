<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('Pages.Homepage');
});

Route::get('/Login', function () {
    return view('Pages.Login');
});

Route::get('/SignUp', function () {
    return view('Pages.SignUp');
});
Route::get('/About', function () {
    return view('Pages.About');
});
Route::get('/Setting', function () {
    return view('Pages.Users.Setting');
});
Route::get('/Help', function () {
    return view('Pages.Users.Help');
});
Route::get('/Edit', function () {
    return view('Pages.Users.Edit');
});
Route::get('/Orders', function () {
    return view('Pages.Users.Orders',[
        'order'=>[
            [
                "id" => "P-12",
                "User"=>'U-12',
                "Tgl"=>'21-05-24',
                'TotalHarga'=>'100.000',
                'Diskon'=>'5',
                'Status'=>'Booked',
                'tipe'=>'Fasilitas',
                'Jumlah'=>'5',
                'Pilihan'=>['Swimming Pool','Swimming Pool','13','41','12'],
                'Waktu'=>'12 menit',
            ],
            [
                "id" => "B-12",
                "User"=>'U-12',
                "Tgl"=>'21-05-24 - 12-12-24',
                'TotalHarga'=>'100.000',
                'Jumlah'=>'5',
                'tipe'=>'Kamar',
                'Diskon'=>'5',
                'Status'=>'Booked',
                'Pilihan'=>['12','31','13','41','12'],
            ],
            [
                "id" => "B-12",
                "User"=>'U-12',
                "Tgl"=>'21-05-24 - 12-12-24',
                'TotalHarga'=>'100.000',
                'Jumlah'=>'5',
                'tipe'=>'Kamar',
                'Diskon'=>'5',
                'Status'=>'Booked',
                'Pilihan'=>['12','31','13','41','12'],
            ],
            [
                "id" => "B-12",
                "User"=>'U-12',
                "Tgl"=>'21-05-24 - 12-12-24',
                'TotalHarga'=>'100.000',
                'Jumlah'=>'5',
                'tipe'=>'Kamar',
                'Diskon'=>'5',
                'Status'=>'Booked',
                'Pilihan'=>['12','31','13','41','12'],
            ],
        ],
    ]);
});
Route::get('/Profile', function () {
    return view('Pages.Users.Profile',[
        "username"=>"Mukti Laksono",
        "email"=>'Mukti@gmail.com',
        "NoTelp"=>"+62 855-8598-886",
        "Password"=>"adafwffwjafojaofwa",
        "Booking"=>350,
        "Reservation"=>350,
        "OnGoing" => [
            [
                "user" => "U-12",
                "tipe"=>'Kamar',
                "date"=>'30-09-24',
                'status'=>'Booked',
                'totalharga'=>'100.000',
            ],
            [
                "user" => "U-41",
                "tipe"=>'Kamar',
                "date"=>'30-09-24',
                'status'=>'Booked',
                'totalharga'=>'100.000',
            ],
        ]
    ]);
});
Route::get('/NewPass', function () {
    return view('Pages.NewPas');
});

Route::get('/Forgoten', function () {
    return view('Pages.Forgoten');
});
Route::get('/Dashboard', function () {
    return view('Dashboards.Dashboard', [
        "Pengguna" => 350000,
        "Booking" => 400,
        "Reservation" => 400,
        "OnGoing" => [
            [
                "user" => "U-12",
                "tipe"=>'Kamar',
                "date"=>'30-09-24',
                'status'=>'Booked',
                'totalharga'=>'100.000',
            ],
            [
                "user" => "U-41",
                "tipe"=>'Kamar',
                "date"=>'30-09-24',
                'status'=>'Booked',
                'totalharga'=>'100.000',
            ],
            [
                "user" => "U-23",
                "tipe"=>'Fasilitas',
                "date"=>'30-09-24',
                'status'=>'Booked',
                'totalharga'=>'100.000',
            ],
            [
                "user" => "U-43",
                "tipe"=>'Fasilitas',
                "date"=>'30-09-24',
                'status'=>'Booked',
                'totalharga'=>'100.000',
            ],
            [
                "user" => "U-15",
                "tipe"=>'Kamar',
                "date"=>'30-09-24',
                'status'=>'Booked',
                'totalharga'=>'100.000',
            ],

        ],
    ]);
});



Route::get('/DetailRoom', function (Request $request) {
    $RoomId = $request->query('RoomId');
    return view('Pages.DetailRoom', [
        'RoomId' => $RoomId,
        "Room" => [
            [
                "Id" => 1,
                "No_kamar" => 1,
                "Lantai" => 1,
                "Status" => "Booked",
                "harga" => 2000000,
                "Nama" => "Ruang Kamar Mukti Laksono",
                "Tipe" => "Luxury Room",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Kapasitas" => 2,
                "Fasilitas" =>
                [
                    [
                        "nama" => "30 Meter Persegi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-maximize",
                    ],
                    [
                        "nama" => "Kamar Mandi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-bath",
                    ],
                ]
            ],
            [
                "Id" => 2,
                "No_kamar" => 2,
                "Lantai" => 1,
                "Status" => "Booked",
                "harga" => 2000000,
                "Nama" => "Ruang Kamar Mukti Laksono",
                "Tipe" => "Single Room",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Kapasitas" => 1,
                "Fasilitas" =>
                [
                    [
                        "nama" => "50 Meter Persegi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-maximize",
                    ],
                    [
                        "nama" => "Kamar Mandi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-bath",
                    ],
                ]
            ],
            [
                "Id" => 3,
                "No_kamar" => 5,
                "Lantai" => 1,
                "Status" => "Available",
                "harga" => 2000000,
                "Nama" => "Ruang Kamar Mukti Laksono",
                "Tipe" => "Family Room",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Kapasitas" => 2,
                "Fasilitas" =>
                [
                    [
                        "nama" => "60 Meter Persegi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-maximize",
                    ],
                    [
                        "nama" => "Kamar Mandi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-bath",
                    ],
                ]
            ],
            [
                "Id" => 4,
                "No_kamar" => 1,
                "Lantai" => 12,
                "Status" => "Booked",
                "harga" => 2000000,
                "Nama" => "Ruang Kamar Mukti Laksono",
                "Tipe" => "Family Room",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Kapasitas" => 2,
                "Fasilitas" =>
                [
                    [
                        "nama" => "50 Meter Persegi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-maximize",
                    ],
                    [
                        "nama" => "Kamar Mandi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-bath",
                    ],
                ]
            ],
            [
                "Id" => 5,
                "No_kamar" => 1,
                "Lantai" => 5,
                "Status" => "Booked",
                "harga" => 2000000,
                "Nama" => "Ruang Kamar Mukti Laksono",
                "Tipe" => "Luxury Room",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Kapasitas" => 2,
                "Fasilitas" =>
                [
                    [
                        "nama" => "30 Meter Persegi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-maximize",
                    ],
                    [
                        "nama" => "Kamar Mandi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-bath",
                    ],
                ]
            ],
        ]
    ]);
})->name('DetailRooms');
Route::get('/DetailService', function (Request $request) {
    $ServiceId = $request->query('ServiceId');
    return view('Pages.DetailService', [
        'ServiceId' => $ServiceId,
        "Service" => [
            [
                "Id" => "SC-12",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Swimming Pool",
                "Harga" => 500000,
                "namaIcon" => "fa-water-ladder",
                "Tipe" => "Fasilitas",
            ],
            [
                "Id" => "SC-13",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Spa & Message",
                "Harga" => 100000,
                "namaIcon" => "fa-spa",
                "Tipe" => "Fasilitas",
            ],
            [
                "Id" => "SC-14",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Swimming Pool",
                "Harga" => 500000,
                "namaIcon" => "fa-water-ladder",
                "Tipe" => "Fasilitas",
            ],
            [
                "Id" => "SC-15",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Gym & Yoga",
                "Harga" => 500000,
                "namaIcon" => "fa-dumbbell",
                "Tipe" => "Fasilitas",
            ],
            [
                "Id" => "SC-16",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Restaurant & Bars",
                "Harga" => 500000,
                "namaIcon" => "fa-utensils",
                "Tipe" => "Fasilitas",
            ],
            [
                "Id" => "SC-51",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Confrence Room",
                "Harga" => 500000,
                "namaIcon" => "fa-microphone",
                "Tipe" => "Fasilitas",
            ],
            [
                "Id" => "SC-41",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "In-Room Dining",
                "Harga" => 50000,
                "namaIcon" => "fa-burger",
                "Tipe" => "In-Room",
            ],
            [
                "Id" => "SC-21",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Room Cleaning",
                "Harga" => 50000,
                "namaIcon" => "fa-broom",
                "Tipe" => "In-Room",
            ],
            [
                "Id" => "SC-43",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Laundry & Service",
                "Harga" => 50000,
                "namaIcon" => "fa-jug-detergent",
                "Tipe" => "In-Room",
            ],
            [
                "Id" => "SC-47",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Wellness Treatment",
                "Harga" => 50000,
                "namaIcon" => "fa-hand-sparkles",
                "Tipe" => "In-Room",
            ],
        ]
    ]);
})->name('DetailService');
Route::get('/Service', function () {
    return view('Pages.Service', [
        "Service" => [
            [
                "Id" => "SC-12",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Swimming Pool",
                "Harga" => 500000,
                "namaIcon" => "fa-water-ladder",
                "Tipe" => "Fasilitas",
            ],
            [
                "Id" => "SC-13",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Spa & Message",
                "Harga" => 100000,
                "namaIcon" => "fa-spa",
                "Tipe" => "Fasilitas",
            ],
            [
                "Id" => "SC-14",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Swimming Pool",
                "Harga" => 500000,
                "namaIcon" => "fa-water-ladder",
                "Tipe" => "Fasilitas",
            ],
            [
                "Id" => "SC-15",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Gym & Yoga",
                "Harga" => 500000,
                "namaIcon" => "fa-dumbbell",
                "Tipe" => "Fasilitas",
            ],
            [
                "Id" => "SC-16",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Restaurant & Bars",
                "Harga" => 500000,
                "namaIcon" => "fa-utensils",
                "Tipe" => "Fasilitas",
            ],
            [
                "Id" => "SC-51",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Confrence Room",
                "Harga" => 500000,
                "namaIcon" => "fa-microphone",
                "Tipe" => "Fasilitas",
            ],
            [
                "Id" => "SC-41",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "In-Room Dining",
                "Harga" => 50000,
                "namaIcon" => "fa-burger",
                "Tipe" => "In-Room",
            ],
            [
                "Id" => "SC-21",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Room Cleaning",
                "Harga" => 50000,
                "namaIcon" => "fa-broom",
                "Tipe" => "In-Room",
            ],
            [
                "Id" => "SC-43",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Laundry & Service",
                "Harga" => 50000,
                "namaIcon" => "fa-jug-detergent",
                "Tipe" => "In-Room",
            ],
            [
                "Id" => "SC-47",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Wellness Treatment",
                "Harga" => 50000,
                "namaIcon" => "fa-hand-sparkles",
                "Tipe" => "In-Room",
            ],
        ]
    ]);
});
Route::get('/Rooms', function () {
    return view('Pages.Rooms', [
        "Room" => [
            [
                "Id" => 1,
                "No_kamar" => 1,
                "Lantai" => 1,
                "Status" => "Booked",
                "harga" => 2000000,
                "Nama" => "Ruang Kamar Mukti Laksono",
                "Tipe" => "Luxury Room",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Kapasitas" => 2,
                "Fasilitas" =>
                [
                    [
                        "nama" => "30 Meter Persegi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-maximize",
                    ],
                    [
                        "nama" => "Kamar Mandi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-bath",
                    ],
                ]
            ],
            [
                "Id" => 2,
                "No_kamar" => 2,
                "Lantai" => 1,
                "Status" => "Booked",
                "harga" => 2000000,
                "Nama" => "Ruang Kamar Mukti Laksono",
                "Tipe" => "Single Room",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Kapasitas" => 1,
                "Fasilitas" =>
                [
                    [
                        "nama" => "50 Meter Persegi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-maximize",
                    ],
                    [
                        "nama" => "Kamar Mandi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-bath",
                    ],
                ]
            ],
            [
                "Id" => 3,
                "No_kamar" => 5,
                "Lantai" => 1,
                "Status" => "Available",
                "harga" => 2000000,
                "Nama" => "Ruang Kamar Mukti Laksono",
                "Tipe" => "Family Room",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Kapasitas" => 2,
                "Fasilitas" =>
                [
                    [
                        "nama" => "60 Meter Persegi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-maximize",
                    ],
                    [
                        "nama" => "Kamar Mandi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-bath",
                    ],
                ]
            ],
            [
                "Id" => 4,
                "No_kamar" => 1,
                "Lantai" => 12,
                "Status" => "Booked",
                "harga" => 2000000,
                "Nama" => "Ruang Kamar Mukti Laksono",
                "Tipe" => "Family Room",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Kapasitas" => 2,
                "Fasilitas" =>
                [
                    [
                        "nama" => "50 Meter Persegi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-maximize",
                    ],
                    [
                        "nama" => "Kamar Mandi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-bath",
                    ],
                ]
            ],
            [
                "Id" => 5,
                "No_kamar" => 1,
                "Lantai" => 5,
                "Status" => "Booked",
                "harga" => 2000000,
                "Nama" => "Ruang Kamar Mukti Laksono",
                "Tipe" => "Luxury Room",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Kapasitas" => 2,
                "Fasilitas" =>
                [
                    [
                        "nama" => "30 Meter Persegi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-maximize",
                    ],
                    [
                        "nama" => "Kamar Mandi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-bath",
                    ],
                ]
            ],
        ]
    ]);
});

Route::get('/Reserve', function () {
    return view('Pages.Reservation', [
        "Service" => [
            [
                "Id" => "SC-12",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Swimming Pool",
                "Harga" => 500000,
                "namaIcon" => "fa-water-ladder",
                "Tipe" => "Fasilitas",
            ],
            [
                "Id" => "SC-13",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Spa & Message",
                "Harga" => 100000,
                "namaIcon" => "fa-spa",
                "Tipe" => "Fasilitas",
            ],
            [
                "Id" => "SC-14",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Swimming Pool",
                "Harga" => 500000,
                "namaIcon" => "fa-water-ladder",
                "Tipe" => "Fasilitas",
            ],
            [
                "Id" => "SC-15",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Gym & Yoga",
                "Harga" => 500000,
                "namaIcon" => "fa-dumbbell",
                "Tipe" => "Fasilitas",
            ],
            [
                "Id" => "SC-16",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Restaurant & Bars",
                "Harga" => 500000,
                "namaIcon" => "fa-utensils",
                "Tipe" => "Fasilitas",
            ],
            [
                "Id" => "SC-51",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Confrence Room",
                "Harga" => 500000,
                "namaIcon" => "fa-microphone",
                "Tipe" => "Fasilitas",
            ],
            [
                "Id" => "SC-41",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "In-Room Dining",
                "Harga" => 50000,
                "namaIcon" => "fa-burger",
                "Tipe" => "In-Room",
            ],
            [
                "Id" => "SC-21",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Room Cleaning",
                "Harga" => 50000,
                "namaIcon" => "fa-broom",
                "Tipe" => "In-Room",
            ],
            [
                "Id" => "SC-43",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Laundry & Service",
                "Harga" => 50000,
                "namaIcon" => "fa-jug-detergent",
                "Tipe" => "In-Room",
            ],
            [
                "Id" => "SC-47",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Nama" => "Wellness Treatment",
                "Harga" => 50000,
                "namaIcon" => "fa-hand-sparkles",
                "Tipe" => "In-Room",
            ],
        ]
    ]);
});

Route::get('/Booking', function () {
    return view('Pages.Booking', [
        "Room" => [
            [
                "Id" => 1,
                "No_kamar" => 1,
                "Lantai" => 1,
                "Status" => "Booked",
                "harga" => 2000000,
                "Nama" => "Ruang Kamar Mukti Laksono",
                "Tipe" => "Luxury Room",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Kapasitas" => 2,
                "Fasilitas" =>
                [
                    [
                        "nama" => "30 Meter Persegi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-maximize",
                    ],
                    [
                        "nama" => "Kamar Mandi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-bath",
                    ],
                    [
                        "nama" => "30 Meter Persegi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-maximize",
                    ],
                    [
                        "nama" => "Kamar Mandi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-bath",
                    ],
                    [
                        "nama" => "Kamar Mandi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-bath",
                    ],
                ]
            ],
            [
                "Id" => 2,
                "No_kamar" => 2,
                "Lantai" => 1,
                "Status" => "Booked",
                "harga" => 2000000,
                "Nama" => "Ruang Kamar Mukti Laksono",
                "Tipe" => "Single Room",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Kapasitas" => 1,
                "Fasilitas" =>
                [
                    [
                        "nama" => "50 Meter Persegi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-maximize",
                    ],
                    [
                        "nama" => "Kamar Mandi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-bath",
                    ],
                ]
            ],
            [
                "Id" => 3,
                "No_kamar" => 5,
                "Lantai" => 1,
                "Status" => "Available",
                "harga" => 2000000,
                "Nama" => "Ruang Kamar Mukti Laksono",
                "Tipe" => "Family Room",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Kapasitas" => 2,
                "Fasilitas" =>
                [
                    [
                        "nama" => "60 Meter Persegi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-maximize",
                    ],
                    [
                        "nama" => "Kamar Mandi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-bath",
                    ],
                ]
            ],
            [
                "Id" => 4,
                "No_kamar" => 1,
                "Lantai" => 12,
                "Status" => "Booked",
                "harga" => 2000000,
                "Nama" => "Ruang Kamar Mukti Laksono",
                "Tipe" => "Family Room",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Kapasitas" => 2,
                "Fasilitas" =>
                [
                    [
                        "nama" => "50 Meter Persegi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-maximize",
                    ],
                    [
                        "nama" => "Kamar Mandi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-bath",
                    ],
                ]
            ],
            [
                "Id" => 5,
                "No_kamar" => 1,
                "Lantai" => 5,
                "Status" => "Booked",
                "harga" => 2000000,
                "Nama" => "Ruang Kamar Mukti Laksono",
                "Tipe" => "Luxury Room",
                "Deskripsi" => "Norem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. ",
                "Kapasitas" => 2,
                "Fasilitas" =>
                [
                    [
                        "nama" => "30 Meter Persegi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-maximize",
                    ],
                    [
                        "nama" => "Kamar Mandi",
                        "deskripsi" => "Kamar Orang mandi",
                        "namaIcon" => "fa-bath",
                    ],
                ]
            ],
        ]
    ]);
});

Route::get('/User', function () {
    return view('Dashboards.User', [
        "User" => [
            [
                "id" => "U-12",
                "username"=>'Samuel',
                "email"=>'SamuelChandra@gmail.com',
                'foto'=>'Foto1.png',
                'NoTelp'=>'0813131311313213',
                'Password'=>'fiaifaajnanfoanowfoaofoaofnoa',
            ],
            [
                "id" => "U-12",
                "username"=>'Samuel',
                "email"=>'SamuelChandra@gmail.com',
                'foto'=>'Foto1.png',
                'NoTelp'=>'0813131311313213',
                'Password'=>'fiaifaajnanfoanowfoaofoaofnoa',
            ],
            [
                "id" => "U-12",
                "username"=>'Samuel',
                "email"=>'SamuelChandra@gmail.com',
                'foto'=>'Foto1.png',
                'NoTelp'=>'0813131311313213',
                'Password'=>'fiaifaajnanfoanowfoaofoaofnoa',
            ],
            [
                "id" => "U-12",
                "username"=>'Samuel',
                "email"=>'SamuelChandra@gmail.com',
                'foto'=>'Foto1.png',
                'NoTelp'=>'0813131311313213',
                'Password'=>'fiaifaajnanfoanowfoaofoaofnoa',
            ],
            [
                "id" => "U-12",
                "username"=>'Samuel',
                "email"=>'SamuelChandra@gmail.com',
                'foto'=>'Foto1.png',
                'NoTelp'=>'0813131311313213',
                'Password'=>'fiaifaajnanfoanowfoaofoaofnoa',
            ],
            [
                "id" => "U-12",
                "username"=>'Samuel',
                "email"=>'SamuelChandra@gmail.com',
                'foto'=>'Foto1.png',
                'NoTelp'=>'0813131311313213',
                'Password'=>'fiaifaajnanfoanowfoaofoaofnoa',
            ],
            [
                "id" => "U-12",
                "username"=>'Samuel',
                "email"=>'SamuelChandra@gmail.com',
                'foto'=>'Foto1.png',
                'NoTelp'=>'0813131311313213',
                'Password'=>'fiaifaajnanfoanowfoaofoaofnoa',
            ],
            

        ],
    ]);
});

Route::get('/BookingDashboard', function () {
    return view('Dashboards.Booking', [
        "Booking" => [
            [
                "id" => "B-12",
                "User"=>'U-12',
                "Check"=>'21-05-24 - 12-12-24',
                'TotalHarga'=>'100.000',
                'JumlahKamar'=>'5',
                'Diskon'=>'5',
                'Status'=>'Booked',
                'IDKamar'=>['12','31','13','41','12'],
            ],
            [
                "id" => "B-12",
                "User"=>'U-12',
                "Check"=>'21-05-24 - 12-12-24',
                'TotalHarga'=>'100.000',
                'JumlahKamar'=>'5',
                'Diskon'=>'5',
                'Status'=>'Booked',
                'IDKamar'=>['12','31','13','41','12'],
            ],
            [
                "id" => "B-12",
                "User"=>'U-12',
                "Check"=>'21-05-24 - 12-12-24',
                'TotalHarga'=>'100.000',
                'JumlahKamar'=>'5',
                'Diskon'=>'5',
                'Status'=>'Booked',
                'IDKamar'=>['12','31','13','41','12'],
            ],
            [
                "id" => "B-12",
                "User"=>'U-12',
                "Check"=>'21-05-24 - 12-12-24',
                'TotalHarga'=>'100.000',
                'JumlahKamar'=>'5',
                'Diskon'=>'5',
                'Status'=>'Booked',
                'IDKamar'=>['12','31','13','41','12'],
            ],
            [
                "id" => "B-12",
                "User"=>'U-12',
                "Check"=>'21-05-24 - 12-12-24',
                'TotalHarga'=>'100.000',
                'JumlahKamar'=>'5',
                'Diskon'=>'5',
                'Status'=>'Booked',
                'IDKamar'=>['12','31','13','41','12'],
            ],
            [
                "id" => "B-12",
                "User"=>'U-12',
                "Check"=>'21-05-24 - 12-12-24',
                'TotalHarga'=>'100.000',
                'JumlahKamar'=>'5',
                'Diskon'=>'5',
                'Status'=>'Booked',
                'IDKamar'=>['12','31','13','41','12'],
            ],
            
        ],
    ]);
});


Route::get('/Pemesanan', function () {
    return view('Dashboards.Pemesanan', [
        "Pemesanan" => [
            [
                "id" => "P-12",
                "User"=>'U-12',
                "Tgl"=>'21-05-24',
                'TotalHarga'=>'100.000',
                'Diskon'=>'5',
                'Status'=>'Booked',
                'JumlahService'=>'5',
                'Service'=>['Swimming Pool','Swimming Pool','13','41','12'],
                'Waktu'=>'12 menit',
            ],
            [
                "id" => "P-12",
                "User"=>'U-12',
                "Tgl"=>'21-05-24',
                'TotalHarga'=>'100.000',
                'Diskon'=>'5',
                'Status'=>'Booked',
                'JumlahService'=>'5',
                'Service'=>['Swimming Pool','Swimming Pool','13','41','12'],
                'Waktu'=>'12 menit',
            ],
            [
                "id" => "P-12",
                "User"=>'U-12',
                "Tgl"=>'21-05-24',
                'TotalHarga'=>'100.000',
                'Diskon'=>'5',
                'Status'=>'Booked',
                'JumlahService'=>'5',
                'Service'=>['Swimming Pool','Swimming Pool','13','41','12'],
                'Waktu'=>'12 menit',
            ],
            [
                "id" => "P-12",
                "User"=>'U-12',
                "Tgl"=>'21-05-24',
                'TotalHarga'=>'100.000',
                'Diskon'=>'5',
                'Status'=>'Booked',
                'JumlahService'=>'5',
                'Service'=>['Swimming Pool','Swimming Pool','13','41','12'],
                'Waktu'=>'12 menit',
            ],
            [
                "id" => "P-12",
                "User"=>'U-12',
                "Tgl"=>'21-05-24',
                'TotalHarga'=>'100.000',
                'Diskon'=>'5',
                'Status'=>'Booked',
                'JumlahService'=>'5',
                'Service'=>['Swimming Pool','Swimming Pool','13','41','12'],
                'Waktu'=>'12 menit',
            ],
            [
                "id" => "P-12",
                "User"=>'U-12',
                "Tgl"=>'21-05-24',
                'TotalHarga'=>'100.000',
                'Diskon'=>'5',
                'Status'=>'Booked',
                'JumlahService'=>'5',
                'Service'=>['Swimming Pool','Swimming Pool','13','41','12'],
                'Waktu'=>'12 menit',
            ],
        ],
    ]);
});



Route::get('/Kamar', function () {
    return view('Dashboards.Kamar', [
        "Kamar" => [
            [
                "id" => "12",
                "Lantai"=>'4',
                "Status"=>'Booked',
                'IdJenis'=>'K-32',
            ],
            [
                "id" => "12",
                "Lantai"=>'4',
                "Status"=>'Booked',
                'IdJenis'=>'K-32',
            ],
            [
                "id" => "12",
                "Lantai"=>'4',
                "Status"=>'Booked',
                'IdJenis'=>'K-32',
            ],
            [
                "id" => "12",
                "Lantai"=>'4',
                "Status"=>'Booked',
                'IdJenis'=>'K-32',
            ],
            [
                "id" => "12",
                "Lantai"=>'4',
                "Status"=>'Booked',
                'IdJenis'=>'K-32',
            ],
            [
                "id" => "12",
                "Lantai"=>'4',
                "Status"=>'Booked',
                'IdJenis'=>'K-32',
            ],
        ],
    ]);
});
Route::get('/JenisKamar', function () {
    return view('Dashboards.JenisKamar', [
        "JenisKamar" => [
            [
                "id" => "K-12",
                "nama"=>'Kamar Samuel',
                "Kapasitas"=>'5',
                'Harga'=>'500000',
                'Tipe'=>'Luxury',
                'KamarOverview'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                'Deskripsi'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                'fasilitas'=>['Kamar mandi','ac','air','api','ayam'],
            ],
            [
                "id" => "K-12",
                "nama"=>'Kamar Samuel',
                "Kapasitas"=>'5',
                'Harga'=>'500000',
                'Tipe'=>'Luxury',
                'KamarOverview'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                'Deskripsi'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                'fasilitas'=>['Kamar mandi','ac','air','api','ayam'],
            ],
            [
                "id" => "K-12",
                "nama"=>'Kamar Samuel',
                "Kapasitas"=>'5',
                'Harga'=>'500000',
                'Tipe'=>'Luxury',
                'KamarOverview'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                'Deskripsi'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                'fasilitas'=>['Kamar mandi','ac','air','api','ayam'],
            ],
            [
                "id" => "K-12",
                "nama"=>'Kamar Samuel',
                "Kapasitas"=>'5',
                'Harga'=>'500000',
                'Tipe'=>'Luxury',
                'KamarOverview'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                'Deskripsi'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                'fasilitas'=>['Kamar mandi','ac','air','api','ayam'],
            ],
            [
                "id" => "K-12",
                "nama"=>'Kamar Samuel',
                "Kapasitas"=>'5',
                'Harga'=>'500000',
                'Tipe'=>'Luxury',
                'KamarOverview'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                'Deskripsi'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                'fasilitas'=>['Kamar mandi','ac','air','api','ayam'],
            ],
            [
                "id" => "K-12",
                "nama"=>'Kamar Samuel',
                "Kapasitas"=>'5',
                'Harga'=>'500000',
                'Tipe'=>'Luxury',
                'KamarOverview'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                'Deskripsi'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                'fasilitas'=>['Kamar mandi','ac','air','api','ayam'],
            ],
            [
                "id" => "K-12",
                "nama"=>'Kamar Samuel',
                "Kapasitas"=>'5',
                'Harga'=>'500000',
                'Tipe'=>'Luxury',
                'KamarOverview'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                'Deskripsi'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                'fasilitas'=>['Kamar mandi','ac','air','api','ayam'],
            ],
        ],
    ]);
});
Route::get('/ServiceDashboard', function () {
    return view('Dashboards.Service', [
        "Service" => [
            [
                "id" => "S-12",
                'ServiceOverview'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                'Deskripsi'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                "nama"=>'Swimming Pool',
                'Harga'=>'2000000',
                'namaIcon'=>'Foto1.png',
                'Tipe'=>'Fasilitas',
            ],
            [
                "id" => "S-12",
                'ServiceOverview'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                'Deskripsi'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                "nama"=>'Swimming Pool',
                'Harga'=>'2000000',
                'namaIcon'=>'Foto1.png',
                'Tipe'=>'Fasilitas',
            ],
            [
                "id" => "S-12",
                'ServiceOverview'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                'Deskripsi'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                "nama"=>'In-Room Dining',
                'Harga'=>'2000000',
                'namaIcon'=>'Foto1.png',
                'Tipe'=>'In-Room',
            ],
            [
                "id" => "S-12",
                'ServiceOverview'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                'Deskripsi'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                "nama"=>'In-Room Dining',
                'Harga'=>'2000000',
                'namaIcon'=>'Foto1.png',
                'Tipe'=>'In-Room',
            ],
            [
                "id" => "S-12",
                'ServiceOverview'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                'Deskripsi'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                "nama"=>'In-Room Dining',
                'Harga'=>'2000000',
                'namaIcon'=>'Foto1.png',
                'Tipe'=>'In-Room',
            ],
            [
                "id" => "S-12",
                'ServiceOverview'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                'Deskripsi'=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                "nama"=>'In-Room Dining',
                'Harga'=>'2000000',
                'namaIcon'=>'Foto1.png',
                'Tipe'=>'In-Room',
            ],
        ],
    ]);
});
Route::get('/Fasilitas', function () {
    return view('Dashboards.Fasilitas', [
        "Fasilitas" => [
            [
                "id" => "F-12",
                "Deskripsi"=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                "nama"=>'kamar mandi',
                'namaicon'=>'fa-bath',
            ],
            [
                "id" => "F-12",
                "Deskripsi"=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                "nama"=>'kamar mandi',
                'namaicon'=>'fa-bath',
            ],
            [
                "id" => "F-12",
                "Deskripsi"=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                "nama"=>'kamar mandi',
                'namaicon'=>'fa-bath',
            ],
            [
                "id" => "F-12",
                "Deskripsi"=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                "nama"=>'kamar mandi',
                'namaicon'=>'fa-bath',
            ],
            [
                "id" => "F-12",
                "Deskripsi"=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                "nama"=>'kamar mandi',
                'namaicon'=>'fa-bath',
            ],
            [
                "id" => "F-12",
                "Deskripsi"=>'lestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. lestie, dictum est a, mattis tellus. . ',
                "nama"=>'kamar mandi',
                'namaicon'=>'fa-bath',
            ],
        ],
    ]);
});
Route::get('/Gallery', function () {
    return view('Dashboards.Gallery', [
        "Gallery" => [
            [
                "id" => "G-12",
                "id-kamar"=>'k-12',
                "id-service"=>'-',
                'foto'=>'Foto1.png',
            ],
            [
                "id" => "G-12",
                "id-kamar"=>'k-12',
                "id-service"=>'-',
                'foto'=>'Foto1.png',
            ],
            [
                "id" => "G-12",
                "id-kamar"=>'-',
                "id-service"=>'S-12',
                'foto'=>'Foto1.png',
            ],
            [
                "id" => "G-12",
                "id-kamar"=>'-',
                "id-service"=>'S-12',
                'foto'=>'Foto1.png',
            ],
            [
                "id" => "G-12",
                "id-kamar"=>'-',
                "id-service"=>'S-12',
                'foto'=>'Foto1.png',
            ],
            [
                "id" => "G-12",
                "id-kamar"=>'-',
                "id-service"=>'S-12',
                'foto'=>'Foto1.png',
            ],
        ],
    ]);
});