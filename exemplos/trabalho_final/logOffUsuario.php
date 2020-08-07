<?php
session_start();

session_destroy();
header("Refresh:0; url=index.html", true, 303);
?>
<script>
	alert("Você está Deslogado!");
</script>