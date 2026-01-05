<h1 class="mb-4"><?php echo $title; ?></h1>
<h2>Потребители:</h2>
<?php echo _('hello'); ?>
<ul class="list-group">
    <?php foreach ($users as $user): ?>
        <li class="list-group-item">
            <strong><?php echo htmlspecialchars($user['users_company_name'] ?? 'Няма име'); ?></strong> -
            <?php echo htmlspecialchars($user['users_email']); ?>
            (Роля: <?php
                $roles = [0 => 'Админ', 1 => 'Клиент'];
                echo htmlspecialchars($roles[$user['users_role']] ?? 'Неизвестна');
            ?>,
            Статус: <?php
                $statuses = [0 => 'Чака активация', 1 => 'Активен', 2 => 'Деактивиран', 3 => 'Изтрит'];
                echo htmlspecialchars($statuses[$user['users_is_active']] ?? 'Неизвестен');
            ?>,
            Имейл потвърден: <?php echo $user['users_email_approved'] ? 'Да' : 'Не'; ?>,
            Последно логване: <?php echo $user['users_last_login'] ? date('d.m.Y H:i', strtotime($user['users_last_login'])) : 'Никога'; ?>,
            Автоматично логване: <?php echo $user['users_auto_login'] ? 'Да' : 'Не'; ?>)
        </li>
    <?php endforeach; ?>
</ul>
<p class="mt-3">Ако няма потребители, провери дали таблицата 'users' е създадена правилно.</p>