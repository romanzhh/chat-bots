<form name="mainForm" class="needs-validation" onsubmit="return false;" novalidate>
  @csrf
  <div class="mt-3">
    <label for="name" class="form-label">Имя</label>
    <input type="text" class="form-control" name="name" id="name" required>
    <div class="invalid-feedback">
      Введите ваше имя
    </div>
  </div>
  <div class="mt-3">
    <label for="email" class="form-label">Почта</label>
    <input type="text" class="form-control" name="email" id="email" pattern="^.+@.+|" required>
    <div id="emailFeedback" class="invalid-feedback">
      Введите вашу почту
    </div>
  </div>
  <div class="mt-3">
    <label for="phone" class="form-label">Телефон</label>
    <input type="text" class="form-control" name="phone" id="phone" pattern="\+375-\([^_]{2}\)-[^_]{3}-[^_]{2}-[^_]{2}" aria-describedby="phoneFeedback" required>
    <div id="phoneFeedback" class="invalid-feedback">
      Введите ваш номер
    </div>
  </div>
  <div class="mt-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      <label class="form-check-label" for="invalidCheck3">
        Я даю согласие на обработку персональных данных
      </label>
      <div id="invalidCheck3Feedback" class="invalid-feedback">
        Вы должны согласиться перед подтверждением.
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-center mt-3">
    <button class="btn btn-primary w-100" onclick="submitForm()" type="submit">Оставить заявку</button>
  </div>
</form>