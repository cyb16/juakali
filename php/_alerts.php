<?php
if(isset($_SESSION['msg'])){
    ?>
    <div class="alert alert-<?php echo $_SESSION['msg']['type'] ?>" role="alert">
        <strong><?php echo $_SESSION['msg']['title']; ?></strong>
        <p><?php echo $_SESSION['msg']['message']; ?></p>
    </div>
    <?php
    unset($_SESSION['msg']);
}
?>