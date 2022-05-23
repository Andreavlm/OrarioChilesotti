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

<?php
isset($_REQUEST["nome"]) ? $nome = $_REQUEST["nome"] : $id = "";

?>

            <h1> ORARIO DEL PROFESSORE <?=$nome?></h1><br><br>
            <?php include_once("stampa.php");
           
           //$jsonText = '[{"idaula":"A0000","nomeaula":"2"},{"idaula":"A0001","nomeaula":"30"},{"idaula":"A0002","nomeaula":"30bis"},{"idaula":"A0003","nomeaula":"34"},{"idaula":"A0004","nomeaula":"35"},{"idaula":"A0005","nomeaula":"36"},{"idaula":"A0006","nomeaula":"37"},{"idaula":"A0007","nomeaula":"38"},{"idaula":"A0008","nomeaula":"40"},{"idaula":"A0009","nomeaula":"41"},{"idaula":"A0010","nomeaula":"45"},{"idaula":"A0011","nomeaula":"46"},{"idaula":"A0012","nomeaula":"47"},{"idaula":"A0013","nomeaula":"49"},{"idaula":"A0014","nomeaula":"50"},{"idaula":"A0015","nomeaula":"51"},{"idaula":"A0016","nomeaula":"53"},{"idaula":"A0017","nomeaula":"54"},{"idaula":"A0018","nomeaula":"55"},{"idaula":"A0019","nomeaula":"56"},{"idaula":"A0020","nomeaula":"64"},{"idaula":"A0021","nomeaula":"65"},{"idaula":"A0022","nomeaula":"66"},{"idaula":"A0023","nomeaula":"68"},{"idaula":"A0024","nomeaula":"69"},{"idaula":"A0025","nomeaula":"70"},{"idaula":"A0026","nomeaula":"72"},{"idaula":"A0027","nomeaula":"73"},{"idaula":"A0028","nomeaula":"74"},{"idaula":"A0029","nomeaula":"76"},{"idaula":"A0030","nomeaula":"77"},{"idaula":"A0031","nomeaula":"78"},{"idaula":"A0032","nomeaula":"79"},{"idaula":"A0033","nomeaula":"8"},{"idaula":"A0034","nomeaula":"Disposizioni Sede Centrale"},{"idaula":"A0035","nomeaula":"Disposizioni Sede Staccata"},{"idaula":"A0036","nomeaula":"Lab Automazione"},{"idaula":"A0037","nomeaula":"Lab Chimica"},{"idaula":"A0038","nomeaula":"Lab Disegno"},{"idaula":"A0039","nomeaula":"Lab Elettronica"},{"idaula":"A0040","nomeaula":"Lab Fisica"},{"idaula":"A0041","nomeaula":"Lab Informatica"},{"idaula":"A0042","nomeaula":"Lab Logistica"},{"idaula":"A0043","nomeaula":"Lab Sis Ele"},{"idaula":"A0044","nomeaula":"Lab Sis Inf"},{"idaula":"A0045","nomeaula":"Lab TPSEE"},{"idaula":"A0046","nomeaula":"Lab.InAula"},{"idaula":"A0047","nomeaula":"Palestra Ceccato 1"},{"idaula":"A0048","nomeaula":"Palestra Ceccato 2"},{"idaula":"A0049","nomeaula":"Palestra Ceccato 3"},{"idaula":"A0050","nomeaula":"Palestra Ferrarin"},{"idaula":"A0051","nomeaula":"Palestrina"},{"idaula":"A0052","nomeaula":"Staccata1"},{"idaula":"A0053","nomeaula":"Staccata2"},{"idaula":"A0054","nomeaula":"Staccata3"},{"idaula":"A0055","nomeaula":"Staccata4"}]';
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
