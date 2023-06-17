import React from "react";
import LinkedInIcon from "@material-ui/icons/LinkedIn";
 import GithubIcon from "@material-ui/icons/GitHub";
import "../styles/Footer.css";

function Footer(){
    return(
        <div className="footer">
            <div className="socialMedia">
                <a href="https://nl.linkedin.com/in/nick-van-loo-37675b196"><LinkedInIcon /></a>
                <a href="https://github.com/NickvanLoo"><GithubIcon /></a>
            </div>
            <p>&copy; 2023 nickvanloo.nl</p>
        </div>
    )
}

export default Footer;