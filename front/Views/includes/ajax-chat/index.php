
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>live chat</title>
  <link rel="stylesheet" href="css/app.css">
</head>
<body>
  <header>
    <h1>live chat avec un administrateur d'animalia</h1>
  </header>
  
  <section class="chat">
    <div class="messages">
     
    </div>
    <div class="user-inputs">
      <form action="handler.php?task=write" method="POST">
        <input type="text" name="author" id="author" placeholder="entrez votre pseudo">
        <input type="text" id="content" name="content" placeholder="entrez votre message">
        <button type="submit">🔥 Send !</button>
      </form>
    </div>
  </section>
  <script src="js/app.js"></script>
</body>
</html>