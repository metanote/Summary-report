<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Rapport de Stage Moncef Ben Rajeb </title>
    <meta name="description" content="">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).scroll(function() {
    if( $(this).scrollTop() > 130 ) {
        $('.documentation aside').css({top:'0px'});
        $('#rightcontenu').css({top:'10px'});
    } else {
        $('.documentation aside').css({top:'130px'});
        $('#rightcontenu').css({top:'150px'});
    }
});
    </script>
</head>
<body class="documentation">
<A name="intro"></A>
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
    <div id="rightcontenu">
        <h3>Livres</h3>
        <br />
        <ul>
            <li>
                <a href="http://www.amazon.fr/Programming-Scala-Martin-Odersky/dp/0981531644">     
                <img class="imgbook" src="img/Pscala.png"></a>
            </li>
            <li><a href="http://www.amazon.fr/Programming-Scala-Martin-Odersky/dp/0981531644">     
                Programming in Scala</a></li>
            <li>
                <a href="http://www.amazon.fr/Semantic-Web-Working-Ontologist-Effective/dp/0123735564">  
                <img class="imgbook" src="img/sweb.jpg"></a>
            </li>
            <li> <a href="http://www.amazon.fr/Semantic-Web-Working-Ontologist-Effective/dp/0123735564">  
               Semantic web for the working ontologist</a></li>
            <li>
                <a href="http://www.amazon.fr/The-Social-Semantic-John-Breslin/dp/3642011713">  
                <img class="imgbook" src="img/ssweb.jpg"></a>
            </li>
            <li>   <a href="http://www.amazon.fr/The-Social-Semantic-John-Breslin/dp/3642011713">  
             The Social Semantic Web</a></li>
        </ul>






    </div>    
<section id="content">
<article>
    <?php
            if(isset($_GET['msg'])){
               ?>
                <div class="alert_succes">
                    votre message est bien transmis
                    </div>
                   <?php
            }
        ?>
    <H2><A name="intro"></A></H2>
    <blockquote>
            <br />
        <br />
        <h3>Rapport de Stage<span style="margin-left: 195px;"></span>
            Année Universitaire 2012/2013</h3>

        <h3 style="text-align: center;">
            <br />
            <br />
            Implémentation de la Linked Data platform (RDF, WebID) dans le backend Scala de l'application web Stample
        </h3>
        <br />
        <hr>
       <br />
        <strong>Formation : </strong>Master Web Intelligence<br/>
        <strong>Université : </strong> Université de Jean Monnet Saint-Etienne<br/>
        <strong>Par : </strong> Moncef BEN RAJEB<br/>
             <br />
        <hr>
                   <br />
        <b>Ecadreurs de Stage</b><br/>
        <strong>Tuteur de stage : </strong>Henry STORY<br/>
        <strong>Tuteur pédagogique : </strong>Professeur Pierre MARET<br/>

    </blockquote>
</article>

<article>
    <blockquote><H2><A name="remerciement">Remerciement</A></H2>
    <p>
        Avant de vous décrire ce que j'ai appris durant ma première expérience dans le milieu



        professionnel, il me semble opportun de commencer par des remerciements, à ceux qui m'ont



        appris durant ces trois premiers mois de stage et à la famille Story de cet accueil chaleureux



        durant cette période.


         </p> <p> Je tiens également à exprimer mes vifs remerciements à mon encadreur de stage Mr.Henry Story pour l'aide déterminante qu'il ma
        accordée, pour l'intérêt qu'il a porté à mon travail et mon apprentissage, et pour m’avoir accompagné tout au long de cette
            expérience avec beaucoup de patience et de pédagogie.   </p>
           <p>
        Je remercie aussi l’ensemble des personnes au labo d'édition et l'équipe Stample avec lesquels j'ai travaillé, pour leur soutien
        et leurs conseils aussi bien dans la partie implémentation que dans la rédaction de ce rapport.
              </p>
        <p>
        Je remercie particulièrement Mr. Pierre Maret, mon tuteur de stage pédagogique, d'avoir su m'orienter et m'aiguiller  à travailler avec Stample et de son soutien tout au long de cette expérience.
       <br /> Enfin, je remercie tous les professeurs de l'université de Jean Monnet, et toute presonne qui s'interesse au contenu de ma page web.
    </p>




    </blockquote>


</article>

<article>

    <blockquote>
        <H2><A name="introduction">Introduction</A></H2>

        <p>
            Au cours de ma première année de master Web Intelligence à  l'université de Jean Monnét Saint Etienne, nous
            devrions effectuer un stage
            d'une durée minimale de trois mois à  compter de 18 mars.
        </p>

        <p> Tout au long de mon stage, j'ai été amené grâce à  Monsieur Pierre Maret à  travailler avec une Startup Stample
            pour écrire une version décentralisée avec les nouvelles téchnologies du web
            sémantique et le langage de programmation fonctionnelle orienté object Scala afin de mettre en oeuvre une
            solution mondiale au probléme de centralisation.
        </p>

        <p>
            Ce stage a  été une bonne opportunité pour moi d'apprendre Scala, PlayFrameWork et de voir en proche la vie
            profesionnelle avec une Startup qui est notament differente d'une
            entreprise ainsi que d'apprendre la philosophie du web et de travailler avec un groupe très ambitieux.
        </p>

        <p>
            J'ai décidé d'écrire mon rapport en HTML5 et de le mettre en ligne comme projet public open source afin
            d'interagir avec ce rapport comme étant un projet
            imformatique puis l'héberger sur un serveur pour avoir une visibilité plus grande de ce que j'ai appris et
            aider les autres à  apprendre plus vite permettant ainsi à  mes professeurs, mes collegues et mes amis de naviguer facilement pour voir le contenu du
            rapport et profiter de mes annexes disponibles en ligne
            et me contacter pour des interrogations et ils peuvent accèder au source disponible sur mon compte
            GuitHub pour modifier ou me proposer des suggestions.
            Je recommande cette méthode à  tout informaticien qui veux montrer ces talents en programmmant aussi le
            rapport du Stage.

        </p>

        <p>
            Ce travail permet d'apporter une réponse au  problème de centralisation des données évoqué par Romain Blin
            lors de sa thése de première  année  de master, mon tuteur de stage Henry Story spécialiste du web sémantique et qui
            fais partie maintenant de Stample (Diercteur technique) a décidé de mettre en place ces cinqs années de
            recherche
            sur le web sémantique et le Linked Data pour Stample.
        </p>

        <p>
            Il apparait cohérent de commencer mon rapport de stage par une présentation de Stample, et ensuite de mettre en
            place
            tous les concepts de programmation fonctionnelle et orientée objet Scala objet Scala, qui ont nécessité une période d’apprentissage importante, ainsi que les autres
            outils. Il s’agira ensuite de décrire la solution actuelle centralisée de Stample, décortiquer les
            différentes fonctionnalités, analyser les problèmes, et décrire l'intégration de secureSocial
            pour Stample.
        </p>


    </blockquote>
</article>
<article>
    <blockquote>
        <H2><A name="presentation">Présentation de Stample</A></H2>


        <h3>Brève description</h3>

        <p>
            Stample, première plateforme de réseau social distribué et sécurisé, redonne à  chacun le contrôle exclusif
            de ses
            informations et
            améliore l'ergonomie de l'apprentissage, du travail individuel et de la collaboration.
        </p>
        <b>Stample en quelques mots :</b><br />
        <p><b>Sample,</b> attraper facilement du contenu du web avec notre puissant bookmarklet.<br />
            Drag & drop des fichiers depuis votre ordinateur, créer des notes et articles de n'importe quel appareil.</p>
        <p><b>Staple,</b> Gracieusement organiser votre bibliothèque de contenu personnel grace à notre architecture d'arborescence similaire à un système de fichier.  <br />

            Options visuelles conçues avec soin des informations dont vous avez besoin et accessible en un coup d'œil.</p>

        <p><b>Stamp, </b>résumer, mettre en évidence et d'annoter tous vos contenus.<br />

            Partager parfaitement du contenu et des métadonnées(des cathégories) avec certains membres de votre réseau.</p>


        <h3>Architecture Conceptuelle de Stample </h3>

        <p>
            L'idée de stample conçue au départ par Edward et Sacha malgré l'innovation  qu'elle apporte reste toujours
            une
            application web2,
            l'arrivée d'Henry(directeur technique) avec ces idées de décentralisation de ce réseau social et passer à 
            un
            stample Web3 permet non seulement d'avoir un stample unique
                mais aussi révolutionnaire, Scalable et d'utiliser le protocole d'authentification webID (standard du w3c).
        </p>

        <img src="img/stample.png" style="width:70%; height:70% ;margin-left:80px;">
        <br/>
        <h4 style="text-align:center">Figure 1. Architecture conceptuelle de Stample</h4>
    </blockquote>
