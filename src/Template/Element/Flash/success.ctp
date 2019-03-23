<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="card mb-4 py-3 border-left-success border-bottom-success">
    <div class="card-body">
    <?= $message ?>
    </div>
</div>
