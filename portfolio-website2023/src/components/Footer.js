import React from "react";
import LinkedInIcon from "@material-ui/icons/LinkedIn";
import GithubIcon from "@material-ui/icons/GitHub";
import EmailIcon from "@material-ui/icons/Email";
import "../styles/Footer.css";

function Footer() {
    const currentYear = new Date().getFullYear();
    return (
        <div className="footer">
            <div className="socialMedia">
                <a href="https://nl.linkedin.com/in/nick-van-loo-37675b196" aria-label="Mijn LinkedIn" target="_blank"><LinkedInIcon /></a>
                <a href="https://github.com/NickvanLoo" aria-label="Mijn Github pagina" target="_blank"><GithubIcon /></a>
                <a href="mailto:nick@nickvanloo.nl" aria-label="Neem contact met me op" target="_blank"><EmailIcon /></a>
            </div>
            <p>&copy; {currentYear} Nick van Loo. All Rights Reserved.</p>
        </div>
    )
}

export default Footer;