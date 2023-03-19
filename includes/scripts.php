<script src="assest/js/bootstrap5.bundlemin.js"></script>
<script src="assest/js/jquery.min.js"></script>
<script src="assest/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- jquery -->
<script src="https://cdnjs.cloudflarjquery-3.6.4.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">  </script>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<script>

    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
<script>
    AOS.init();
</script>
<script>
    $(document).ready(function () {

        $('.radio-group .radio').click(function () {
            $('.radio').addClass('gray');
            $(this).removeClass('gray');
        });

        $('.plus-minus .plus').click(function () {
            var count = $(this).parent().prev().text();
            $(this).parent().prev().html(Number(count) + 1);
        });

        $('.plus-minus .minus').click(function () {
            var count = $(this).parent().prev().text();
            $(this).parent().prev().html(Number(count) - 1);
        });

    });
</script>
<!-- owl carousel -->
<script src=" owl_carousel/owl.carousel.js"></script>
<script src="script.js"></script>
</body>

</html>