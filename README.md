
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camellia - Ventas de Café</title>
    <link rel="stylesheet" href="proyacto final.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background: #6f4c3e;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 15px;
        }
        nav ul li a {
            color: #6f4c3e;
            text-decoration: none;
        }
        section {
            padding: 20px;
            margin: 10px;
        }
        .product {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px 0;
            display: flex;
            align-items: center;
        }
        .product img {
            width: 100px;
            height: auto;
            margin-right: 20px;
        }
        footer {
            text-align: center;
            padding: 10px;
            background: #6f4c3e;
            color: white;
        }
        #carrito {
            margin-top: 20px;
            font-weight: bold;
        }
        #modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }
        #modalContent {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Ventas de Café</h1>
        <nav>
            <ul>
                <li><a href="#productos">Productos</a></li>
                <li><a href="#acerca-de">Acerca de</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
        <div id="carrito">Productos en el carrito: <span id="carritoCount">0</span></div>
    </header>

    <section id="productos">
        <h2>Productos</h2>
        <div class="product">
            <img src="cafe-arabica.jpg" alt="Café Arábica">
            <div>
                <h3>Café Arábica</h3>
                <p>Un café suave y afrutado.</p>
                <button onclick="agregarAlCarrito('Café Arábica')">Agregar al Carrito</button>
                <button onclick="mostrarDetalles('Café Arábica', 'Un café suave y afrutado.')">Detalles</button>
            </div>
        </div>
        <div class="product">
            <img src="cafe-robusta.jpg" alt="Café Robusta">
            <div>
                <h3>Café Robusta</h3>
                <p>Un café fuerte y amargo.</p>
                <button onclick="agregarAlCarrito('Café Robusta')">Agregar al Carrito</button>
                <button onclick="mostrarDetalles('Café Robusta', 'Un café fuerte y amargo.')">Detalles</button>
            </div>
        </div>
        <div class="product">
            <img src="cafe-sumatra.jpg" alt="Café Sumatra">
            <div>
                <section>
                <h3>Encuesta de Satisfacción del Cliente</h3>
                <form id="encuestaForm">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
            
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>
            
                    <label>¿Cómo calificarías nuestra tienda?</label>
                    <label><input type="radio" name="calificacion" value="Excelente" required> Excelente</label>
                    <label><input type="radio" name="calificacion" value="Buena"> Buena</label>
                    <label><input type="radio" name="calificacion" value="Regular"> Regular</label>
                    <label><input type="radio" name="calificacion" value="Mala"> Mala</label>
            
                    <label for="comentarios">Comentarios:</label>
                    <textarea id="comentarios" name="comentarios" rows="4" placeholder="Escribe tus comentarios aquí..."></textarea>
            
                    <label><input type="checkbox" id="newsletter" name="newsletter"> Deseo recibir noticias y ofertas especiales.</label>
            
                    <button type="submit">Enviar Encuesta</button>
                </form>
            
                <script>
                    document.getElementById('encuestaForm').addEventListener('submit', function(event) {
                        event.preventDefault(); // Evita el envío del formulario
            
                        // Recopila datos
                        const nombre = document.getElementById('nombre').value;
                        const email = document.getElementById('email').value;
                        const calificacion = document.querySelector('input[name="calificacion"]:checked').value;
                        const comentarios = document.getElementById('comentarios').value;
                        const newsletter = document.getElementById('newsletter').checked;
            
                        // Aquí puedes enviar los datos a un servidor o procesarlos como desees
                        console.log("Nombre:", nombre);
                        console.log("Email:", email);
                        console.log("Calificación:", calificacion);
                        console.log("Comentarios:", comentarios);
                        console.log("Suscribirse a Newsletter:", newsletter);
            
                        // Limpiar el formulario
                        this.reset();
                        alert('Gracias por tu feedback!');
                    });
                </script>  
                </section>
                </div>             
                        <footer>
                            <p>Contacto: info@camellia.com | Teléfono: +34 123 456 789</p>
                            <p>Síguenos en nuestras redes sociales:</p>
                            <a href="https://www.facebook.com" target="_blank">Facebook</a> |
                            <a href="https://www.instagram.com" target="_blank">Instagram</a> |
                            <a href="https://www.twitter.com" target="_blank">Twitter</a>
                            <p>&copy; 2023 Camellia - Todos los derechos reservados.</p>
                        </footer>
                <style>
                    footer {
                        text-align: center;
                        padding: 20px;
                        background: #6f4c3e;
                        color: white;
                        position: relative;
                        bottom: 0;
                        width: 100%;
                    }
                    footer a {
                        color: white;
                        text-decoration: none;
                    }
                    footer a:hover {
                        text-decoration: underline;
                    }
                </style>
            </div>
