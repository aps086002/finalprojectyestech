<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="{{asset('yesblog')}}/style.css" />

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .debug {
            border: 2px solid red;
        }
    </style>
</head>

<body>
    <!-- HAEDER -->
    @yield('header')

    @yield('section')

    <!-- FOOTER -->
    <footer class="py-5 container">
        <div class="row">
            <div class="col-lg-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos ducimus itaque saepe quaerat molestiae
                    voluptatum blanditiis nesciunt recusandae dolorem deserunt porro totam, ipsa tempore nihil rem at
                    laboriosam corrupti magnam.</p>
                <b>Contact:</b>
                <p>+1234567890</p>
                <b>Email</b>
                <p>admin@mail.com</p>
            </div>


            <div class="col-lg-8">
                <b>Office Jakarta</b>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quam labore autem quisquam harum dolor
                    itaque nisi. Tenetur, et cumque? In consequatur accusamus nulla assumenda libero ullam voluptates
                    commodi sit!</p>

                <b>Office Surabaya</b>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quam labore autem quisquam harum dolor
                    itaque nisi. Tenetur, et cumque? In consequatur accusamus nulla assumenda libero ullam voluptates
                    commodi sit!</p>

                <div class="d-flex justify-content-between">
                    <b>About us</b>

                    <b>Contact Us</b>

                    <b>Hire Us</b>
                </div>
            </div>
        </div>
        <hr />
        <div class="text-center">
            Copyright by Peduli Digital x Yes Tech : by Rico Arisandy
        </div>
    </footer>

    <script>
        /**
         * SCRIPT TO CHANGE HEADER BACKGROUND
         **/
        const header = document.querySelector('header');

        // Listen for the scroll event
        window.addEventListener('scroll', function () {
            // Check the scroll position
            const scrollPosition = window.scrollY;

            // Change the background color if scroll position is 100 or more
            if (scrollPosition >= 100) {
                header.style.backgroundColor = 'black'; // Change the color to your desired value
            } else {
                header.style.backgroundColor = 'transparent'; // Change the color to your desired value
            }
        });

        /**
         * SCRIPT TO SHOW MOBILE MENU
         **/
        const menu = document.getElementById('menu')

        function showMenu() {
            if (menu.classList.contains('show')) {
                menu.classList.remove("show")
                menu.classList.add("hide")
            } else {
                menu.classList.remove("hide")
                menu.classList.add("show")
            }
        }

    </script>
</body>

</html>
