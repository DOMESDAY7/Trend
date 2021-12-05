<?php session_start() ?>

<body>
    <!-- <main role="main"> -->
        <!-- Titre et barre de recherche + filtres -->
        <div class="part1">
            <h1 class="title">Archives</h1>
            <div class="searchArchive">
                <input type="search" name="search" id="search" placeholder="Search...">
                <div class="filterDate">
                    <div class="firstClick">
                        <div class="BTNdate">
                            <img src="./public/img/arrow2.svg" alt="">
                            <p>Date</p>
                        </div>
                        <div class="miniModal">
                            <form action="">
                                <div class="choice1">
                                    <input type="radio" name="choice" id="newer">
                                    <label for="newer">Newer</label>
                                </div>
                                <div class="choice2">
                                    <input type="radio" name="choice" id="latest">
                                    <label for="latest">Latest</label>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Trends des archives -->
        <div class="part2">

            <!-- <div class="containerLT"> -->
                
               <?php  lastThree();  ?> 
                    <!-- <a href="#">I want to see more</a> -->
            <!-- </div> -->

            <!-- No Trend found -->
            <div class="BGnop">
                <img src="./public/img/NoTrend.svg" alt="">
                <span class="sentence">No trend found.</span>                
            </div>

        </div>
    <!-- </main> -->



<?php
    require "./view/components/Burger/index.php";
?>

    <script src="./view/components/Burger/java.js"></script>
    
    <script src="./public/js/archives.js"></script>
</body>
</html>