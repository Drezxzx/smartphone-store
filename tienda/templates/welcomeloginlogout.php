<?php

  $dataLogin=""; 
  if (isset($_SESSION['nameUser'])) {
        $dataLogin.= "<span>{$_SESSION['nameUser']}</span>";
        $dataLogin.="<span><a class='logout' href=''><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAV9JREFUSEvtlr0uRFEUhb8lohaJAi+gQCQaHR5BoURF6CSj0Pl5BCQS0VEqhEbj7w1oFArCE3iDJUfuTa6ZYe45MTMRc8p797nfPmvts+8WbVpqE5e/A7Ydkh0F+iLUepH0WoyPOrHtIeASGImA5qHHwKIkhwex4ENgKQGab5mVdJYCvgZmgAdgLSKBmyx2U9JOCvgWmALuJE2XBdv+lBfYlrTVAdcoZ7sfqEjaCC9tN19q2xPABfCU+2l7HOgF3iXd/7rHtueBI6AntpDqJdOwuGx3A7vAauEDUVdHUrDjy/oRnPl5DkyWlbBenKSaptQIPJB5GrxNXtHgrGqDp/tVbbG5UhePaHsZ2GtZcVXBg9fB88eWXac8AdvB93VJlZY1kG/uY/M7Vwecedy2QeAAWEnuLjAn6TRlEBgEroDhBPgJsJA07GVydwFj2e+xLP9Z0lsxOGrKLEspE/f/wB8znOAfDMDHnQAAAABJRU5ErkJggg=='/></a></span>";
    } else {
        $dataLogin.= "<span class='name'><a href='' class='notIn'>Iniciar Sesión</a></span>";
    }
?>