<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}
.class{
   margin: 0 auto;
}
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #ff3300;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us </h1>
  <p>Some text about who we are and what we contributed in this project</p>
  
</div>

<h2 style="text-align:center">Our Team</h2>
<center><p class="title">Design & devlopment</p></center>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container"><br>
        <h2>Sahil </h2>
        <p class="title">19550025</p>
        <p class="title">project head</p>
        <p>html/css/js</p>
        <p class="title">GITHUB</p>
        <p>sahibhat079</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <div class="container"><br>
        <h2>Majid </h2>
        <p class="title">195500</p>
        <p class="title">backend dev</p>
        <p>sql and php</p>
        <p class="title">GITHUB</p>
        <p>majidlone349</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="row">
  <div class="column">
    <div class="card">
      <div class="container"><br>
        <h2>Juneed </h2>
        <p class="title">19550056</p>
        <p class="title">FrontEnd/backend</p>
        <p>html/css/js</p>
        <p class="title">GITHUB</p>
        <p>junib</p>
</div>     <p><button class="button">Contact</button></p>
      </div>
    </div> 
<hr>
<div>
<center><p class="title">Resource gathering,testing & logo/icon design</p></center>
<center><h2>Yasir</h2>
<p class="title">195500</p> 
<p class="title">GITHUB</p>
<p>yasir852</p><center>
   
</div>     <p><button class="button">Contact</button></p>
      </div>
</div>
<hr>
<center><h1>Stating template</h1>
<p>
 <a href="index.php">
  <img src="images\icsc.png">
 </a>
</p>
</body>
</html>
