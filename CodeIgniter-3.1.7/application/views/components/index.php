<html>
<body>
<div>
    <?php
    $this->load->helper('url');
    if (sizeof($components) > 0 ) {
        foreach ($components as $component):
            echo "Nazwa: " . $component->name;
            echo "<br>";
            echo "Cena: " . $component->price;
            echo "<br>";
        ?>
    <?php endforeach;}
    ?>
    <form action="<?php echo site_url('index.php/components/add')?>" method="post">
        <input type="submit" value="Add new component">
    </form>
</div>
</body>
</html>