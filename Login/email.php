<?php
    require '../vendor/autoload.php'; 
    require '../Static/connect/db.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use Faker\Factory as FakerFactory;

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email = $_POST['email'];

        $faker = FakerFactory::create();
        $password = $faker->password;

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'th3r0b0t4s1m0v@gmail.com';
        $mail->Password   = 'fpey ejdr ejba klij';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
        $mail->Port       = 587; 

        $mail->setFrom('th3r0b0t4s1m0v@gmail.com', 'Administrador BarberShop');
        $mail->addAddress($email); 


        $mail->isHTML(false); 
        $mail->Subject = 'Credenciales de su cuenta';
        $mail->Body    = "Su cuenta ha sido creada exitosamente. Aquí están sus credenciales:\nCorreo: $email\nContraseña: $password\n";

        if ($mail->send())
        {
            include '../includes/header.php';
            $sql = "INSERT INTO usuarios (usuario, contrasena) VALUES ('$email', '$password');";
            $execute = mysqli_query($conn,$sql); 
            echo "<h1>El correo ha sido enviado correctamente a $email y sus credenciales se han almacenado.</h1>";
    ?>
            <a href="login.php" style="text-decoration: none; color: black; display: inline-block; text-align: center; margin-right: 20px;">
                <img src="../Static/img/usericon.png" width="50px" height="50px">
                <div>Iniciar Sesión</div>
            </a>
<?php
        } 
        else 
        {
            include '../includes/header.php';
            echo "No se pudo enviar el correo: " . $mail->ErrorInfo; 
        }
    }
?>