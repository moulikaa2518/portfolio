import React from 'react'
import { GrStar } from "react-icons/gr";
const Skills = () => {
   const backgroundStyle = {
    backgroundImage: "url('./b1.webp')",
    backgroundSize: 'cover',
    backgroundPosition: 'center',
    maxheight: '200vh',
    width: '100%',
  };
  return (
    <div>
       <div style={backgroundStyle}>
         <div class="color">
    <div class="skill">
      <div class="la">
        <h3>LANGUAGE</h3>
        <p><GrStar />HTML 5</p>
        <p><GrStar />CSS</p>
        <p><GrStar />JavaScript</p>
        <p><GrStar />TypeScript</p>
        <p><GrStar />React</p>
        <p><GrStar />Python(Basic)</p>
        <p><GrStar />Core Java</p>
      </div>
      <div class="la">
        <h3>FRAMEWORKS</h3>
        <p><GrStar />Tailwind</p>
        <p><GrStar />Bootstrap</p>
      </div>
       <div class="la">
        <h3>TOOLS </h3>
        <p><GrStar />MS Excel</p>
        <p><GrStar />Canva Designing</p>
        <p><GrStar />Artificial Inteligence</p>
        <p><GrStar />Power BI</p>
    </div>
    </div>
    <center>
      <div class="la">
      <h3>Soft Skills</h3>
      <p><GrStar />Communication</p>
      <p><GrStar />Team Work</p>
      <p><GrStar />Adaptability</p>
      </div>
      </center>
</div>
    </div>
    </div>
  )
}

export default Skills
