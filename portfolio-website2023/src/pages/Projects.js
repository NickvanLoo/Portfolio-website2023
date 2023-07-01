import React from "react";
import ProjectItem from "../components/ProjectItem";
import "../styles/Project.css";
import MijnGithub from "../assets/GitHub.png";
//import GithubIcon from "@material-ui/icons/GitHub";

function Projects() {
    return (
        <div className="projects">
            <h1>Mijn Projecten</h1>
            <h3>Deze pagina is nog in ontwikkeling!</h3>
            <div className="projectList">
                <a href="https://github.com/NickvanLoo" target="_blank">
                <ProjectItem name="Mijn github" image={MijnGithub} />
                </a>
            </div>
        </div>
    )
}

export default Projects;