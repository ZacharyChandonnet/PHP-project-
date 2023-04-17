<?php
if (isset($_GET["email_sent"]) && $_GET["email_sent"] == 1) {
    echo '<script>alert("Votre email a été envoyé avec succès");</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Home</title>
</head>
<script type="module">
    import App from "./js/App.js";
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js" integrity="sha512-cOH8ndwGgPo+K7pTvMrqYbmI8u8k6Sho3js0gOqVWTmQMlLIi6TbqGWRTpf1ga8ci9H3iPsvDLr4X7xwhC/+DQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<body>
    <nav class="navbar">
        <span class="logo">Suave</span>
        <div class="nav-links">
            <ul>
                <li><a href="#aboutUs">About us</a></li>
                <li><a href="#services">Our services</a></li>
                <li><a href="#artists">Our artists</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <?php
                // Check if the user is logged in
                if (isset($_SESSION['username'])) {
                    // Display the username
                    echo '<li><a href="profil.php">' . $_SESSION['username'] . '</a></li>';
                } else {
                    // Display the "Log in" link
                    echo '<li><a href="login.php">Log in</a></li>';
                }
                ?>
            </ul>
        </div>
        <img src="/img/menu-btn.png" alt="menu hamburger" class="menu-ham">
    </nav>
    <header>
        <h1 class="slogan">Always fulfilling your <span style="color:#c99951;">expectations.</span></h1>
    </header>
    <main>
        <section id="aboutUs">
            <h1>Welcome to <span style="color:#c99951;">suave barber shop</span></h1>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their. </p>
            <p>Suave</p>
        </section>

        <section id="services">
            <div class="price">
                <h2 style="color:white">Prices</h2>
                <p style="color:white">clean cuts - 30$</p>
                <p style="color:white">beard - 10$</p>
                <p style="color:white"><i>cash only</i></p>
            </div>
            <div class="hours">
                <h2>Hours</h2>
                <p>Week days -- 7am - 8pm </p>
                <p>Week end -- 10am - 5pm</p>
                <p><i>walks-in welcome</i></p>
            </div>
        </section>

        <section id="artists">
            <h2>OUR <span style="color:#c99951;">ARTISTS</span></h2>
            <div class="grid">
                <div class="box">
                    <img src="/img/a1.jpg" alt="">
                    <h3>TOMMY</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                </div>
                <div class="box">
                    <img src="/img/a2.jpg" alt="">
                    <h3>THOMAS</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                </div>
                <div class="box">
                    <img src="/img/a3.jpg" alt="">
                    <h3>PIOJO</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                </div>
            </div>
        </section>
        <main>
            <footer id="contact">
                <h2>CONTACT <span style="color:#c99951;">US</span></h2>
                <div class="form-box">
                    <form action="email.php" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" require>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" require>
                        </div>
                        <div class="form-group">
                            <label for="message">Your message</label>
                            <input type="text" name="message" id="message" require>
                        </div>
                        <button>Send</button>
                    </form>
                </div>
                <p><a href="">Suave</a></p>
            </footer>
</body>

</html>