</article>
<article>
    <blockquote>
        <H2><a name="EA"> Etat de l'art </a></H2>


        <p>La plateforme Stample est développée en Scala, Json, HTML5 et CSS3, sur le Framework Play et avec MongoDB NoSQL database.</p>
        <p>Durant ma premiére partie de Stage j'ai subi une formation en Scala commençant par le livre de Odersky Programming in Scala puis en faisant les exercices sur coursera
         en découvrant le Framework Play avec
        des petites applications.</p>
        <p>L'apprentissage de Scala m’a pris longtemps, étant donné mon manque de connaissances sur



            les langages de programmation fonctionnelle et la pensée impérative à laquelle je me suis



            habitué.</p>
        <p>La centralisation des données qui s'oppose au principe du web comme Tim Berners-Lee



            l'explique dans son article au w3c est un problème réel. Le web représente une source



            d'informations prépondérante mais malheureusement mal exploité par des réseaux sociaux,



            dont le plus notoire jusqu'à maintenant FaceBook s'opposant au principe du web et



            provoquant un danger qui amené à être empiré.
        </p>


        <h3>Constat de départ</h3>

        <p>
            A l'ère de l'économie de la connaissance, de l'omniprésence des données, de leur circulation permanente sur
            l'internet, et
            en l'absence de mécanismes efficaces de restriction de leurs usages, nos informations personnelles, nos
            travaux,
            et de plus en plus de données nous concernant, sont captées, détournées et exploitées sans qu'aucun contrôle
            ne soit
            possible.

            Les enjeux critiques des individus, entreprises, institutions et états:
        </p>
        <ul>
            <li>Permettre à  chaque partie prenante de reprendre le contrôle de leurs informations,</li>
            <li>Favoriser l'union et la coordination des intelligences autour d'objectifs communs.</li>
        </ul>

        <h3>Probléme</h3>

        <p>
            Il ya un besoin croissant d'un outil de partage sécurisé des connaissances numérique.
            Les gens perdent des heures chaque semaine en raison de la complexité croissante de leur vie numérique:
        </p>
        <ul>
            <li>Filtrage des e-mails et notifications non désirés,</li>
            <li>Créations et mises à  jour de leurs profils sur de trop nombreux services isolés les uns des autres ,
            </li>
            <li>Récupération de mots de passe perdus ou volés ...</li>
        </ul>

        <p>Et les choses empirent:</p>
        <ul>
            <li>L'information pertinente est de plus en plus difficile à  extraire du déluge de données,</li>
            <li>La grande segmentation des outils rend l'organisation et la collaboration frustrante.</li>
            <li>Les modèles actuels de stockage centralisé de données posent de sérieux problèmes de confidentialité et
                de
                respect de la vie privée.
            </li>
        </ul>

        <h3>Solution</h3>

        <p>
            Stample propose une solution simple pour :
        </p>
        <ul>
            <li>Reprendre le contrôle de vos données personnelles, décider avec qui et comment elles peuvent être
                partagées,
            </li>
            <li>Améliorer l'ergonomie de l'apprentissage et du travail par la contextualisation avancée de
                l'information,
            </li>
            <li>Gérer son identité de façon autonome sur le Web social distribué,</li>
            <li>Collaborer avec son réseau de confiance en toute sécurité, sans centralisation, ni accès d'une tierce
                partie.
            </li>
        </ul>

        <h3>Concurrence</h3>
        <ul>
            <li>Protocoles d'identification (Alternatives à  WebID ): OpenID, OAUth, Infocard...</li>
            <li>Gestion de l'accès et de l'identité: CA Technologies, Ping identity, SailPoint, Garlik (owned by
                Experian)...
            </li>
            <li>Stockage en ligne: Dropbox, Box, Google Drive...</li>
            <li>Réseaux sociaux: Facebook, Tumblr, Pinterest, Instagram...</li>
            <li>Aggrégateurs et plateformes de blogs: WordPress, Twitter, Reddit, Scoop.it, Paper.li, Flipboard, Zite,
                Jolicloud...
            </li>
            <li>Réseaux sociaux professionnels: LinkedIn, Quora, Yammer, Podio...</li>
            <li>Outils de note et d'organisation d'informations: Evernote, SpringPad, Clipboard, Pearltrees, Kippt,
                Google
                Keep..
            </li>
            <li>Outils de partage des connaissances: Mendeley, Kno, Scribd, SlideShare, Issuu...</li>
        </ul>

        <h3>Avantage competitif</h3>

        <p>
            La concurrence sur l'Internet, et en particulier dans le domaine des réseaux sociaux est féroce, un très
            grand
            nombre d'acteurs se bat sur un périmètre de marché très resseré.
            Comme l'a expliqué Renee Mauborgne dans «Blue Ocean Strategy», la seule façon de sortir gagnant d'un
            marché
            hautement concurrentiel comme celui-ci est de changer les règles du jeu,
            de créer un marché qui n'existait pas auparavant.
            Stample ouvre l'océan bleu du Web social sécurisé et distribué (réparti). Stample vise à  établir sa
            réputation et
            son leadership dans ce domaine par le passage à  une architecture
            respectueuse de la vie privée et de la confidentialité, les aidant à  collaborer efficacement sans
            duplication.
        </p>

        <h3>Strategie</h3>
        <h4>Imposer la plateforme technique open source comme la référence</h4>

        <p>
            Le caractère open source du coeur applicatif de Stample est un élément central de notre stratégie.
            Il nous permet de nous prémunir contre des attaques en droit de la propriété intellectuelle par les géants
            du
            secteur
            et de bénéficier du soutien d'un communauté de développeur extrémement productive.

            Notre leadeship sur ce nouveau marché immense résultera de notre capacité à  imposer le rythme des mises à 
            jour de
            notre plateforme
            ouverte, et à  maintenir notre avance dans la maîtrise des technologies mises en oeuvre.
        </p>
        <h4>Offrir une une application de qualification de l'information et l'expérience utilisateur la plus
            homogène </h4>

        <p>
            Stample est conçu pour s'adapter aux gestes et aux usages quotidiens des gens.
            Nos utilisateurs pourront chacun construire leur réseau de connaissances personnelles, en évaluant leurs
            sources et
            les contenus qu'ils partagent. <br />
            Nous allons utiliser la mécanique du jeu pour encourager les gens à  partager des informations hautement
            qualifiées
            et contextualisées.
        </p>

        <h3>Modele Economique</h3>

        <p>
            Stample est distribué sous deux formes impliquant deux modèles d'affaires distincts:
        </p>
        <ul>
            <li>
                Une version de base logiciel libre (open source) que chacun peut installer de façon autonome sur les
                serveurs de
                son choix;
                dont la monétisation résulte de la fourniture de support, garantie et de services spécifiques.
            </li>
            <li>
                Un Service cloud à  la carte (en mode SaaS (logiciel en tant que service));
                dont la monétisation résulte d'abonnements et de commissions sur la vente d'options.
            </li>
        </ul>
    </blockquote>
</article>


<article>
    <blockquote>
        <H2><a name="HS">Hands On Scala</a></H2>

        <h3>Introduction historique</h3>

        <p>
            Afin de s’imprégner du contexte de Scala, commençons par un historique introductif :
        </p>
        <ul>
            <li>
                <b>1996 : </b>
                Sun Microsystems realise JAVA 1.0 conçu par James Gosling
            </li>
            <li>
                <b>1997 : </b>
                Martin Odersky et Philip Wadler publier la spécification du langage Pizza à  PoPL (Principles of
                Programming
                Language).
                <br />
                <br />
                Pizza est un superset de Java, et se traduit par des sources Java comme une représentation intermédiaire.
                <br />
                Features parametric polymorphism (a.k.a. "generics"), algebraic types (a.k.a. "case classes") et
                higher-order
                functions.
            </li>
            <li>
                <b>1998 : </b>
                Bracha, Odersky, Stoutamire and Wadler publie GJ à  OOPSLA.   <br />
                GJ adopte génériques de Pizza, supprime case classes et higher-order functions
            <br />
                Compile directement à  bytecode JVM, éliminant traduction source Java.
            </li>
            <li>
                <b>2000</b>
                Sun Microsystems adopte le compilateur GJ Odersky's comme javac in JDK 1.3
            </li>
            <li>
                <b>2004</b>
                Sun Microsystems Java versions 1.5, intégrant des génériques de GJ
            </li>

           <h4>En attendant...</h4>


            <li>
                <b>Milieu des années 1980 : </b>
                Beaucoup de langages fonctionnels dans la recherche, les dérivés de Scheme, ML et Miranda.
           <br />
               <br />
                Caractéristiques du langage explorés, y compris l'inférence de type, l'évaluation paresseuse et types de
                rang
                supérieur
            </li>
            <li>
                <b>1987-1999 : </b>
                developpement de HasKell
            </li>
            <li>
                <b>1999-2001 : </b>
                Odersky developpe Funnel language
            </li>
        </ul>

        <h3>Histoire Moderne</h3>

        <img src="img/Martin.JPG" alt="odersky" style="float: left; width: 150px; margin-right: 10px;" />

        <strong>Nom :</strong> Scala vient de " <b>Scal</b>able <b>la</b>ngage"<br/>
        <strong>Auteur :</strong> Martin Odersky<br/>
        <strong>Date de Création :</strong> 2003<br/>
        <strong>Lieu :</strong> EPFL <a href="http://www.epfl.ch/">Ecole polytechnique fédérale de lausanne</a><br/>
        <strong>But :</strong> étre élégant, concis, et d'étre type-safe...<br/>
        <strong>Dernier version : </strong>Scala 2.10.1 mars 2013<br/>
        <strong>Dans la communauté :</strong> SF Scala (San Francisco),
        <a href="https://groups.google.com/forum/?hl=fr&fromgroups#!forum/paris-scala-user-group">
            Paris scala user groupe
        </a>

        <img src="img/psug_logo.png" style="width: 25px;">
        <br />
        <br />
        <h4>Introduction générale</h4>

        <p>
            On prend le langage JAVA, c'est certainement le meilleur langage, la meilleure plateforme et la communauté
            la plus
            importante pour
            l'industrie.
        </p>

        <p>
            Java a remporté plusieurs victoires : le débat du « write once/run everywhere », la gestion de la mémoire,
            une
            plateforme d'entreprise,
            un écosystème open-source énorme. Il est enseigné dans les universités et les écoles d'ingénieurs.
        </p>

        <p>
            <strong>Mais si Java est votre seule langue maternelle, je pense qu'il est temps d'apprendre d'autres
                langages. </strong>
        </p>

        <p>
            Scala par exemple est très intéressant. La communauté, les outils, les livres et l'énergie qui anime ce
            langage
            méritent que
            l'on s'y intéresse.
        </p>

        <p>
            Scala est un langage mature qui tourne sur la JVM. Il propose une approche différente pour résoudre nos
            problèmes.
            La majorité des développeurs moi y comprie n'ont pas eu de formation en programmation fonctionnelle.
        </p>

        <p>
            Il y a tellement de concepts intéressants, une approche si complémentaire, qu'il est
            vraiment
            dommage de ne pas
            s'y mettre.
            J'y suis jusqu'au cou en ce moment, je nage de grandes longueurs dans un univers que j'utilise depuis mon
            premier
            jour de stage
            et puis : Play! Framework aussi avec Scala.
        </p>

        <p>
            J'encourage les développeurs de base à  découvrir ce langage en commençant par prendre un outil,
            puis en
            écrivant une vraie application de la vraie vie. <br>
            Apprendre Scala peut prendre aussi de temps que vous pouvez prévoir si vous êtes pas habituer avec la
            programmation
            fonctionelle, mais il vous apportera beaucoup.
        </p>

    </blockquote>
</article>

<article>
    <blockquote>
        <H2><A name="langage">Un langage Scalable/Adaptable</A></H2>

        <h3>Description</h3><br>

        <p>
            Le nom<strong> Scala</strong> vient du besoin d'un langage Scalable multi-paradigme, son design lui permet
            de
            grandir avec la demande des
            utilisateurs. <br>
            Scala nous permet avec un petit script de construire des grandes systems.
            C'est facile de travailler avec scala car il tourne sur la machine virtuelle java et il interagit
            parfaitement avec toues les bibliothèques de java.
            Techniquement, Scala est un mélange de concepts de programmation orientée objet et fonctionnelle dans un
            langage typé statiquement.
            La fusion de la programmation orientée objet et fonctionnelle se manifeste dans de nombreux aspects de la
            Scala, il est probablement
            plus répandue que dans toute autre langue largement utilisée. Les deux styles de programmation ont des
            forces complémentaires quand
            il s'agit de l'évolutivité. Constructions de programmation fonctionnels de Scala, il est facile de
            construire des choses intéressantes
            rapidement à  partir de pièces simples. Grâce à Ses constructions orientées objet, il est facile de structurer les
            grands systèmes
            et à  les adapter aux nouvelles exigences. La combinaison des deux styles de Scala permet d'exprimer de
            nouveaux types
            de modèles de programmation et d'abstractions qui la composent. Elle conduit également à  un lisibles et
            style de programmation concise.
            Et parce qu'il est tellement malléable, la programmation en Scala peut être beaucoup de plaisir.
        </p>

        <h3>Les outils</h3>
        <ul>
            <li>The Interactive Interpreter : Read-Evaluate-Print Loop (REPL)</li>
            <li>Simple Build Tool (sbt)</li>
            <li>IDE : Eclipse/IntelliJ... avec plugin Scala</li>
            <li>Scala doc</li>
        </ul>
    </blockquote>
</article>

