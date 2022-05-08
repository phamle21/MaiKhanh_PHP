<?php

if (!isset($_POST['submitSendMail'])) {
    header('Location: ./');
    exit;
}

if (
    !isset($_POST['name']) || trim($_POST['name']) == ''
    || !isset($_POST['email']) || trim($_POST['email']) == ''
    || !isset($_POST['phone']) || trim($_POST['phone']) == ''
    || !isset($_POST['conpany']) || trim($_POST['conpany']) == ''
    || !isset($_POST['message']) || trim($_POST['message']) == ''
) {

    setcookie('MKnotify-false', 'Ooops, something went wrong.', time() + 3, '/');

    header('Location: ./');
    exit;
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$conpany = $_POST['conpany'];
$message = $_POST['message'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks You</title>

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
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="row m-5 p-5 border border-secondary">
            <div class="col">
                <div class="row mb-5">
                    <p class="fw-bold fs-3 text-primary">Thank you for contacting us</p>
                    <p class="">We will be backin touch with you within one bussiness day using the information you just provided below:</p>
                </div>
                <div class="row my-3">
                    <div class="col-2">
                        <p class="m-0 fw-bold">Name:</p>
                    </div>
                    <div class="col">
                        <p class="m-0"><?= $name ?></p>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-2">
                        <p class="m-0 fw-bold">Phone:</p>
                    </div>
                    <div class="col">
                        <p class="m-0"><?= $phone ?></p>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-2">
                        <p class="m-0 fw-bold">Email Address:</p>
                    </div>
                    <div class="col">
                        <a class="m-0" href="mailto:<?= $email ?>"><?= $email ?></a>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-2">
                        <p class="m-0 fw-bold">Conpany:</p>
                    </div>
                    <div class="col">
                        <p class="m-0"><?= $conpany ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>