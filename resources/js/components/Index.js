import React, {Component} from 'react';
import ReactDOM from 'react-dom';
//import ReactDOM from 'react-dom';
import {BrowserRouter as Router, Route} from 'react-router-dom';
import Navbar from './Widgets/Navbar';
import Landing from './Landing';
import Login from './Auth/Login';
import Register from './Auth/Register';
import Profile from './Profile/Profile';
import ProjectsList from './Projects/ProjectsList'
import NewProject from './Projects/NewProject'



/* class Dutylist extends Component {
    render() {
        return (
            <div className="container">
                Welcome
            </div>
        )
    }
}

export default Dutylist; */



export default  class App extends Component {
    render() {
        return (
            <Router>
                <div className="App">
                    <Navbar/>
                    <Route exact path="/" component={Landing}/>
                    <div className="container">
                        <Route exact path="/Register" component={Register}/>
                        <Route exact path="/login" component={Login}/>
                        <Route exact path="/profile" component={Profile}/>
                        <Route exact path='/projects' component={ProjectsList} />
                        <Route path='/projects/create' component={NewProject} />
                    </div>
                </div>
            </Router>
            
        )
    }
}


if(document.getElementById('app')) {    
    ReactDOM.render(<App/>, document.getElementById('app'))
}