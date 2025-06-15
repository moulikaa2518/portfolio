import React from 'react';
import Body from "./Component/Body.jsx";
import Header from './Component/Header.jsx';
import Skills from './Component/Skills.jsx';
import Education from "./Component/Education.jsx"
import Contact from './Component/Contact.jsx';
import Certification from './Component/Certification.jsx';
import { createBrowserRouter, RouterProvider, Outlet } from "react-router"; 

const App = () => {

  function AppLayout() {
    return (
      <div>
        <Header/>
        <Outlet />
      </div>
    );
  }

  const r=createBrowserRouter([
    {
      path: "/",
      element: <AppLayout />, 
      children: [ 
        {
          path: "/", 
          element: <Body />
        },
        {
          path: "Skills",
          element: <Skills />
        },
        {
          path: "Contact",
          element: <Contact />
        },
        {
          path: "Certification",
          element: <Certification />
        },
         {
          path: "Education",
          element: <Education />
        },
      ]
    }
  ]);

  return (
    <div>
      <RouterProvider router={r} />
      {/* <Header/>
      <Body/> */}
    </div>
  );
};

export default App;
