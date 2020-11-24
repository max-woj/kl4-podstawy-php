<?php include_once '../setup.php'; ?>
<?php include_once '../fragments/navbar.php'; ?>

<h2>Tutaj możesz dodać nowy post</h2>
<div class="wrapper">
	<form action="/actions/addPost.php" method="post">
		<div class="form-group">
			<label>Tytuł</label>
			<input type="text" name="postTitle" value="">
		</div>
		<div class="form-group">
			<label>Treść</label>
			<textarea name="postBody">

			</textarea>
		</div>
		<button type="submit">Opublikuj</button>
	</form>
</div>
