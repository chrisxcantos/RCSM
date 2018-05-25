<html>
  <head>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head><!--head-->
  <body id='about-body' onscroll="scrollEffect()">
      <?php include 'header.php'?>
      <label id='AboutUs-title'>About Us</label>
      
      <div id="aboutUs-text-div">
          <p>
                At Mariner Health Care, we understand.
                We are committed to providing compassionate and comprehensive care in a pleasant, 
                comfortable environment. At Mariner, we focus on the people we serve and the 
                care we provide. Throughout our network of 21 skilled nursing facilities 
                located in southern and northern California, we provide 24-hour care ranging 
                from short-term rehabilitation therapy to quality long-term restorative nursing care. 
                <br><img id='abtUs-group-pic' src='../images/abtus.jpg'><br><br>
                We value our employees. We are committed to providing them with a professional and supportive work environment.  We value ongoing education and training to equip our employees with the knowledge and skills needed to provide quality care.
                At Mariner Health Care we treat our patients, residents and employees as part of our family.
                Mariner Health Care informs the public, patients, and employees that the agency does not discriminate on the basis of race, color, national origin, disability or age.
                Urban Tails is a proud supporter of Mariner Health Care.
          </p>
      </div>

      <?php include 'footer.php' ?>
  </body>
</html>  

<style>
    #AboutUs-title{
        font-size: 50px;
        margin-top: 170px;
        margin-left: 30px;
        width: 90%;
        border-bottom: 5px solid lightgray;
        margin-bottom: 20px;
    }    
    #abtUs-group-pic{
        width: 100%;
        height: 460px;
        box-shadow: 10px 10px 10px lightgray;
    }
    #aboutUs-text-div{
        /*background: pink;*/
        padding: 10px 100px 30px 30px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 30px;
    }
</style>
<script>

</script>