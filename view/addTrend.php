<body class="bg-dark">
    <form method="POST" class="form w-50 text-center m-auto ">

    <div class="mb-3">
    <label for="name" class="form-label text-white">Title of the Trend</label>
    <input type="text" name ="titre" class="form-control" id="name" aria-describedby="titre">
    <div id="titre" class="form-text">title of the trend</div>
  </div>

  <div class="mb-3">
    <label for="img" class="form-label text-white">Add an image</label>
    <input type="file" name ="img[]" class="form-control" id="img" aria-describedby="image">
    <div id="image" class="form-text">to describe your words</div>
  </div>

  <div class="mb-3">
    <label for="short_description" class="form-label text-white">Text of the trend</label>
    <textarea name="short_description" id="short_description" class="form-control" maxlength="60"></textarea>
    <div id="article" class="form-text">The short description</div>
  </div>

  <div class="mb-3">
    <label for="article" class="form-label text-white">Text of the trend</label>
    <textarea name="article" class="form-control" cols="30" rows="10"></textarea>
    <div id="article" class="form-text">The article</div>
  </div>
        <button type="submit" name="subAddTrend" class="btn btn-danger">Add the new trend</button>
    </form>
</body>

</html>