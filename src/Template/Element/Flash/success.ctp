<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="card bg-success text-white shadow">
    <div class="card-body">
        Sucesso
        <div class="text-white-50 small"><?= $message ?></div>
    </div>
</div>
