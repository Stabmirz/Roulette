<style>
@import url('https://fonts.googleapis.com/css?family=Skranji');

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
   margin-top:30px;
   margin-bottom:-30px;
   padding: 15px;
   text-align:center;
   color:red;
   font-size:24px;
   background-image: linear-gradient(to right, #ffc3a0 0%, #ffafbd 100%);
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

table {
   border-collapse: collapse;
   border-spacing: 0;
   font-family: 'Skranji', cursive;
   font-size: 24px;
   float:right;
}

th{
   text-align: left;
   padding: 8px;
   color: White;
}

td{
   text-align: left;
   padding: 8px;
   color: white;
   font-size:20px;
}

tr:nth-child(even){background-color: }

.bet{
   border:1px solid #ddd;
   padding: 8px;
   float:left;
}

p{
   text-align:center;
   color: #ff5858;
   font-size: 32px;
   font-family: 'Skranji', cursive;
}

.chip{
   float:right;
   color:white;
   font-size:32px;
   margin-right:20px;
   border-radius:10px;
   background-image: linear-gradient(45deg, #874da2 0%, #c43a30 100%);
}
</style>