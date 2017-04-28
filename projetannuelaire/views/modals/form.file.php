<?php print_r($config); ?>

<form method="<?php echo $config["options"]["method"] ?>"
      action="<?php echo $config["options"]["action"] ?>"
      class="<?php echo $config["options"]["class"] ?>"
      id="<?php echo $config["options"]["id"] ?>">

    <?php foreach ($config["struct"] as $name => $attribute): ?>
        <?php if(
            $attribute['type'] == "file"||
            $attribute['type'] == "file-title"||
            $attribute['type'] == "file-author"||
            $attribute['type'] == "file-description"
        ): ?>
            <input type="<?php echo $attribute["type"]; ?>"
                   name="<?php echo $name; ?>"
                   placeholder="<?php echo $attribute["placeholder"]; ?>">

        <?php endif; ?>
    <?php endforeach; ?>

</form>
