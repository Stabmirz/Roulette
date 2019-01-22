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
   background-image: url('./images/background.gif');
   background-size:cover;
}
.navbar{
   box-sizing: border-box;
   width: 100%;
   padding:6px;
   background-image: linear-gradient(60deg, #3d3393 0%, #2b76b9 37%, #2cacd1 65%, #35eb93 100%);
   overflow: hidden;
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

.navbar a:hover, .right a:hover, .form-submit-button:hover, .abutton:hover{
   background: linear-gradient(to top, #cc33ff 0%, #6699ff 100%);
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
   background-image: linear-gradient(60deg, #3d3393 0%, #2b76b9 37%, #2cacd1 65%, #35eb93 100%);
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
   color: white;
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


p{
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

</style>