<?php session_start() ?>

<body>
    <!-- Titre et barre de recherche + filtres -->
    <div class="part1">
        <h1 class="title">Archives</h1>
        <div class="searchArchive">
            <input type="search" name="search" id="search" placeholder="Search...">
            <!-- <div class="filterDate">
                <div class="firstClick">
               
                    <button class= "btn">see the oldest</button>
                </div>

            </div> -->
        </div>
    </div>

    <!-- Trends des archives -->
    <div class="part2">

        <!-- <div class="containerLT"> -->

        <?php allTrend();  ?>


        <!-- No Trend found -->
        <div class="BGnop">
            <img src="./public/img/NoTrend.svg" alt="">
            <span class="sentence">No trend found.</span>
        </div>

    </div>



    <?php
    require "./view/components/Burger/index.php";
    ?>

    <script src="./view/components/Burger/java.js"></script>

    <script src="./public/js/archives.js"></script>
</body>

</html>