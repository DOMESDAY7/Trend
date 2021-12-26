<body class="bg-dark">

    <form method="POST" class="form w-50 text-center m-auto " enctype="multipart/form-data">
      <?php if(isset( $_GET["error"])){ ?>
    <div class="alert alert-danger" role="alert">
        <?php 
        $error = $_GET["error"];
        if($error == "weight" ){ ?>
          the file is too large
       <?php }else if( $error == "fileExt"){ ?>
        This type of file is not accepted
       <?php }else if($error == "notComplete"){ ?>
         Not all fields have been filled in
      <?php  }  ?>
    </div>
    <?php } ?>
    <div class="mb-3">
    <label for="name" class="form-label text-white">Title of the Trend</label>
    <input type="text" name ="titre" class="form-control" id="name" aria-describedby="titre">
    <div id="titre" class="form-text">title of the trend</div>
  </div>

  <div class="mb-3">
    <label for="img" class="form-label text-white">Add an image</label>
    <input type="file" name ="imgTrend" class="form-control" id="img" aria-describedby="image">
    <div id="image" class="form-text">to describe your words (jpg or jpeg)</div>
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
    <?php if(isset($_GET["send"])){ ?>

<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
  <div id="liveToast" class=" toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header bg-dark">
     😁
      <strong class="me-auto">Trend</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body bg-secondary text-white">
    The Trend has been sent
    </div>
  </div>
</div>
    <?php } ?>
    <script src="./public/js/bootstrap.bundle.js"></script>
</body>

</html>