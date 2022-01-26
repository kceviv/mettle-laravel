import axios from 'axios';
import React, {useState} from 'react'
import { Button,Modal } from 'react-bootstrap'
import { ThemeConsumer } from 'react-bootstrap/esm/ThemeProvider';
import api from '../../../api';
import './Register.css';

class Register extends React.Component {
    constructor(){
        super();
        // this.addFormData = this.addFormData.bind(this);
        this.state = {
            showHide : false,
            name: '',
            email: '',
            callback: '',
            mobile: '',
        }
    }
    
//   state = {
//       name: '',
//       email: '',
//       callback: '',
//       mobile: '',
//   }

  handleInput = (e) => {
      this.setState({
        [e.target.name]: e.target.value
      });
  }
  saveRegister = async (e) => {
      e.preventDefault();
      console.log(this.state.recieve_callback);

      try{
          let result = await axios.post("http://localhost:8000/api/register", 
          {
            name: this.state.name,
            email: this.state.email,
            recieve_callback: 0,
            mobile: this.state.mobile,
          });
        //   console.log(result.response.data);
        alert("success");
      }
      catch(error){
          console.error(error.response.data);
      }
     
  }
    handleModalShowHide() {
        this.setState({ showHide: !this.state.showHide })
    }
    render() {
        return (
            <div>
                <Button variant="primary" onClick={() => this.handleModalShowHide()}>
                Register your interest
                </Button>

                <Modal show={this.state.showHide}>
                    <Modal.Header closeButton onClick={() => this.handleModalShowHide()}>
                    <Modal.Title>Thanks for your interest in us! 
                        <p>Leave your details below and we'll get back to you with more information</p>
                    </Modal.Title>
                    </Modal.Header>
                    <Modal.Body>
                    <form onSubmit = {this.saveRegister}>
                            <div className='form-group'>
                                <label htmlFor='name'>Name:</label>
                                <input type='text' onChange={this.handleInput} value={this.state.name} name='name' id='name' />
                            </div>

                            <div className='form-group'>
                                <label htmlFor='email'>Email:</label>
                                <input type='email' onChange={this.handleInput} value={this.state.email} name='email' id='email' />
                            </div>

                            <div className='form-group'>
                                <label htmlFor='callback'>Would you like to receive a callback about this?</label>
                                <div className='option'>
                                    <input type='radio' name='recieve_callback' onChange={this.handleInput} value={this.state.recieve_callback} id='callback' defaultChecked={true} />Yes
                                </div>
                                <div className='option'>
                                    <input type='radio' name='recieve_callback' onChange={this.handleInput} value={this.state.recieve_callback} id='callback' />No
                                </div>
                            </div>

                            <div className='form-group'>
                                <label htmlFor='mobile'>Mobile:</label>
                                <input type='number' name='mobile' onChange={this.handleInput} value={this.state.mobile} id='mobile' />
                            </div>
                            <div className='form-group'>
                                <button type="submit" className="btn btn-primary">Save</button>
                            </div>
                        </form>

                    </Modal.Body>
                    <Modal.Footer>
                    {/* <Button variant="secondary" onClick={() => this.handleModalShowHide()}>
                        Close
                    </Button>
                    <Button variant="primary" onClick={() => this.handleModalShowHide()}>
                        Save Changes
                    </Button> */}
                    </Modal.Footer>
                </Modal>

            </div>
            // <div>
            //     <button type="button" id="registerBtn" className="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            //         Register your interest
            //     </button>

            //     <div className="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabIndex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            //         <div className="modal-dialog modal-dialog-centered">
            //             <div className="modal-content">
            //                 <div className="modal-header">
            //                     <div className='title'>
            //                         <h5 className="modal-title" id="staticBackdropLabel">
            //                             Thanks for your interest in us!
            //                         </h5>
            //                         <p>Leave your details below and we'll get back to you with more information</p>
            //                     </div>
            //                     <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            //                 </div>
            //                 <div className="modal-body">
            //                     <form>
            //                         <div className='form-group'>
            //                             <label htmlFor='name'>Name:</label>
            //                             <input type='text' name='name' id='name' />
            //                         </div>

            //                         <div className='form-group'>
            //                             <label htmlFor='email'>Email:</label>
            //                             <input type='email' name='email' id='email' />
            //                         </div>

            //                         <div className='form-group'>
            //                             <label htmlFor='callback'>Would you like to receive a callback about this?</label>
            //                             <div className='option'>
            //                                 <input type='radio' name='callback' id='callback' defaultChecked={true} />Yes
            //                             </div>
            //                             <div className='option'>
            //                                 <input type='radio' name='callback' id='callback' />No
            //                             </div>
            //                         </div>

            //                         <div className='form-group'>
            //                             <label htmlFor='mobile'>Mobile:</label>
            //                             <input type='number' name='mobile' id='mobile' />
            //                         </div>
            //                     </form>
            //                 </div>
            //                 <div className="modal-footer">
            //                     <button type="button" className="btn btn-secondary modal-button" data-bs-dismiss="modal">Cancel</button>
            //                     <button type="button" className="btn btn-primary modal-button">Submit</button>
            //                 </div>
            //             </div>
            //         </div>
            //     </div>
            // </div>
        )
    }
}

export default Register;