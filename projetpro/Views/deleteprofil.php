<<?php
require_once '../Views/includes/header.php';
require_once '../Views/includes/nav.php';
?>
    <div class="row col-lg-9 offset-4 mb-5">
        <div class="car bg-light">
            <div class="card-header font-weight-bold bg-light">
                <h3>Etes vous sûr de vouloir supprimer votre profil ?</h3>
                <form action="#" method="post">
                    <input type="submit" class="btn btn-danger ml-5" name="deleteConfirm" value="supprimer">
                    <input type="submit" class="btn btn-info" name="deleteCancel" value="annuler">
                </form>
            </div>
        </div>
    </div>

<?php
require_once '../Views/includes/footer.php';
?>

