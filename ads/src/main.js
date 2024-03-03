const resultsForm = document.getElementById("form-results");
const result = document.getElementById("result");

const myModalEl = document.getElementById("exampleModal");

const resultValidation = new te.Validation(resultsForm, {
  customErrorMessages: {
    contains: "Dữ liệu không hợp lệ!",
    input: "Dữ liệu không hợp lệ!",
  },
  validFeedback: "Dữ liệu hợp lệ!",
  invalidFeedback: "Dữ liệu không hợp lệ!",
  customRules: {
    contains: (value, message, string) => {
      return value.includes(string)
        ? true
        : message.replace("{contains}", string);
    },
    submitCallback: (e, valid) => {
      console.log("Do something ...", "Validation passed: ", valid);
    },
  },
});

resultsForm.addEventListener("valid.te.validation", (e) => {
  const results = [];
  resultsForm.querySelectorAll("input").forEach((input) => {
    results.push({ [input.name]: input.value });
  });
});

resultsForm.addEventListener("invalid.te.validation", (e) => {
  console.log("Something went wrong!");
});
resultsForm.addEventListener("valid.te.validation", (e) => {
  console.log("All good!");

  //resultsForm.submit();

  var data = resultsForm;
  fetch(data.getAttribute("action"), {
    method: data.getAttribute("method"),
    body: new FormData(data),
  })
    .then((res) => res.text())
    .then(function (data) {
      var all_error = document.querySelectorAll(
        "span[data-te-validation-feedback]",
      );
      //all_error.style.display = "none";

      if (data == 1) {
        result.innerHTML =
          "Đã gửi dữ liệu thành công! Chúng tôi sẽ sớm liên hệ với bạn trong thời gian sớm nhất";

        //setTimeout(() => {
        //  window.location.reload(true);
        //}, "3000");

        const modal = new te.Modal(myModalEl);
        modal.show();
      } else {
        result.innerHTML = "Đã gửi dữ liệu thất bại! Vui lòng thử lại.";
      }
    });
});

myModalEl.addEventListener("hidden.te.modal", (e) => {
  window.location.reload(true);
});