<article>
    <blockquote>
        <H2><A name="apprentissage">Apprentissage des concepts COURSEA</A></H2>

        <h3>Principes de la programmation fonctionnelle en scala</h3>
        <br/>

        <p>
            Sur le site des cours en ligne
            <a href="https://www.coursera.org/">
                coursera
            </a>
            vous trouverez une
            trés bonne introduction sur la programmation fonctionnelle Scala assurée par
            Martin Odersky, qui n'est moins que l'inventeur du langage Scala.
            Le site avec un nombres aussi important d'inscrits, a rencontré un bon succés, révélateur de l'émulation de
            ce langage.
            <br/>
            J'ai suivi ce cours de 7 semaines, dont je suis très satisfait, deux parties un cours théorique en video
            et des exercices partant toujours sur le contenu
            du cours ainsi que des interrogations au cours durant le cours théorique.
            Les vidéos des cours sont en anglais et relativement simples à  comprendre en outre le professeur est un
            excellent pédagologue.
            Les exercices permettent de plus en plus d'apprendre le raisonnement fonctionnel,
            et un systéme de notation en temps réel premet d'avoir un feedback rapide sur le travail.
            Vous trouvez sur le site les détailles du cours ainsi que les exercices et des aides guide pour chaque
            exercice de l'Assignments.

        </p>

        <h3>Mes Remarques, mes attentions dans ces cours et ce que j'ai retenu</h3>
        <ul>
            <li>
                <b>
                    Week 1 : Fonctions et Evaluation :
                </b>
                Dans cette semaine on a vu la possibilité de choisir entre
                le call by name pour évoluer la fonction en premier
                lieu et les arguments si besoin, et call by value pour faire évoluer les arguments avant d'appeler la
                fonction.
                <br/>
                Hint : En java il y a que le call by value.
            </li>
            <li>
                <b>
                    Week 2 : Les fonctions d'ordre supérieur :
                </b>
                Des fonctions qui prennent en paramétre d'autres
                fonctions et qui retournent aussi
                des fonctions, la notion fondamentale de la récursivité terminale dont scala se base et l'astuce de
                l'accumulateur.
            </li>
            <li>
                <b>
                    Week 3 : Données et abstraction :
                </b>
                La hiérarchie des objets est : Any, AnyRef et AnyVal en
                Scala tout est un object(pas de type primitif comme Java int,char...) <br />
                Exercice disponible sur mon compte GitHub <a href="https://github.com/metanote/objsets">week3</a>
            </li>
            <li>
                <b>
                    Week 4 : Type & Pattern matching :
                </b>
                Encodage Huffman binary tree: Les fonctions sont des
                objets avec une méthode apply
                les deux formes de plymorphismes subType&generics les types paramétres s'écrivents Class[T] au lieu
                de Class &ltT&gt en Java. <br />
                La variance etant donnée que A :< B si C[A] :< C[B] C est Covariant un objet immutable peut être
                covariant.
                Le pattern matching notion très importante en Scala. <br />
                Disponible sur mon GitHub
                <a href="https://github.com/metanote/patmat">
                    week4
                </a>
            </li>
            <li>
                <b>
                    Week 5 : Les Lists :
                </b>
                La concatenation xs ++ ys est équivalante à  (xs foldRight ys)(_::_)
            </li>
            <li>
                <b>
                    Week 6 : Les Collections :
                </b>
                flatten est équivalante à  foldRight(_++_)
                xs flatMap fct est équivalant à  (xs map fct).flatten
                l'API est très riche on peut calculer le produit scalaire en une seul ligne for((x,y)<- xs zip ys
                )yield (x*y)).sum
                le for est un sucre syntaxique (syntactic sugar) pour les méthodes Map flatMap et filter
                for(x<- e1) yield e2 <=> e1.map(x=>e2)
                for(x<- e1 if fct) yield e2 <=> for(x<- e1.filter(x=>fct))yield e2
                for(x<-e1;y<-e2) yield e3 <=> e1.flatMap(x=>for(y<-e2))yield e3 <br>
                Disponible sur mon compte GitHub
                <a href="https://github.com/metanote/forcomp">
                    week6
                </a>
            <li>
                <b>
                    Week 7 : Lazy evaluation (l'evolution paresseuse) :
                </b>
                streams, lazy val...
                <br/>
                Disponible sur
                <a href="https://github.com/metanote/streams">
                    week7
                </a>
            </li>
        </ul>

        <p>
            Ce cours ma permis d'apprendre les notions de base de ce langage ma permis de programmer
            fonctionellement et scalablement. <br />
            Je recommande ce cours comme premier pas en scala vers la fin de ce cours si vous avez bien fait
            les exercices durant les sept semaines
            vous aurez un certificat note X/80.<br /> Il reste cependant pleins de sujet à  creuser :Les monads, akka, les
            Futures...
        </p>

        <p>
            Il y'a aussi une serie d'exercice sur
            <a href="https://github.com/metanote/handson-scala">
                metanote mon compte GitHub
            </a>
            proposés par paris scala user group que je vous invite à faire.
        </p>

        <h3>À propos de coursera</h3>

        <p>
            Une fois que toutes les outils sont bien installés sur votre machine,
            chaque semaine vous aurez des cours et des exercices. <br />La résolution des exercices nécessite par la suite des tests qui sont écrits pour chaque série,
            cela pour voir
            si notre solution répond bien au besoin, nous pouvons faire un submit pour avoir la note sur 10 de
            l'exercice comme ci-dessous
        </p>
    <pre>
> submit monmail@Email.domaine monPWDdeSoumission
[info] Packaging /Users/Moncef/Programming/Odersky/forcomp/target/scala-2.10/progfun-forcomp_2.10-1.0.0.jar ...
[info] Done packaging.
[info] Connecting to coursera. Obtaining challenge...
[info] Computing challenge response...
[info] Submitting solution...
[success] Your code was successfully submitted: Your submission has been accepted and will be graded shortly.
[success] Total time: 6 s, completed 1 mai 2013 12:08:53
</pre>

    </blockquote>
</article>

<article>
    <blockquote>

        <H2><A name="partie1">Généralités</A></H2>
        <h3>Scala</h3>
        <ul>
            <li>Langage mélangeant la programmation Orienté Objet et Fonctionnelle</li>
            <li>Tourne sur la JVM</li>
            <li>Compatible avec les libreries JAVA</li>
            <li>Statiquement typé</li>
            <li>Soucis de la concurrence (Immutable)</li>
            <li>Inférence de type</li>
            <li>Tout est Objet (hiérarchie des classes)</li>
        </ul>
        <h3>Premier Exemple</h3>

        <p>
            Comme premier exemple, nous allons écrire le très classique HelloWorld. Guère passionnant mais cela nous
            permettra de nous
            familiariser avec les outils de Scala sans trop dépendre des spécificités du langage. Voici le très fameux
            HelloWorld:
        </p>
<pre>
    object HelloWorld {
        def main(args: Array[String]) {
            println("Hello, world!")
        }
    }
</pre>
        <p>
            La structure du programme ne devrait pas déconcerter les développeurs Java. On découvre une méthode *main*
            qui
            récupère les arguments en ligne de commande sous forme d'un tableau de chaînes de caractères comme
            paramètre.
            Le corps de la méthode consiste en un simple appel à  la méthode prédéfinie *println* avec en paramètre,
            le fameux message. La méthode *main* ne retourne rien (c'est une procédure). C'est pourquoi il n'y a aucune
            déclaration de type de retour.

            La nouveauté pour les développeurs Java est la déclaration **object** qui contient la méthode main.
            En fait, il s'agit ni plus ni moins qu'une déclaration de singleton, c'est à  dire une classe avec une
            unique instance.
            Cette déclaration indique la définition d'une classe et d'une unique instance, qui sera créée lors de sa
            première utilisation.

            Le lecteur attentif aura noté que la méthode main n'est pas déclarée comme *statique* avec le mot clef
            *static*.
            Ce mot clef n'existe pas en Scala (ni pour les méthodes ni pour les champs). Le développeur Scala utilisera
            donc
            les singletons en lieu et place de static.
            <br>
            <b>Compilation de l'exemple</b>
            <br>
            Pour compiler l'exemple, nous utilisons *scalac*, le compilateur scala. *scalac* fonctionne comme de
            nombreux compilateurs :
            il prend comme argument un fichier source, avec souvent des options et produit un ou plusieurs fichiers
            binaires.
            Les binaires produits sont en fait des fichiers standards en bytecode Java, les *.class* .

            Après avoir sauvegardé le programme précédent dans le fichier HelloWorld.scala, nous pouvons le compiler
            avec la commande suivante
            (le symbole '>' représente le prompt):
            <br>
            $ scalac HelloWorld.scala
            <br>


            Ceci va générer quelques fichiers class dans le répertoire courant, dont l'un d'entre eux s'appelle
            **HelloWorld.class**,
            et contient une classe qui peut étre directement exécutée en utilisant la commande scala comme le montre la
            section précédente.
            <br>
            <b> Faire fonctionner l'exemple</b>
            <br>
            Une fois compilé, un programme Scala peut être exécuté avec la commande *scala*. Son usage est semblable à 
            la commande java et accepte les mémes options. L'exemple précédent peut étre exécuté en utilisant la
            commande suivante qui produit le résultat attendu :

            <br>
            $ scala -classpath . HelloWorld <br>
            Hello, world!
        </p>


    </blockquote>
</article>

<article>
<blockquote>
<H2><A name="partie2">Présentations des concepts</A></H2>

<h3>Les Méthodes</h3>
<h4>La méthode Map</h4>

<p>
    Permet d'appliquer une fonction sur tout les éléments d'une liste.
</p>
<h4>Exemple :</h4>
scala> val list=List(4,5,6)
list: List[Int] = List(4, 5, 6)
scala> list map (_*2)
res1: List[Int] = List(8, 10, 12)
<h4>On peut écrire cet exemple autrement</h4>
scala> for(l<-list)yield(l*2)
res2: List[Int] = List(8, 10, 12)
<h4>La méthode flatten</h4>
scala> List(List('A','B'),List('C','D'),List('E','F')).flatten
res3: List[Char] = List(A, B, C, D, E, F)
<h4>La méthode flatMap</h4>

<p>
    Permet de combiner les deux méthodes précédentes.
</p>
scala> List(1, 2, 3).flatMap(i => ((1 to i).toList))
res4: List[Int] = List(1, 1, 2, 1, 2, 3)
<h4>plus de détaille</h4>
scala> List(1, 2, 3).map(i => (1 to i).toList)
res5: List[List[Int]] = List(List(1), List(1, 2), List(1, 2, 3))
<br>
scala> res1.flatten
res6: List[Int] = List(1, 1, 2, 1, 2, 3)
<hr>
<h3>Scala VS Java</h3>

<div style="float: left;width: 60%;">
    <img src="img/scala-logo.png" style="width: 100px;height: 70px; padding: 5px;"><br/><b>En SCALA</b>
    <br/>
    class Person(CIN: Int, name:Int) <br>
    //un constructeur implicite associer à  chaque class méthode apply

</div>
<div style="float: right;width: 40%;">
    <img src="img/logo-java.png" style="width: 100px;height: 70px; padding: 5px;"><br/> <b>En JAVA</b><br/>
    class Person{<br>
    private int CIN ;<br>
    private String name; <br>
    public Person(int CIN,String name){<br>
    this.CIN=CIN ; <br>
    this.name=name ; <br>
    } <br>
    }<br/>
    <br/>
</div>


Person p=new Person(1223,"TOTO") <br>
// class person avec un constructeur

<b>Exemple d'instantiation d'une classe (Person)</b> <br>
case class Person(CIN:Int,name:String) <br>
<b>Trois écritures équivalantes</b>
<ul>
    <li>val p1=new Person(123,"toto")</li>
    <li>val p2=Person(124,"zaza")</li>
    <li>val p3=Person.apply(125,"titi")</li>
</ul>
<b>Les Getters / Setters en Scala</b>
<ul>
    <li>Ils sont générés pour la JVM</li>
    <li>On peut les surcharger</li>
    <li>Ils sont privés si l'attribut est privé</li>
    <li>Il est possible d'empécher leurs génération => private[this] name: String</li>
</ul>
<p>Hint :C'est vrai quand on s'habitut avec la programmation Scala en trouve que notre code java est très long,
    c'est
    magique ce langage de programmation haut niveau ;) </p>
<hr>
<h3>Programmation fonctionnelle</h3>

<ul>
    <li>Exprimer les fonctions au sens mathématique</li>
    <li>Eliminer les effets de bords</li>
    <li>S'oppose à la programmation impérative</li>
</ul>
<h3>Higher order functions </h3>
<b>C'est des fonctions qui prennent en paramètre d'autres fonctions ou dont le résultat est une fonction </b>
<pre>Exemple : une fonction apply qui prend une fonction f et une valeur v et applique la fonction f à  v
def apply(f: Int => String, v: Int) = f(v)
object Test {
def main(args: Array[String]) {

println ("Apply method : " + apply("Zara", "gmail.com"));
println ("Unappy method : " + unapply("Zara@gmail.com"));
println ("Unappy method : " + unapply("Zara Ali"));

}
// The injection method (optional)
def apply(user: String, domain: String) = {
user +"@"+ domain
}

// The extraction method (mandatory)
def unapply(str: String): Option[(String, String)] = {
val parts = str split "@"
if (parts.length == 2){
Some(parts(0), parts(1))
}else{
None
}
}
}
</pre>

<h3>Présentation des concepts clés</h3>

<h4>Scala classes hiérarchie</h4> <br>
<img src="img/class-hierarchy.png" name="scalaH" alt="hiérarchie des classes scala" class="hier">

<br/>
<h4 style="text-align:center">Figure 2. Hiérarchie des classes</h4>

<b>Tout est Objet</b>
<ul>
    <li>
        <b>Any</b> Supertype de tous les types
    </li>
    <li>
        <b>AnyVal</b> Supertype de tous les types de valeur
    </li>
    <li>
        <b>AnyRef</b>Supertype de tous les types référence, équivalant à  java.lang.Object
    </li>
    <li>
        Supertype de tous les types référence, seulement une instance: <b>null</b>
    </li>
    <li>
        <b>Nothing</b> Supertype de tous les types, non instances
    </li>
    <li>
        <b>Unit</b> Equivalant à  Java Void, seulement une instance:()
    </li>
</ul>
<h3>Les classes definition</h3> <br>
<ul>
    <li>Définition standard</li>
    <li>Pas de mot clé Public</li>
    <li>Un fichier source contient plusieurs classes et par défaut elles sont toutes public</li>
</ul>
<h3>Les cases classes Definition</h3>  <br>
<ul>
    <li>Les objets sont non modifiable après l'instanciation</li>
    <li>Les méthode hashcode,equals,toString... implicitées</li>
    <li>Pas de new</li>
    <li>Décomposer avec le Pattern Matching</li>
</ul>

<b><u>Un glissement progressive vers des cases classes</u> </b>
<ul>
    <li>Expression des termes</li>
    <li>Décoposition des structures</li>
    <li>Pretection du design</li>
</ul>
<b><u>Une Classe à  part entière</u></b>
<ul>
    <li>Export les paramétres du constructeur</li>
    <li>Manipuler par le pattern matching</li>
    <li>Consultation simplifiée sans new explicite</li>
</ul>

<h3>Val/Var</h3> <br>

<strong>* val :</strong>
-Déclaration d'un attribut variable non modifiable en scala généralement en utilise des vals. <br>
-Déclaration de parametre de classe : getter implicite. <br>
<strong>* var :</strong>
-Déclaration d'un attribut variable modifiable. <br>
-Déclaration de parametre de classe : getter and setter implicite.

<h3>type</h3>

<p>
    En Scala on peut déclarer des types avec le mot <strong>type</strong>
    <br/> <u>Exemple</u><br /> type word :String <br/>
    type sentence :List[word]
</p>


<h3>Les Traits </h3><br>

<p>
    Semblables aux  interfaces en Java à la différence que l'on peut implémenter les méthodes ;



    déclaration similaire à une classe avec la possibilité de l'héritage multiple, et pas de paramètre



    de classe, sinon erreur de compilation.
</p>
<pre>
    trait ImageInfo{
        val image: Image
        def ImageInfo :String = image.name
    }

    trait ComputeAvgScore
    trait AnotherOne

    class Image extends ImageInfo with ComuteAvgScore with AnotherOne{
        val name="Sacha"
    }
</pre>

<b>==>Le mot-clé sealed devant un trait facilite le pattern matching,un sealed trait peut être prolonger
    que
    dans le même fichier que sa déclaration</b>

<br>

<h3>Les collections</h3>
<ul>
    <li>Utilise le trait Iterable</li>
    <li>Immutable par défaut</li>
    <li>Fonctions d'ordre supérieur : filter, map, flatMap ...</li>
    <li>Exemples de collection :Set,List,Map,Vector...</li>
</ul>
<h3>Les Lists</h3>

La classe List repose sur deux cases class :
<ul>
    <li>Nil qui represente une list vide</li>
    <li>:: (cons)</li>
</ul>
y::ys => représente une list dans le head est y (premier élément de la list),suivi du tail ys le reste de la liste
(head,tail) sont deux fonctions et isEmpty une fonction qui renvoie true si la list est vide false dans le cas
contraire.
<br />
Des fonctions de plus haut niveau exemple : x:Int => x+1 est équivalent à  f(x:Int)={x+1}
<pre>Exemple de fonctions : map, flatmap, flatten ...</pre>
<h3>Les Options</h3>

<p>Les Options sont aussi des collections le type Option désigne une valeur Optionnelle </p>
    <pre>
        Option[A] :
        ->Some[A]
        ->None
    </pre>
<b>L'intérêt de l'option</b>
    <pre>
        Imaginons qu'on cherche une personne dans un graphe RDF
        def findImage(CIN :Int)=Option[Image]
        =>On peut avoir comme résultat un None ou bien un Some de quelques choses.
    </pre>

<h3>Le pattern matching</h3> <br>
<b> Une notion très improtante dans Scala peut être assimilé au switch case en Java </b>
<pre>v match{case p1=>v1 ... pn=>vn}
pi représente les patterns et vi la valeur renvoyée dans le cas ou le pi match v
Erreur de matching est renvoyée si on a besoin
Exemple :
def anyThing(x:Any) = x match{
case 5 =>"Int"
case true=>"Boolean"
case "hello"=>"String"
case Nil => "Empty List"
case _ => "Something else"

}
</pre>
<b>Syntaxe réduit et efficase</b>
<br>

<p itemscope>Vous trouverez ci-dessous un exemple de fonction produit scalaire écrite en Scala</p>
<pre>
def produitScalaire(xs:Vector[Double],ys:Vector[Double]):Double={
(xs zip ys).map(xy=>xy._1*xy._2).sum
}
<strong>//> produitScalaire: (xs: Vector[Double], ys: Vector[Double])Double </strong>


produitScalaire(Vector(1,3,4),Vector(2,2,2)) <strong>//> res8: Double = 16.0 </strong>

<strong>//With pattern matching</strong>

def produitScalaire2(xs:Vector[Double],ys:Vector[Double]):Double={
(xs zip ys).map{case(x,y)=>x*y}.sum
}
<strong>//> produitScalaire2: (xs: Vector[Double], ys: Vector[Double])Double </strong>

produitScalaire2(Vector(1,3,4),Vector(2,2,2)) <strong>//> res9: Double = 16.0 </strong>

<strong>//produit scalaire version avec for </strong>

def produitScalaireFor(xs:List[Double],ys:List[Double]):Double=
(for((x,y) <- xs zip ys )yield (x*y)).sum

<strong>//> produitScalaireFor: (xs: List[Double], ys: List[Double])Double </strong>


produitScalaireFor(List(1,3,4),List(2,2,2))  <strong> //> res8: Double = 16.0</strong>



<b>Exemple Générer des pairs</b> <br>
Avec map vecteur de vecteurs
val n=7
<strong>//> n : Int = 7 </strong>
((1 until n) map (i=>
(1 until i) map (j =>(i,j))))
<strong>//> res11: scala.collection.immutable.IndexedSeq[scala.collection.immutable.Ind
    //| exedSeq[(Int, Int)]] = Vector(Vector(), Vector((2,1)), Vector((3,1), (3,2))
    //| , Vector((4,1), (4,2), (4,3)), Vector((5,1), (5,2), (5,3), (5,4)), Vector((
    //| 6,1), (6,2), (6,3), (6,4), (6,5))) </strong>
En applique flatten pour avoir un seul vecteur des pairs

((1 until n) map (i=>
(1 until i) map (j =>(i,j)))).flatten
<strong>//> res11: scala.collection.immutable.IndexedSeq[(Int, Int)] = Vector((2,1), (3
    //| ,1), (3,2), (4,1), (4,2), (4,3), (5,1), (5,2), (5,3), (5,4), (6,1), (6,2),
    //| (6,3), (6,4), (6,5)) </strong>

En applique un flatMap au lieu de map flatten

((1 until n) flatMap (i=>(1 until i) map (j =>(i,j))))
<strong>//> res11: scala.collection.immutable.IndexedSeq[(Int, Int)] = Vector((2,1), (3
    //| ,1), (3,2), (4,1), (4,2), (4,3), (5,1), (5,2), (5,3), (5,4), (6,1), (6,2),
    //| (6,3), (6,4), (6,5)) </strong>

On applique un filtre pour avoir que les pairs des nombres premiers :

def isPrime(x:Int):Boolean= (2 until x) forall (p=>x%p!=0)

<strong>//> isPrime: (x: Int)Boolean </strong>

((1 until n) flatMap (i=>
(1 until i) map (j =>(i,j)))) filter(pair=> isPrime(pair._1+pair._2))
<strong>//> res11: scala.collection.immutable.IndexedSeq[(Int, Int)] = Vector((2,1), (3,2), (4,1), (4,3), (5,2), (6,1),
    (6,5)) </strong>

