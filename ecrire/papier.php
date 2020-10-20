<?php /* interface: modals to logon and basic editor */ ?>

 <div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header info" style="padding:30px 40px; background-color: #5cb85c; color: white; text-align: center; font-size: 1.5em; ">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Accès pour devenir éditeur</h4>
        </div>
        <div class="modal-body">
          <form name="submit" method="post" role="form">
            <div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Mot de passe</label>
              <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-default btn-success btn-block" onClick="sendPassword(event);"><span class="glyphicon glyphicon-off"></span> Envoyer</button>
          </form>
        </div>
      </div>
  </div>
</div>

<div class="modal-dialog modal-sm" id="dialog" style="position: absolute; z-index: 100; display: none;">
  <div class="modal-content">
        <div class="modal-header" style="cursor: grab;">
            <button type="button" class="close" onClick='return closeEditor()'>×</button>
            <h4 class="modal-title" id="exampleModalLabel"><span class="glyphicon glyphicon-pencil"></span> Mode éditeur</h4>
        </div>
        <div class="modal-body">
            <button type="button" class="btn btn-primary btn-sm float-right" style="float:right;" id="savebtn"><span class="glyphicon glyphicon-save"></span> Save</button>
            <!-- TODO: <span class="glyphicon glyphicon-picture"></span> -->
            <span class="glyphicon glyphicon-th-list"></span>
            <button type="button" class="btn btn-default btn-sm" onclick="boldText()"><span class="glyphicon glyphicon-bold"></span></button>
            <button type="button" class="btn btn-default btn-sm" onclick="italicText()"><span class="glyphicon glyphicon-italic"></span></button>
            <button type="button" class="btn btn-default btn-sm" onclick="$('#linkform').toggle();"><span class="glyphicon glyphicon-link"></span></button>
            <div id="linkform" style="display:none;">
                <br>
                 <input type="text" id="url" size="20" value="http://"><input type="button" value="Link" onclick="createLink()">
             </div>
             <hr>
        </div>
    </div>
</div>

<?php /* config file with password */
include ("stylo.php");
 ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="ecrire/js/content.js" type="text/javascript"></script>

<?php if (isset($_GET['login']) && !isset($_COOKIE['editor']) || $_COOKIE['editor'] != $editor) { ?>
    <script src="ecrire/js/login.js" type="text/javascript"></script>
    <script src="ecrire/js/ecrire.js" type="text/javascript"></script>
<?php } ?>

<?php if (isset($_COOKIE['editor']) && $_COOKIE['editor'] == $editor) { ?>
    <script src="ecrire/js/logged.js" type="text/javascript"></script>
    <script src="ecrire/js/ecrire.js" type="text/javascript"></script>
<?php } ?>
