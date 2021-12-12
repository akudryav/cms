<div id="usersettings">
	<form method="post">
	<h2>Создание нового шаблона</h2><br>
		<input type="hidden" name="ttype" value=<?=$type?>>
		<div class="control-group">
		<?php if (count($messages) > 0): ?>
			<?php foreach($messages as $message): ?>
				<p class="error"><?=$message?></p>
			<?php endforeach;?>
		<?php endif ?>
			<label class="control-label" for="name">Имя</label>
			<div class="controls">
				<div class="input-prepend">
					<input type="text" name="name" id="name" value="<?=$fields['name']?>">
				</div>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="path">Путь</label>
			<div class="controls">
				<div class="input-prepend">
					<select name="path">
						<?php foreach($templates as $t): ?>
							<option value="<?=$t?>"><?=$t?></option>
						<?php endforeach; ?>
					</select>
				</div>
				</div>
			</div>
		</div>
		<br>
		<input type="submit" value="Создать шаблон" class="btn btn-primary btn">
	</form>
</div>