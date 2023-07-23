document.addEventListener("DOMContentLoaded", () => {
   // Функция для валидации формы
   function validateForm(event) {
      event.preventDefault(); // Предотвращаем отправку формы по умолчанию

      const form = document.getElementById("feedbackForm");
      const inputs = form.querySelectorAll("input, textarea");
      let isValid = true;

      // Проверяем каждое поле на валидность
      inputs.forEach((input) => {
         if (!input.checkValidity()) {
            input.classList.add("aw-input_error");
            isValid = false;
         } else {
            input.classList.remove("aw-input_error");
         }
      });

      if (isValid) {
         // Если форма валидна, отправляем данные
         const formData = new FormData(form);
         const request = new XMLHttpRequest();
         request.open("POST", form.action);
         request.send(formData);

         // Очищаем поля формы
         form.reset();
      }
   }

   const form = document.getElementById("feedbackForm");

   if (form) {
      form.addEventListener("submit", validateForm);

      form.addEventListener("input", (event) => {
         if (event.target.checkValidity()) {
            event.target.classList.remove("aw-input_error");
         }
      });
   }
});
