<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><p>hi new posts</p><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>