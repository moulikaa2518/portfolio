import React from 'react'
import {Link} from "react-router"
const App = () => {
  return (
    <div>
    <div className='menu'>
      <p>Moulikaa Portfolio</p>
      <div className='navg'>
        <Link to='/' className='h'>Home</Link>
        <Link to="/Skills" className='h'>Skills</Link>
        <Link to="/Education" className='h'>Education</Link>
        <Link to="/Certification" className='h'>Certification</Link>
        <Link to="/Contact" className='h'>Contact</Link>
        </div>
    </div>
   
    </div>
  )
}

export default App
