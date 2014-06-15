
        <?php
        if (isset($_POST['reset'])) {
            $email= $_POST['email_reset'];
//            try {

//                $pdo = new PDO("mysql:host=localhost;dbname=cfp", "root", "");
//                //
//                $req = $pdo->prepare("select * from auteurprincipal where email='" . $email . "' ;");
//                $req->setFetchMode(PDO::FETCH_ASSOC);
//                $req->execute();
//                $tab = $req->fetchAll();
//                if (count($tab) == 0) {
//                    echo "<script> alert('Erreur'); </script>";
//                } else {
                    $to = $email;
                    $subject = 'Reset mot de passe';
                    $md5email = md5($email);
                    $message = 'suite a votre requette de resifinition de mot de passe( ' . $email . " ), \r\n un lien pour la redefinition de votre mot de pass vous est envoyer\r\n " .
                            ' http://localhost/CPMRS/soumission/reset_pass.php?email=' . $md5email;
                    $headers = 'From: admin@gmail.com' . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();

                    mail($to, $subject, $message, $headers);
                    echo 'sent';
//                }
//            } catch (PDOException $e) {
//                
//            }
        }
        ?>
