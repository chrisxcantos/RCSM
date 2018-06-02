<div id='HEADER'>
    <div id='menu-div'>
        <center>
            <div id="menu-icon-box">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>           
            </div>
            
        </center>
    </div>
    <div id='title-div'>
        <div><img src="../images/RCSM_logo.png" id="rcsm-logo">
        <!--<center>--> 
            <div id='title-box'>
                <span id='main-title'>The Rehab-Center </span><br>
                <span id='sub-title'>of Santa Monica</span>
            </div>
        <!--</center>-->
        </div>    
    </div>
</div>
<div id='mainMenu-div'>    <?php include 'MainMenu.php'?>        </div>

<style>
    #HEADER{
        height: 150px;
        width: 100%;
        border-bottom: 1px solid gray;
        background: darkslategrey;
        color: white;
        font-family: Trebuchet MS;
        font-size: 40px;
        position: fixed;
    }
    #menu-div{
        width: 20%;
        height: 150px;
        float:left;
        color: white;
        border: 3px solid gray;
    }
    #rcsm-logo{
        float:left;
        margin-top: 15px;
    }
    
    #title-div{
        width: 80%;
        height: 100%;
        float:left;
        border: 1px solid gray;
    }
    #main-title{        
        margin-left: 15px;
        font-size: 140%;    
    }
    #sub-title {        
        font-size: 90%; 
        margin-left: 20px;
    }

    #menu-icon-box{     margin-top: 25%;
                        height: 40%;
                        width: 40%;         }
    .bar1, .bar2, .bar3 {
        background: #fff;
        margin-top: 20%;
        width: 100%;
        height: 10%;
        transition: .3s;
    }   
    .bar1{ margin-top: 20%;}
    
/*    .bar1{      transform: rotate(-45deg) translate(-20px, 15px);     }
    .bar3{   transform: rotate(45deg) translate(-15px, -15px);}*/
    
    .change .bar1 {
        -webkit-transform: rotate(-45deg) translate(-18px, 15px);
          transform: rotate(-45deg) translate(-18px, 15px);
    }

    .change .bar2 {opacity: 0;}

    .change .bar3 {
        -webkit-transform: rotate(45deg) translate(-15px, -15px);
        transform: rotate(45deg) translate(-15px, -15px);
    }    
</style>

<script>
    var menuSwitch = 0;
    setMenuMargin();
    $(document).ready(function(){
        scrollEffect();
        $('#menu-div').click(function(){toggleMainMenu();});
    });
    
    function toggleMainMenu(){
        document.getElementById('menu-icon-box').classList.toggle("change");
        if (menuSwitch === 0){
            menuSwitch = 1;
            document.getElementById('div-MainMenu').style.height = '1250px'; 
            document.getElementById('menu-div').style.background = '#677f7f';
            document.getElementById('menu-icon').classList.remove('fa-reorder');
            document.getElementById('menu-icon').classList.add('fa-times');
        }
        else{
            menuSwitch = 0;
            document.getElementById('div-MainMenu').style.height = '0px';
            document.getElementById('menu-div').style.background = 'darkslategrey';
            document.getElementById('menu-icon').classList.add('fa-reorder');
            document.getElementById('menu-icon').classList.remove('fa-times fa-2x');

        }
        
    }
    function scrollEffect(){
      var divBody = document.body;
      var h = divBody.scrollTop;
      var fixedDiv = document.getElementById('HEADER');
      
      if (h > 160)  {fixedDiv.style.opacity = '0.7';   }
          else      {fixedDiv.style.opacity = '1';     }
    }    
    
    function setMenuMargin(){
        var xHeight = document.getElementById("menu-div").offsetHeight;
        var mTop = xHeight * 0.30;
        document.getElementById("menu-icon-box").style.marginTop = mTop;        
    }
    
</script>
    