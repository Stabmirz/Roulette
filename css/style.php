<style>
   @import url('https://fonts.googleapis.com/css?family=Skranji');

   *, *:before, *:after {
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
   }

   body {
      margin:0;
      padding:0;
      background: #000;
      background-image: url('./images/animation.jpg');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
   }

   .navbar{
      box-sizing: border-box;
      width: 100%;
      overflow: hidden;
      background: rgba(0,0,0,.6);
      min-height: 83px;
      height: 83px;
      padding: 0 16px;
      top: 0;
      z-index: 100;
      position:fixed;
   }

   .navbar a{
      float: left;
      text-align: center;
      padding: 22px;
      color: white;
      text-decoration: none;
      font-size: 22px;
   }

   .right a{
      float: right;
      text-align: center;
      padding: 22px;
      color: white;
      text-decoration: none;
      font-size: 22px;
   }

   .navbar a:hover, .right a:hover{
      color: #e7bd16;
   }

   .form-submit-button:hover, .abutton:hover, .btn:hover{
      background: #e7bd16;
   }

   .alert {
      background-image: linear-gradient(to top, #f43b47 0%, #453a94 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-family: 'Skranji', cursive;
      font-size:24px;
   }

   .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      padding:15px;
      background: rgba(0,0,0,.6);
      color:white;
      text-align: center;
   }

   #main {
      margin-top: 8%;
      margin-bottom: 3%;
      margin-left: 5%;
      margin-right: 5%;
      background: rgba(0,0,0,.1);
      text-align:center;
   }

   h1 {
      background: linear-gradient(to top, #cc33ff 0%, #6699ff 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-family: 'Skranji', cursive;
      font-size: 60px;
   }

   .gift{
      background: linear-gradient(to top, #ff0844 0%, #ffb199 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-family: 'Skranji', cursive;
      font-size: 34px;
   }

   .index{
      color: #fdc300;
      font-family: 'Skranji', cursive;
      font-size: 24px;
   }

   #winner{
      animation-name: winner;
      animation-duration:2s;
      animation-iteration-count :infinite;
   }

   @keyframes winner{
      0% {transform: translateY(0)}
      50% {transform: translateY(15px)}
      100%{transform:translate(0) }
   }

   .logo2{
      margin-top:-45px;
      height:40%;
      width:50%;
   }

   .form{
      color: #fdc300;
      font-family: 'Skranji', cursive;
      font-size: 24px;
      background:rgba(0,0,0,.6);
      padding:40px;
      border-radius:10%;
   
   }

   .text{
      color: white;
      font-family: "Times New Roman", Times, serif;
      font-size: 24px;
      line-height:1.5;
   }

   .abutton {
      background-image: linear-gradient(-225deg,#FF1361 0%, #FFF800 100%);  
      color: white;
      border-style: outset;
      border-color: #FFF800;
      font: 25px 'Skranji', cursive;
      border-radius:10%;
      cursor:pointer;
   }

   .button{
      text-decoration:none; 
      font-size:20px;
      font-family: 'Skranji', cursive;
   }

   .input{
      padding:7px;
      width:20vw;
   }

   .form-submit-button {
      background-image: linear-gradient(-225deg,#FF1361 0%, #FFF800 100%);  
      color: white;
      border-style: outset;
      border-color: #FFF800;
      height: 50px;
      width: 100px;
      font: 25px 'Skranji', cursive;
      border-radius:10%;
      cursor:pointer;
   }

   .para{
      text-align:center;
      background-image: linear-gradient(-225deg,#FF1361 0%, #FFF800 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-size: 28px;
      font-family: 'Skranji', cursive;
   }

   .chip{
      float:right;
      color:#fdc300;
      font-size:28px;
      margin-top:65px;
      margin-right:30px;
      border-radius:10px;
      background-image: linear-gradient(to right, #434343 0%, black 100%);
   }

   table {
      margin: 10px auto;
      background: rgba(0,0,0,.4);
      color:white;
   }

   caption {
      font-size: 1.6em;
      font-weight: 400;
      padding: 10px 0;
   }

   thead th {
      font-weight: 400;
      font-size:18px;
      background-image: linear-gradient(to right, #434343 0%, black 100%);
      color: #fdc300;
   }

   tr {
      background: rgba(0,0,0,0.5);
      border-bottom: 1px solid #FFF;
      margin-bottom: 5px;
   }

   tr:nth-child(even) {
      background: rgba(0,0,0,.7);
   }

   th, td {
      text-align: left;
      padding: 20px;
      font-weight: 300;
   }

   tfoot tr {
      background: none;
   }

   tfoot td {
      padding: 10px 2px;
      font-size: 1em;
      font-style: italic;
      color: #fdc300;
   }

   .stuff {
      height: 310px;
      background-color: rgba(0,0,0,.7);
      color:#fdc300;
      margin-top: 20px;
      font-size:18px;
      box-shadow: 5px 5px rgba(45, 45, 45, 0.13);
   }

   .upper {
      width: 280px;
      height: 180px;
      border-bottom: 1px solid white;
   }

   .shop {
      left: 0;
      right: 0;
      margin-top: 20px;
      margin-right: auto;
      margin-left: auto;
   }

   .row{
      display:flex;
      justify-content:space-evenly;
   }

   .btn {
      color: #ffffff;
      text-transform: uppercase;
      background-color: #3a3a3a;
      cursor:pointer;
      font-size:16px;
   }

   .modal {
      display: none; 
      position: fixed; 
      z-index: 1; 
      padding-top: 100px;
      left: 0;
      top: 0;
      width: 100%; 
      height: 100%; 
      overflow: auto; 
      background-color: rgba(0,0,0,0.4); 
   }

   .modal-content {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      border: 1px solid #888;
      width: 60%;
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
      -webkit-animation-name: animatetop;
      -webkit-animation-duration: 0.4s;
      animation-name: animatetop;
      animation-duration: 0.4s;
   }

   @-webkit-keyframes animatetop {
      from {top:-300px; opacity:0} 
      to {top:0; opacity:1}
   }

   @keyframes animatetop {
      from {top:-300px; opacity:0}
      to {top:0; opacity:1}
   }

   #accept {
      color: white;
      float: right;
      font-size: 28px;
      font-weight: bold;
   }

   #accept:hover,
   #accept:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
   }

   .modal-header {
      padding: 2px 16px;
      background-color: #fdc300;
      color: white;
   }

   .modal-body {padding: 2px 16px;}
   .modal-footer {
      padding: 2px 16px;
      background-color: #fdc300;
      color: white;
      text-align:center;
   }
</style>