<?php $name = $request->get('name', 'World'); ?>

Hello <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>