<b>For Loop expression</b>

case class Person(nom :String,age:Int)

pour avoir les personnes qui ont plus que 20 ans

for (p <- persons if p.age>20 )yield(p.nom)
equivalant à 

persons filter(p=>p.age>20)map(p=>p.nom)


</pre>

<p><b>Hint :</b>
    L'expression for est similaire à  Loop dans les langages iteratifs sauf qu'elle construit
    une list de résultats de tout les Iterators
    For expression dans scala produit toujours un nouveau résultat, les deux expressions
    sont équivalantes mais la premiere elle est plus facile à lire.

</p>
<h4>About case class</h4>

<p>Case classes can be pattern matched, <br>
    Case classes automatically define hashcode and equals, <br>
    Case classes automatically define getter methods for the constructor arguments.
</p>


<h4>About variance</h4>
les caractère + [+T] signifie que la flexibilité des paramètres d'entrées
List[+A] le + devant le paramètre A veut dire que pour tout type X et Y si X est sous-type de Y =>List[X] est un
sous-type de List[Y]
les listes sont immutable mais nous n'avons pas besoin de copier le contenu de la liste on peut le réutiliser =>
propriété de data sharing
on dit que data functional est persistent c'est a dire que les references ne change plus avec les opérations sur les
données
eq pour les references des objets x eq y
== pour l'égalite des valeurs x ==y

