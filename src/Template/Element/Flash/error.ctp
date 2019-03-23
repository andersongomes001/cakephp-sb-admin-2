<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="card mb-4 py-3 border-left-danger border-bottom-danger">
    <div class="card-body" onclick="this.classList.add('hidden');">
        <?= $message ?>
    </div>
</div>

