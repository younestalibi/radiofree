// Footer.js

import React from "react";
import { Typography, Container, Link, IconButton, Grid } from "@mui/material";
import { FacebookSharp, LinkedIn } from "@mui/icons-material";
// import FacebookIcon from '@mui/icons-material/Facebook';
// import TwitterIcon from '@mui/icons-material/Twitter';
// import LinkedInIcon from '@mui/icons-material/LinkedIn';

const Footer = () => {
  return (
    <footer
      style={{ marginTop: "auto", backgroundColor: "#f0f0f0", padding: "20px" }}
    >
      <Container>
        <Typography variant="h6">radiofreesom.com</Typography>
        <Grid container spacing={2} alignItems="center">
          <Grid item>
            {/* <IconButton
              color="primary"
              component={Link}
              href="#"
              target="_blank"
            > */}
              <FacebookSharp color="primary"/>
            {/* </IconButton> */}
            {/* <IconButton
              color="primary"
              component={Link}
              href="#"
              target="_blank"
            > */}
              <LinkedIn color="primary"/>
            {/* </IconButton> */}
          </Grid>
        </Grid>

        <Typography variant="body2" color="textSecondary">
          &copy; {new Date().getFullYear()} All rights reserved. | Terms of
          Service | Privacy Policy
        </Typography>
        <Typography variant="body2" color="textSecondary">
          Designed with ❤️ by radiofreesom
        </Typography>
      </Container>
    </footer>
  );
};

export default Footer;
