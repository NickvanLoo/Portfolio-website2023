import React from "react";
import {
    VerticalTimeline,
    VerticalTimelineElement,
} from "react-vertical-timeline-component";
import "react-vertical-timeline-component/style.min.css";
import SchoolIcon from "@material-ui/icons/School";
import WorkIcon from "@material-ui/icons/Work";

function Experience() {
    return (
        <div className="experience">
            <VerticalTimeline lineColor="#3e497a">
                <VerticalTimelineElement
                    className="vertical-timeline-element--education"
                    date="2017 - 2019"
                    iconStyle={{ background: "#3e497a", color: "#fff" }}
                    icon={<SchoolIcon />}
                >
                    <h3 className="vertical-timeline-element-title">Medewerker Beheer ICT - Alfa-college</h3>
                    <p>Opleiding Mederwerker Beheer ICT MBO niveau 3 op het Alfa-college te Groningen.</p>
                </VerticalTimelineElement>
                <VerticalTimelineElement
                    className="vertical-timeline-element--work"
                    date="feb. 2019 - jul. 2019"
                    iconStyle={{ background: "#3e497a", color: "#fff" }}
                    icon={<WorkIcon />}
                >
                    <h3 className="vertical-timeline-element-title">Stagiair ICT-Helpdeskmedewerker - Capgemini</h3>
                    <p>Ik heb voor de niveau 3 opleiding een halfjaar stage gelopen bij Capgemini, bij een ICT-servicepunt in Groningen.</p>
                </VerticalTimelineElement>
                <VerticalTimelineElement
                    className="vertical-timeline-element--education"
                    date="2019 - 2022"
                    iconStyle={{ background: "#3e497a", color: "#fff" }}
                    icon={<SchoolIcon />}
                >
                    <h3 className="vertical-timeline-element-title">Applicatie- en mediaontwikelaar - Alfa-college</h3>
                    <p>Opleiding Applicatie- en mediaontwikelaar MBO niveau 4 op het Alfa-college te Groningen.</p>
                </VerticalTimelineElement>
                <VerticalTimelineElement
                    className="vertical-timeline-element--work"
                    date=" sep. 2020 - feb. 2021"
                    iconStyle={{ background: "#3e497a", color: "#fff" }}
                    icon={<WorkIcon />}
                >
                    <h3 className="vertical-timeline-element-title">Stagiair Software Developer - A.A.P. Verzekeringen</h3>
                    <p>Ik heb bij A.A.P. Verzekeringen de 1e stage voor de niveau 4 opleiding gedaan.</p>
                </VerticalTimelineElement>
                <VerticalTimelineElement
                    className="vertical-timeline-element--work"
                    date="feb. 2022 - jul. 2022"
                    iconStyle={{ background: "#3e497a", color: "#fff" }}
                    icon={<WorkIcon />}
                >
                    <h3 className="vertical-timeline-element-title">Stagiair Software Developer - Werken met Merken</h3>
                    <p>Ik heb bij Werken met Merken B.V. de eindstage voor de niveau 4 opleiding gedaan.</p>
                </VerticalTimelineElement>
                <VerticalTimelineElement
                    className="vertical-timeline-element--work"
                    date="feb. 2023 - heden"
                    iconStyle={{ background: "#3e497a", color: "#fff" }}
                    icon={<WorkIcon />}
                >
                    <h3 className="vertical-timeline-element-title">ICT-Helpdeskmedewerker - WerkPro</h3>
                    <p>ICT-Helpdeskmedewerker bij WerkPro.</p>
                </VerticalTimelineElement>
            </VerticalTimeline>
        </div>
    )
}

export default Experience