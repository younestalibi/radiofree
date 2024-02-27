import { useEffect, useState } from "react";
// import { Button } from "@material-ui/core";
// import VideoCall from "./VideoCall";
import Home from "./Home";
import { BrowserRouter as Router, Route, Routes, useParams } from 'react-router-dom';
import Stream from "./Stream";
import Audio from "./Audio";


function App() {
  const [inCall, setInCall] = useState(false);
  // const [channelName, setChannelName] = useState(null);

  // useEffect(()=>{
  //   console.log(inCall)
  //   console.log(channelName)
  // },[inCall])
  // gq3W_pBTGOUUjKKKMQyXw  id
  // cKg1CoBd0thxy57csI735VIk3UDSjNvg  pass
  return (
    // <div  className="App" style={{ height: "100%" }}>
      
    //   {inCall ? (
    //     <VideoCall channelName={channelName} setInCall={setInCall} />
    //   ) : (
    //     <Home setChannelName={setChannelName}  inCall={inCall} setInCall={setInCall} />
    //     // <Button
    //     //   variant="contained"
    //     //   color="primary"
    //     //   onClick={() => setInCall(true)}
    //     // >
    //     //   Join Call
    //     // </Button>
    //   )}
    // </div>
    <Router>
      <Routes>
        {/* Route for / with or without query parameter */}
        <Route path="/"  element={<Audio/>} />
        <Route path="/rooms"  element={<Home/>} />
        <Route path="/room/:room/:passwordLink?"  element={<Stream/>} />
        <Route path="*" element={<Audio/>} />

        {/* Add more routes as needed */}
      </Routes>
    </Router>
  );
}

export default App;
