import React from "react";
import ProjectItem from "../components/ProjectItem";
import "../styles/Project.css";
import MijnGithub from "../assets/GitHub.png";
//import GithubIcon from "@material-ui/icons/GitHub";

function Projects() {
    return (
        <div className="projects">
            <h1>Mijn Projecten</h1>
            <div className="projectList">
                <a href="https://github.com/NickvanLoo" aria-label="Mijn Github pagina" target="_blank">
                <ProjectItem name="Mijn Github" image={MijnGithub} />
                </a>
            </div>
        </div>
    )
}

export default Projects;