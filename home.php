<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="/jquery/jquery-2.1.4.min.js"></script>
    <title>Document</title>
</head>
<style>
body{
    background-color: #ffd;
}
    /******Header****/
    .head{
        display: flex;
        background-color: rgb(18, 2, 77);
    }
    button{
        height: 30px;
        background-color: red;
        color: white;
        margin-top: 5px;  
    }
    .log{
        height: 30px;
        margin-left: 1000px;
        border-radius: 5px;
    }
    .search{
        height: 30px;
        width: 80px;
        border-radius: 5px;
    }
    button:hover{
        background-color: rgb(18, 2, 77);
    }
    input{
        height: 30px;
        margin-left: -340px;
        margin-top: 5px;
        border-radius: 10px;
    }
    h3{
        color: rgb(34, 177, 243);
        margin-left: 90px;
    }
    span{
        color: red;
    }
    /******Header2_*****/
    ul{
        list-style-type: none;
        display: inline-flex;
        text-transform: capitalize;
        font-display: block;
        font-weight: bold;
        padding: 20px;
        margin-left: 600px;
    }
    ul li a{
        padding-right: 15px;
        margin: 0px;
        line-height: 22px;
        text-decoration: none;
        color: red;
    }
    ul li a:hover{
        color: rgb(18, 2, 77);
        text-decoration: none;
    }
    /******Body****/
    .img1{
        background-image: url("pic.jpg");
        background-size: cover;
        background-position: center;
        height: 550px;
        padding: 0;
        opacity: 1;
    }
    h1{
        color: white;
        margin-left: 500px;
        padding-top: 150px;
    }
    .div1{
        border: 5px;
        border-radius: 10px;
        background-color: rgb(18, 2, 77);
        display: inline-flex;
        padding-left: 20px;
        padding: 7px;
        text-transform: capitalize;
        font-display: block;
        font-weight: bold;
        margin: 0;
        margin-top: 20px;
        margin-left: 500px;
    }
    h4{ 
        width: 100px;
        color: white;
    }
    .m4{
        color: red;
    }
    h5{
        color: white;
        margin-left: 350px;
    }
    /*****Body2_****/
    .img2{
        height: 150px;
        background-size: 300px;
        background-position: center;
        background-repeat: no-repeat;
        border-top-left-radius: 40px;
        border-top-right-radius: 40px;
    }
    .img3{
        background-size: 300px;
        background-position: center;
        background-repeat: no-repeat;
        height: 150px;
        border-top-left-radius: 40px;
        border-top-right-radius: 40px;
    }
    .img4{
        background-size: 300px;
        background-position: center;
        background-repeat: no-repeat;
        height: 150px;
        border-top-left-radius: 40px;
        border-top-right-radius: 40px;
    }
    .col-sm-4{
        padding-top: 200px;
        margin-top: 30px;
        height: 100px;
    }
    .p{
        border: 10px;
        background-color: #fff;
        margin-left: 26px;
        width: 300px;
        height: 150px;
        box-shadow: 2px 2px #888;
    }
    h2{
        color: rgb(18, 2, 77);
        margin-top: 20px;
        margin-left: 330px;
    }
    /*****Footer*****/
    .body{
        background-color: rgb(18, 2, 77);
        color:  rgb(34, 177, 243);
        height: 300px;
        width: 100%;
        display: inline-flex;
        padding: 50px;
        margin-top: 250px;
    }
    .p4{
        color: white;
        margin-top: 20px;
        position: relative;
        right: 50px; 
    }
    .p5{
        color: white;
        margin-top: 20px;
        position: relative;
        right: 50px; 
    }
    .p6{
        color: white;
        margin-top: 20px;
        position: relative;
        right: 50px;
    }
    .p7{
        color: white;
        margin-top: 20px;
        position: relative;
        right: 50px;
    }
    .p8{
        color: white;
        margin-top: 20px;
        position: relative;
        right: 50px;
    }
    .b{
        color:  rgb(34, 177, 243);
        margin-left: 20px;
        position: relative;
        left: 100px;
    }
    .b2{
        margin-left: 70px;
    }
    .p0{
        color:  rgb(34, 177, 243);
        margin-top: 70px;
        position: relative;
        right: 230px;
    }
    @media(max-width: 1000px){
        .sec1{
            width: 780px;
        }
        
        h3{
            margin-left: 9px;
        }
        .log{
            margin-left: 300px;
        }
        ul{
            margin-left: 6px;
        }
        .sec3{
            width: 780px;
        }
        h1{
            margin-left: 100px;
        }
        .div1{
            margin-left:100px;
            margin-top: 2px;
        }
        h4{
            color: red;
        }
        .m4{
            color: white;
        }
        h5{
            margin-left: 10px;
        }
        .sec4{
            width: 780px;
        }
        h2{
            margin-left: 33px;
        }
        .img2{
            width: 150px;
            margin-left: 25px;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }
        .img3{
            width: 150px;
            margin-left: 50px;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }
        .img4{
            width: 150px;
            margin-left: 75px;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }
        .p{
            width: 150px;
            height: 210px;
            margin-left: -16px;
        }
        .sec5{
            width: 780px;
        }
    .body{
        padding: 25px;
    }
    .b{
        margin-left: 2px;
        position: relative;
        left: 50px;
    }
    .b2{
        margin-left: 2px;
    }
    .p0{
        margin-top: 130px;
        position: relative;
        right: 120px;
    }
    }
