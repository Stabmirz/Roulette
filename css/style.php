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
   background-size:cover;
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
.form-submit-button:hover, .abutton:hover{
   background: #e7bd16;
}

.content{
margin-top:100px;
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
   color: white;
   text-align: center;
}

#main {
   margin-top: 3%;
   margin-bottom: 3%;
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
.index, .form{
   color: #6fb316;
   font-family: 'Skranji', cursive;
   font-size: 24px;
}
.abutton {
   background-image: linear-gradient(to right, #0acffe 0%, #495aff 100%);
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
   background-image: linear-gradient(to right, #0acffe 0%, #495aff 100%);
   color: white;
   border-style: outset;
   border-color: #0066A2;
   height: 50px;
   width: 100px;
   font: 25px 'Skranji', cursive;
   border-radius:10%;
   cursor:pointer;
}


.para{
   text-align:center;
   background-image: linear-gradient(-225deg, #A445B2 0%, #D41872 52%, #FF0066 100%);
   -webkit-background-clip: text;
   -webkit-text-fill-color: transparent;
   font-size: 32px;
   font-family: 'Skranji', cursive;
}

.chip{
   float:right;
   color:white;
   font-size:32px;
   margin-right:20px;
   border-radius:10px;
   background: linear-gradient(to right, #25c481, #25b7c4);
}



table {
   /* max-width: 960px; */
   margin: 10px auto;
   background: linear-gradient(to right, #25c481, #25b7c4);
}

caption {
   font-size: 1.6em;
   font-weight: 400;
   padding: 10px 0;
}

thead th {
   font-weight: 400;
   background: linear-gradient(to right, #25c481, #25b7c4);
   color: #FFF;
}

tr {
   background: #f4f7f8;
   border-bottom: 1px solid #FFF;
   margin-bottom: 5px;
}

tr:nth-child(even) {
   background: #e8eeef;
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
   color: #fff;
}

.panel {
  border-bottom: 5px solid #e0a37b;
  width: 100%;
  height: 50px;
  background-color: #3a3a3a;
  color: #e0a37b;
}

h3 {
    padding-left: 10px;
    font-family: sans-serif;
    font-weight: 100;
    display: inline-block;
}

.content {
  margin-top: 65px;
}

.stuff {
  height: 220px;
  background-color: #ffffff;
  margin-top: 20px;
  box-shadow: 5px 5px rgba(45, 45, 45, 0.13);
}

.upper {
  width: 100%;
  height: 160px;
  border-bottom: 1px solid rgba(45, 45, 45, 0.33);
}

.shop {
    left: 0;
    right: 0;
    margin-top: 20px;
    margin-right: auto;
    margin-left: auto;
}

.downer {
  margin-top: 15px;
}

.price {
   display: inline-block;
}

.row{
   display:flex;
   justify-content:space-evenly;
}
.btn {
    color: #ffffff;
    text-transform: uppercase;
    font-size: 12.5px;
    margin-top: -3px;
    float: right;
    border-radius: 0;
    background-color: #3a3a3a;
}

.cart{
   float: right;
    margin-top: 18px;
    margin-right: 10px;
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
  background-color: rgb(0,0,0); 
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
  animation-duration: 0.4s
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
  background-color: #dd7e29;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #dd7e29;
  color: white;
}

</style>