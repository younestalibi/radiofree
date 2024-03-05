import { useEffect, useState } from "react";
import { useLocation, useNavigate, useParams } from "react-router-dom";
import VideoCall from "./VideoCall";
import { Button } from "@mui/material";
import Alert from "./Alert";

import React from "react";
import Dialog from "@mui/material/Dialog";
import DialogTitle from "@mui/material/DialogTitle";
import DialogContent from "@mui/material/DialogContent";
import TextField from "@mui/material/TextField";
import axios from "axios";
const Stream = () => {
    const { room, passwordLink,id } = useParams();
    const [inCall, setInCall] = useState(false);
    const [channelName, setChannelName] = useState(null);
    const location = useLocation();
    const [openPopup, setOpenPopup] = useState(true);
    const [enteredValue, setEnteredValue] = useState("");
    const [open, setOpen] = useState(true);
    const [permission, setPermission] = useState(false);
    const navigate = useNavigate();
    const [inputValue, setInputValue] = useState(passwordLink);

    const handleClose = () => {
        setOpen(!open);
        setInputValue("");
    };

    const handleSubmit = () => {
        if (location.state != null) {
            if (inputValue == location.state.password) {
                setPermission(true);
                handleClose(!open);
            } else {
                alert("The password is not correct! try again.");
            }
        } else {
            // if (inputValue == 123) {
            //     setPermission(true);
            //     handleClose(!open);
            // } else {
            //     alert("The password is not correct! try again.");
            // }

            const postData = {
                name: room,
                password: inputValue,
            };

            axios
                .post(
                    `${import.meta.env.VITE_BACKEND_URL}/api/verify`,
                    postData
                )
                .then((response) => {
                    if (response.data.answer) {
                        setPermission(true);
                        handleClose(!open);
                    } else {
                        alert("The password is not correct! try again.");
                    }
                })
                .catch((error) => {
                    alert("Error:", error.message);
                });
        }
    };

    return (
        <>
            {permission ? (
                <VideoCall roomId={id} channelName={room} setInCall={setInCall} />
            ) : (
                <div>
                    <Dialog open={open} onClose={handleClose}>
                        <DialogTitle>Enter Password</DialogTitle>
                        <DialogContent>
                            <TextField
                                label="Value"
                                variant="outlined"
                                value={inputValue}
                                onChange={(e) => setInputValue(e.target.value)}
                            />
                        </DialogContent>
                        <div style={{ padding: "16px", textAlign: "center" }}>
                            <Button
                                variant="contained"
                                color="primary"
                                onClick={handleSubmit}
                            >
                                Submit
                            </Button>
                        </div>
                    </Dialog>
                </div>
            )}
        </>
    );
    // <div>
    //   <Dialog open={open} onClose={handleClose}>
    //     <DialogTitle>Enter Value</DialogTitle>
    //     <DialogContent>
    //       <TextField
    //         label="Value"
    //         variant="outlined"
    //         value={inputValue}
    //         onChange={(e) => setInputValue(e.target.value)}
    //       />
    //     </DialogContent>
    //     <div style={{ padding: "16px", textAlign: "center" }}>
    //       <Button variant="contained" color="primary" onClick={handleSubmit}>
    //         Submit
    //       </Button>
    //     </div>
    //   </Dialog>
    // </div>

    //   };
    //   return (
    // <VideoCall channelName={room} setInCall={setInCall} />
    //   );
};

export default Stream;
