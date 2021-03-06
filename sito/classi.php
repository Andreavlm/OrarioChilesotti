<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <?php
    if(!isset($_COOKIE["darkmode"])) {
        if($_COOKIE["darkmode"] == "true") {
            echo "<script>";
            echo "body.classList.toggle('dark');";
            echo "if(body.classList.contains('dark')){";
            echo "    modeText.innerText = 'Light mode';";
            echo "}else{";
            echo "    modeText.innerText = 'Dark mode'";
            echo "</script>";
        }
    }
    ?>

    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logo2.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">I.T.T. Chilesotti</span>
                    <span class="profession">Find my Chilesotti</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">


                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="index.php">
                            <i class='bx bxs-home icon' ></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="aule.php">
                            <i class='bx bxs-institution icon' ></i>
                            <span class="text nav-text">Aule</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="insegnanti.php">
                            <i class='bx bx-male-female icon'></i>
                            <span class="text nav-text">Insegnanti</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="classi.php">
                            <i class='bx bxs-book-content icon'></i>
                            <span class="text nav-text">Classi</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="query.php">
                            <i class='bx bxs-data icon' ></i>
                            <span class="text nav-text">Query</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="contatti.php">
                            <i class='bx bxs-contact icon' ></i>
                            <span class="text nav-text">Contatti</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">
            
            <h1>CLASSI</h1><br><br>
            

           <?php include_once("stampa.php");

           $jsonText = '[{"nomeclasse":"1A"},{"nomeclasse":"1B"},{"nomeclasse":"1C"},{"nomeclasse":"1D"},{"nomeclasse":"1E"},{"nomeclasse":"1F"},{"nomeclasse":"1G"},{"nomeclasse":"1H"},{"nomeclasse":"2A"},{"nomeclasse":"2B"},{"nomeclasse":"2C"},{"nomeclasse":"2D"},{"nomeclasse":"2E"},{"nomeclasse":"2F"},{"nomeclasse":"2G"},{"nomeclasse":"2H"},{"nomeclasse":"3A-A"},{"nomeclasse":"3A-B"},{"nomeclasse":"3E-A"},{"nomeclasse":"3I-A"},{"nomeclasse":"3I-B"},{"nomeclasse":"3I-C"},{"nomeclasse":"3I-D"},{"nomeclasse":"3L-A"},{"nomeclasse":"4A-A"},{"nomeclasse":"4A-B"},{"nomeclasse":"4EL-M"},{"nomeclasse":"4I-A"},{"nomeclasse":"4I-B"},{"nomeclasse":"4I-C"},{"nomeclasse":"4L-A"},{"nomeclasse":"5A-A"},{"nomeclasse":"5A-B"},{"nomeclasse":"5AI-M"},{"nomeclasse":"5I-A"},{"nomeclasse":"5I-B"},{"nomeclasse":"5I-C"},{"nomeclasse":"5L-A"},{"nomeclasse":"5L-B"},{"nomeclasse":"4E-M"},{"nomeclasse":"4L-M"},{"nomeclasse":"5A-M"},{"nomeclasse":"5I-M"}]';

           echo Foo::jsonToDebug($jsonText);
           
           ?>





<li class="search-box">
                    
                    
                    
                    
                    </li>


        </div>
    </section>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }

});
    </script>

</body>
</html>
