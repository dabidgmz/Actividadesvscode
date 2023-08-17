<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 0;
    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'david.gmzherrera28@gmail.com';
        $mail->Password   = 'xlnshlmmmphviuuh';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Destinatarios
        $mail->setFrom('fdavid.gmzherrera28@gmail.com', 'David');
        $mail->addAddress($_POST['recipient'], 'Recipient');

        // Obtener información del formulario
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $attachment = $_FILES['attachment'];

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        // Adjuntar documentos
        if (!empty($attachment['name'])) {
            for ($i = 0; $i < count($attachment['name']); $i++) {
                $tmpName = $attachment['tmp_name'][$i];
                $name = $attachment['name'][$i];
                $mail->addAttachment($tmpName, $name);
            }
        }

        $mail->send();
        $successMessage = 'Correo enviado correctamente';
    } catch (Exception $e) {
        $errorMessage = "No se pudo enviar el correo. Error del correo: {$mail->ErrorInfo}";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar correo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background: linear-gradient(to bottom, #87ceeb, #fff);
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .container {
            max-width: 500px;
            margin-top: 50px;
            animation: slide-in 0.5s ease-out;
        }

        .alert {
            margin-top: 20px;
        }

        .btn-submit {
            width: 100%;
        }

        @keyframes slide-in {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-4">Redactar correo</h1>
        <?php if (isset($successMessage)) : ?>
            <div class="alert alert-success" role="alert">
                <?php echo $successMessage; ?>
            </div>
        <?php endif; ?>
        <?php if (isset($errorMessage)) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="recipient" class="form-label">Destinatario</label>
                <input type="email" class="form-control" id="recipient" name="recipient" required>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Asunto</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Mensaje</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="attachment" class="form-label">Adjuntar documentos</label>
                <input type="file" class="form-control" id="attachment" name="attachment[]" multiple>
            </div>
            <button type="submit" class="btn btn-primary btn-submit">
                Enviar <i class="fas fa-paper-plane"></i>
            </button>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>

</html>


