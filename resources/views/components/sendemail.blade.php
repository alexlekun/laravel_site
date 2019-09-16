<h3 class="text-center">Отправка письма</h3>
	<div class="card">
		{{ Form::open(['action' => 'MailController@html_email', 'method' => 'POST', 'class' => 'card-body']) }}
			<div class="form-group">
				<input name="name" type="text" class="form-control" placeholder="Введите своё имя">
			</div>
		 	<div class="form-group">
		   		<input name="email" type="email" class="form-control" placeholder="email@example.com">
		    	<small class="form-text mt-3">Отправка электронного письма с помощью Laravel</small>
		 	</div>
		 	<button type="submit" class="btn btn-success brn-block" id="ajaxSubmit">Отправить</button>
		{{ Form::close() }}
</div>