    <?php
    if(!isset($_COOKIE["darkmode"])) {
        setcoookie("darkmode","true", time() + (86400 * 30), "/" );
      } else {
          $_COOKIE["darkmode"] = !$_COOKIE["darkmode"];
      }
    ?>