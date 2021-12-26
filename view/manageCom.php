<body class="bg-dark">
    <div class="part1">
        <h1 class="title">Manage Comments</h1>
        <div class="searchArchive">
            <input type="search" name="search" id="search" placeholder="Search...">
        </div>
    </div>

    <!-- Trends des archives -->
    <div class="part2">

        <?php showAllTrend();?>

    </div>


    <?php
    require "./view/components/Burger/index.php";
    ?>

    <script src="./view/components/Burger/java.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>