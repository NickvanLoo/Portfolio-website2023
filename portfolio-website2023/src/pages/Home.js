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
                    <LinkedInIcon />
                    <EmailIcon />
                    <GithubIcon />
                </div>
            </div>
            <div className="skills">
             <h1>Vaardigheden</h1>
             <ol className="list">
                <li className="item"></li>
                <h2>Programmeertalen en tools:</h2>
                <span>HTML, CSS, Bootstrap, Javascript, PHP, MySQL, Laravel, Joomla CMS, Github, Visual Studio Code</span>
             </ol>
            </div>
        </div>
    )
}

export default Home