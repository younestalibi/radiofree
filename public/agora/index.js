// create Agora client
var client = AgoraRTC.createClient({ mode: "rtc", codec: "vp8" });
var localTracks = {
    // videoTrack: null,
    audioTrack: null,
};
var remoteUsers = {};
// Agora client options
var roomName = document.getElementById("roomInput").value;
var roomId = document.getElementById("roomId").value;
var app_url = document.getElementById("app_url").value;

var options = {
    appid: "64789cb143914522938e4d4a0a781dc3",
    channel: null,
    uid: null,
    token: null,
};

// ai-audio-control ai-audio-playing ai-audio-loading
// Get the element by class name
var audioControl = document.querySelector(".ai-audio-control");

// Attach the click event listener
audioControl.addEventListener("click", checkAriaPressed);
// the demo can auto join channel with params in url
// window.addEventListener("DOMContentLoaded", () => {
//     var urlParams = new URL(location.href).searchParams;
//     options.appid = urlParams.get("appid");
//     options.channel = urlParams.get("channel");
//     options.token = urlParams.get("token");
//     if (options.appid && options.channel) {
//         document.getElementById("appid").value = options.appid;
//         document.getElementById("token").value = options.token;
//         document.getElementById("channel").value = options.channel;
//         document.getElementById("join-form").submit();
//     }
// });

function checkAriaPressed() {
    var ariaPressedValue = this.getAttribute("aria-pressed");
    // alert("aria-pressed value is " + ariaPressedValue);
    if (roomName !== "null") {
        if (ariaPressedValue == "true") {
            leave();
            console.log("it stopped");
        } else {
            console.log(roomName)
            async function m() {
                try {
                    options.channel = roomName;
                    await join();
                } catch (e) {
                    console.log(e);
                }
            }
            m();
            console.log("it running");
        }
    }
}
// document
//     .getElementById("join-form")
//     .addEventListener("submit",
const jo = async () => {
    // e.preventDefault();
    // document.getElementById("join").setAttribute("disabled", true);
    try {
        // options.appid = document.getElementById("appid").value;
        // options.token = document.getElementById("token").value;
        // options.channel = document.getElementById("channel").value;
        await join();
        // if (options.token) {
        //     document.getElementById(
        //         "success-alert-with-token"
        //     ).style.display = "block";
        // } else {
        //     document
        //         .getElementById("success-alert")
        //         .querySelector("a")
        //         .setAttribute(
        //             "href",
        //             `index.html?appid=${options.appid}&channel=${options.channel}&token=${options.token}`
        //         );
        //     document.getElementById("success-alert").style.display =
        //         "block";
        // }
    } catch (error) {
        alert(error);
        console.error(error);
    }
    // finally {
    //     document.getElementById("leave").removeAttribute("disabled");
    // }
};
// );

// document.getElementById("leave").addEventListener("click", function (e) {
//     leave();
// });

async function join() {
    // add event listener to play remote tracks when remote user publishs.
    client.on("user-published", handleUserPublished);
    client.on("user-unpublished", handleUserUnpublished);
    client.on("user-joined", async (users) => {
        console.log(client.remoteUsers.length);
        console.log(typeof client.remoteUsers.length);
        await axios
            .patch(`${app_url}/api/rooms/${roomId}`, {
                connected: client.remoteUsers.length,
            })
            .then((response) => {
                console.log(response);
            })
            .catch((error) => {
                console.log(error);
            });
        console.log(users);
        console.log("===join=======");
        console.log(client.remoteUsers);
        console.log("=====join=====");
    });
    client.on("user-left", async (users) => {
        console.log(client.remoteUsers.length);
        console.log(typeof client.remoteUsers.length);
        console.log(`${app_url}/api/rooms/${roomId}`)
        await axios
            .patch(`${app_url}/api/rooms/${roomId}`, {
                connected: client.remoteUsers.length,
            })
            .then((response) => {
                alert(JSON.stringify(response))
                console.log(response);
            })
            .catch((error) => {
                alert(JSON.stringify(error))
                console.log(error);
            });
        console.log(users);
        console.log("=====left=====");
        console.log(client.remoteUsers);
        console.log("======left====");
    });
    // join a channel and create local tracks, we can use Promise.all to run them concurrently
    [options.uid, localTracks.audioTrack] = await Promise.all([
        // join the channel
        client.join(options.appid, options.channel, options.token || null),
        // create local tracks, using microphone and camera
        // AgoraRTC.createMicrophoneAudioTrack(),
        // AgoraRTC.createCameraVideoTrack()
    ]);

    // play local video track
    // localTracks.videoTrack.play("local-player");
    // document.getElementById(
    //     "local-player-name"
    // ).textContent = `localVideo(${options.uid})`;

    // publish local tracks to channel
    await client.publish(Object.values(localTracks));
    console.log("publish success");
}

async function leave() {
    for (var trackName in localTracks) {
        var track = localTracks[trackName];
        if (track) {
            track.stop();
            track.close();
            localTracks[trackName] = undefined;
        }
    }

    // remove remote users and player views
    remoteUsers = {};
    // document.getElementById("remote-playerlist").innerHTML = "";

    // leave the channel
    await client.leave();

    // document.getElementById("local-player-name").textContent = "";
    // document.getElementById("join").removeAttribute("disabled");
    // document.getElementById("leave").setAttribute("disabled", true);
    console.log("client leaves channel success");
}

async function subscribe(user, mediaType) {
    const uid = user.uid;
    // subscribe to a remote user
    await client.subscribe(user, mediaType);
    console.log("subscribe success");
    // if (mediaType === "video") {
    //     const playerWrapper = document.createElement("div");
    //     playerWrapper.id = `player-wrapper-${uid}`;
    //     playerWrapper.innerHTML = `
    //   <p class="player-name">remoteUser(${uid})</p>
    //   <div id="player-${uid}" class="player"></div>
    // `;
    //     document.getElementById("remote-playerlist").appendChild(playerWrapper);
    //     // user.videoTrack.play(`player-${uid}`);
    // }
    if (mediaType === "audio") {
        user.audioTrack.play();
    }
}

function handleUserPublished(user, mediaType) {
    const id = user.uid;
    remoteUsers[id] = user;
    subscribe(user, mediaType);
    console.log(`${app_url}/api/rooms/${roomId}`)

}

function handleUserUnpublished(user) {
    const id = user.uid;
    delete remoteUsers[id];
    // const playerWrapper = document.getElementById(`player-wrapper-${id}`);
    // if (playerWrapper) {
    //     playerWrapper.remove();
    // }
}
