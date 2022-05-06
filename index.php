<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Test - Mai Khanh</title>

    <!-- Jquery 3.6.0 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Sweetalert 2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <!-- Bootstrap 5.0.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <!-- Font Awesome 6.1.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- My Css -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container-fluid row d-flex vh-100 align-items-center mx-0 px-0">
        <div class="col-12 col-md-8 p-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="fs-2 text-blue">Send us a Message</p>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <p class="fs-1 text-info"><i class="far fa-envelope"></i></p>
                    </div>
                </div>
                <form action="thanks_page.php" id="frmSendMail" class="row" method="post">
                    <div class="col-md-6 mt-4">
                        <label for="name" class="form-label text-label fw-bold d-block fs-6">Your Name</label>
                        <input type="text" id="name" name="name" class="border-0 border-bottom pb-3 w-100" value="Dexter Morgan" placeholder="Ex: Dexter Morgan">
                    </div>
                    <div class="col-md-6 mt-4">
                        <label for="email" class="form-label text-label fw-bold d-block fs-6">Email Address</label>
                        <input type="email" id="email" name="email" class="border-0 border-bottom pb-3 w-100" value="dextermorgan@hisoffice.com" placeholder="Ex: dextermorgan@hisoffice.com">
                    </div>
                    <div class="col-md-6 mt-4">
                        <label for="phone" class="form-label text-label fw-bold d-block fs-6">Phone</label>
                        <input type="text" id="phone" name="phone" class="border-0 border-bottom pb-3 w-100" value="(800) 800 - 900 - 100" placeholder="Ex: (800) 800 - 900 - 100">
                    </div>
                    <div class="col-md-6 mt-4">
                        <label for="conpany" class="form-label text-label fw-bold d-block fs-6">Conpany</label>
                        <input type="text" id="conpany" name="conpany" class="border-0 border-bottom pb-3 w-100" value="Morgan & Meat Enterprises" placeholder="Ex: Morgan & Meat Enterprises">
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="message" class="form-label text-label fw-bold d-block fs-6">Message</label>
                        <input type="text" id="message" name="message" class="border-0 border-bottom pb-3 w-100" value="Hi, do you have a moment to talk abo..!" placeholder="Ex: Hi, do you have a moment to talk abo..!">
                    </div>

                    <div class="col mt-4 d-flex justify-content-end">
                        <button class="btn btn-primary px-5 py-2" type="submit" form="frmSendMail" name="submitSendMail" value="true">Send</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 col-md-4 bg-blue h-100 d-flex align-items-center">
            <div class="container text-white ps-5">
                <div class="row">
                    <p class="fs-2">Contact Infomation</p>
                </div>
                <div class="row align-items-center">
                    <div class="col-1 fs-3 me-3 my-4">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="col">
                        <p class="m-0">360 King Street</p>
                        <p class="m-0">Featerville Trevose, PA 19053</p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-1 fs-3 me-3 my-4">
                        <i class="fas fa-mobile"></i>
                    </div>
                    <div class="col">
                        <p class="m-0">(800) 900-200-300</p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-1 fs-3 me-3 my-4">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <div class="col">
                        <p class="m-0">info@hisoffice.com</p>
                    </div>
                </div>
                <div class="row fs-3 my-4">
                    <div class="col-3">
                        <i class="fab fa-twitter"></i>
                    </div>
                    <div class="col-3">
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                    <div class="col-3">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- My Javasript -->
    <script src="custom.js"></script>
</body>

</html>