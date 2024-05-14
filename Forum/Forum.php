<?php
    include("../database.php");
    session_start();
    
    $result = mysqli_query($conn, "SELECT u1.nom, u2.nom, `comment`, `date`, idc, commente.id FROM commente inner join utilisateur u1 on commente.idc=u1.id left join utilisateur u2 on commente.idr=u2.id");

?>

<html>
  <head>
    
  </head>
  <style>
    *{
      margin: 0px;
      padding: 0px;
    }
    body{
      background: url('../knowledge-management.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
    }
    .container{
      backdrop-filter: blur(10px);
      width: 700px;
      margin: 0 auto;
      padding-top: 1px;
      padding-bottom: 5px;
    }
    .comment, .reply{
      margin-top: 5px;
      padding: 10px;
      border-bottom: 1px solid black;
    }
    .reply{
      border: 1px solid #ccc;
    }
    p{
      margin-top: 5px;
      margin-bottom: 5px;
    }
    form{
      margin: 10px;
    }
    form h3{
      margin-bottom: 5px;
    }
    form input, form textarea{
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
    }
    form button.submit, button{
      background: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
      padding: 10px 20px;
      width: 100%;
    }
    button.reply{
      background: orange;
    }
    table{
      color: white;
      text-shadow: 
        -1px -1px 0 #000,  
         1px -1px 0 #000,
        -1px  1px 0 #000,
         1px  1px 0 #000;
    }
    nav {
        height: 80px;
        width: 100%;
        background: rgba(0,0,0,.4);
        display:flex;
        justify-content: space-between;
        align-items: center;
    }
    
    nav img {
       width: 50px;
       height: 50px;
       margin-left: 20px;
    }
    
    nav ul  {
        margin-right: 20px;
        list-style: none;
    }
    
    nav ul li {
        display: inline-block;
        line-height: 80px;
        margin: 0 10px;
    }
    
    nav ul li a {
        text-decoration: none;
        color: #f1f1f1;
        padding: 7px;
    }
    
    nav ul li a.active, nav ul li a:hover {
        background: rgb(73, 176, 216);
        border-radius: 7px;
    }
    .centered {
            text-align: center;
        }
    .right{
      text-align: right;
    }


  </style>
  <body>
  <nav>
            <ul>
                <li>
                    <a href="../pgaccueil.php">Page d accueil</a>
                </li>
                <li>
                    <a href="../PageDesQuestions.php">Voir les questions posées</a>
                </li>
                <li>
                    <a href="Forum.php">Forum</a>
                </li>
                <li>
                    <a href="../index.html">Déconnecter</a>
                </li>
            </ul>
        </nav>
    <div class="container">
      <?php
          while ($ligne=mysqli_fetch_row($result)) {
            if (empty($ligne[1])) {
              echo "
                <br>
                <table border='1' width='100%'>
                  <tr>
                    <td colspan='2'>
                    $ligne[0]
                    
                    <div class='right'>$ligne[3]</div>
                    
                    </td>
                  </tr>
                  <tr>
                    <td width='65%'>$ligne[2]</td>
                    <td>
                      <form action = 'Reply.php' method = 'post'>
                      <input type='hidden' name='idr' value='$ligne[5]'>
                        <input type='submit' value='Repondre'>
                      </form>
                    </td>
                  </tr>
                </table>
              ";
            } else {
              echo "
                <br>
                <table border='1' width='100%'>
                  <tr>
                    <td colspan='3'>$ligne[0] ▶ $ligne[1]
                    
                    <div class='right'>$ligne[3]</div>
                    </td>
                  </tr>
                  <tr>
                    <td width='65%'>$ligne[2]</td>
                    <td>
                      <form action = 'Reply.php' method = 'post'>
                        <input type='hidden' name='idr' value='$ligne[5]'>
                        <input type='submit' value='Repondre'>
                      </form>
                    </td>
                  </tr>
                </table>
              ";
            }
          }
      ?>
      
      <form action = "Comment.php" method = "post">
        <h3 id = "title">Mettre un commentaire</h3>
        <textarea name="comment" placeholder="Votre commentaire"></textarea>
        <input type="submit" value="Commenter">
      </form>
    </div>
  </body>
</html>