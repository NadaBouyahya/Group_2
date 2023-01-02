import { BrowserRouter, Route, Routes } from 'react-router-dom';
import './App.css';
import AddBrief from './components/AddBrief';
import Briefs from './components/Briefs';
import EditBrief from './components/EditBrief';
import Tasks from './components/Tasks';

function App() {
  return (
    <>
      <BrowserRouter>
        <Routes>
          <Route path='/' element={<Briefs />} />
          <Route path='/AddBriefs' element={<AddBrief />} />
          <Route path='/brief/:id/tasks' element={<Tasks />} />
          <Route path='/EditBrief/:id' element={<EditBrief />} />

        </Routes>
      </BrowserRouter>
    </>


  );
}

export default App;
