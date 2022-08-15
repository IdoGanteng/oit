<!DOCTYPE html>
<html lang="en">

<head>
  <title>Form Login </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
  body {
    font-family: "Open Sans", sans-serif;
    /* background: url("https://drive.google.com/uc?export=view&id=1O6iXALNY1x1-CYTB56Lzg3hEVnr5hRXw"); */
    /* object-fit: cover;
    background-repeat: no-repeat; */
  }
  html {
    height: 100%
  }
  ::-moz-selection {
    background: #fe57a1;
    color: #fff;
    text-shadow: none;
  }
  ::selection {
    background: #fe57a1;
    color: #fff;
    text-shadow: none;
  }
  /* body {
    background-image: radial-gradient(cover, rgba(92, 100, 111, 1) 0%, rgba(31, 35, 40, 1) 100%), url('http://i.minus.com/io97fW9I0NqJq.png')
  } */
  .login {
    background: transparent;
    border: 2px solid #42464b;
    box-shadow: 1px 12px 55px -8px rgba(0, 0, 0, 0.79);
    -webkit-box-shadow: 1px 12px 55px -8px rgba(0, 0, 0, 0.79);
    -moz-box-shadow: 1px 12px 55px -8px rgba(0, 0, 0, 0.79);
    border-radius: 10px;
    height: 257px;
    margin: auto;
    width: 298px;
  }
  .login h1 {
    background-image: linear-gradient(top, #f1f3f3, #d4dae0);
    border-bottom: 1px solid #a6abaf;
    border-radius: 6px 6px 0 0;
    box-sizing: border-box;
    color: #727678;
    display: block;
    height: 43px;
    font: 600 14px/1 'Open Sans', sans-serif;
    padding-top: 14px;
    margin: 0;
    text-align: center;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2), 0 1px 0 #fff;
  }
  input[type="password"],
  input[type="text"] {
    background: url('http://i.minus.com/ibhqW9Buanohx2.png') center left no-repeat, linear-gradient(top, #d6d7d7, #dee0e0);
    border: 1px solid #a1a3a3;
    border-radius: 4px;
    box-shadow: 0 1px #fff;
    box-sizing: border-box;
    color: #696969;
    height: 39px;
    margin: 31px 0 0 29px;
    padding-left: 37px;
    transition: box-shadow 0.3s;
    width: 240px;
  }
  input[type="password"]:focus,
  input[type="text"]:focus {
    box-shadow: 0 0 4px 1px rgba(55, 166, 155, 0.3);
    outline: 0;
  }
  .show-password {
    display: block;
    height: 16px;
    margin: 26px 0 0 28px;
    width: 87px;
  }
  input[type="checkbox"] {
    cursor: pointer;
    height: 16px;
    opacity: 0;
    position: relative;
    width: 64px;
  }
  input[type="checkbox"]:checked {
    left: 29px;
    width: 58px;
  }
  .toggle {
    background: url(http://i.minus.com/ibitS19pe8PVX6.png) no-repeat;
    display: block;
    height: 16px;
    margin-top: -20px;
    width: 87px;
    z-index: -1;
  }
  input[type="checkbox"]:checked+.toggle {
    background-position: 0 -16px
  }
  .forgot {
    color: #7f7f7f;
    display: inline-block;
    font: 12px/1 sans-serif;
    left: -19px;
    position: relative;
    text-decoration: none;
    top: 5px;
    transition: color .4s;
  }
  .forgot:hover {
    color: #3b3b3b
  }
  input[type="submit"] {
    width: 240px;
    height: 35px;
    display: block;
    font-family: Arial, "Helvetica", sans-serif;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    text-align: center;
    text-shadow: 1px 1px 0px #37a69b;
    padding-top: 6px;
    margin: 29px 0 0 29px;
    position: relative;
    cursor: pointer;
    border: none;
    background-color: #37a69b;
    background-image: linear-gradient(top, #3db0a6, #3111);
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
    box-shadow: inset 0px 1px 0px #2ab7ec, 0px 5px 0px 0px #497a78, 0px 10px 5px #999;
  }
  .shadow {
    background: #000;
    border-radius: 12px 12px 4px 4px;
    box-shadow: 0 0 20px 10px #000;
    height: 12px;
    margin: 30px auto;
    opacity: 0.2;
    width: 270px;
  }
  input[type="submit"]:active {
    top: 3px;
    box-shadow: inset 0px 1px 0px #2ab7ec, 0px 2px 0px 0px #31524d, 0px 5px 3px #999;
  }
  html,
  body,
  div,
  span,
  applet,
  object,
  iframe,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  p,
  blockquote,
  pre,
  a,
  abbr,
  acronym,
  address,
  big,
  cite,
  code,
  del,
  dfn,
  em,
  img,
  ins,
  kbd,
  q,
  s,
  samp,
  small,
  strike,
  strong,
  sub,
  sup,
  tt,
  var,
  b,
  u,
  i,
  center,
  dl,
  dt,
  dd,
  ol,
  ul,
  li,
  fieldset,
  form,
  label,
  legend,
  table,
  caption,
  tbody,
  tfoot,
  thead,
  tr,
  th,
  td,
  article,
  aside,
  canvas,
  details,
  embed,
  figure,
  figcaption,
  footer,
  header,
  hgroup,
  menu,
  nav,
  output,
  ruby,
  section,
  summary,
  time,
  mark,
  audio,
  video {
    margin: 0;
    padding: 0;
  }
  .wrapper {
    position: absolute;
    top: 0;
    z-index: -10;
    width: 100%;
    height: 100vh;
  }
  .wrappers {
    top: 0;
    margin: auto;
    position: relative;
    width: 50vw;
    height: 100%;
  }
  /* Extra small devices (phones, 600px and down) */
  @media only screen and (max-width: 600px) {
    .wrappers {
      width: 100vw;
    }
  }
  /* Small devices (portrait tablets and large phones, 600px and up) */
  @media only screen and (min-width: 600px) {
    .wrappers {
      width: 70vw;
    }
  }
  /* Medium devices (landscape tablets, 768px and up) */
  @media only screen and (min-width: 768px) {
    .wrappers {
      width: 65vw;
    }
  }
  /* Large devices (laptops/desktops, 992px and up) */
  @media only screen and (min-width: 992px) {
    .wrappers {
      width: 60vw;
    }
  }
  /* Extra large devices (large laptops and desktops, 1200px and up) */
  @media only screen and (min-width: 1200px) {
    .wrappers {
      width: 50vw;
    }
  }
</style>
<body>
  <div class="wrappers">
    <div class="gambar">
      <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjWzM0wQLbylRGzF1q8OVLOIJZFC-B4H6-WVqk7oJf8_HFZSp_K5Df2OPfZwAzbDSUr3fBmNN3PTRMULffOaQDDWfLMS6enCsW9qcbPE95qiElHfSS6riHyGXHuoqD6CuuGnqW1vnZ_2sNTZVuvy2VuvyaBJ5jGdYPjOqpRFFm5QjRA2X0H3AirmQ/w1600/lokasi-harga-menu-memboemi-coffee-tigaraksa-tangerang.jpg" class="wrapper" />
    </div>
    <div style="padding-top: 35vh;">
      <div class="login">
        <input type="text" placeholder="Username" id="username">
        <input type="password" placeholder="password" id="password">
        <input type="submit" onclick="savedata() " value="Sign In">
        
      </div>
    </div>
  </div>
</body>
<!--===============================================================================================-->
<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/js/main.js"></script>
<script>
  function savedata() {
    const username = document.getElementById('username').value
    const password = document.getElementById('password').value
    console.log(';', username, password)
    window.localStorage.setItem('login', JSON.stringify({
      username,
      password
    }))
    window.location.href = 'tampilan'
  }
  window.onload = function() {
    var backgroundImg = ["https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjWzM0wQLbylRGzF1q8OVLOIJZFC-B4H6-WVqk7oJf8_HFZSp_K5Df2OPfZwAzbDSUr3fBmNN3PTRMULffOaQDDWfLMS6enCsW9qcbPE95qiElHfSS6riHyGXHuoqD6CuuGnqW1vnZ_2sNTZVuvy2VuvyaBJ5jGdYPjOqpRFFm5QjRA2X0H3AirmQ/w1600/lokasi-harga-menu-memboemi-coffee-tigaraksa-tangerang.jpg",
      "https://i0.wp.com/blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhSqBc6S27kZeYtDXUAH5wVLnO7K2vBN_DyIsRc24HO95xUikqywKyWcxEw6syVhPtNEMh-9HwARa0B8E5BhLXdmWnjgeRkcUEvykzJQaevTuNJCn8lZUQu8Qcit-d64lrxXkaHTie2rF6hpPfrJzYcQZyqGXx8Xa6Xlyke64OGZTg0QIK3HBJdwQ/w640-h640/memboemi-coffee-and-resto-tigaraksa-tangerang.jpg?resize=640%2C640&ssl=1"
    ]
    setInterval(changeImage, 1500);
    function changeImage() {
      var i = Math.floor((Math.random() * 2));
      document.querySelector('.wrapper').src = backgroundImg[i];
    }
  }
</script>
</html>