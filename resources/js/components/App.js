import './App.css';

import {Route,Routes} from "react-router-dom";

import Home from './component/Home/Home';
import Resultat from './component/Resultat/Resultat';
import Module from './component/Module/Module';
import Navbar from './component/Navbar/Navbar';

function App() {
  return (
    <>
    
    <Navbar/>
    <Routes>
      
      <Route path='/' element={<Home />}> </Route>
      <Route path='/Resultat' element={<Resultat />}>
      </Route>
      <Route path='/Module' element={<Module />}>
      </Route>
      
    </Routes>

    </>
  );
}

export default App;
