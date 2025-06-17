<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FC Barcelona Store</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
   <title>Contact</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <header>
    <h1>FC BARCELONA</h1>
    <nav>
      <a href="#home">Home</a>
      <a href="#players">Players</a>
      <a href="#jerseys">Buy Jersey</a>
      <a href="#contact">Contact</a>
      <a href="login.php">Login</a>
    </nav>
  </header>

  <section id="home">
  <div class="home-content">
    <div class="home-text">
      <h2>FC BARCELONA</h2>
      <p>
        FC Barcelona, commonly referred to as Barça, is one of the most successful and iconic football clubs in the world. Based in Barcelona, Catalonia, Spain, the club was founded in 1899 by a group of Swiss, English, and Spanish footballers led by Joan Gamper. Known for its motto "Més que un club" (More than a club), FC Barcelona has built a rich legacy not only through its football achievements but also through its commitment to Catalan identity, culture, and values. The team plays its home matches at the historic Spotify Camp Nou, one of the largest stadiums in Europe. With a long-standing rivalry with Real Madrid, known as El Clásico, Barça has earned countless national and international titles, including numerous La Liga, Copa del Rey, and UEFA Champions League trophies. Legendary players such as Lionel Messi, Xavi Hernández, Andrés Iniesta, Ronaldinho, and Johan Cruyff have shaped the club's philosophy and global appeal. FC Barcelona is renowned for its attractive style of play, strong youth academy (La Masia), and deep connection with its fans worldwide.
      </p>
    </div>
    <div class="home-image">
      <img src="Barca1.JPG" alt="FC Barcelona" />
    </div>
  </div>
</section>

  <section id="players">
   <center><h2>PLAYERS</h2> </center> 
    <div class="container">
      
      <!-- 11 pemain -->
      <div class="card">
        <img src="Lamine.JPG" >
        <h3>Lamine Yamal</h3>
       <a href="https://id.wikipedia.org/wiki/Lamine_Yamal" target="_blank" class="share-icon" title="View Profil">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
    <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m20 12l-6.4-7v3.5C10.4 8.5 4 10.6 4 19c0-1.167 1.92-3.5 9.6-3.5V19z"/>
  </svg>
</a>

      </div>

       <div class="card">
        <img src="Pedri.JPG" >
        <h3>Pedri Gonzalez</h3>
        <a href="https://id.wikipedia.org/wiki/pedri" target="_blank" class="share-icon" title="View Profil">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
    <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m20 12l-6.4-7v3.5C10.4 8.5 4 10.6 4 19c0-1.167 1.92-3.5 9.6-3.5V19z"/>
  </svg>
</a>
      </div>

       <div class="card">
        <img src="Lewandowski.JPG" >
        <h3>Lewandowski</h3>
        <a href="https://id.wikipedia.org/wiki/Robert_Lewandowski" target="_blank" class="share-icon" title="View Profil">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
    <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m20 12l-6.4-7v3.5C10.4 8.5 4 10.6 4 19c0-1.167 1.92-3.5 9.6-3.5V19z"/>
  </svg>
</a>
      </div>

       <div class="card">
        <img src="Gavi.JPG" >
        <h3>Pablo Gavi</h3>
        <a href="https://id.wikipedia.org/wiki/Gavi" target="_blank" class="share-icon" title="View Profil">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
    <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m20 12l-6.4-7v3.5C10.4 8.5 4 10.6 4 19c0-1.167 1.92-3.5 9.6-3.5V19z"/>
  </svg>
</a>
      </div>

       <div class="card">
        <img src="Fermin.JPG" >
        <h3>Fermin Lopez</h3>
        <a href="https://id.wikipedia.org/wiki/Ferm%C3%ADn_L%C3%B3pez" target="_blank" class="share-icon" title="View Profil">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
    <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m20 12l-6.4-7v3.5C10.4 8.5 4 10.6 4 19c0-1.167 1.92-3.5 9.6-3.5V19z"/>
  </svg>
</a>
      </div>
      <!-- Tambahkan 10 pemain lain dengan pola yang sama -->
    </div>
  </section>

  <section id="jerseys">
   <CENTER>  <h2>BUY JERSEY</h2></CENTER> 
    <div class="container">
      <!-- 5 jersey -->
      <div class="card">
        <h3>Jersey Away</h3>
        <img src="Jersey 2.jpg" alt="Jersey 1">
        <p>Price: Rp. 3.000.000</p>
        <form method="post" action="buy.php">
          <input type="hidden" name="jersey" valu="Jersey Away">
        <button class="buy-button">
  <i class="bi bi-cart"></i>
</button>
        </form>
      </div>

       <div class="card">
        <h3>Travisscott Ed</h3>
        <img src="Jersey 4.jpg" alt="Jersey 1">
        <p>Price: Rp. 7.000.000</p>
        <form method="post" action="buy.php">
          <input type="hidden" name="jersey" value="Travisscott Limited Edition">
                <button class="buy-button">
  <i class="bi bi-cart"></i>
</button>
        </form>
      </div>

       <div class="card">
        <h3>Jersey Home</h3>
        <img src="Jersey1.jpg" alt="Jersey 1">
        <p>Price: Rp. 3.000.000</p>
        <form method="post" action="buy.php">
          <input type="hidden" name="jersey" value="Jersey Home">
               <button class="buy-button">
  <i class="bi bi-cart"></i>
</button>
        </form>
      </div>

       <div class="card">
        <h3>Coldplay Ed</h3>
        <img src="Jersey 5.jpg" alt="Jersey 1">
        <p>Price: Rp. 7.000.000</p>
        <form method="post" action="buy.php">
          <input type="hidden" name="jersey" value="Coldplay Limited Edition">
                <button class="buy-button">
  <i class="bi bi-cart"></i>
</button>
        </form>
      </div>

       <div class="card">
        <h3>Jersey Thrid</h3>
        <img src="Jersey 3.jpg" alt="Jersey Third">
        <p>Price: Rp. 3.000.000</p>
        <form method="post" action="buy.php">
          <input type="hidden" name="jersey" value="Jersey Thrid">
              <button class="buy-button">
  <i class="bi bi-cart"></i>
</button>
        </form>
      </div>
      <!-- Tambahkan 4 jersey lainnya -->
    </div>
  </section>

 <section id="contact">
 <center> <h2>SOCIAL MEDIA</h2>
  <p>Join Us</p></center> 
  <ul class="social-media">
    <li><a href="https://www.instagram.com/fcbarcelona/" target="_blank">
      <i class="fab fa-instagram"></i> Instagram</a></li>
    <li><a href="https://www.facebook.com/fcbarcelona" target="_blank">
      <i class="fab fa-facebook"></i> Facebook</a></li>
    <li><a href="https://twitter.com/FCBarcelona" target="_blank">
      <i class="fab fa-twitter"></i> Twitter</a></li>
    <li><a href="https://www.tiktok.com/@fcbarcelona" target="_blank">
      <i class="fab fa-tiktok"></i> TikTok</a></li>
    <li><a href="https://www.youtube.com/fcbarcelona" target="_blank">
      <i class="fab fa-youtube"></i> YouTube</a></li>
  </ul>
</section>


  <footer>
    <p>&copy; 2025 FC Barcelona Practice</p>
  </footer>
</body>
</html>