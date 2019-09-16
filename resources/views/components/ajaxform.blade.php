<h2 class="text-center">Форма</h2>
<p class="lead text-center">Данные из формы появятся в таблице</p>
{{ Form::open(['action' => 'PortfolioController@store', 'method' => 'POST']) }}
  <div class="form-group row">
    <label for="name" class="col-6 col-lg-3 ">Имя</label>
    <input name="name" type="text" class="form-control btn-block col-6 col-lg-4" id="name" placeholder="Введите свое имя">
  </div>
  <div class="form-group row">
    <label for="surname" class="col-6 col-lg-3">Фамилия</label>
    <input name="surname" type="text" class="form-control btn-block col-6 col-lg-4" id="surname" placeholder="Введите свою фамилию">
  </div>
  <div class="form-group row">
    <label for="address" class="col-6 col-lg-3">Адрес</label>
    <input name="address" type="text" class="form-control btn-block col-6 col-lg-4" id="address" placeholder="Введите свой домашний адрес">
  </div>
  <div class="form-group row">
    <label for="age" class="col-6 col-lg-3">Возраст</label>
    <input name="age" type="text" class="form-control btn-block col-6 col-lg-4" id="age" placeholder="Введите свой возвраст">
  </div>
  <button id="ajaxSubmit" type="submit" class="btn btn-success">Отправить</button>
{{ Form::close() }}