/* 
START OF STYLESHEET (Written by Beckyliu.com)
*/
@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,500,700");
html, body {
  font-family: "Source Sans Pro", Helvetica, Verdana, sans-serif;
  font-weight: 400;
  font-size: 30px;
  color: #1f201a;
  background-color: #ffffff;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
}

a {
  text-decoration: none;
  letter-spacing: 2px;
}

.wrapper {
  width: 80%;
  overflow: hidden;
  margin: auto;
}

ul {
  margin: 0;
  padding: 0;
}

header {
  background-color: #1f201a;
  color: #ffffff;
  padding: 2%;
  margin: 0;
  min-height: 8%;
}
header a {
  color: #ffffff;
  font-weight: 200;
  font-size: 15px;
  letter-spacing: 3px;
  text-transform: uppercase;
  text-decoration: none;
}
header li {
  display: inline;
  padding: 2%;
}
header #logo {
  float: left;
}
header #logo h1 {
  margin: 0;
}
header nav {
  margin-top: 3%;
  margin-right: 3%;
  position: relative;
}
header nav a, header nav a:active, header nav a:link, header nav a:visited {
  letter-spacing: 10px;
}
header nav a:hover {
  color: #BA0707;
}

section {
  text-align: center;
  width: 100%;
}

#headerImage {
  background: #1f201a url("images/header.jpg") no-repeat left center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -ms-background-size: cover;
  -o-background-size: cover;
  width: 100%;
  padding: 0;
  margin: 0;
  overflow: hidden;
  vertical-align: center;
}
#headerImage #logo {
  padding: 3%;
}
#headerImage .sichuan {
  width: 50%;
  float: left;
  min-height: 80%;
}
#headerImage .content {
  min-width: 320px;
}
#headerImage .leftContent {
  float: left;
  color: #ffffff;
  text-align: center;
  width: 40%;
  padding: 4%;
}

.button {
  background: none;
  border: 3px solid #BA0707;
  color: #ffffff;
  text-transform: uppercase;
  font-size: 15px;
  width: 280px;
  padding: 10px 5px 10px 5px;
  margin: 4% auto 2% auto;
}
.button a, .button a:active, .button a:link, .button a:visited {
  display: block;
}
.button:hover {
  color: #BA0707;
  border-color: #ffffff;
}

#address {
  margin: auto;
  padding: 1% 0 1% 0;
  background-color: #BA0707;
  color: #ffffff;
}

#introduction {
  margin: 5% auto 5% auto;
  text-align: center;
  position: relative;
}
#introduction .introCopy {
  text-align: center;
  width: 70%;
  margin: 0 auto 5% auto;
}
#introduction .icon1 {
  min-width: 320px;
  display: inline-block;
  width: 21.6666666667%;
}
#introduction .icon2 {
  min-width: 320px;
  display: inline-block;
  width: 21.6666666667%;
}
#introduction .icon3 {
  min-width: 320px;
  display: inline-block;
  width: 21.6666666667%;
}

#bookingCopy {
  background-color: #EDEDED;
  width: 100%;
  padding: 5% 0 5% 0;
}

.map {
  overflow: hidden;
  padding-bottom: 30%;
  position: relative;
  height: 0;
}
.map iframe {
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  position: absolute;
}

#emailForm {
  background: #1f201a url("images/footer.jpg") no-repeat left center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -ms-background-size: cover;
  -o-background-size: cover;
}
#emailForm input, #emailForm textarea {
  font-family: "Source Sans Pro", Helvetica, Verdana, sans-serif;
  font-size: 30px;
  padding: 10px 20px 10px 20px;
  width: 30%;
  margin-top: 1%;
  border: 3px solid #BA0707;
}
#emailForm textarea {
  height: 100px;
}

footer {
  font-size: 20px;
}

@media (min-width: 320px) and (max-width: 480px) {
  .sichuan {
    display: none;
  }

  #headerImage {
    background-image: none;
    background-color: #1f201a;
    margin: auto;
  }
  #headerImage .leftContent {
    width: 100%;
    text-align: center;
    padding: 0%;
  }
}
/* 
END OFF STYLESHEET (Written by Beckyliu.com)
*/

/*# sourceMappingURL=style.ss.map */
