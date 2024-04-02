<style>
* {
	 margin: 0;
	 padding: 0;
	 box-sizing: border-box;
	 font-family: 'Poppins', sans-serif;
}
 body {
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 min-height: 100vh;
	 background: #444;
}
 .container {
	 position: relative;
	 width: 70vw;
	 height: 80vh;
	 background: #fff;
	 border-radius: 15px;
	 box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
	 overflow: hidden;
}
 .container::before {
	 content: "";
	 position: absolute;
	 top: 0;
	 left: -50%;
	 width: 100%;
	 height: 100%;
	 background: linear-gradient(-45deg, #df4adf, #520852);
	 z-index: 6;
	 transform: translateX(100%);
	 transition: 1s ease-in-out;
}
 .signin-signup {
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 display: flex;
	 align-items: center;
	 justify-content: space-around;
	 z-index: 5;
}
 form {
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 flex-direction: column;
	 width: 40%;
	 min-width: 238px;
	 padding: 0 10px;
}
 form.sign-in-form {
	 opacity: 1;
	 transition: 0.5s ease-in-out;
	 transition-delay: 1s;
}
 form.sign-up-form {
	 opacity: 0;
	 transition: 0.5s ease-in-out;
	 transition-delay: 1s;
}
 .title {
	 font-size: 35px;
	 color: #df4adf;
	 margin-bottom: 10px;
}
 .input-field {
	 width: 100%;
	 height: 50px;
	 background: #f0f0f0;
	 margin: 10px 0;
	 border: 2px solid #df4adf;
	 border-radius: 50px;
	 display: flex;
	 align-items: center;
}

 .input-field i {
	 flex: 1;
	 text-align: center;
	 color: #666;
	 font-size: 18px;
}
 .input-field input {
	 flex: 5;
	 background: none;
	 border: none;
	 outline: none;
	 width: 100%;
	 font-size: 18px;
	 font-weight: 600;
	 color: #444;
}

.input-fields-container {
    display: flex;
    flex-direction: row;
    justify-content: space-between; /* Adjust as needed */
}

.input-field1 {
    width: 48%; /* Adjust as needed */
    height: 50px;
    background: #f0f0f0;
    margin: 10px 0;
    border: 2px solid #df4adf;
    border-radius: 50px;
    display: flex;
    align-items: center;
}

.input-field1 input {
	 flex: 5;
	 background: none;
	 border: none;
	 outline: none;
	 width: 100%;
	 font-size: 18px;
	 font-weight: 600;
	 color: #444;
}
.input-field1 i {
	 flex: 1;
	 text-align: center;
	 color: #666;
	 font-size: 18px;
}


 .btn {
	 width: 150px;
	 height: 50px;
	 border: none;
	 border-radius: 50px;
	 background: #df4adf;
	 color: #fff;
	 font-weight: 600;
	 margin: 10px 0;
	 text-transform: uppercase;
	 cursor: pointer;
}
 .btn:hover {
	 background: #c03cc0;
}
 .social-text {
	 margin: 10px 0;
	 font-size: 16px;
}
 .social-media {
	 display: flex;
	 justify-content: center;
}
 .social-icon {
	 height: 45px;
	 width: 45px;
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 color: #444;
	 border: 1px solid #444;
	 border-radius: 50px;
	 margin: 0 5px;
}
 a {
	 text-decoration: none;
}
 .social-icon:hover {
	 color: #df4adf;
	 border-color: #df4adf;
}
 .panels-container {
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 display: flex;
	 align-items: center;
	 justify-content: space-around;
}
 .panel {
	 display: flex;
	 flex-direction: column;
	 align-items: center;
	 justify-content: space-around;
	 width: 35%;
	 min-width: 238px;
	 padding: 0 10px;
	 text-align: center;
	 z-index: 6;
}
 .left-panel {
	 pointer-events: none;
}
 .content {
	 color: #fff;
	 transition: 1.1s ease-in-out;
	 transition-delay: 0.5s;
}
 .panel h3 {
	 font-size: 24px;
	 font-weight: 600;
}
 .panel p {
	 font-size: 15px;
	 padding: 10px 0;
}
 .image {
	 width: 100%;
	 transition: 1.1s ease-in-out;
	 transition-delay: 0.4s;
}
 .left-panel .image, .left-panel .content {
	 transform: translateX(-200%);
}
 .right-panel .image, .right-panel .content {
	 transform: translateX(0);
}
 .account-text {
	 display: none;
}
/*Animation*/
 .container.sign-up-mode::before {
	 transform: translateX(0);
}
 .container.sign-up-mode .right-panel .image, .container.sign-up-mode .right-panel .content {
	 transform: translateX(200%);
}
 .container.sign-up-mode .left-panel .image, .container.sign-up-mode .left-panel .content {
	 transform: translateX(0);
}
 .container.sign-up-mode form.sign-in-form {
	 opacity: 0;
}
 .container.sign-up-mode form.sign-up-form {
	 opacity: 1;
}
 .container.sign-up-mode .right-panel {
	 pointer-events: none;
}
 .container.sign-up-mode .left-panel {
	 pointer-events: all;
}
/*Responsive*/
 @media (max-width: 779px) {
	 .container {
		 width: 100vw;
		 height: 100vh;
	}
}
 @media (max-width: 635px) {
	 .container::before {
		 display: none;
	}
	 form {
		 width: 80%;
	}
	 form.sign-up-form {
		 display: none;
	}
	 .container.sign-up-mode2 form.sign-up-form {
		 display: flex;
		 opacity: 1;
	}
	 .container.sign-up-mode2 form.sign-in-form {
		 display: none;
	}
	 .panels-container {
		 display: none;
	}
	 .account-text {
		 display: initial;
		 margin-top: 30px;
	}
}
 @media (max-width: 320px) {
	 form {
		 width: 90%;
	}
}



</style>