 <?php
        if (isset($_SESSION['login']) && isset($_SESSION['pass'])) {
            echo "Вы уже вошли";
        } else {
            echo $message ? $message : ""; ?>
            <a href="index.php">Главная</a>
          <form method="post">
              <input type="text" name="name" placeholder="Имя" autofocus required>
              <input type="text" name="login" placeholder="Логин" required>
              <input type="email" name="email" placeholder="Email" required>
              <input type="password" name="pass" placeholder="Пароль" required>
              <input type="submit" name="addNewUser" value="Регистрация" required>
          </form>
          <? } ?>