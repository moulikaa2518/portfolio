import React from 'react'

const Education = () => {
     const backgroundStyle = {
    backgroundImage: "url('./b.avif')",
    backgroundSize: 'cover',
    backgroundPosition: 'center',
    height: '100vh',
    width: '100%',
  };
   
  return (
    <div>
         <div style={backgroundStyle}>
       <div class="color">
      <div class="e">
        <div class="edu">
            <h3>Alagiri Suresh Government High School,Alangombu</h3>
            <p>Year of passing   -- 2020 TO 2021</p>
            <p>Percentage</p>
              <input type="text" placeholder="All Pass"></input>
        </div>
         <div class="edu">
            <h3>Government High School, Sirumugaiputhur</h3>
            <p>Year of passing   -- 2022 TO 2023</p>
            <p>Percentage</p>
            <input type="text" placeholder="82%"></input>
        </div>
        <div class="edu">
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
</div>
    </div>
  )
}

export default Education
