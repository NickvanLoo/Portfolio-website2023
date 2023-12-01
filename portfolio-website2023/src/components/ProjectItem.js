import React from "react";

function ProjectItem({ image, name }) {
    return (
        <div className="projectItem">
         {/* <div style={{backgroundImage: 'url($'}} className="bgImage" /> */}
            <h1> {name} </h1>
            <img src={image}></img>
        </div>
    )
}

export default ProjectItem;