import './App.css';
import { BrowserRouter, Switch, Route } from 'react-router-dom';
import React from 'react';
import Navbar from '../Navbar/Navbar';
import Home from '../Home/Home';
import Quiz from '../Quiz/Quiz';
import Login from '../Login/login';

function App() {
  return (
    <BrowserRouter>
      <div className="App">
        <Navbar />
        <div>
          <Switch>
            <Route path='/quiz'>
              <Quiz />
            </Route>
            <Route path='/login'>
              <Login />
            </Route>
            <Route exact path='/'>
              <Home />
            </Route>
          </Switch>
        </div>
      </div>
    </BrowserRouter>
  );
}

export default App;
