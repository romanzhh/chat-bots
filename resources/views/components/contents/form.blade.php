<form name="mainForm" class="needs-validation" onsubmit="return false;" novalidate>
  @csrf
  <div class="d-flex justify-content-center align-items-center mb-4">
    <img src="images/cb-logo.png" width="64" class="border border-light rounded-circle">
  </div>
  <div class="d-flex justify-content-center mt-3">
    <input type="text" class="w-90 form-control fs-18" name="name" id="name" placeholder="Имя" required>
  </div>
  <div class="d-flex justify-content-center mt-3">
    <input type="text" class="w-90 form-control fs-18" name="email" id="email" placeholder="Почта" pattern="^.+@.+|" required>
  </div>
  <div class="d-flex justify-content-center mt-3">
    <input type="text" class="w-90 form-control fs-18" name="phone" id="phone" placeholder="Телефон" pattern="\+375-\([^_]{2}\)-[^_]{3}-[^_]{2}-[^_]{2}" aria-describedby="phoneFeedback" required>
  </div>
  <div class="form-check w-90 mt-5 ms-3">
    <input class="form-check-input mt-3" type="checkbox" value=" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
    <label class="form-check-label fs-18" for="invalidCheck3">
      Я даю согласие на обработку персональных данных
    </label>
  </div>
  <div class="d-flex justify-content-center mt-3 mb-2">
    <button class="w-90 btn btn-dark fs-18" onclick="submitForm()" type="submit">Оставить заявку</button>
  </div>
</form>