trait Function[-T,+U] T contravariant
U covariant

Il y a deux principal forme de polymorphisme :
-Subtyping
-generics
<h3>Type Bound</h3>
upper bound [S &lt;: IntSet] veut dire que S peut être instantiated seulement du types qui conforme avec IntSet <br>
S &lt;: T: S est un soustype de T <br>
S &gt;: T : S est un super type de T <br> <br>

<h3>Les Monades</h3>

<p><strong>Dans la programmation fonctionnelle</strong> Il y'a un concept générique appelé <strong>monad</strong>, ce
    qui
    peut expliquer un grand nombre de types avec Computa-tions,
    allant de collections, à  des calculs avec l'Etat et I / O, les calculs de retour de suivi, et les opérations, pour
    n'en nommer que quelques-uns.
    Vous pouvez formuler des fonctions, flatMap et withFilter sur une monade.<br> En outre, vous pouvez caractériser
    chaque
    monad par map, flatMap et withFilter plus un constructeur de type "unit" qui produit une monade d'une valeur
    d'élément.

</p>


<h3>Des détailles</h3>

                
         <pre>
The striMargin avec un pipe au début de la phrase on peut faire des /n similaire au prog Java

=> 0 until 10 == Range(0,10) == 0 to 9 deux écritures équivalentes .

Dans scala les constructeur n'ont pas une définition concrète une définition implicite de upplay and unapply.
Sealed class ne peut pas avoir un nouveau sous class que celui dans le méme fichier.
Un langage purement orienter objet c'est a dire chaque valeur est un objet.
Si le langage est basé sur les classes => le type de chaque valeur est une classe
if (cond) te else ee
cond.ifThenElse(te,ee)

List (immutable) covariant /Array(mutable) non covariant

Scala ne vous permet pas de programmer imperativement mais quand vous serez plus confortable avec Scala vous aimerez la façon fonctionnelle
de programmation ce style de programmation est plus efficace.
Par exemple une façon plus concis d'écrire la boucle for pour imprimer des agruments :

val args=List("aa","bb","cc")
args.foreach(arg => println(arg))

Une autre façon de l'ecrire plus abstract mais plus élégonte
args.foreach(println)

Résultat:

aa
bb
cc

Une façon d'ecriture du boucle for :
for(i<-1 to 3)
println("iteration "+i)

Résultat :

iteration 1
iteration 2
iteration 3
</pre>

<h3>Scala au milieu professionnel </h3>


<b>Il y a plusieurs compagnie qui ont fait une migration sur Scala parmis ces compagnies :</b>
<br/>
<img src="img/scalaMP.png" height="80%" width="70%" style="margin-left:100px;">
<br/>
<h4 style="text-align:center">Figure 3. Scala au milieu professionnel</h4>


</blockquote>
</article>

<article>
<blockquote>
<H2><A name="outils">Outils de travail & de développements</A></H2>

<h3>Les IDEs </h3>

<p>
    <img style="width: 30px;margin: 5px;" src="img/IntelliJIDEA.png">
    IntelliJ IDEA est un IDE Java commercial développé par JetBrains. Il est fréquemment appelé par le simple nom
    «IntelliJ».
</p>


<p>
    <img style="width: 30px;margin: 5px;" src="img/eclipse.png">
    Eclipse est un projet, décliné et organisé en un ensemble de sous-projets de développements logiciels,
    de la Fondation Eclipse visant à  développer un environnement de production de logiciels libres qui soit extensible,
    universel et polyvalent.
</p>

<p>
    J'utilise Eclipse avec les plagin scala, play pour faire les exercices de Odersky ainsi que pour travailler sur le
    projet Stample
</p>

<h3>GitHub</h3>
<b>Pourquoi Git ?</b>

<p>Si vous êtes dans cette partie, je suppose que vous étes tout nouveau à  Git et GitHub. Cette partie vous aidera à 
    travers les bases et d'expliquer pour quoi c'est utile, vous trouverez à la fin un lien vers les
    fonctionnalités.</p>

<p>At some point you may find yourself wanting to contribute to someone else's project, or would like to use someone's
    project as the starting point for your own. This is known as "forking." <a
            href="https://help.github.com/articles/fork-a-repo">Git help</a></p>

<p>


    Si vous avez déjà  travaillé sur un projet informatique, que ce soit un petit projet personnel ou un plus gros
    projet
    professionnel, vous avez certainement déjà  rencontré un de ces problèmes :
<ul>
    <li> « Qui a modifié le fichier X, il marchait bien avant et maintenant il provoque des bugs ! » ;</li>

    <li> « Robert, tu peux m'aider en travaillant sur le fichier X pendant que je travaille sur le fichier Y ?
        Attention à 
        ne pas toucher au fichier Y car si on travaille dessus en méme temps je risque d'écraser tes modifications ! »
        ;
    </li>

    <li>« Qui a ajouté cette ligne de code dans ce fichier ? Elle ne sert à  rien ! » ;</li>

    <li> « à quoi servent ces nouveaux fichiers et qui les a ajoutés au code du projet ? » ;</li>

    <li> « Quelles modifications avions-nous faites pour résoudre le bug de la page qui se ferme toute seule ? »</li>
</ul>

Si ces problèmes-là  vous parlent, vous auriez dû utiliser un logiciel de gestion de versions. Ce type de logiciel est
devenu indispensable lorsqu'on travaille à  plusieurs sur un méme projet et donc sur le méme code source.
Méme si vous travaillez seuls, vous aurez intérét à  commencer à  en utiliser un rapidement car il vous offrira de
nombreux avantages, comme la conservation d'un historique de chaque modification des fichiers par exemple.
<br>
<strong>
    Vous voyez il y'a plusieurs raisons pour lesquelles j'ai décidé d'écrire mon rapport de stage en html5 ;)
</strong>

<p>
    <a href="https://github.com/">
        GitHub
    </a>
    c'est un site qui vous permet d'héberger vos projets avec git et qui vous
    permet de gérer d'une manier visuelle les collaborateurs et les modifications
    le principale interret de ce site qu'il est gratuit pour les projets open source et les projets privés.
    De plus, les prix sont relativement bas. [Site de Zéro]
</p>

<p>
    Hint :Il existe de nombreux logiciels de gestion de versions, comme SVN (Subversion), Mercurial et Git. Je vous
    présente Git (prononcez « guite ») qui est un des plus puissants logiciels de ce genre.
    Nous l'utilisons notamment pour gérer le code source du Stample !
    <a href="http://git-scm.com/book/fr">
        Git Book
    </a>
</p>
<h3>flowdock</h3>
<p>C'est une appplication web de collaboration pour l'équipe technique. <br />
    Flowdock apporte l'activité de vos outils de gestion de projet (Pivotal Tracker, JIRA), les systèmes de contrôle
    de version (GitHub, BitBucket, Kiln), les canaux de rétroaction des clients (Zendesk, email lists) et de nombreuses
    autres sources à un flux facilement consommable. L'équipe peut alors travailler sur les questions ensemble,
    et de réagir en quelques secondes.</p>
<h3>Trello</h3>
<p>Trello est une application de gestion de projet Web gratuite faite par Fog Creek Software. <br />
    C'est un outil déconcertant tant il est simple à comprendre et facile à utiliser. C’est comme avoir un tableau de post-it, mais à la puissance vingt mille.<br />

    <b>Le principe</b>
    <ul>
    <li>Vous vous créez des “boards”, c’est-à-dire un panneau d’affichage.</li>
    <li>À l’intérieur, vous créez des listes.</li>

    <li>Dans une liste, vous créez des cartes</li>
    <li>Vous invitez d’autres utilisateurs, avec qui vous voulez collaborer en utilisant le board comme support.</li>
    </ul>

    Trello utilise un paradigme de la gestion de projets dits kanban, une méthode qui avait initialement été popularisé par Toyota dans
    les années 1980 pour la gestion de la chaîne d'approvisionnement. Les projets sont représentées par des conseils d'administration,
    qui contiennent des listes (correspondant à des listes de tâches). Les listes contiennent des cartes (correspondant à des tâches).
    Les cartes sont censés progresser d'une liste à l'autre (via drag-and-drop), par exemple reflétant l'écoulement d'une caractéristique
    de l'idée à la mise en œuvre. Les utilisateurs peuvent être affectés à des cartes. Les utilisateurs et les conseils peuvent
    être regroupés en organisations.[Wikipedia]</p>

<h3>PlayFramework</h3>

