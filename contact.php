<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SITE DE UN by Moncef </title>
    <meta name="description" content="">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).scroll(function() {
    if( $(this).scrollTop() > 130 ) {
        $('.documentation aside').css({top:'0px'});
    } else {
        $('.documentation aside').css({top:'130px'});
    }
});
    </script>
    <style>
        #content{
            min-height: auto;
        }
        .contact img{
            width: 35px;
            height: 35px;
        }
        input, textArea{
            width: 100%;
            padding: 5px;
            color: #333333;
        }
        textArea{
            height: 150px;
        }
        .submit{
            background: #F4F3F1 ;
            border: none;
            padding: 5px;
            margin: 10px 0px;
        }
        a:hover{
            text-decoration: none;
        }
    </style>
</head>
<body class="documentation">

<header id="top">
    <h1>
        <img src="img/logo1.png" style="height: 50px; left:20px;float: left; margin-left:20px;"/>
        <img src="img/logo2.png" style="height: 50px; left:20px;float: right; margin-right:20px;"/>
    </h1>

    <div class="wrapper">
        <h1 style="width: 300px;float: left;padding-top:20px;">
            <ul>
                <li><a href="home.php">Accueil</a></li>
            </ul>
        </h1>
        <h1 style="width: 250px;float: right;padding-top:20px;">
            <ul>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.html">À propos</a></li>
            </ul>
        </h1>
    </div>

</header>
<section id="content">
    <article>
        <?php
            if(isset($_GET['msg'])){
               ?>
                <div class="alert_erreur">
                    il faut remplir tous les champs
                    </div>
                   <?php
            }
        ?>
    <H2>Des interrogations, un projet... ? <br>N'hésitez pas, je suis socialble ^_^</H2>
    <blockquote class="contact">
        <form id="form" method="post" action="send.php">
            <table>
                <tr>
                    <td>
                        Nom
                    </td>
                    <td>
                        <input type="text" name="contactname" />
                    </td>
                </tr>
                <tr>
                    <td>
                        E-mail <strong style="color:red">*</strong>
                    </td>
                    <td>
                        <input type="email" name="mail" />
                    </td>
                </tr>

                <tr>
                    <td>
                        Sujet <strong style="color:red">*</strong>
                    </td>
                    <td>
                        <input type="text" name="subject" />
                    </td>
                </tr>

                <tr>
                    <td>
                        Message <strong style="color:red">*</strong>
                    </td>
                    <td>
                        <textarea name="message" cols="30"></textarea>
                    </td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Envoyer" class="submit">
            </form>
            <a href="http://www.linkedin.com/profile/view?id=177613941&trk=hb_tab_pro_top">
                <img class="imgsocial" src="img/linkedin.png">
            </a>
            <a href="https://twitter.com/metanote123">
                <img class="imgsocial" src="img/twitter.png">
            </a>
            <a href="">
                <img class="imgsocial" src="img/googleplus.png">
            </a>
            <a href="http://www.facebook.com/moncef.benrejeb">
                <img class="imgsocial" src="img/facebook.png">
            </a>

        <hr>
        <pre></pre>
    </blockquote>
    </article>
</section>


<footer>
    <div class="credits">
        <p>
            <img src="img/Stamplesky.png" /><img src="img/stampletext.png" /> &COPY; 2013 ALL RIGHTS RESERVED MONCEF BEN
            RAJEB Rapport Version BETA
        </p>
    </div>
</footer>


</body>
</html>