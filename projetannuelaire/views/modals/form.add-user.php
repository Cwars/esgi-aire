<?php print_r($config); ?>

<form method="<?php echo $config["options"]["method"] ?>"
    action="<?php echo $config["options"]["action"] ?>"
    class="<?php echo $config["options"]["class"] ?>"
    id="<?php echo $config["options"]["id"] ?>">

    <?php foreach ($config["struct"] as $name => $attribute): ?>
        <?php if(
            $attribute['type'] == "username" ||
//            $attribute['type'] == "user_category" ||
            $attribute['type'] == "email" ||
            $attribute['type'] == "pwd" ||
            $attribute['type'] == "newsletter"
            ): ?>
            <input type="<?php echo $attribute["type"]; ?>"
                name="<?php echo $name; ?>"
                placeholder="<?php echo $attribute["placeholder"]; ?>"
            >
        <?php endif; ?>
    <?php endforeach; ?>

</form>
