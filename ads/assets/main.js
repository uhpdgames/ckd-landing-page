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
    myphone: (value, message, string) => {
      return is_phonenumber(value)
        ? true
        : message.replace("{contains}", string);
    },
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

function is_phonenumber(phonenumber) {
  /*   var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
  if (phonenumber.match(phoneno)) {
    return true;
  } else {
    return false;
  } */

  var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
  var mobile = phonenumber;
  if (mobile !== "") {
    if (vnf_regex.test(mobile) == false) {
      return false;
    } else {
      return true;
    }
  } else {
    return false;
  }
}

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

var a = document.querySelectorAll("#menu-info li a");
for (var i = 0, length = a.length; i < length; i++) {
  a[i].onclick = function () {
    var b = document.querySelector("#menu-info div.active");
    if (b) b.classList.remove("active");
    this.parentNode.classList.add("active");
  };
}
