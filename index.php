<?php
  session_start();
  require_once 'header.php';

  echo "<div class='center'>Welcome to Chung Heon`s nest,";

  if ($loggedin) echo " $user, you are logged in";
  else           echo ' please sign up or log in';

  echo <<<_END
      </div><br>
    </div>
    <div data-role="footer">
      <h4>Web App from <i><a href='https://github.com/RobinNixon/lpmj6'
      target='_blank'>Learning PHP MySQL & JavaScript</a></i></h4>
    </div>
  </body>
</html>
_END;
?>