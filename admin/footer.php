</section>

<script>
    // notification
let successText = document.querySelector(".success-text");
let errorText = document.querySelector(".error-text");

let queryStrings = window.location.search;
let urlParams = new URLSearchParams(queryStrings);

//
if (urlParams.get("error")) {
  errorText.classList.add("error-text-active");
  setTimeout(() => {
    errorText.classList.remove('error-text-active');
  }, 5000);

  urlParams.delete("error");


  //
} else if (urlParams.get("success")) {
  successText.classList.add("success-text-active");

  //
  setTimeout(() => {
    successText.classList.remove('success-text-active')
  }, 5000);
}
</script>

    

<script src="../js/profile.js"></script>
<script src="../fontawesome/js/all.js"></script>
</body>
</html>