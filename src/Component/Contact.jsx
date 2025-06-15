import React from 'react'

const Contact = () => {
    const backgroundStyle = {
    backgroundImage: "url('./b3.webp')",
    backgroundSize: 'cover',
    backgroundPosition: 'center',
    height: '100vh',
    width: '100%',
  };
  return (
    <div className='al'>
      <center>
      <div style={backgroundStyle}>
      {/* <div className='co'>
        <div class="con">
            <div><p>Name:</p>
            <p class='c1'>Moulikaa SN</p></div>
            <div><p>Department:</p>
            <p class='c1'>Bsc-Information Technology</p></div>
            <div><p>Email     :</p>
            <p class="c1">moulikaamouli18@gmail.com</p></div></div>
            <div>
           <div> <p>LinkedIn  :</p>
            <p class='c1'><a href='www.linkedin.com/in/moulikaa-sn-012434272'>www.linkedin.com/in/moulikaa-sn-012434272</a></p></div>
            <div>
            <p>Github    :</p>
           <p class='c1'><a href='https://github.com/moulikaa2518'>https://github.com/moulikaa2518</a></p></div>
           <div >
           <p>Resume     :</p>
           <p class='c1'><a href=''></a></p></div></div>
      </div> */}
      {/* <section class="contact-section" id="contact"> */}
  
  <div className='t'>
  <div class="contact-details">
    <h2>Contact Me</h2>
    <p><strong>Name:</strong> Moulikaa SN</p>
    <p><strong>Email:</strong> <a href="moulikaamouli18@gmail.com">moulikaamouli18@gmail.com</a></p>
    <p><strong>GitHub:</strong> <a href="https://github.com/moulikaa2518" target="_blank">https://github.com/moulikaa2518</a></p>
    <p><strong>LinkedIn:</strong> <a href="www.linkedin.com/in/moulikaa-sn-012434272" target="_blank">www.linkedin.com/in/moulikaa-sn-012434272</a></p>
    {/* <p><strong>Resume:</strong> <a href="Your_Resume_Link.pdf" download>Download Resume</a></p> */}
  </div>
      </div>
      </div>
      </center>
      
  </div>
  )
}

export default Contact

