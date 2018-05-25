<div id='div-MainMenu'>
    <center>
    <div id='div-mMenu-contact'>
        <a href='https://www.google.com/maps/place/
           1338+20th+St,+Santa+Monica,+CA+90404/@34.0289905,
           -118.4831049,17z/data=!3m1!4b1!4m5!3m4!1s0x80c2bb35ff54a679:
           0xc82ecbcbda50425d!8m2!3d34.0289861!4d-118.4809162?shorturl=1' >
           <i id='mMnu-logoLoc' class="material-icons">location_on</i> 
                 
           <label id='mMnu-address'>1338 20th Street Santa Monica, </label><br>
           <label>&nbsp&nbspCalifornia 90404</label>
        </a>
        <br>
        <i id='mMnu-logoCall' class="material-icons">phone</i>
        <label id='mMnu-phone'>(310) 255 - 2800 </label>
        <hr>
    </div>        
    <button class='mMnu-btn'  id='hme'>Home</button>     
    <button class='mMnu-btn'  id='abt'>About Us</button> 
    <button class='mMnu-btn'  id='faq'>FAQ</button>
    <button class='mMnu-btn'  id='con'>Contact Us</button>
    <button class='mMnu-btn'  id='car'>Career Opportunities</button>
    </center>
</div><!--div-MainMenu-->
<style>
    #div-MainMenu{
        width: 100%;
        height:0;
        background: #677f7f;
        position:fixed;
        z-index: 1;
        transition: .4s;
        overflow: hidden;
        font-size: 40px;
        margin-top: 150px;
        opacity: 0.9;
        
    }
    #div-mMenu-contact{
        color: #cccc00;
        font-size: 50px;
        font-weight: normal;
        margin-top: 30px;
        margin-bottom: 20px;
        padding-bottom: 30px;
        
    }
    #div-mMenu-contact label{
        text-decoration: underline;
    }
    #div-mMenu-contact a:link{color: #cccc00;}
    #div-MainMenu button{
        width: 80%;
        background: #303030;
        border: 1px solid lightgray;
        height: 120px;
        color: white;
        font-size: 60px;
    }
    #mMnu-logoLoc, #mMnu-logoCall{
        font-size: 50px;
        color: white;
    }
    
</style>

<script>
    $(document).ready(function(){
       $('.mMnu-btn').click(function(){
           var mnu_id = this.id;
           switch(mnu_id){
               case 'con': window.location = 'ContactUs.php'; break;
               case 'hme': window.location = 'index.php'; break;    
               case 'abt': window.location = 'About.php'; break;    
               case 'faq': window.location = 'FAQ.php'; break;        
               case 'car': window.location = 'Career.php'; break;            
           }  
       }); 
    });
    

</script>    