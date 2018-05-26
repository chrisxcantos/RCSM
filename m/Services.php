<div id='div-services'>
    <label id='services-header'>Services </label>
    <label id='services-text'>
        Enriching the precious gift of life is where our <br>
        passion meets your needs
    </label>
    <table id='list-services'>
        <tr>
            <td><button class='serv-btn' id='101c'>Skilled Nursing </button></td>
            <td><button class='serv-btn' id='201'>Rehabilitation</button></td>
            <td><button class='serv-btn' id='301'>Social Services</button></td>
        </tr>
        <tr>
            <td><button class='serv-btn' id='401b'>Activity Programs</button></td>
            <td><button class='serv-btn' id='601b'>Cardio Pulmonary</button></td>
            <td><button class='serv-btn' id='701'>Respite / Hospice</button></td>
        </tr>        
    </table><!--list-services-->    
    <div id='div-gallery'>
        <div id='service-gallery'>
            <img id='img-services' src='../images/101c.jpg'/>
        </div><!--service-gallery--> 
    </div><!--div-gallery-->
</div><!--div-services-->


<style>
    #testlist{
        font-size: 24px;
        columns: 2;
    }
    #testlist li{
        list-style-position: outside;
        margin-left: 13px;
    }    
    #div-services{        
        transition: .4s;   
        width: 100%; 
    }
    
    #services-header{
        margin-top: 15px;
        color: lightgrey;
        font-size: 40px;
        margin-left: 60px; 
    }
    
    #services-text{       
        margin-left: 60px;
        font-size: 40px;
        font-family: Bahnschrift Light;
        color: black;
        font-weight: 600;
    }
    #div-gallery{
        width: 100%;
        height: 1000px;
        background: lightblue;
        box-shadow: 0px 10px 10px lightgray;
    }
    #img-services{
        width: 100%;
        height: 100%;
    }
    table{}
    #list-services td{ width: 10%;}
    #list-services button{
        width: 100%;
        height: 100px;
        background: #006d6d;
        border: 1px solid white;
        font-size: 32px;
        color: white;
    }
    #list-services button:focus{
        background:#7fb6b6;
        border: 1px solid white;
    }

</style>

<script>
    $(document).ready(function(){
        $(".serv-btn").click(function(){
           
           var text = this.id;
           setServiceImage(text);
           this.id.focus();
           
        });   
    });
    
    function setServiceImage(img){
        document.getElementById('img-services').src = '../images/'+img+'.jpg';
    }
    
</script>