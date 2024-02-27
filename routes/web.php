<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\RoomController;


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

// Route::get('/', function () {
//     return Inertia::render('main');
// });
Route::get('/',function(){
    return view('index');
});
Route::get('/{id}', function () {
    return Inertia::render('main');
});
Route::get('/rooms', function () {
    return Inertia::render('main');
});
Route::get('/room/{id}', function () {
    return Inertia::render('main');
});
Route::get('/room/{id}/{password}', function () {
    return Inertia::render('main');
});
// Route::get('/welcome', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');

// })->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [RoomController::class, 'index'])->name('dashboard');

    // Show Create Room Form
    Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');

    // Store New Room
    Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');

    // Show Room
    // Route::get('/rooms/{room}', [RoomController::class, 'show']);

    // Show Edit Room Form
    Route::get('/rooms/{room}/edit', [RoomController::class, 'edit'])->name('rooms.edit');

    // Update Room
    Route::put('/rooms/{room}', [RoomController::class, 'update'])->name("rooms.update");

    // Delete Room
    Route::delete('/rooms/{room}', [RoomController::class, 'destroy'])->name('rooms.delete');

    Route::post('/rooms/mail-invitation/{room}', [RoomController::class, 'mailInvitation'])->name('rooms.mail.invetation');
    Route::get('/rooms/invite/{room}', [RoomController::class, 'invite'])->name('rooms.invite');


});



Route::get('/radio', function (\Illuminate\Http\Request $request) {
    $playlistId = $request->input('audioigniter_playlist_id', null);

    // Perform any necessary logic based on $playlistId to fetch data
    // For simplicity, I'm hardcoding the response here
    $response = [
        [
            "title" => "RadioFreeSom",
            "subtitle" => "",
            "audio" => "http://stream.zeno.fm/08krves9z4zuv",
            "buyUrl" => "",
            "downloadUrl" => "",
            "downloadFilename" => "",
            "cover" => asset('images/logo.png')
        ]
    ];

    // Check if a callback parameter is provided in the request
    $callback = $request->input('callback', null);

    // If callback is provided, wrap the response in the callback function
    if ($callback) {
        return response()->json($response)->withCallback($callback);
    }

    // If no callback, simply return the JSON response
    return response()->json($response);
})->withoutMiddleware('cors');
require __DIR__ . '/auth.php';
