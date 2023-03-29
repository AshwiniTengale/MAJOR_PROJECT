<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav li {
  display: inline-block;
}

nav a {
  display: block;
  padding: 10px;
  color: black;
  text-decoration: none;
}

nav a.active {
  background-color: red;
  color: white;
}

nav a:hover {
  background-color: gray;
  color: white;
}



    </style>
</head>
<body>
<nav>
  <ul>
    <li><a class="active" href="#" onclick="setActive(this)">Home</a></li>
    <li><a href="#" onclick="setActive(this)">About</a></li>
    <li><a href="#" onclick="setActive(this)">Contact</a></li>
  </ul>
</nav>


</body>
<script>
    function setActive(link) {
  // Remove active class from previously active link
  var prevActive = document.querySelector('.active');
  if (prevActive) {
    prevActive.classList.remove('active');
  }
  // Add active class to clicked link
  link.classList.add('active');
}

</script>
</html>