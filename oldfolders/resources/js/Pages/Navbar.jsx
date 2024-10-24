// Navbar.js

import React, { useState } from "react";
import {
  AppBar,
  Toolbar,
  Typography,
  IconButton,
  Drawer,
  List,
  ListItem,
  ListItemText,
} from "@mui/material";
import CardMedia from "@mui/material/CardMedia";

import logo from "./assets/logo.png";
import MenuIcon from "@mui/icons-material/Menu";
import { Image } from "@mui/icons-material";

const Navbar = () => {
  const [drawerOpen, setDrawerOpen] = useState(false);

  const toggleDrawer = (open) => () => {
    setDrawerOpen(open);
  };

  return (
    <div>
      <AppBar style={{ backgroundColor:"black" }} position="static" >
        <Toolbar style={{ display:"flex",justifyContent:'space-between' }}>
          {/* <IconButton
            size="large"
            edge="start"
            color="inherit"
            aria-label="menu"
            onClick={toggleDrawer(true)}
          > */}
          <CardMedia
            component="img"
            alt="Card Image"
            style={{margin:"5px", width:"60px",objectFit:'contain' }}
        
            image={logo}
          />
          <CardMedia />
          <Typography style={{ color:'#f60f5d' }} textAlign={"right"}  variant="h6" component="div" sx={{ flexGrow: 1 }}>
            Voice of Somalia - Country and Abroad
          </Typography>
        </Toolbar>
      </AppBar>

      <Drawer anchor="left" open={drawerOpen} onClose={toggleDrawer(false)}>
        <List>
          {["Home", "About", "Contact"].map((text, index) => (
            <ListItem button key={text} onClick={toggleDrawer(false)}>
              <ListItemText primary={text} />
            </ListItem>
          ))}
        </List>
      </Drawer>
    </div>
  );
};

export default Navbar;
