import React from "react";
import LinkedInIcon from "@material-ui/icons/LinkedIn";
import EmailIcon from "@material-ui/icons/Email";
import GithubIcon from "@material-ui/icons/GitHub";
import "../styles/Home.css";

function Home(){
    return(
        <div className="home">
            <div className="about">
                <h2>Hallo, mijn naam is Nick van Loo</h2>
                <div className="prompt">
                    <p>Ik ben een ICT-er.</p>
                    <a href="https://nl.linkedin.com/in/nick-van-loo-37675b196" target="_blank"><LinkedInIcon /></a>
                    <a href="https://github.com/NickvanLoo" target="_blank"><GithubIcon /></a>
                    <a href="mailto:nick@nickvanloo.nl" target="_blank"><EmailIcon /></a>
                </div>
            </div>
            <div className="skills">
             <h1>Vaardigheden</h1>
             <ol className="list">
                <li className="item"></li>
                <h2>ICT Beheer:</h2>
                <span>Onder andere: Windows 10, Windows 11, Windows Server, Android, Microsoft 365, ADUC</span>
             </ol>
             <ol className="list">
                <li className="item"></li>
                <h2>Programmeertalen en tools:</h2>
                <span>Onder andere: HTML, CSS, Bootstrap, Javascript, PHP, MySQL, Laravel, React, Joomla CMS, Wordpress, Github, Visual Studio Code</span>
             </ol>
            </div>
        </div>
    )
}

export default Home