<p>Play c'est un FrameWork high-productivity Scala Java web application qui intègre les composantes et l'API dont vous
    avez besion
    pour le développement moderne de l'application web.<br>
    Play est basé sur un architecture légère, Web convivial et dispose consommation de ressources prévisibles et minimes
    (CPU, mémoire, threads)
    pour les applications hautement évolutives grâce à  son modèle réactif, basé sur Iteratee IO. <br>
    Il suffit de suivre les démarches pour télècharger et changer le path pour tavailler avec
    <a href="http://www.playframework.com/">
        PlayFramework
    </a>
    <br>

    Play! Framework embarque toutes les briques nécessaires au support d'une application web moderne et modulaire. Il
    nous permet enfin de faire concorder nos méthodes de développement avec ce qui fait le web : le protocole HTTP,
    l'approche REST (Representational State Transfer) ainsi que la consommation et la production des formats que
    consomment nativement les navigateurs (HTML, CSS, JavaScript, JSON...)   <br />

    Play adopte pleinement les principes de l'architecture REST : <br>
    Il sépare la gestion de l'interface et la gestion des données grâce au support de l'approche MVC
    (Model-View-Controller) et à  la prise en charge de la compilation des assets exploités dans le navigateur pour
    exploiter celui-ci comme une plateforme de développement.
    Il ne conserve pas d'état entre les requétes (stateless) ce qui évite les mauvaises pratiques de gestion de session
    auxquelles nous faisons face depuis le début du web (remplissage de mémoire, perte de session intempestive au bout
    d'un temps sans utilisation). Une fois de plus, le navigateur est mis à  contribution en exploitant ses capacités de
    stockage locales.
    Les ressources de l'application sont identifiées de manière unique et prédéfinies grâce au système de gestion de
    routes, ce qui favorise la propension naturelle de ces requétes à  étre cachées par le navigateur et par les proxies
    pour faciliter la montée en charge.

    Pour faire une premier application Scala/Java avec play vous trouvez sur le site les démarches necessaire ainsi que
    tout les détailles.
</p>
<br>

<p><b>Hint : </b>On peut parler dans cette partie d'une petite application de débutant méme principe que Twitter en
    Scala/PlayFramework disponible sur mon
    compte GitHub sur <a href="https://github.com/metanote/TweetProject">Ici</a>
</p>

<h3>MongoDB</h3>

<p>
    Pour notre première version de Stample centralisée on utilise MongoDB pour la gestion de notre base de donnée
    orienté document, scalable. Il y'a une présentation de MongoDB sur slideshare que vous trouvez ci-dessous.
    <iframe src="http://fr.slideshare.net/slideshow/embed_code/13327505" width="427" height="356" frameborder="0"
            marginwidth="0" marginheight="0" scrolling="no"
            style="border:1px solid #CCC;border-width:1px 1px 0;margin-bottom:5px;margin-left:250px;margin-top:20px"
            allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>
<div style="margin-bottom:5px;margin-left:30px"><strong> <a
        href="http://fr.slideshare.net/cf357/toutes-les-raisons-dadopter-mongodb"
        title="Toutes les raisons d&#39;adopter MongoDB" target="_blank">Toutes les raisons d&#39;adopter MongoDB</a>
</strong> from <strong><a href="http://fr.slideshare.net/cf357" target="_blank">Adrien</a></strong></div>


<h3>Pourquoi Mongo?</h3>
MongoDB est un système de stockage de données NoSQL. En effet, ce n'est pas la peine de faire du SQL pour requéter votre
base de donnée MongoDB. On parle alors de base SchemaLess, car il n'est pas nécessaire de faire un script SQL plus ou
moins complexe pour créer et définir la structure des données qu'on peut mettre dans notre base. C'est simple, on met
juste un énorme Hash.

Le fait de n'avoir des données que sous forme de Hash revient à  avoir une base de données dite orienté Documents.
MongoDB est donc une base de donnée SchemaLess orientée Documents.
<br>
On peux par exemple chercher tous les documents qui possèdent plusieurs éléments dans un tableau <br>

<b>db.things.find( { a: { $all: [ 2, 3 ] } } ); </b><br>
Alors qu'en SQL on aurait plus fait un <br>

<b>select * from things where a LIKE '%2%' AND a LIKE '%3%' </b><br>
On peux aussi faire de la recherche en donnant une fonction Javascript <br>

<b>db.myCollection.find( { $where: "this.a > 3" } ); </b> <br>
<b>Syntaxe SQL VS MongoDB</b><a href="http://docs.mongodb.org/manual/reference/sql-comparison/"> Link ici</a>

<p>On utilise mongo salat comme plugin pour play framework et le driver Casbah.

</p>


<h3>Casbah Scala ToolKit MongoDB</h3>
<p>On trouve sur le site de MongoDB une documentation sur Casbah <a href="http://api.mongodb.org/scala/casbah/2.0/">Documentation</a> </p>

<h3>ElasticSearch</h3>
<p>C'est un est un moteur de recherche libre (open source), écrit en JAVA sur un environnement Multiplate-forme basé sur Apache Lucene.</p>
<ul><li>distribué (architecture de type cloud computing)</li>
<li>utilise une base de données NoSQL</li>
<li>utilise la méthode REST. L'indexation des données s'effectue à partir d'une requête HTTP GET. La recherche des données s'effectue avec la requête HTTP PUT. Le flux d'informations est codé selon le format JSON.</li></ul>
<h3>Json "Javascript Object Notation"</h3>

<p>C'est un format de données textuelles, générique, dérivé de la notation des objets du langage ECMAScript. Il permet
    de représenter de l'information structurée. [Wikipédia]</p>
<br>
<b>Format Json </b><br>
<pre>
    {
    "menu": {
        "id": "file",
        "value": "File",
        "popup": {
            "menuitem": [
                { "value": "New", "onclick": "CreateNewDoc()" },
                { "value": "Open", "onclick": "OpenDoc()" },
                { "value": "Close", "onclick": "CloseDoc()" }
            ]
        }
    }
}
</pre>
<b>En XML</b>
<pre>
  &ltmenu id="file" value="File">
      &ltpopup>
          &ltmenuitem value="New" onclick="CreateNewDoc()" />
          &ltmenuitem value="Open" onclick="OpenDoc()" />
          &ltmenuitem value="Close" onclick="CloseDoc()" />
      &lt/popup>
  &lt/menu>

</pre>
<br>
<strong>Pour voir si le Json est valide </strong> <a href="http://jsonformatter.curiousconcept.com/">ici</a>
<h3>AKKA</h3>

<p>Les acteurs sont des entités concurrentes très légers. Ils traitent les messages de manière asynchrone à 
    l'aide d'une boucle recevoir event-driven. Pattern matching contre les messages est une façon commode
    d'exprimer le comportement d'un acteur. Ils élèvent le niveau d'abstraction
    et le rendre beaucoup plus facile à  écrire, tester, comprendre et maintenir des systèmes parallèles et / ou
    distribués.<a href="http://akka.io/">akka page</a></p>

<h3>REST</h3>
<p>REST (REpresentational State Transfer)  est un style d’architecture permettant de construire des applications distribuées basées sur HTTP 1.0. Le terme REST a été inventé par Roy Thomas Fielding en 2000 dans le chapitre 5 de sa thèse de doctorat.
    REST a déjà été utilisé dans beaucoup d’applications web telles que le réseau social Twitter et que nous l'utlisons aussi pou Stample.
    La consultation des données par le biais de son API se fait par un modèle d’architecture REST.</p>
<p>REST n’est pas un protocole (tel que HTTP) ou un format. Ce style d'architecture est particulièrement bien adapté au World Wide Web mais n'est pas dépendant du Web.</p>


<h3>SMTP "Simple mail transfer protocol"</h3>

<p>Comme l'indique son nom. On commence par spécifier l'expéditeur du message, le ou les distinataire d'un message, puis
    en général après avoir vérifié
    leurs existence, le corps fu message est transféré. Il est possible de tester un serveur SMTP en utilisant la
    commande <b>telnet</b> sur le port
    <b>25</b> d'un serveur distant.<br>
    On a utilisé SMTP lors de l'inscription pour envoyer des emails demande de confirmation</p>
</blockquote>
</article>
<article>
    <blockquote>
        <H2><a name="startup">StartUp</a></H2>
        Il y'a une différence fondamentale entre une entreprise et une star-tup : une startup cherche un business model
        alors qu'une
        entreprise elle à déjà un business model.
        <p><strong>Etymologie</strong><br>
            Le mot startup (ou start-up) est un mot anglophone d'origine américaine, diminutif de startup company.
            Il est composé de start (commencer en français) et up, notion de hauteur, d'élévation.
            Il s'agit donc littéralement d'une « société qui démarre ». L'expression française pour l'expression
            anglaise est
            «
            jeune pousse »
            <br>
            <strong>Définition</strong><br>
            La startup est une jeune entreprise à  fort potentiel de croissance et qui fait la plupart du temps l'objet
            de levée
            de fonds. On parle également de startup pour des entreprises en construction qui ne se sont pas encore
            lancées sur
            le marché commercial (ou seulement à  titre expérimental). Elle est en phase plus ou moins longue de
            développement
            d'un produit,
            de test d'une idée, de validation d'une technologie ou d'un modèle économique...<br />
            Le risque d'échec est décuplé par rapport à  des entreprises traditionnelles.<br>
            Lorsqu'on parle d'une Startup on pense toujours à  des investisseurs, des risques et des nouvelles
            idées...<br>
            On trouve le plus grand nombre des Startups dans le monde de l'informatique au Silicone Valley (Etats-Unis)
            dont on
            utilise maintenant les
            géants google, facebook, twitter, Yahoo...
        </p>
    </blockquote>
</article>
<article>
    <blockquote>
        <H2><a name="Evn">Evénements</a></H2>

        <h3>Participation au OuiShare</h3>

        <p>Nous avons participé au ouiShare Fest à  Paris pour présenter Stample samedi "4" et dimanche "5 mai", j'ai assité
            à  des
            présentations
            de plusieurs startup, Henry a  présenté webID et le format RDF, Sacha a 
            présenté
            Stample.
            C'est une bonne opportunité pour rencontrer des développeurs développeurs et échanger avec des porteurs de projets et des acteurs très innovants..
        </p>
        <br/>
        <br/>
        <img src="img/ouiShare.jpg"/>
        <br/>
        <h4 style="text-align:center">Figure 4. OuiShare Paris</h4>


        <h3>Thèse Alexandre Monnin Philosophy du Web</h3>

        <p>J'ai eu le plaisir avec Henry d'assister à la soutenance de Alexandre Monnin sur la philosophy du web au
            Sorbonne. Dans sa thèse 
            et la philosophie du web à la Sorbonne. Dans sa thèse, il prend acte de l’importance du Web 



d’un point de vue philosophique, à la fois comme objet de recherche, qui, dans le sillage du 



Web Sémantique et de l’architecture du Web, entre en résonance avec les problématiques 



classiques de la métaphysique et de la philosophie du langage, et au regard du devenir de la philosophie elle-même.
            </p>
        <img src="img/theseAlexandre.jpg"/>
        <br/>
        <h4 style="text-align:center">Figure 5. Thèse Philosophie du web Sorbonne</h4>

    </blockquote>
</article>
<article>
    <blockquote>
        <H2><a name="WebSem">Web Sémantique</a></H2>

        <h3>Linked Data</h3>

        <p>D'après l'article de Tim Berners Lee : "Le linked data n'est pas seulement de mettre des données sur le net,
            c'est
            aussi mettre les données de façon qu'une machine ou un étre humain
            puisse comprendre à  quelle concept est lié cette donnée". <br>C'est exactement ça la force du web semantic
            le web
            intelligent.

        </p>

        <p>Je reprends ce que Romain a déjà  expliqué dans son rapport l'année dernier, les 4 régles à  respecter sont:
        <ul>
            <li><strong>Identifier les objets avec des URI : </strong> Chaque objet fait référence à  un concept doit
                posséder
                un URI public accessible à  tous.
            </li>
            <li><strong>Utiliser des URI HTTP : </strong> Car l'utilisation d'autres URI tel que URI "file://"
                entrînereaient
                des problémes si un client autre que celui qui à  déposer la ressource utlise cette URI
            </li>
            <li><strong>Utiliser des Ontologies bien précises pour se servir de d'information contre l'URI : </strong>Lors
                de la
                saisie d'une URI, celle-ci doit répondre en donnant toujours une information.
            </li>
            <li><strong>Déposer les liens ailleurs : </strong> Développer une sorte de <b>nappe</b> de données
                permettant de
                trouver toutes sorte de choses relatives à  toutes sortes de concept.
            </li>
        </ul>

        <p><strong>Hint : Ces régles premettent d'établir des liens universels entre les documents présenter sur la
            toile.</strong></p>

        <h3>Les Ontologies</h3>

        <p>Une ontologie est l'ensemble structuré des termes et concepts représentant le sens d'un champ d'informations,
            que ce
            soit par les métadonnées d'un espace de noms, ou les éléments d'un domaine de connaissances.
            L'ontologie constitue en soi un modèle de données représentatif d'un ensemble de concepts dans un domaine,
            ainsi que
            des relations entre ces concepts.
            Elle est employée pour raisonner à  propos des objets du domaine concerné. Plus simplement, on peut aussi
            dire
            que<strong> l'« ontologie est aux données ce que la grammaire est au langage »</strong>. [wikipédia]</p>

        <h3><img src="img/foaf-explorer.240.png" width="50px" height="50px">FOAF "Friend of a Friend"/"Ami d'un ami"
        </h3>

        <p>Ce vocabulaire RDF permet de décrire des personnes et les relations qu'elles entetiennent entre
            elles,
            c'est un vocabulaire trés connu dans le monde
            du web sémantique permettant de décrire le concept de personne de manière ouverte. <br>
            Exemple de déscription d'une personne vocabulaire FOAF [Livre the social semantic web]:
<pre>
&lthttps://www.johonbreslin.com/foaf/foaf.rdf#me> <b> //la personne est identifier par un URI </b>
a foaf Person; <b>//la personne est un foaf:person qui contient les proprietes suivante : </b>
    foaf:name "John Berslin";  <b>//nom complet du person </b>
    foaf:mbox &ltmailto:johnbreslin@deri.org>;      <b> //son adress email </b>
    foaf:homepage &lthttp://www.johnberslin.com/>;   <b> //sa page d'acceuil </b>
    foaf:nick "cloud";                <b> //son pseudo </b>
    foaf:topic_interest &lthttp://wiki.dbpedia.org/Documentation>;<b>//le site dont il s'interesse </b>
    foaf:knows[               <b> //ces connaissances </b>
        a foaf :Person;
        foaf:name "Sheil Kinsella";
        foaf:mbox &ltmailto:sheila.kinsella@deri.org>;
    ];
    foaf:knows[
        a foaf :Person;
        foaf:name "Hak-lae Kim";
        foaf:mbox &ltmailto:haklae.kim@deri.org>;
    ].
     </pre>
        <b>Des propriétes FOAF : </b>homepage, isPrimaryTopicOf,knows... <a
            href="http://xmlns.com/foaf/spec/#term_topic_interest">autres propriétes et class </a>


        <h3><img src="img/Sioc-logo.png" width="50px" height="50px">SIOC Semantically Interlinked Online Communities
        </h3>

        <p> C'est un vocabulaire RDF permettant de décrire des objets couramment utilisé sur des sites communautaires et
            leurs
            relations. Il permet l'intégration d'une manière
            sémantique d'un flux social.

        <h3>Turtle Terse RDF triple Language</h3>

        <p>Un langage qui permet de une sérialisation non-XML des modéles RDF. C'est un sous-ensemble de Notation3</p>

        <h3>OpenID VS WebID</h3>

        <p>Des protocoles d'authentifications WebID utilise le Linked Data pour l'authentification contrairement à 
            OpenID,
            WebID manipule directement les profiles foaf et
            l'authentification par certificat SSL(secure sockets layer) un protocole de sécurisation des échanges sur
            internet.
        </p>

        <h3>SPARQL</h3>

        <p>C'est un langage de requétes pour manipuler les graphes RDF, de plus il est possible d'effectuer des tâches
            multiple
            sur le méme concept au
            méme temps. C'est un langage relativement proche de SQL permet une gestion simple des graphes RDF.
        </p>


        <h3>CWM "Closed Word Machine"</h3>

        <p>C'est un programme populaire de sémantique web écrit en Python par Tim Berners Lee et Dan Connolly qui peut
            faire :
        <ul>
            <li>Parser et imprimer les formats RDF suivant : XML RDF, Notaion3, et Ntriples</li>
            <li>Mettre les triplets dans une base de donnée interrogeable.</li>
            <li>Effectuer des inférences comme un moteur d'inférence FOPL.</li>
            <li>Effectuer des fonctions internes telles que la comparaison de chaînes, la récupération des ressources,
                tout en
                utilisant une suite builtins extensible
            </li>
        </ul>

    </blockquote>
</article>

<article>
    <blockquote>
        <H2><A name="ArchiStamp">Architecture de STAMPLE</A></H2>

        <p>L'architecture actuelle de stample est suite aux travaux de Edward et Sébastien qui ont développer le backEnd de stample
        durant ces deux dérnières années.
        </p>


        <img src="img/architecture stample.png" style="width:70%; height:70% ;margin-left:80px;">

        <br/>
        <h4 style="text-align:center">Figure 6. Architecture de Stample Current Platform</h4>


        <p>Les requétes HTTP sont faites en JSON. Le JSON est deserialisé dans des objets métiers (Scala case class)
            pour étre
            manipulés au sein de l'application.</p>
        <br>
        <b>Communication web Application et base</b>
        <ul>
            <li>On utilise le driver Casbah MongoDB pour Scala</li>
            <li>On utilise salat, une librerie qui permet une bonne integration de Casbah dans l'application Scala (un
                peu comme
                ORM)
            </li>
            <li> Salat permet de serialiser les objets métiers (case class) en BSON (Binary JSON pour mongo)</li>
            <li>Salat propose un DAO (DataAccessObject) générique (ModelCompanion) qui expose les méthodes basiques de
                query
                Mongo ( findById(), search() etc... )
            </li>
        </ul>
        <p>Communication webapp et ElasticSearch:</p>
        <ul>
            <li>L'indexation se fait manuellement après l'insertion/update d'un doc MongoDB dans la base</li>
            <li>Indexation failure: non bloquant, sera rattrapé par un job.</li>
            <li>ElasticSearch prend en entrée du JSON donc fonctionne particulièrement bien avec Mongo donc</li>
            <li>On utilise encore Salat pour produire le Json d'un objet métier (case class).</li>
            <li>On a donc le méme document dans MongoDB et ElasticSearch, ce qui permet de rendre un document similaire
                a
                Backbone pour la recherche et pour le reste
            </li>
            <li>on n'est pas parti sur la River MongoDB pour ElasticSearch car quelqu'un a mentionné une fuite mémoire
                (mais il
                semble que ca soit faux au final).
                En plus indexer a la main est pas tellement plus compliqué et permet de résoudre certaines
                problématiques
                (ex pouvoir stripper le code html avant l'indexation etc)
            </li>
            <li>ElasticSearch scala aussi bien que mongo en faisant du partitionning.</li>
            <li>On utilise le client Java pour ElasticSearch</li>
        </ul>
        <p>On a quelques jobs qui sont schédulés par Akka</p>

        <p>Au niveau de l'integration des différents composants dans l'appli (plus particulièrement Mongo), actuellement
            nous
            utilisons un style de query proche de ActiveRecord (fwk Ruby) qui est bien et rapide au début mais devient
            limité
            avec le temps pour son manque de modularité.
            on n'est pas donc en train de mettre en place le Cake Pattern qui permet de faire de l'injection de
            dépendantes (on
            peut plus ou moins comparer ce pattern Scala à  Spring Framework de Java sauf que la tout est intégré dans
            le
            langage directement).
            Cela va permettre plus de flexibilité niveau configuration selon les environnements et donc de pouvoir
            mettre en
            place des tests d'integration avec MongoDB: un mongo embarqué vide se lance au début du test, on joue notre
            test
            contre cette db et une fois fait le mongo embarqué est killé.
            En réalité c'est pas tout a fait de l'embarqué vu que Mongo est pas codé en langage JVM: un vrai mongo est
            déployé
            temporairement.</p>

        <p>
            Le build est réalisé par SBT.
        </p>

        <p>Pour le moment pas encore d'intégration continue mais idéalement il faudrait mettre en place un Jenkins qui
            fera
            tourner les tests unitaires et embarqués à  chaque push pour checker les regressions</p>

        <p>Quelques trucs à  prévoir:</p>
        <ul>
            <li>

Voir si il ne faut pas passer sur un Système de base de données classique 



pour certaines tables (mongo, c'est bien pour un doc non structuré comme un 



Stample mais moins pour le coté consistance)


            </li>

            <li> Intégration continue, Jenkins est envisagé, comme repository de déploiement, 



Nexus est envisagé.</li>
            <li>Split de l'application en plusieurs modules SBT</li>
            <li>

Mise en place d'une infra de notification en temps réel scalable (A définir: 



percolator d'ElasticSearch, RabbitMQ,Kafka ou Akka pour le messaging entre 



serveurs web, websockets...)

             </li>
        </ul>
        <h3>Structure des collections</h3>

        <p>Stample structure les données dans des collections differentes de la façon suivante :</p>
        <div style="float: left;width: 40%;">

        <b>categories</b>
        <ul>
            <li>_ID : objectID</li>
            <li>UserID : objectID</li>
            <li>name : Home/Index/Public...</li>
            <li>description : Home/Trash/Draft</li>
            <li>creationDate : numberLong(__)</li>
            <li>position : numberLong(__)</li>
            <li>isShared : Boolean</li>
            <li>isSubCategorizable : Boolean</li>
            <li>breadcrumb: []</li>
            <li>updateChildBreadCrumb Boolean</li>
            <li>categoryType : normal/...</li>
        </ul>
        </div>
        <div style="float: right;width: 60%;">
        <b>Users</b>
        <ul>
            <li>_ID : objectID</li>
            <li>Username : String</li>
            <li>FullName : String</li>
            <li>email : String</li>
            <li>passeword : Sha1 (__) //Crypter</li>
            <li>lastLoginDate : numberLong(__)</li>
            <li>creationDate : numberLong(__)</li>
            <li>DisplaystampleTour : Boolean</li>
            <li>DisplayClippingTour : Boolean</li>
            <li>UserStats: [activeRelationShips, pendingRelationShip, stamples ] : NumberLong</li>
        </ul>
        </div>
        <hr>
        <div style="float: left;width: 40%;">

        <b>Stamples</b>
        <ul>
            <li>_ID : objectID</li>
            <li>UserID : objectID</li>
            <li>Position : Int</li>
            <li>Title : String</li>
            <li>description : String</li>
            <li>summary : String</li>
            <li>keyWords : String</li>
            <li>author : String</li>
            <li>source : String</li>
            <li>sourcePublicationDate : String</li>
            <li>labelColor : String</li>
            <li>creationDate : NumberLong</li>
            <li>bookmark : Boolean</li>
            <li>favorite : Boolean</li>
            <li>Trash : Boolean</li>
            <li>Indexed : Boolean</li>
            <li>breadcrumb : ["_ID", "name"]</li>

        </ul>
            </div>
        <div style="float: right;width: 60%;">

        <b>s3files</b>
        <ul>
            <li>_id : objectID</li>
            <li>UserId : objectID</li>
            <li>_typeHint : models.S3File</li>
            <li>bucket : com.stample.s3</li>
            <li>fileName : String</li>
            <li>path : String</li>
            <li>url : String(https://s3.amazonaws.com/com.stample.s3/...)</li>
            <li>creationDate : NumberLong</li>
        </ul>
            </div>
        <hr>
        
    
    </blockquote>
</article>
</blockquote>
</article>

<article>
    <blockquote>
        <H2><a name="FPStample">Les Fonctionnalités de la platforme Stample </a></H2>

        <h3>une petite introduction :</h3>

        <p>Une fois que vous êtes correctement logué sur Stample, sachant que jusqu'à maintenant cela n'est pas possible
            pour des
            utilisateurs simple (il faut un code secret pour la création d'un compte), vous trouverez une interface qui
            ressemble à un système de fichiers comme ci-dessous et vous trouverez des scripts qui vous guide à découvrir ces
            fonctionnalités lors de la première visite.</p>

        <p>Stample est un peu comme un article. Il peut s'agir d'une combinaison de toutes les choses que vous
            trouverez sur l'Internet: texte, images, vidéos, etc ..
        </p>

        <p>On trouve également des «métadonnées»: des éléments comme une url source, un auteur, une date de création, mais aussi
            des références personnelles comme un résumé, mots-clés, notes, commentaires, et plus encore.
        </p>

        <p>Vous pouvez créer un Stample vide de votre compte, à écrire votre propre contenu, ou à partir de n'importe
            quelle page sur Internet, pour sauvegarder les choses qui comptent pour vous.</p>

        <h3>Description des principales fonctionnalités :</h3>
        <img src="img/edit.png"><b>Créer un nouveau Stample </b>

        <p><br/>

            Cliquez sur cette icône vous permettra de créer un nouveau, Stample vide.<br/>

            Il est parfait pour prendre des notes à la volée, ou pour stocker des idées et commencer à organiser vos
            pensées. <br/>

            Vous pouvez également créer un Stample directement dans une page web, en utilisant le clipper
        </p>
        <img src="img/clipping.png"><b>Installez le Clipper</b>

        <p><br/>
            Faites glisser le triangle à votre barre du navigateur pour installer le clipper <br/>

            Une fois installé, vous pouvez créer un nouveau Stample à l'intérieur de n'importe quelle page web, puis de
            sélectionner et de glisser-déposer le contenu de la page en elle.

            Nous allons enregistrer automatiquement l'adresse et l'heure de découpage pour vous.

            Stamples taillés arrivent dans votre boîte de réception. De là, vous pouvez les réorganiser en fonction des
            besoins.

        </p>
        <img src="img/arbo.png"><b>Bar des dossiers </b>

        <p><br/>
            Stample est un système de fichiers. Vous pouvez créer autant de dossiers et sous-dossiers que vous le
            souhaitez en cliquant sur la nouvelle icône de dossier à droite.<br/>

            Il suffit de déposer une Stample sur un dossier pour y déplacer. Tenir une Stample sur un dossier pour
            accéder à ses sous-dossiers.

        </p>
        <img src="img/tree.png"> <b>Arborescence</b>

        <p><br/>
            L'arborescence vous permet de parcourir et de réorganiser votre Stamples et des catégories comme si vous
            étiez dans un navigateur de fichiers normal.


        </p>
        <img src="img/visio.png"><b> Zoom curseur</b>

        <p><br/>
            Stamples peuvent être affichées dans n'importe où de 1 à 12 colonnes. <br/>

            Ceci est très pratique lorsque vous travaillez sur différentes tailles d'écran, ou lorsque vous passez à un
            dossier avec la plupart des photos.


        </p>

        <p><b>Drag & drop télécharger
        </b><br/>

            Déposer des images ici de votre ordinateur et ils seront automatiquement enregistrés Stamples. <br/>

            Bientôt, nous nous occupons de beaucoup plus de types de fichiers, comme les fichiers PDF, vidéos, etc ..

        </p>

        <p><b>Manipulation Stamples </b><br/>
            Il ya beaucoup de choses que vous pouvez faire avec Stamples existants. Voici quelques principes de base:
            <br/>

            Cliquez sur: sélectionner le Stample (cmd ou ctrl + clic pour sélectionner plusieurs). <br/>

            Faites glisser: un ou plusieurs Stamples, pour les déplacer vers un autre dossier. <br/>

            Double-cliquez sur: maximiser une Stample pour la lecture. <br/>

            Cliquez sur le coin supérieur droit de chaque stample: afficher le menu contextuel. <br/>
        </p>

    
    </blockquote>
</article>
<article>
    <blockquote>
        <H2><a name="FPStampleDist">Architecture Distribuée de Stample </a></H2>
        <h3>L'importance de Scala pour le passage de Stample en RDF</h3>

        <p><b>Scardf</b> un API Scala fourni une connexion DSL(domain-specific language) pour écrire, traverser et l'integrer des graphes RDF.

          </p>

        <img src="img/stampleDist.png" style="width:70%; height:70% ;margin-left:80px;">
        <br/>
        <h4 style="text-align:center">Figure 7. Architecture de Stample Linked data Platform</h4>



    </blockquote>
</article>
<article>
    <blockquote>
        <H2><a name="work">Integration de SecureSocial & Signup</a> </H2>
        <p><b>SecureSocial </b>est un module d'authentification pour les applications sur Play Framework qui travail avec des services comme OAuth1, OAuth2 et OpenID.<br />
            Il fournit ​​le support de boîte pour:
            <ul>
        <li>Twitter (OAuth1)</li>
        <li>Google (OAuth2)</li>
        <li>Username/Password with signup and reset password functionality...</li>
            </ul>
        </p>

        <p>Après une formation et une phase d'apprentissage, j'ai eu l'accès au projet Stample sur GuitHub pour intégrer le secure-social sur Stample.
       pour intégrer le securesocial sur Stample. Au départ, il n’était pas si facile de comprendre 



le code et les différents packages, le passage des cases classes qui interroge des services 

implémentés sous le package services.impl, puis les repositories et leurs implémentations repository.impl.
       
        En effet il y'a deux couches services, repository qui contiennent des traits : on les implementes dans les sous packages .impl donc pour créer la collection confirmeUsers.
            J'avais besoin de créer un repository qui utilise des services et la méthode create, cela m'a permis en utilisant le MailerPlugin
  d'envoyer des mails lors de l'inscription, et d’activer le compte utilisateur en 



cliquant sur le lien reçu dans ma boite mail. Cependant, cela n’est pas la meilleur façon de 



faire, car il faut se débrouiller pour ne pas avoir de dépendance vers un plugin play.


<p>
J'avais besoin de reprendre le travail avec Jonathan sur une nouvelle branche newsecuresocial

</p>
<p>
En gros il faut passer par trois étapes Do-It, Do-It-right, Do-It-fast.

<br />

Nos besoins sont l'enregistrement avec un compte google, avec un mail, avec Twitter.

</p>
<p>
Pour l'intégration de secure-social :
<br />


Vérification de compilation, intégration basique de secure Social dans Stample. 


<br />
Une écriture basique dans la mémoire et implémentation de UserService. 

<br />

Working Wiring : Authentification avec google / Authentification avec email. 

<br />

Ajout du template signUp email.

<br />

Puis de résoudre le robléme de token et de memory

<h4>Stample est-il unique ?</h4>
<p>


En ajoutant les notions de web sémantique dont je vais parler, ce sera l’unique plateforme 



Web en mesure de résoudre simultanément le problème du contrôle de ses données 



personnelles, celui de la fragmentation de ses information, et celui de la collaboration avec 



d’autres acteurs autonomes.
</p>
   <h3>Les taches à coûrt terme</h3>
        <ul>
            <li>Restore password</li>
            <li>Gérer les notifications (avec Jonathan)</li>
            <li>Recevoir des emails de notifications</li>
        </ul>
    <br />

    </blockquote>

</article>
<article>
    <blockquote>
        <H2><a name="ApportPerso"> Apports Personnels</a></H2>

        <p>Durant ces trois mois de stage qui continuera jusqu'à Septembre, j'ai appris plusieurs concept de Scala, de
            Linked
            Data la philosophie du web
            sémantique et d'écrire des tests. </p>

        <p>
            Ce stage est une opportunité unique qui va me permettre de commancer ma deuxième année de master
           de master sereinement, étant donné qu'il touche réellement au web intelligence.</p>

        <p>
            Le travaille avec PlayFramework, scala va renforcer mes
            connaissances et améliorer mon savoir-faire.<br />
            Un stage chez une Start-Up m’a également beaucoup apporté, la volonté, la patience, et tout un vocabulaire 



d'investisseurs, levée de fonds... 
        </p>

    </blockquote>
</article>
<article>
    <blockquote>
        <H2><a name="Index"> Index</a></H2>
        <br/>
        <ul>
            <li><a href="http://fr.slideshare.net/al3x/the-how-and-why-of-scala-at-twitter"> The Why and How Scala at
                Twitter</a></li>
            <li><a href="http://www.scala-lang.org/api">Scala API </a></li>
            <li>
                <a href="http://joelabrahamsson.com/learning-scala-part-eight-scalas-type-hierarchy-and-object-equality/">Scala
                    hiérarchie</a></li>
            <li><a href="http://anders.janmyr.com/2009/10/lists-in-scala.html">Les listes en Scala</a></li>
            <li><a href="http://booksites.artima.com/programming_in_scala_2ed/examples/html/ch20.html">L'abstraction en
                Scala</a></li>
            <li><a href="http://blog.developpez.com/djo-mos/p6161/java/scala/introduction_a_scala_methodes_et_fonctio">Developpez
                introduction en Scala méthodes et fonctions </a></li>
            <li><a href="http://www.devoxx.com/display/Devoxx2K10/Hands-On+Scala">hands on Scala</a></li>
            <li><a href="http://www.playframework.com/documentation/2.1.1/Home">PlayFramework</a></li>
            <li><a href="http://git-scm.com/book/fr/Git-distribu%C3%A9-Contribution-%C3%A0-un-projet">Git article</a>
            </li>
            <li><a href="https://deikonad.wordpress.com/tag/monad/">Article Monad </a></li>
            <li><a href="https://www.coursera.org/">Coursera : Functional programming principles in scala</a></li>
            <li><a href="https://github.com/metanote/Summary-report">Le rapport sur git projet open source</a></li>
            <li><a href="http://www.w3.org/standards/techs/owl#w3c_all">Ontology language OWL</a></li>
            <li><a href="http://securesocial.ws/guide/getting-started.html">SecureSocial documentations</a> </li>
            <li><a href="http://docs.mongodb.org/manual/reference/sql-comparison/">MongoDB vs SQL</a> </li>
        </ul>
        <hr>

    </blockquote>
</article>
<article><blockquote>

      <H2><a name="Biblio">Bibliographie</a></H2>
    <ul>
        <li>Semantic web for the working ontologist effective modeling in RDFS and OWL DEAN ALLEMANG JIM HENDLER</li>
        <li>Functional Programing in scala PAUL CHIUSANO RUNA BJARNASON</li>

        <li>Programming in Scala MARTIN ODERSKY</li>
        <li>Scala for the impatient</li>
        <li>scala in depth</li>
        <li>Programming Scala</li>

    </ul>

    <pre></pre>
</blockquote></article>
<aside>
    <h3>Sommaire</h3>
    <ul>
        <li><a href="#intro">Top</a></li>
        <li><a href="#remerciement">Remerciement</a></li>
        <li><a href="#introduction">Introduction</a></li>
        <li><a href="#presentation">Présentation de Stample</a></li>
        <li><a href="#EA"> Etat de l'art</a></li>
        <li><a href="#HS">Hands On Scala</a></li>
        <li><a href="#langage">Un langage Scalable</a></li>
        <li><a href="#apprentissage">Apprentissage des concepts COURSERA</a></li>
        <li><a href="#partie1">Parite 1 : Généralités</a></li>
        <li><a href="#partie2">Parite 2 : Présentation des concepts</a></li>
        <li><a href="#outils">Outils de développements</a></li>
        <li><a href="#startup">StartUp</a></li>
        <li><a href="#Evn">Evénements</a></li>
        <li><a href="#WebSem">Web Sémantique</a></li>
        <li><a href="#ArchiStamp">Architecture de STAMPLE</a></li>
        <li><a href="#FPStample">Les Fonctionnalitées de la platforme Stample</a></li>
        <li><a href="#FPStampleDist">Architecture Distribuée de Stample </a></li>
        <li><a href="#work">Integration de SecureSocial & Signup</a></li>
        <li><a href="#ApportPerso">Apports Personnels</a></li>
        <li><a href="#Index">Index</a></li>

    </ul>
</aside>

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