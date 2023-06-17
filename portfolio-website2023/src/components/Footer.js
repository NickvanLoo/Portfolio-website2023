import React from "react";
import LinkedInIcon from "@material-ui/icons/LinkedIn";
// import GitHubIcon from "@material-ui/icons/GitHubIcon";
import "../styles/Footer.css";

function Footer(){
    return(
        <div className="footer">
            <div className="socialMedia">
                <a href="https://nl.linkedin.com/in/nick-van-loo-37675b196"><LinkedInIcon /></a>
                {/* <a href=""><GitHubIcon /></a> */}
            </div>
            <p>&copy; 2023 nickvanloo.nl</p>
        </div>
    )
}

export default Footer;