<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href=".ico/logoHotel.ico">
    <!-- Incluir Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Incluir jQuery y Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>Habitaciones</title>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="index.php">Hotel Wilmor</a></div>
            <ul class="links">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="restaurant.php">Restaurant</a></li>

            </ul>
            <a href="aplicativo/reservar.php" class="action_btn">Reservar</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="restaurant.php">Restaurant</a></li>

            <li><a href="aplicativo/reservar.php" class="action_btn">Reservar</a></li>
        </div>
    </header>
    <script>
        const toggle_Btn = document.querySelector('.toggle_btn')
        const toggle_BtnIcon = document.querySelector('.toggle_btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')

        toggle_Btn.onclick = function() {
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toggle_BtnIcon.classList = isOpen ?
                'fa-solid fa-xmark' :
                'fa-solid fa-bars'
        }
    </script>

    <main>
        <!--Btn WhatsApp-->
        <a href="https://api.whatsapp.com/send?phone=573058248627" target="_blank" class="whatsapp-float">
            <i class="fab fa-whatsapp"></i>
        </a>
        <style>
            /*INICIA HABITACIONES*/
            .tituloHabi {
                color: #fff;
            }

            .servicio

            /*contenedor principal*/
                {
                width: 70%;
                margin: 5% auto;
                display: flex;
                align-items: center;
                justify-content: space-between;
                border: 1px solid #ccc;
                padding: 20px;
                text-align: left;
                background-color: rgba(120, 120, 120, 0.5);
            }

            .imagen-servicio {
                flex-basis: 30%;

            }

            .imagen-servicio img {
                width: 100%;
                height: auto;
                border-radius: 5px;
            }

            .descripcion-servicio {
                flex-basis: 60%;
                text-align: justify;
                margin: 0 20px;
                color: #fff;
            }

            .titulo-servicio {
                font-size: 1.5rem;
                margin: 0 0 10px 0;
                color: #fff;
            }

            .tarifa-servicio {
                font-weight: bold;
                margin: 10px 0;
                color: #fff;
            }

            .reserva-btn {
                background-color: rgba(235, 135, 7, 0.6);
                color: #fff;
                padding: 10px;
                border: none;
                border-radius: 15px;
                font-size: 1rem;
                cursor: pointer;
                transition: scale 0.2 ease;

            }

            .whatsapp-float {
                position: fixed;
                width: 60px;
                height: 60px;
                bottom: 40px;
                right: 40px;
                background-color: #25d366;
                color: #FFF;
                border-radius: 50px;
                text-align: center;
                font-size: 30px;
                box-shadow: 2px 2px 3px #999;
                z-index: 100;
            }

            .whatsapp-float:hover {
                text-decoration: none;
                opacity: 0.8;
            }

            .my-float {
                margin-top: 16px;
            }
        </style>
        <br><br><br><br>
        <section>
            <center>
                <h1 class="tituloHabi">Habitaciones</h1>
            </center>
            <section class="servicio">
                <div class="imagen-servicio">
                    <img src="images/individual.jpg" alt="Servicio 1">
                </div>
                <div class="descripcion-servicio">
                    <h2 class="titulo-servicio">Habitación Individual</h2>
                    <p class="descripcion">Habitación para una (1) persona.</p>
                    <p class="tarifa-servicio">Tarifa del servicio $ 8</p>
                    <button class="reserva-btn" onclick="window.location.href='aplicativo/reservar.php'">Reservar</button>
                </div>
            </section>
            <section class="servicio">
                <div class="imagen-servicio">
                    <img src="images/dobleindi.jpg" alt="Servicio 2">
                </div>
                <div class="descripcion-servicio">
                    <h2 class="titulo-servicio">Habitación Doble Individual</h2>
                    <p class="descripcion">Habitación para dos (2) personas.</p>
                    <p class="tarifa-servicio">Tarifa del servicio $ 12</p>
                    <button class="reserva-btn" onclick="window.location.href='aplicativo/reservar.php'">Reservar</button>
                </div>
            </section>
            <section class="servicio">
                <div class="imagen-servicio">
                    <img src="images/matrimonial.jpg" alt="Servicio 3">
                </div>
                <div class="descripcion-servicio">
                    <h2 class="titulo-servicio">Habitación Matrimonial</h2>
                    <p class="descripcion">Habitación para dos (2) personas.</p>
                    <p class="tarifa-servicio">Tarifa del servicio $ 15</p>
                    <button class="reserva-btn" onclick="window.location.href='aplicativo/reservar.php'">Reservar</button>
                </div>
            </section>
            <section class="servicio">
                <div class="imagen-servicio">
                    <img src="images/triple.jpg" alt="Servicio 4">
                </div>
                <div class="descripcion-servicio">
                    <h2 class="titulo-servicio">Habitación Triple</h2>
                    <p class="descripcion">Habitación acondicionada para tres (3) personas.</p>
                    <p class="tarifa-servicio">Tarifa del servicio $ 18</p>
                    <button class="reserva-btn" onclick="window.location.href='aplicativo/reservar.php'">Reservar</button>
                </div>
            </section>
            <section class="servicio">
                <div class="imagen-servicio">
                    <img src="images/familiar.jpg" alt="Servicio 5">
                </div>
                <div class="descripcion-servicio">
                    <h2 class="titulo-servicio">Habitación Familiar</h2>
                    <p class="descripcion">Habitación ideal para una familia (5) personas</p>
                    <p class="tarifa-servicio">Tarifa del servicio $ 22</p>
                    <button class="reserva-btn" onclick="window.location.href='aplicativo/reservar.php'">Reservar</button>
                </div>
            </section>
        </section>



    </main>
    <footer>
        <div class="hotel-info">
            <h4>Hotel Bar y Restaurant Wilmor C.A.</h4>
            <p>Dirección: Calle 4 Nro. 12-58 Plaza Miranda, San Antonio del Táchira, Venezuela</p>
            <p>Telefono: +58 0424-7556334</p>
            <p>Teléfono: +58 0276-7710830</p>
            <p>Teléfono: +58 0276-7710825</p>
        </div>
        <div class="social-media">
            <h4>Síguenos en:</h4>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Twitter</a></li>
            </ul>
        </div>
        <div class="useful-links">
            <h4>Enlaces útiles</h4>
            <ul>
                <li><a href="aplicativo/reservar.php">Reservas</a></li>
                <li><a href="habitaciones.php">Habitaciones</a></li>
                <li><a href="restaurant.php">Restaurant</a></li>
            </ul>
        </div>
    </footer>
    <style>
        body {
            background-color: #000000;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg %3E%3Cpath fill='%231b1b1b' d='M486 705.8c-109.3-21.8-223.4-32.2-335.3-19.4C99.5 692.1 49 703 0 719.8V800h843.8c-115.9-33.2-230.8-68.1-347.6-92.2C492.8 707.1 489.4 706.5 486 705.8z'/%3E%3Cpath fill='%23363636' d='M1600 0H0v719.8c49-16.8 99.5-27.8 150.7-33.5c111.9-12.7 226-2.4 335.3 19.4c3.4 0.7 6.8 1.4 10.2 2c116.8 24 231.7 59 347.6 92.2H1600V0z'/%3E%3Cpath fill='%23505050' d='M478.4 581c3.2 0.8 6.4 1.7 9.5 2.5c196.2 52.5 388.7 133.5 593.5 176.6c174.2 36.6 349.5 29.2 518.6-10.2V0H0v574.9c52.3-17.6 106.5-27.7 161.1-30.9C268.4 537.4 375.7 554.2 478.4 581z'/%3E%3Cpath fill='%236b6b6b' d='M0 0v429.4c55.6-18.4 113.5-27.3 171.4-27.7c102.8-0.8 203.2 22.7 299.3 54.5c3 1 5.9 2 8.9 3c183.6 62 365.7 146.1 562.4 192.1c186.7 43.7 376.3 34.4 557.9-12.6V0H0z'/%3E%3Cpath fill='%23868686' d='M181.8 259.4c98.2 6 191.9 35.2 281.3 72.1c2.8 1.1 5.5 2.3 8.3 3.4c171 71.6 342.7 158.5 531.3 207.7c198.8 51.8 403.4 40.8 597.3-14.8V0H0v283.2C59 263.6 120.6 255.7 181.8 259.4z'/%3E%3Cpath fill='%239b866c' d='M1600 0H0v136.3c62.3-20.9 127.7-27.5 192.2-19.2c93.6 12.1 180.5 47.7 263.3 89.6c2.6 1.3 5.1 2.6 7.7 3.9c158.4 81.1 319.7 170.9 500.3 223.2c210.5 61 430.8 49 636.6-16.6V0z'/%3E%3Cpath fill='%23b08751' d='M454.9 86.3C600.7 177 751.6 269.3 924.1 325c208.6 67.4 431.3 60.8 637.9-5.3c12.8-4.1 25.4-8.4 38.1-12.9V0H288.1c56 21.3 108.7 50.6 159.7 82C450.2 83.4 452.5 84.9 454.9 86.3z'/%3E%3Cpath fill='%23c68737' d='M1600 0H498c118.1 85.8 243.5 164.5 386.8 216.2c191.8 69.2 400 74.7 595 21.1c40.8-11.2 81.1-25.2 120.3-41.7V0z'/%3E%3Cpath fill='%23d9871e' d='M1397.5 154.8c47.2-10.6 93.6-25.3 138.6-43.8c21.7-8.9 43-18.8 63.9-29.5V0H643.4c62.9 41.7 129.7 78.2 202.1 107.4C1020.4 178.1 1214.2 196.1 1397.5 154.8z'/%3E%3Cpath fill='%23EB8707' d='M1315.3 72.4c75.3-12.6 148.9-37.1 216.8-72.4h-723C966.8 71 1144.7 101 1315.3 72.4z'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</body>

</html>