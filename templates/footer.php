<footer class="bg-dark mt-3">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <p class="text-light copyright">2021 Copyright</p>
            </div>
            <div class="col-6  text-right">
                <a class="text-light" href="#">Mentions légales</a>
                <a class="text-light" href="#">CGV</a>
                <a class="text-light" href="#">Confidentialité</a>
            </div>
        </div>
    </div>

</footer>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<script type="text/javascript">
    $(document).on('click', '.dropdown-menu', function(e) {
        e.stopPropagation();
    });
</script>
<script src="js/lightslider.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#headerSlider").lightSlider({
            item: 1,
            pause: 8000,
            auto: true,
            pauseOnHover: true,
            loop: true,
            gallery: true,
            thumbItem: 5,
        });
    });
</script>

</body>

</html>