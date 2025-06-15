import React from 'react'

const Certification = () => {
  return (
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

  )
}

export default Certification
