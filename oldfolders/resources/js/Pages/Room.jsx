import React from 'react';
import Card from '@mui/material/Card';
import CardContent from '@mui/material/CardContent';
import CardMedia from '@mui/material/CardMedia';
import Typography from '@mui/material/Typography';
import DefaultImage from './assets/default.png'
import { useNavigate } from 'react-router-dom';
const Room = (props) => {
  const {image,created,roomId,name,description,password ,inCall,setChannelName}=props;
  const navigate=useNavigate()
  const handleRoomChange = () => {
    navigate(`/room/${name}/${roomId}`, { state: { password } })
    // setInCall(!inCall);
  };
  return (
    <Card onClick={()=>{handleRoomChange()}}>
      {/* Image */}
      <CardMedia
        component="img"
        alt="Card Image"
        height="140"
        image={image?image:DefaultImage}
      />
      {/* Content */}
      <CardContent>
        {/* Title */}
        <Typography variant="h5" component="div">
          {name}
        </Typography>

        {/* Description */}
        <Typography variant="body2" color="text.secondary">
          {description}
        </Typography>
      </CardContent>
    </Card>
  );
};

export default Room;
