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

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 10px;
}

.about-section {
  padding: 1px;
  text-align: center;
  background-color: #000000;
  color: orange;
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
  color: dodgerblue;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #ffa500;
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
  <h1>About Us</h1>
  <p></p>
  <p></p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="image/Aniket.jpeg" alt="Aniket" style="width:100%">
      <div class="container">
        <h2>Aniket Deshmukh</h2>
        <p class="title">Student</p>
        
		<p></p>
		<p></p>
		<p></p>
        <p><button class="button"><a href="mailto:aniketdeshmukh@gmail.com" style="color:#FFFFFF">Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image/Mayur.jpeg" alt="Mayur" style="width:100%">
      <div class="container">
        <h2>Mayur Bhilare</h2>
        <p class="title">Student</p>
        
        <p></p>
		<p></p>
		<p></p>
        <p><button class="button"><a href="mailto:mayurbhilare23@gmail.com" style="color:#FFFFFF">Contact</a></button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="image/Ayush.jpeg" alt="Ayush" style="width:100%">
      <div class="container">
        <h2>Ayush Raut</h2>
        <p class="title">Student</p>
        
        <p></p>
		<p></p>
		<p></p>
        <p><button class="button"><a href="mailto:ayushraut@gmail.com" style="color:#FFFFFF">Contact</a></button></p>
      </div>
    </div>
  </div>
</div>

<h2 style="text-align:center">Thanks For Visiting Us!</h2>

</body>
</html>
