<?php
$now = date("Y-m-d H:i:s");

$user = new User();
$user->setId($newId);
$user->setUsername($newUsername);
$user->setStatus($newStatus);
$user->setFirstname($newFirstname);
$user->setLastname($newLastname);
$user->setEmail($newEmail);
$user->setPwdUpdate($newPwd);
$user->setDateInserted($now);
$user->setDateUpdated($now);
$user->setIsDeleted(0);

$user->save();
?>

<section class="un" id="Event">
    <div class="container">
        <h2 class="text-center"><?php echo $newLastname;?> <?php echo $newFirstname;?></h2>
        <div class="col1 firstcol">
            <p class="text-center">Félicitation, votre compte a été activé</p>
        </div>
    </div>
</section>