<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"crossorigin="anonymous">    
    <title>PAYPAL</title>
</head>
<body>
    <div class="container">
          <!-- Navbar -->
          <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
              <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
              </a>
            </div>
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
              <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
              <li><a href="#" class="nav-link px-2">Features</a></li>
              <li><a href="#" class="nav-link px-2">Pricing</a></li>
              <li><a href="#" class="nav-link px-2">FAQs</a></li>
              <li><a href="#" class="nav-link px-2">About</a></li>
            </ul> 
            <div class="col-md-3 text-end"></div>            
          </header>
          <!-- Navbar -->

    <div class="container mt-5">
        <div class="modal-body text-center">
          <img src="https://static.thairath.co.th/media/4DQpjUtzLUwmJZY53NXUTrJdKnPN3d45r9SSAITSLovO.jpg" alt="" style="width: 150px; height: 150px;">
        </div>
        <p class="text-center"><b>Click on the button to see Qr code</b></p>
        <!-- Button to launch a modal -->
        <button type="button"
                class="btn btn-primary d-block mx-auto"
                data-toggle="modal"
                data-target="#exampleModal">Show image
        </button>
        <!-- Modal -->
        <div class="modal fade"
             id="exampleModal"
             tabindex="-1"
             role="dialog"
             aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header" style="text-align: center;">
                    <img src="https://static.thairath.co.th/media/4DQpjUtzLUwmJZY53NXUTrJdKnPN3d45r9SSAITSLovO.jpg" alt="" style="width: 70px; height: 70px; display: block; margin: 0 auto;">
                  </div>
                    <!-- Add image inside the body of modal -->
                    <div class="modal-body text-center">
                        <img id="image"
                             src="https://cdn.discordapp.com/attachments/799612555118641153/1154087938477543546/QRcode_3.png"
                             alt="Click on button" style="width: 350px; height: 350px;" />
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                                class="btn btn-secondary"
                                data-dismiss="modal">Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Adding scripts to use bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous">
    </script>
</body>
</html>