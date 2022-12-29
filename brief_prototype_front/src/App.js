import { BrowserRouter, Route, Routes } from 'react-router-dom';
import './App.css';
import AddBrief from './components/AddBrief';
import Briefs from './components/Briefs';

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path='/' element={ <Briefs /> }/>
        <Route path='/AddBriefs' element={ <AddBrief /> }/>

      </Routes>
    </BrowserRouter>

  );
}

export default App;
