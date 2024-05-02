<?

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="style.css">
<body>
    <div class="container">
        <div class="cv-side">
            <div class="identitas">
                 <h1 class="title">Putu Rama Agastya Diananta Putra</h1>
                <?php
            
                $name = "Putu Rama Agastya Diananta Putra";
                $email = "rama.agastyadp04@gmail.com";
                $phone = "081-337-742-956";
                $address = "Renon";
                
                echo "<h2>Personal Information</h2>";
                echo "<p><strong>Name:</strong> $name</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Phone:</strong> $phone</p>";
                echo "<p><strong>Address:</strong> $address</p>";
                
                echo "<h2>Education</h2>";
                echo "<ul>";
                echo "<li>SD 1 RENON</li>";
                echo "<li>SMP N 9 DENPASAR</li>";
                echo "<li>SMK N 1 DENPASAR</li>";
                echo "<li>INSTIKI</li>";
                echo "</ul>";
        
                echo "<h2>Experience</h2>";
                echo "<ul>";
                echo "<li>Freelancer Design, 2020-2022</li>";
                echo "<li>Engineering, 2023-now</li>";
                echo "</ul>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>