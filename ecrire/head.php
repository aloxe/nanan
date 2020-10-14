<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="ecrire/js/content.js" type="text/javascript"></script>

<?php if (isset($_GET['login']) && !isset($_POST['password'])) { ?>
    <script src="ecrire/js/login.js" type="text/javascript"></script>
<?php } ?>

<?php if (isset($ecrire)) { ?>
    <script src="ecrire/js/ecrire.js" type="text/javascript"></script>
<?php } ?>
