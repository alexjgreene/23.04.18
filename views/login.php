<div>Hello <?= htmlspecialchars ($this->name) ?>!</div>
<ul>
	<?php
		foreach ($this->users as $user) {
	?>
    <li>
		<?= htmlspecialchars(
			$user['email']
		) ?>
	</li>
	<?php 
		}
	?>
</ul>