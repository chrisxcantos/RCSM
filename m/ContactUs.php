<html>
  <head>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Rehab</title>
  </head><!--head-->
  <body>
      <?php include 'header.php'?>
      <label id='ContactUs-text'>Contact Us</label>
      <div id='div-FacInfo'>
          
            <a href='https://www.google.com/maps/place/
                1338+20th+St,+Santa+Monica,+CA+90404/@34.0289905,
                -118.4831049,17z/data=!3m1!4b1!4m5!3m4!1s0x80c2bb35ff54a679:
                0xc82ecbcbda50425d!8m2!3d34.0289861!4d-118.4809162?shorturl=1' >
                <i id='cont-logoLoc' class="material-icons">location_on</i> 
            </a>         
            <label id='cont-address'>1338 20th Street Santa Monica, 
                                     California 90404
            </label>
            </label><br>
            <i id='cont-logoCall' class="material-icons">phone</i>
            <label id='cont-phone'>  (310) 255 - 2800 </label><br>  
            <label id='cont-hours'> Visiting hours : 11am - 8pm </label>
         
      </div>

      <div id='div-Marketing'>
          <p>
              For personal tour of our facility,<br> please contact our 
              marketing <br>director :
              <br><br>
              Phone: (888) 888 - 888 <br>
              &nbsp &nbsp &nbsp fax: (888) 888 - 888 <br>
              &nbsp e-mail: xxx@xxx.com
                
          </p>
          <img src='../images/marketing.jpg'>
      </div>
      <div id='div-Contact2'>
          <p>
              <img src='../images/imageContact2.jpg'>
              <div id="contact2-text">
              For ... ... and ... <br> please contact our 
              ... ...  <br>...... :
              <br><br>
              
              Phone: (999) 999 - 999 <br>
              &nbsp &nbsp &nbsp fax: (888) 888 - 888 <br>
              &nbsp e-mail: xxx@xxx.com
              </div>  
          </p>
          
      </div>      
      <?php include 'footer.php' ?>
  </body>
</html>  

<style>
    *{margin: 0;}
    #ContactUs-text{
        font-size: 50px;
        margin-top: 170px;
        margin-left: 30px;
        width: 90%;
        border-bottom: 5px solid lightgray;
        margin-bottom: 20px;
    }
    #div-Marketing p{
        font-family: Arial, Helvetica, sans-serif;
        float: left;
        font-size: 24px;
        margin-left: 30px;
    }
    #div-Marketing img{
        margin-left: 50px;
        box-shadow: 10px 10px 10px lightgray;
        
    }
    
    #div-FacInfo{
        font-size: 30px;
        color: #404040;
        /*background: pink;*/
        margin-bottom: 40px;
        margin-left: 60px;
    }
    #div-contact2{
        height: 450px;
        margin-top: 50px;
        /*background: pink;*/
    }
    
    #div-Contact2 img{
        margin: 20px 30px 0px 30px;
        box-shadow: 10px 10px 10px lightgray;
        float: left;
        height: 378px;
        width: 400px;
    }
    #contact2-text{
        padding-top: 50px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 24px;
        margin-left: 30px;
    }
</style>
