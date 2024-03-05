import { AgoraVideoPlayer } from "agora-rtc-react";
import { Grid } from "@material-ui/core";
import { useState, useEffect } from "react";
import Card from '@mui/material/Card';

export default function Video(props) {
  const { users, tracks } = props;
  const [gridSpacing, setGridSpacing] = useState(12);

  useEffect(() => {
    setGridSpacing(Math.max(Math.floor(12 / (users.length + 1)), 4));

  }, [users, tracks]);

  return (
    <Grid container spacing={4} style={{ height: "100%"}}>
      <Grid item xs={12} sm={gridSpacing}>
        <AgoraVideoPlayer
          videoTrack={tracks[1]}
          style={{ height: "100%", width: "100%"}}
        />
      </Grid>
      {users.length > 0 &&
        users.map((user,i) => {
          if (user.videoTrack) {
            return (
              <Grid key={i} item xs={users.length>1?6:12} sm={gridSpacing}>
                {/* <Card> */}
                <AgoraVideoPlayer
                  videoTrack={user.videoTrack}
                  key={user.uid}
                  style={{ height: "100%", width: "100%" }}
                />
                {/* </Card> */}
              </Grid>
            );
          } else return null;
        })}
    </Grid>
  );
}