</style>
<body>
    <!--Header---->
    <section class="sec1">
        <div>
            <header>
                <div class="head">
                    <h3>WORLD<span>SCHOOL</span></h3>
                    <button type="submit" class="log">Login</button>
                    <input type="search"><button type="submit" class="search" onclick="result()">Search</button>
                </div>
            </header>
        </div>
    </section>
    <!---Header2_------>
    <section class="sec2">
        <div>
            <header>
                <ul>
                    <li><a href="" >Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Courses</a></li>
                    <li><a href="">Teachers</a></li>
                    <li><a href="">Activities</a></li>
                    <li><a href="">Pricing</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Althetics</a></li>
                </ul>
            </header>
        </div>
    </section>
    <!-----Body----->
    <section class="sec3">
        <div class="container-fluid img1">
            <h1>Best International Schools</h1>
            <div><h5>Find the best International schools and boarding schools in 100+ countries.</h5></div>
            <div class="div1">
            <h4>Social</h4>
            <h4>Explore</h4>
            <h4>Learn</h4>
            <h4 class="m4">Believe</h4>
            </div>
       </div>
    
    </section>
    <!-----Body2_---->
    <section class="sec4">
       <div class="container">
        <h2>The Best Schools Collection</h2>
        <div class="row">
        <div class="img2 col-sm-4" style="background-image: url('pic0.jpg');">
            <p class="p">An institution which holds books and/or <br>other forms of stored information.<br> Schools have unique library structure and <br>facilitated equipment. </p>
        </div>
        <div class="img3 col-sm-4" style="background-image: url('img.jpg');">
            <p class="p">A person who teaches, especially one employed <br>in a school. We have qualified teachers with good <br>teaching techniques and experiences.</p>
        </div>
        <div class="img4 col-sm-4" style="background-image: url('wap.jpg');">
            <p class="p">A room, often in a school where classes take place.<br> Good environment matters a lot, so we have qualified <br>environment where the magic of learning happen.</p>
        </div>
        </div>
       </div>
    </section>
    <!-----Footer------>
    <footer class="sec5">
        <div class="body">
            <B class="b">WORLD<span>SCHOOL</span></B><br>
            <p class="p4">We create possibilities<br>
            We connect to the world.<br></p>
            <p class="p0">Be Bold</p>
            <B class="b2">Explore</B><br>
            <p class="p5">Home<br>
            About<br>
            Althetics<br></p>
            <B class="b3">Visit</B><br>
            <p class="p6">worldschools@gmail.com<br>
            949 836 4029<br></p> 
            <B class="b4">Follow</B><br>
            <p class="p7">instagram<br>
            Twitter<br>
            Facebook<br></p> 
            <B class="b5">Legal</B><br>
            <p class="p8"> Term and Condition<br>
            Privacy<br></p>
        </div>
    </footer>
    <script>
    function result(){
        var noodle = 10;
        var egg = 5;
        var total = noodle * egg;
        console.log(total);
    }
    
    $(function(){
        $('form'). on('submit', function(e){
            e.preventDefault();
            var $submit = $("#subGet");
            $submit.attr("disabled", true);
            document.getElementById("loadQic").style.display ="inline-block";
            $.ajax({
                type: 'post',
                url: 'func/result.php',
                data: $('form').serialize() + '&ins=newFont',
                success: function(data){
                    $submit.attr("disabled", false);
                    document.getElementById("loadQic").style.display ="none";
                    jQuery('#get_return'). html(data). show();
                }
            });
        });
    });
    $(function(){
        $('form'). on('submit', function(e){
            e.preventDefault();
            var $submit = $("#subNeed");
            $submit.attr("disabled", true);
            document.getElementById("loadQic").style.display ="inline-block";
            $.ajax({
                type: 'post',
                url: 'func/login.php',
                data: $('form').serialize() + '&ins=newAge',
                success: function(data){
                    $submit.attr("disabled", false);
                    document.getElementById("loadQic").style.display ="none";
                    jQuery('#get_return'). html(data). show();
                }
            });
        });
    });
    $(function(){
        $('form'). on('submit', function(e){
            e.preventDefault();
            var $submit = $("#subWant");
            $submit.attr("disabled", true);
            document.getElementById("loadQic").style.display ="inline-block";
            $.ajax({
                type: 'post',
                url: 'func/profile.php',
                data: $('form').serialize() + '&ins=newView',
                success: function(data){
                    $submit.attr("disabled", false);
                    document.getElementById("loadQic").style.display ="none";
                    jQuery('#get_return'). html(data). show();
                }
            });
        });
    });
    </script>
</body>
</html>