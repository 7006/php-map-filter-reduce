<?php

$customersJson = file_get_contents(__DIR__ . '/customers.json');
$customers = json_decode($customersJson, true);

?>
<pre>
    <?php print_r($customers) ?>
</pre>
