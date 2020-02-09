

<!-- Affichage d'un modal c'est à dire un model bootstrap qui est comme un popup -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->

<!-- Modal -->

<?php ob_start(); ?>
<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLongTitle"><?php $personalmessage?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><?php $messageText?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="<?php $buttonClass?>" data-dismiss="modal"><?php $buttonText?></button>
      </div>
    </div>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
