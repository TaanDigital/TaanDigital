<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tán Digital - Agencia de Marketing Digital</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            background-color: #8fb3fd;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        nav {
            padding: 20px 50px;
            display: flex;
            justify-content: flex-end;
            gap: 30px;
        }

        nav a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }

        .main-content {
            text-align: center;
            padding: 50px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .award-heading {
            font-size: 1.8em;
            color: #666;
            letter-spacing: 3px;
            margin-bottom: 20px;
        }

        .agency-heading {
            font-size: 3.5em;
            color: #222;
            margin-bottom: 40px;
        }

        .agency-heading span {
            color: #e74c3c;
        }

        .cta-section {
            margin: 60px 0;
        }

        .cta-heading {
            font-size: 2.8em;
            color: #222;
            margin-bottom: 30px;
            line-height: 1.3;
        }

        .services-section {
            margin-top: 40px;
        }

        .services-subtitle {
            color: #666;
            margin-bottom: 20px;
            font-size: 1.2em;
        }

        .services-text {
            color: #777;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto 30px;
        }

        .cta-button {
            background-color: #e74c3c;
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 25px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .cta-button:hover {
            background-color: #c0392b;
        }

        .hero-section {
            background-color: #f8f9fa;
            padding: 120px 0;
        }
        .services-section {
            padding: 80px 0;
            background-color: #ffffff;
        }
        .feature-card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        .brand-section {
            padding: 80px 0;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <nav>
        <a href="#about">About Us</a>
        <a href="#contact">Contact</a>
        <a href="#login">Log In</a>
    </nav>

    <div class="main-content">
        <div class="award-section">
            <h1 class="award-heading">DIGITAL MARKETING AWARD WINNER</h1>
            <h2 class="agency-heading">LOGO <span>MARKETING AGENCY</span></h2>
        </div>

        <div class="cta-section">
            <h2 class="cta-heading">YOUR COMPANY NEEDS DIGITAL MARKETING RIGHT NOW!</h2>
            <button class="cta-button">Read About Our Services</button>
        </div>

        <div class="services-section">
            <h3 class="services-subtitle">Marketing Professionals</h3>
            <p class="services-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua ut enim ad.
            </p>
        </div>
    </div>

    <script>
        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Button click handler
        document.querySelector('.cta-button').addEventListener('click', function() {
            alert('Thank you for your interest! Redirecting to services...');
            // Add actual redirection logic here
        });
    </script>

<!-- Header -->
<header class="hero-section">
    <div class="container">
        <h1>Tán Digital</h1>
        <p>🌱 Creación de marca única y memorable. 💡 Estrategias de marketing que generan resultados. ✨ Trabajo en equipo con un enfoque artístico y profesional.</p>
        <a href="#contacto" class="btn btn-primary btn-lg">Descubre el éxito digital</a>
    </div>
</header>

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <h2>Nuestros Servicios</h2>
        <div class="row g-4">
            <!-- Marketing Digital -->
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>Marketing Digital</h3>
                    <p>Gestión de campañas en redes sociales, creación de contenido personalizado y estrategias efectivas.</p>
                </div>
            </div>

            <!-- Gestión de Contenido -->
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>Gestión de Contenido</h3>
                    <p>Desarrollo y edición de contenido para websites, blogs y redes sociales optimizados para SEO.</p>
                </div>
            </div>

            <!-- Brand Identity -->
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>Brand Identity</h3>
                    <p>Creación de logos y marcas únicas con identidad visual cohesiva.</p>
                </div>
            </div>

            <!-- Social Media Management -->
            <div class="col-md-4">
                <div class="feature-card">
                    <h3>Social Media Management</h3>
                    <p>Planeamiento y ejecución de campañas publicitarias en redes sociales con monitoreo diario.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cómo podemos ayudarte -->
<section class="brand-section">
    <div class="container">
        <h2>¿Cómo podemos ayudarte?</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <p>En Tán Digital, tenemos la solución para:</p>
                <ul>
                    <li>Incrementar tus ventas</li>
                    <li>Mejorar tu visibilidad en internet</li>
                    <li>Crear una mejor relación con tu audiencia</li>
                </ul>
            </div>
            <div class="col-md-6">
                <!-- Imagen placeholder -->
                <img src="https://via.placeholder.com/600x400" alt="Tán Digital">
            </div>
        </div>
    </div>
</section>

<!-- Contacto -->
<section id="contacto">
    <div class="container">
        <h2>Contáctanos</h2>
        <form>
            <div class="row g-3">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Tu nombre">
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control" placeholder="Tu correo electrónico">
                </div>
            </div>
            <textarea class="form-control" rows="4" placeholder="Mensaje"></textarea>
            <button type="submit" class="btn btn-success">Enviar mensaje</button>
        </form>
    </div>
</section>

<!-- Footer -->
<footer class="bg-light py-5">
    <div class="container">
        <h3>Tán Digital</h3>
        <p>🚀 Tu aliado en el éxito digital</p>
        <div class="social-links">
            <a href="#" class="text-decoration-none"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-decoration-none"><i class="far fa-envelope"></i></a>
            <a href="#" class="text-decoration-none"><i class="fas fa-globe"></i></a>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
// Archivos de PHP que necesitan incluirse:
// Configuración de PHP y dependencias
// Archivos de modelo o BD si los hubiera
?>
