
 <head>      
     <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
     <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.js"></script>
  </head>
  <body id="home-body">
      <div id='greeting-div'>    <?php include 'Greeting.php'?>        </div>
      <div id='weHave-div'>      <?php include 'weHave.php'?>          </div>
      <div id='WeAreMariner-div'><?php include 'WeAreMariner.php'?>    </div>
      <div id='WeAre-div'>       <?php include 'WeAre.php'?>           </div>
      <div id='Services-div'>    <?php include 'Services.php'?>        </div> 
      <br><br>
      <div id='Tour-div'>        <?php include 'Tour.php'?>            </div>
      <br><br>
      <?php echo '<br>'; include 'Footer.php'; ?>
  </body>

<style>


    #greeting-div{width: 100%;}
    #weHave-div{ margin-top: 70px; width: 100%;   }
    
    #weAreMariner-div{
        background: darkslategrey; 
        width: 100%;
        box-shadow: 5px 10px 20px darkgray,5px -10px 20px darkgray;
        
    }
    #Services-div{        
        background: #5e7a80;    
        width: 100%;
        box-shadow: 5px 10px 20px darkgray,5px -10px 20px darkgray;
    }

    #Tour-div{
        width: 100%;
        height:600px;
        background: #5e7a80;
    }    

</style>    