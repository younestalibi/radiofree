<?php

use App\Models\Room;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\ProfileController;
use App\Models\Podcast;

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
Route::get('/', function () {
    $activeRoom = Room::where('status', 'active')->first();
    $podcasts = Podcast::all();

    return view('index', compact('activeRoom','podcasts'));
});
Route::get('/media', function () {
    $activeRoom = Room::where('status', 'active')->first();
    return view('media', compact('activeRoom'));
});


Route::get('/rooms', function () {
    return Inertia::render('main');
});
Route::get('/room/{room}/{id}', function () {
    return Inertia::render('main');
});
Route::get('/room/{room}/{id}/{password}', function () {
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

    Route::resource('podcasts', PodcastController::class);

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

    Route::put('/rooms/{id}/update-status', [RoomController::class, 'updateStatus'])->name('rooms.update-status');
});


// Route::get('/',function(){
//     return view('index');
// });
Route::get('/radio/audio', function (\Illuminate\Http\Request $request) {
    $playlistId = $request->input('audioigniter_playlist_id', null);
    $activeRoom = Room::where('status', 'active')->first();

    // Perform any necessary logic based on $playlistId to fetch data
    // For simplicity, I'm hardcoding the response here

    $response = [
        [
            "title" => "RadioFreeSom",
            "subtitle" => "",
            "buyUrl" => "",
            "downloadUrl" => "",
            "downloadFilename" => "",
            "cover" => asset('images/logo.png')
        ]
    ];
    if ($activeRoom) {
        // If $activeRoom is found, use asset for the audio URL
        $response[0]["audio"] = asset('silence.mp3');
    } else {
        // If $activeRoom is not found, use the HTTP link for the audio URL
        $response[0]["audio"] = "https://stream.zeno.fm/cub84trbgy5tv";
        // $response[0]["audio"] = "http://stream.zeno.fm/08krves9z4zuv";
    }

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

Route::get('/{any}', function () {
    return Inertia::render('main');
});
