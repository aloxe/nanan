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
            <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Envoyer</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php if (isset($ecrire)) { ?>
<div class="modal-dialog modal-sm" id="dialog" style="position: absolute; z-index: 100;">
  <div class="modal-content">
        <div class="modal-header" style="cursor: grab;">
            <h4 class="modal-title" id="exampleModalLabel"><span class="glyphicon glyphicon-pencil"></span> Mode éditeur</h4>
            <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <div class="modal-body">
            <button type="button" class="btn btn-primary btn-sm float-right" style="float:right;" id="savebtn"><span class="glyphicon glyphicon-save"></span> Save</button>
            <!-- <span class="glyphicon glyphicon-picture"></span> -->
            <span class="glyphicon glyphicon-th-list"></span>
            <button type="button" class="btn btn-default btn-sm" onclick="boldText()"><span class="glyphicon glyphicon-bold"></span></button>
            <button type="button" class="btn btn-default btn-sm" onclick="italicText()"><span class="glyphicon glyphicon-italic"></span></button>
            <button type="button" class="btn btn-default btn-sm" onclick="$('#linkform').toggle();"><span class="glyphicon glyphicon-link"></span></button>
            <div id="linkform" style="display:none;">
                <br>
                 <input type="text" id="url" size="20" value="http://reunionweb.org/"><input type="button" value="Link" onclick="createLink()">
             </div>
             <hr>
        </div>
    </div>
</div>
<?php } ?>
