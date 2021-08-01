// index.jsx
import React from 'react';
import ReactDOM from 'react-dom';
import Apps from './App';
import {BrowserRouter} from 'react-router-dom'
//step 1 -> import BrowserRouter

ReactDOM.render(
  <>
  <BrowserRouter> <Apps/>  </BrowserRouter>
</>
,document.getElementById('root'));




// App.jsx
import React from "react";
import {Route,Switch} from "react-router-dom";
import About from "./components/About";
import Contact from "./components/Contact";
import Menue from "./components/Menu";


function Apps(){
  return(
    <>
    <Menue/>
      <Switch>
      <Route path="/about" component={About} />
      <Route path="/contact" component={Contact} />
      </Switch>
      </> 
  );
}

export default Apps;



// Menu.jsx
import React from "react";
import {Link} from "react-router-dom"

function Menue(){
    return(
       <>
       <Link to="/contact">Contact </Link>
       <Link to="/about" >About </Link>   
       </>
    );
}
export default Menue;
