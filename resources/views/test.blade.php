<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
        }

        .navbar {
            background-color: #0C3D6E;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .nav-links li {
            margin-right: 15px;
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #E84C3D;
        }

        .swiper-container {
            width: 100%;
            padding-top: 50px;
            /* Adjusted to avoid overlap with navbar */
            padding-bottom: 50px;
            /* Adjusted to avoid overlap with footer */
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .categories {
            background-color: #0C3D6E;
            color: white;
            padding: 10px 0;
            display: flex;
            justify-content: center;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 50px;
            /* Adjusted to avoid overlap with navbar */
            z-index: 999;
        }

        .category-link {
            text-decoration: none;
            color: white;
            margin: 0 15px;
            font-weight: bold;
            transition: color 0.3s, transform 0.3s;
        }

        .category-link:hover {
            color: #E84C3D;
            transform: translateX(5px);
            /* Geser ke kanan saat dihover */
        }

        footer {
            background-color: #0C3D6E;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">Logo</div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Tech</a></li>
            <li><a href="#">Science</a></li>
            <!-- Add more links as needed -->
        </ul>
    </div>

    <!-- Kategori -->
    <div class="categories">
        <a href="#" class="category-link">Category 1</a>
        <a href="#" class="category-link">Category 2</a>
        <a href="#" class="category-link">Category 3</a>
        <a href="#" class="category-link">Category 4</a>
        <a href="#" class="category-link">Category 4</a>
        <a href="#" class="category-link">Category 4</a>
        <a href="#" class="category-link">Category 4</a>
        <a href="#" class="category-link">Category 4</a>
        <a href="#" class="category-link">Category 4</a>
        <a href="#" class="category-link">Category 4</a>
        <!-- Add more categories as needed -->
    </div>

    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('https://via.placeholder.com/1200x500');"></div>
            <div class="swiper-slide" style="background-image: url('https://via.placeholder.com/1200x500');"></div>
            <div class="swiper-slide" style="background-image: url('https://via.placeholder.com/1200x500');"></div>
            <!-- Add more slides as needed -->
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Konten lainnya -->

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
</body>

</html>
