import React from 'react'
import {Link} from "react-router-dom";
import './Navbar.css';
import Img1 from './img1.png';
export default function Navbar() {
  return (
    <nav>
      <div class='image'><Link to ='./' class=''><img src={Img1} alt="logo"/></Link></div>
      <ul>
        <li>
          <div class='bar'>
            <Link to ='./'class='link'>Home</Link>
            <Link to ='./Resultat'class='link'>Result</Link>
            <Link to ='./Module'class='link'>Student</Link>
            <Link to ='./' class='logout'> <i class="material-symbols-outlined"> Logout </i>Log Out</Link>
          </div>
        </li>
      </ul>
    </nav>
  )
}
