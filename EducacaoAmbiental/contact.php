<?php require_once "includes/header.html" ?>

<!-- Main Content-->
<main class="mb-4">
  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">
        <p>
          Entre em contato através do formulário abaixo
        </p>
        <div class="my-5">
          <!-- * * * * * * * * * * * * * * *-->
          <!-- * * SB Forms Contact Form * *-->
          <!-- * * * * * * * * * * * * * * *-->
          <!-- This form is pre-integrated with SB Forms.-->
          <!-- To make this form functional, sign up at-->
          <!-- https://startbootstrap.com/solution/contact-forms-->
          <!-- to get an API token!-->
          <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <div class="form-floating">
              <input
                class="form-control"
                id="name"
                type="text"
                placeholder="Enter your name..."
                data-sb-validations="required"
              />
              <label for="name">Nome</label>
              <div class="invalid-feedback" data-sb-feedback="name:required">
                Precisamos de um nome
              </div>
            </div>
            <div class="form-floating">
              <input
                class="form-control"
                id="email"
                type="email"
                placeholder="Enter your email..."
                data-sb-validations="required,email"
              />
              <label for="email">Email </label>
              <div class="invalid-feedback" data-sb-feedback="email:required">
                Precisamos do seu Email.
              </div>
              <div class="invalid-feedback" data-sb-feedback="email:email">
                Email não é valido.
              </div>
            </div>
            <div class="form-floating">
              <textarea
                class="form-control"
                id="message"
                placeholder="Enter your message here..."
                style="height: 12rem"
                data-sb-validations="required"
              ></textarea>
              <label for="message">Mensagem</label>
              <div class="invalid-feedback" data-sb-feedback="message:required">
                Precisamos de uma mensagem
              </div>
            </div>
            <br />
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
              <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                To activate this form, sign up at
                <br />
                <a href="https://startbootstrap.com/solution/contact-forms"
                  >https://startbootstrap.com/solution/contact-forms</a
                >
              </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage">
              <div class="text-center text-danger mb-3">
                Error sending message!
              </div>
            </div>
            <!-- Submit Button-->
            <button
              class="btn btn-primary text-uppercase disabled"
              id="submitButton"
              type="submit"
            >
              Enviar
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>

<?php require_once "includes/footer.html" ?>