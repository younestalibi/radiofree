<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Layout with Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])

</head>

<body class="bg-gray-100 h-full overflow-x-hidden" style="background-image: url('{{ asset('images/background.jpg') }}'); background-attachment: fixed;">
    <!-- Navbar -->
    <input type="hidden" id="roomInput" value="{{$activeRoom ? $activeRoom->name : "null"}}">
    <input type="hidden" id="roomId" value="{{$activeRoom ? $activeRoom->id : "null"}}">
    <input type="hidden" id="app_url" value="{{env('APP_URL')}}">

    <nav class="bg-black p-4">
        <div class="container mx-auto flex justify-between items-center">
            <img src="{{asset('images/logo.png')}}" alt="Logo" width="120" class="rounded-full object-contain">
            <div>
                <h1 class=" px-4 font-bold text-2xl text-red-500">DC-metro IT HELP</h1>

            </div>
        </div>
    </nav>


    <!-- Main Content -->
    <div class="container mx-auto py-6">
        <div class="p-3 grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Column 1 -->
            <div class=" rounded shadow">

                <div class="border border-white grid grid-cols-1 md:grid-cols-3 bg-black text-white w-full shadow-lg rounded-lg p-10">
                    <!-- Column 1: Logo -->
                    <div class="hidden md:flex justify-center items-start">
                        <img src="{{asset('images/logo.png')}}" alt="Logo" class="h-32 w-32 rounded-full object-contain">
                    </div>

                    <!-- Column 2: Controls -->
                    <div class="col-span-3 md:col-span-2 flex-col justify-center px-4">
                        <div class="flex items-center justify-between">
                            <h2 class="text-2xl font-bold">Podcast Title</h2>
                            <button id="play-button" class="bg-blue-500 w-12 h-12 text-white rounded-full p-2">▶️</button>
                        </div>
                        <audio id="audio" src="https://stream.zeno.fm/cub84trbgy5tv" preload="metadata"></audio>

                        <!-- Timeline Display -->
                        <div class="mt-2">
                            <span id="current-time">0:00</span>
                            <progress id="progress-bar" value="0" max="100" class="w-full mt-1 h-2"></progress>
                        </div>

                        <div class="flex items-center mt-2 w-32">
                            <input type="range" id="volume-control" class="w-full" min="0" max="100" value="50" />
                            <span id="volume-label" class="ml-2">50%</span>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Column 2 -->
            <div class="bg-white p-2 rounded shadow md:w-[70%] ml-auto">
                <h2 class="text-xl font-bold mb-2">Podcasts</h2>
                @if ($podcasts->count()>0)
                <div style="max-height: 300px; overflow-x:auto;">
                    @foreach ( $podcasts as $podcast )
                    <div class="flex mb-4 justify-start gap-3 ">
                        <img style="aspect-ratio: 16/9;" class=" object-cover w-1/2" src="{{ asset('storage/' . $podcast->thumbnail) }}" alt="{{ $podcast->title }} Thumbnail ">
                        <div class="flex flex-col justify-start  w-full ">
                            <div class="flex justify-between w-full ">
                                <b>{{$podcast->title}}</b>
                                <a class="underline text-indigo-500" target="_blank" href="{{$podcast->link}}">Watch</a>
                            </div>
                            <ul class="flex gap-3 text-xl text-blue-500">
                                <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($podcast->link) }}" class="hover:text-blue-700"><i class="bi bi-facebook"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/intent/tweet?text=my share text&amp;url={{ urlencode($podcast->link) }}" class="hover:text-blue-700"><i class="bi bi-twitter"></i></a></li>
                                <li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ urlencode($podcast->link) }}&amp;title=my share text&amp;summary=dit is de linkedin summary" class="hover:text-blue-700"><i class="bi bi-linkedin"></i></a></li>
                                <li><a target="_blank" href="https://wa.me/?text={{ urlencode($podcast->link) }}" class="hover:text-blue-700"><i class="bi bi-whatsapp"></i></a></li>
                            </ul>


                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>

    <div class="w-full py-2">
        <p class="scrolling-text text-white text-2xl font-bold px-4">
            This is the scrolling text that keeps moving from right to left continuously across the screen. Keep watching it as it loops!
        </p>
    </div>
    <style>
        .scrolling-text {
            white-space: nowrap;
            overflow: hidden;
            display: block;
            animation: scroll-left 25s linear infinite;
        }

        @keyframes scroll-left {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }
    </style>
    <script>
        const audio = document.getElementById('audio');
        const playButton = document.getElementById('play-button');
        const volumeControl = document.getElementById('volume-control');
        const volumeLabel = document.getElementById('volume-label');
        const progressBar = document.getElementById('progress-bar');
        const currentTimeLabel = document.getElementById('current-time');

        // Play/Pause functionality
        playButton.addEventListener('click', () => {
            if (audio.paused) {
                audio.play();
                playButton.textContent = '❚❚'; // Change to pause icon
            } else {
                audio.pause();
                playButton.textContent = '▶️'; // Change to play icon
            }
        });

        // Update current time and progress bar
        audio.addEventListener('timeupdate', () => {
            currentTimeLabel.textContent = formatTime(audio.currentTime);
            if (audio.duration) {
                progressBar.value = (audio.currentTime / audio.duration) * 100; // Update progress based on current time and duration
            }
        });

        // Format time in mm:ss
        function formatTime(seconds) {
            const minutes = Math.floor(seconds / 60);
            const secs = Math.floor(seconds % 60);
            return `${minutes}:${secs < 10 ? '0' : ''}${secs}`;
        }

        // Volume control functionality
        volumeControl.addEventListener('input', () => {
            audio.volume = volumeControl.value / 100; // Set volume as a fraction
            volumeLabel.textContent = `${volumeControl.value}%`;
        });
    </script>




    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!--  <script src='{{asset("agora/vendor/jquery-3.4.1.min.js")}}'></script> -->
    <script src='{{asset("agora/vendor/bootstrap.bundle.min.js")}}'></script>
    <script src='{{asset("agora/AgoraRTC_N-4.20.1.js")}}'></script>
    <script src='{{asset("agora/index.js")}}'></script>

</body>

</html>