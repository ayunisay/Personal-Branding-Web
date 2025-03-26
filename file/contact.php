<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
    (function(){
        emailjs.init({
            publicKey: "WvIVX7w0wrqzMMo5I",
        });
    })();
    </script>
    <title>Ayunisa Branding</title>
</head>
<body>
    <header>
    <div class="navbar">
            <div class="logo">
                <a href="index.html">Personal Web</a>
            </div>
            <ul class="link">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="contact.php">Kontak</a>
                </li>
                <li>
                    <a href="am.php">About Me</a>
                </li>
                <li>
                    <a href="pw.php">Pemrograman Web</a>
                </li>
            </ul>
            <div class="toogle_btn">
                <i class="fa-solid fa-grip-lines"></i>
            </div>
        </div>

        <!-- dropdown -->
         <div class="dropdown">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="contact.php">Kontak</a>
                </li>
                <li>
                    <a href="am.php">About Me</a>
                </li>
                <li>
                    <a href="pw.php">Pemrograman Web</a>
                </li>
         </div>
    </header> -->
    
    <main>
        <!-- form -->
        <div class="col">
            <div class="card3">
                <p>Send Message for Me!</p>
                <form action="https://formsubmit.co/ayunisa1412@gmail.com" method="POST">
                    <label for="name">Nama</label>
                    <input type="text" id="name" name="name" required><br>
                    
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required><br>

                    <label for="subject">Subjek</label>
                    <input type="text" id="subject" name="subject" required><br>

                    <label for="message">Pesan</label>
                    <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>

                    <input type="submit" value="Send"></input>
                </form>
            </div>
        </div>
    </main>
    
    <footer>
        <p>&copy; 2025 - Ayunisa Yasmin</p>
        <p>Email: ayunisa1412@gmail.com</p>
    </footer>
</body>
</html>