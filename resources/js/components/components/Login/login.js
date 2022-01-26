import React, { useState } from "react";
import Form from "react-bootstrap/Form";
import Button from "react-bootstrap/Button";
// import "./Login.css";


class Login extends React.Component {
    constructor(){
        super();
        // this.addFormData = this.addFormData.bind(this);
        this.state = {
            showHide : false,
            email: '',
            password: '',
        }
    }
    
  handleInput = (e) => {
    this.setState({
      [e.target.name]: e.target.value
    });
}
  handleSubmit = async (e) => {
      
    e.preventDefault();
    try{
        let result = await axios.post("http://localhost:8000/login", 
        {
          name: this.state.email,
          email: this.state.password,
        });
      //   console.log(result.response.data);
      console.log("success");
    }
    catch(error){
        console.error(error.response.data);
    }

  }
render(){
  return (
    <div className="Login">
      <Form onSubmit= {this.handleSubmit}>
        <div className='form-group'>
            <label htmlFor='email'>Email:</label>
            <input type='text' onChange={this.handleInput} value={this.state.email} name='email' id='email' />
        </div>
        <div className='form-group'>
            <label htmlFor='password'>Password:</label>
            <input type='password' onChange={this.handleInput} value={this.state.password} name='password' id='password' />
        </div>
        <div className='form-group'>
            <button type="submit" className="btn btn-primary">Login</button>
        </div>
      </Form>
    </div>
  );
}
}
export default Login;
