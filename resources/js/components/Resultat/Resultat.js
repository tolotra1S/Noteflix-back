import React from 'react'

import './resultat.css';
/*const p = new URL ("../../img1.jpg",import.meta.url)*/
export default function Resultat() {
  return (
    <div>
      <h1>RESULTATS SEMESTRE 1 L1G2 2021-2022</h1>
     <table>
        <thead>
          <tr>
            <th>Nom et Prénom</th>
            <th>Moyenne</th>
            <th>Module à rattraper</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>RAMANANTSOAVINA Haingo Harivony</th>
            <td>12,70</td>
            
            <td>INFO 150</td>
          </tr>
          <tr>
            <th>RAMBOLAMANANA Manoa Aro ny Avo</th>
            <td>0,00</td>
           
            <td>TOUTES MATIERES</td>
          </tr>
          <tr>
            <th>RAMIARIFINOANA Finoana Claudine</th>
            <td>12,50</td>
          
            <td>INFO150/INFO160/LANG_110</td>
          </tr>
          <tr>
            <th>RAMILSON Faniloniaina</th>
            <td>12,99</td>
          
            <td>INFO150/INFO160/LANG_110</td>
          </tr>
          <tr>
            <th>RANAIVOARISON Mionja </th>
            <td>12,50</td>
          
            <td>ENTR_120</td>
          </tr>
          <tr>
            <th>RANAIVOSON Felantsoa Ny Avo</th>
            <td>00,00</td>
          
            <td>TOUTES MATIERES</td>
          </tr>
          <tr>
            <th>RANARISON Tolotra</th>
            <td>12,29</td>
          
            <td>MATH 110</td>
          </tr>
        </tbody>
      </table>
    </div>
  )
}
