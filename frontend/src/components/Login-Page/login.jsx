import React, { useState } from 'react';
import "./login.css"
import user_icon from "../../Images/person.png"
import email_icon from "../../Images/email.png"
import password_icon from "../../Images/password.png"

const LoginForm = () => {

    const[action, setAction] = useState("Login");
    const [showReenterPassword, setShowReenterPassword] = useState(false);

  const handleClick = () => {
    setShowReenterPassword(!showReenterPassword);
  };

    return (
        <div className='login-container'>
            <div className='login-header'>
                <div className='text'>{action}</div>
                <div className='underline'></div>
            </div>
            <div className='login-inputs'>
                <div className='input'>
                    <img src={user_icon} alt=''></img>
                    <input type='text' placeholder='Name'></input>
                </div>
                <div className='input'>
                    <img src={email_icon} alt=''></img>
                    <input type='email' placeholder='Email Id'></input>
                </div>
                <div className='input'>
                    <img src={password_icon} alt=''></img>
                    <input type='password' placeholder='Password'></input>
                </div>
                {showReenterPassword && (
          <div className='input'>
            <img src={password_icon} alt=''></img>
            <input type='password' placeholder='Re-enter Password'></input>
          </div>
        )}
            </div>
            <div className='forgot-password'>Forgot Password? <span onClick={handleClick}>Click Here!</span></div>
            <div className='submit-container'>
                <div className={action === "Login"? "submit gray" : "submit"} onClick={()=>{setAction("Sign Up")}}>Sign Up</div>
                <div className={action === "Sign Up"? "submit gray" : "submit"} onClick={()=>{setAction("Login")}}>Login</div>
            </div>

        </div>
    );
}

export default LoginForm;
