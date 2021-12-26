<body class="bg-dark d-flex">
  <?php showAllTrend(); ?>
  <form class="position-fixed modifyForm">
    <div class="mb-3">
      <label for="title" class="form-label text-white">Title of trend</label>
      <input type="text" class="form-control" id="title" aria-describedby="title">
      <div id="title" class="form-text">the title that everyone will be able to admire</div>
    </div>

    <div class="mb-3">
      <label for="short_description" class="form-label text-white">short description</label>
      <input type="text" class="form-control" id="short_description" aria-describedby="short_description">

      <div id="short_description" class="form-text">the first words read by the community </div>
    </div>

    <div class="mb-3">
      <label for="article" class="form-label text-white">Article</label> <br>
      <!-- <input type="text" class="form-control" id="article" aria-describedby="article"> -->
      <textarea name="" id="article" cols="90" rows="15" class="form-text article"></textarea>
      <div id="article" class="form-text">what the world needs to learn</div>
    </div>
    <input type="text" id=idTrend class="d-none">
    <button type="button" class="btn btn-danger">Submit</button>
  </form>
 


  <script src="./public/js/modifyTrend.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="./public/js/bootstrap.bundle.js"></script>
</body>

</html>