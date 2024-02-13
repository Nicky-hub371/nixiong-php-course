
<footer class="container-fluid d-flex align-items-start justify-content-center">
            <div class="row" style="width: 1240px; margin-top: 20px">
                <div class="col-md">
                    <p style="font-weight: bolder; font-size: 25px"> Information</p>
                    <p>Behind the word mountains, far from the countries Vokalia and Consonantia</p>

                    <div class="row d-flex">
                        <div class="linkMethod2">
                            <i class="fab fa-facebook"
                                style="top: 50%;left: 50%; position: absolute; transform: translate(-50%, -50%);"></i>
                        </div>

                        <div class="linkMethod2">
                            <i class="fab fa-twitter"
                                style="top: 50%;left: 50%; position: absolute; transform: translate(-50%, -50%);"></i>
                        </div>

                        <div class="linkMethod2">
                            <i class="fab fa-instagram"
                                style="top: 50%;left: 50%; position: absolute; transform: translate(-50%, -50%);"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <p style="font-weight: bolder; font-size: 25px">Useful Links</p>
                    <a class="nav-link" href="#">Home</a>
                    <a class="nav-link" href="#">Contact</a>
                    <a class="nav-link" href="#">Shop Now</a>
                </div>

                <div class="col-md">
                    <p style="font-weight: bolder; font-size: 25px">Opening Hours</p>
                    <p>Mon-Fri: 8a.m to 9p.m</p>
                    <p>Sat-Sun: 10a.m to 10p.m</p>
                </div>
            </div>
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            var coffeeLink = document.querySelector(".m1");
            var dessertLink = document.querySelector(".m2");
            var breadLink = document.querySelector(".m3");
            var othersLink = document.querySelector(".m4");

            coffeeLink.addEventListener("click", function (event) {
                event.preventDefault();

                var coffeeSection = document.getElementById("coffee");


                coffeeSection.scrollIntoView({ behavior: "smooth" });
            });

            dessertLink.addEventListener("click", function (event) {
                event.preventDefault();

                var dessertSection = document.getElementById("dessert");
                dessertSection.scrollIntoView({ behavior: "smooth" });
            });

            breadLink.addEventListener("click", function (event) {
                event.preventDefault();

                var breadSection = document.getElementById("bread");


                breadSection.scrollIntoView({ behavior: "smooth" });
            });
            
            othersLink.addEventListener("click", function (event) {
                event.preventDefault();

                var othersSection = document.getElementById("others");


                othersSection.scrollIntoView({ behavior: "smooth" });
            });
        });
    </script>
</body>

</html>