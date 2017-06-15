<form method="<?php echo $config["options"]["method"] ?>"
      action="<?php echo $config["options"]["action"] ?>"
      class="<?php echo $config["options"]["class"] ?>"
      id="<?php echo $config["options"]["id"] ?>">
    <?php foreach ($config["struct"] as $name => $attribute): ?>
        <?php if(
            $attribute['type'] == "email" ||
            $attribute['type'] == "password" ||
            $attribute['type'] == "text" ||
            $attribute['type'] == "file"
        ): ?>
            <input type="<?php echo $attribute["type"]; ?>"
                   name="<?php echo $name; ?>"
                   placeholder="<?php echo $attribute["placeholder"]; ?>"
                   >
        <?php endif; ?>
        <?php if(
            $attribute['type'] == "select"
        ) : ?>
            <select name="<?php echo $attribute["optionName"] ?>"><?php foreach ($config["struct"]["Option"]["option"] as $name1 => $option):?>
                    <option value="<?php echo $option;?>"><?php echo $option;?></option>
                <?php endforeach; ?>
            </select>
        <?php endif; ?>
    <?php endforeach; ?>
    <input type="submit" value="Submit">
</form>