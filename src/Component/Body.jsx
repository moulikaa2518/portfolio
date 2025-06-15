import React from 'react'
import { GrStar } from "react-icons/gr";
const Body = () => {
  
  return (
    <div>
    <div className='body'>
      <div className='bo'>
     <p className='name'>Hello,I'm Moulikaa</p>
     <p>A passionate and curious learner currently in my 3rd year of BSC-Information Technology at PSG College of arts and science.I'm dedicated to becoming a top-tier Front-End Developer. Driven by creativity and a passion for user-centric design, I merge intuitive interfaces with seamless functionality. Eager to learn, grow, and craft modern, responsive, and accessible web experiences that empower users and shape the digital future.</p>
    </div>
  <div> <img src='./me.jpeg' alt='image'  className='me'></img></div>
    </div>
<div className='bb'>
{/* EDUCATION */}
      <div class="color">
        <hr></hr>
       <center><h2 >Education</h2></center> 
      <div class="e">
        
        <div class="edu" id='f'>
            <h3>Alagiri Suresh Government High School,Alangombu</h3>
            <p>Year of passing   -- 2020 TO 2021</p>
            <p>Percentage</p>
              <input type="text" placeholder="All Pass"></input>
        </div>
         <div class="edu" id='f'>
            <h3>Government High School, Sirumugaiputhur</h3>
            <p>Year of passing   -- 2022 TO 2023</p>
            <p>Percentage</p>
            <input type="text" placeholder="82%"></input>
        </div>
        <div class="edu" id='f'>
            <h3>PSG College Of Arts And Science</h3>
            <p>Year of passing   -- 2023 TO 2026</p>
            <p>Percentage</p>
             <select id="score" name="score">
            <option value="">sem </option>
            <option value="sem1">sem1 -79.5</option>
            <option value="sem2">sem2 -</option>
            <option value="sem3">sem3 -</option>
            <option value="sem4">sem4 -84.65</option>
        </select>
        </div>
      </div>
      </div>

    {/* SKILLS */}

     <div class="color">
      <hr></hr>
       <center><h2 >Skills</h2></center> 
    <div class="skill">
       
      <div class="la" id='f'>
        <h3>LANGUAGE</h3>
        <p>HTML 5</p>
        <p>CSS</p>
        <p>JavaScript</p>
        <p>TypeScript</p>
        <p>React</p>
        <p>Python(Basic)</p>
        <p>Core Java</p>
      </div>
      <div class="la" id='f'>
        <h3>FRAMEWORKS</h3>
        <p>Tailwind</p>
        <p>Bootstrap</p>
      </div>
       <div class="la" id='f'>
        <h3>TOOLS </h3>
        <p>MS Excel</p>
        <p>Canva Designing</p>
        <p>Artificial Inteligence</p>
        <p>Power BI</p>
    </div>
    </div>
    <center>
      <div class="la" id='f'>
      <h3>Soft Skills</h3>
      <p>Communication</p>
      <p>Team Work</p>
      <p>Adaptability</p>
      </div>
      </center>
</div>

{/* CERTIFICATION */}
<hr></hr>
<section class="certificates-section" id="certificates">
  <h2>My Certificates</h2>
  <div class="certificates-grid">
    <div class="certificate-card">
      <img src="./nptl.jpeg" alt="React Certificate"></img>
      <h3>NPTL- SoftSkill</h3>
      <a href="./nptl.jpeg" target="_blank">View Certificate</a>
    </div>

    <div class="certificate-card">
      <img src="./web.jpeg" alt="JavaScript Certificate"></img>
      <h3>Web Designing</h3>
      <a href="/web.jpeg" target="_blank">View Certificate</a>
    </div>

    <div class="certificate-card">
      <img src="./work.jpeg" alt="Workshop"></img>
      <h3>Work shop</h3>
      <a href="./work.jpeg" target="_blank">View Certificate</a>
    </div>

    <div class="certificate-card">
      <img src="./ai_stu.jpeg" alt="Git & GitHub Certificate"></img>
      <h3>Visual Studio</h3>
      <a href="./ai_stu.jpeg" target="_blank">View Certificate</a>
    </div>
  </div>
</section>

 { /*contact*/}
 <hr></hr>
 <center>
       <div>
  <div class="contact-details">
    <h2>Contact Me</h2>
    <p><strong>Name:</strong> Moulikaa SN</p>
    <p><strong>Email:</strong> <a href="moulikaamouli18@gmail.com">moulikaamouli18@gmail.com</a></p>
    <p><strong>GitHub:</strong> <a href="https://github.com/moulikaa2518" target="_blank">https://github.com/moulikaa2518</a></p>
    <p><strong>LinkedIn:</strong> <a href="www.linkedin.com/in/moulikaa-sn-012434272" target="_blank">www.linkedin.com/in/moulikaa-sn-012434272</a></p>
    {/* <p><strong>Resume:</strong> <a href="Your_Resume_Link.pdf" download>Download Resume</a></p> */}
  </div>
      </div>
      </center>

</div>
</div>
  )
}

export default Body
