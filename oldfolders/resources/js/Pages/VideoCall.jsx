import { useState, useEffect } from "react";
import {
    config,
    useClient,
    useMicrophoneAndCameraTracks,
    // channelName,
} from "./settings.js";
import { Grid } from "@material-ui/core";
import Video from "./Video.jsx";
import Controls from "./Controls.jsx";
import axios from "axios";

export default function VideoCall(props) {
    const { setInCall, channelName,roomId } = props;

    const [users, setUsers] = useState([]);
    const [start, setStart] = useState(false);
    const client = useClient();
    const { ready, tracks } = useMicrophoneAndCameraTracks();

    useEffect(() => {
        let init = async (name) => {
            client.on("user-published", async (user, mediaType) => {
                await client.subscribe(user, mediaType);
                if (mediaType === "video") {
                    setUsers((prevUsers) => {
                        return [...prevUsers, user];
                    });
                }
                if (mediaType === "audio") {
                    user.audioTrack.play();
                }
            });

            client.on("user-joined", async (users) => {
              console.log(client.remoteUsers.length)
              console.log(typeof(client.remoteUsers.length))
                await axios
                    .patch(
                        `${
                            import.meta.env.VITE_BACKEND_URL
                        }/api/rooms/${roomId}`,
                        {
                          connected: client.remoteUsers.length,
                        }
                    )
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
              console.log(client.remoteUsers.length)
              console.log(typeof(client.remoteUsers.length))
                await axios
                    .patch(
                        `${
                            import.meta.env.VITE_BACKEND_URL
                        }/api/rooms/${roomId}`,
                        {
                          connected: client.remoteUsers.length,
                        }
                    )
                    .then((response) => {
                        console.log(response);
                    })
                    .catch((error) => {
                        console.log(error);
                    });
                console.log(users);
                console.log("=====left=====");
                console.log(client.remoteUsers);
                console.log("======left====");
            });

            client.on("user-unpublished", (user, mediaType) => {
                if (mediaType === "audio") {
                    if (user.audioTrack) user.audioTrack.stop();
                }
                if (mediaType === "video") {
                    setUsers((prevUsers) => {
                        return prevUsers.filter(
                            (User) => User.uid !== user.uid
                        );
                    });
                }
            });

            client.on("user-left", (user) => {
                setUsers((prevUsers) => {
                    return prevUsers.filter((User) => User.uid !== user.uid);
                });
            });

            try {
                await client.join(config.appId, name, config.token, null);
            } catch (error) {
                console.log("error");
            }

            if (tracks) await client.publish([tracks[0], tracks[1]]);
            setStart(true);
        };

        if (ready && tracks) {
            try {
                init(channelName);
            } catch (error) {
                console.log(error);
            }
        }
    }, [channelName, client, ready, tracks]);

    return (
        <Grid container direction="column" style={{ height: "100%" }}>
            {/* <Grid item style={{ height: "5%" }}> */}
            {ready && tracks && (
                <Controls
                    tracks={tracks}
                    setStart={setStart}
                    setInCall={setInCall}
                />
            )}
            {/* </Grid> */}
            <Grid
                item
                style={{
                    height: "100%",
                    justifyContent: "center",
                    alignItems: "center",
                    display: "flex",
                }}
            >
                {start && tracks && <Video tracks={tracks} users={users} />}
            </Grid>
        </Grid>
    );
}
