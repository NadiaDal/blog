<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>First blog</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
    </head>

    <body>

        <header class="jumbotron ">
            <div class="container">
                <div class="row">Sweet Home</div>
            </div>
        </header>

        <nav class="navbar navbar-inverse  navbar-fixed-top"
             role="navigation">
            <div class="container">

                <div class="navbar-header">
                    <button type="button"
                            class="navbar-toggle collapsed"
                            data-toggle="collapse"
                            data-target="#navbarID"
                            aria-expanded="false"
                            aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" 
                       href="/blog"><span>Sweet home</span></a>
                </div>
                <div id="navbarID"
                     class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/blog">
                                <span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="#">Calculation</a></li>
                        <li><a href="#">Works</a></li>
                        <li class="dropdown">
                            <a href="#"
                               class="dropdown-toggle"
                               data-toggle="dropdown"
                               role="button"
                               aria-haspopup="true"
                               aria-expanded="false">
                                Materials
                                <span class="caret"></span></a>
                                
                            <ul class="dropdown-menu">
                                <li><a href="#">Doors</a></li>
                                <li><a href="#">Windows</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Kitchen</a></li>
                                <li><a href="#">Flat</a></li>
                            </ul>

                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <script>
                            function checkrole() {
                                if(confirm("Are you admin?"))
                                    document.location.href="/blog/admin";
                            }
                        </script>

                        <li><a onclick="checkrole()">Sign in</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>


                <!--
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Головна</a></li>
                    <li><a href="#">Кошторис</a></li>
                    <li><a href="#">Роботи</a></li>
                    
                    <li class="dropdown">
                        <a href="#"
                           class="dropdown-toggle"
                           data-toggle="dropdown"
                           role="button"
                           aria-haspopup="true"
                           aria-expanded="false">
                            Матеріали
                            <span class="caret"></span></a>
                        
                        <ul class="dropdown-menu">
                            <li><a href="#">Doors</a></li>
                            <li><a href="#">Windows</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Kitchen</a></li>
                            <li><a href="#">Flat</a></li>
                        </ul>
                              
                    </li>
                </ul>
                
                
                -->

            </div>

        </nav>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>