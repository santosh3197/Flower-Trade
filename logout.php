<?php
                if(isset($_POST["log"]))
                {
                  session_destroy();
                
                }
                header('location:index.html');
  ?>