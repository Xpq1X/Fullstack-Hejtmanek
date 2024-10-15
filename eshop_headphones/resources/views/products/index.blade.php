<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Headphones E-Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            padding: 20px;
            flex: 1; /* Allows the container to grow and fill the available space */
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .product {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            width: 300px;
            padding: 15px;
            text-align: center;
        }
        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .product h3 {
            margin: 10px 0;
        }
        .product p {
            color: #666;
        }
        .product .price {
            font-size: 18px;
            color: #1e90ff;
            margin: 10px 0;
        }
        .product button {
            background-color: #1e90ff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .product button:hover {
            background-color: #105aaf;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Headphones E-Shop</h1>
        <p>Find the perfect sound for your ears!</p>
    </header>

    <div class="container">
        <section class="product-list">
            <div class="product">
                <img src="https://example.com/headphones1.jpg" alt="Wireless Headphones Model A">
                <h3>Wireless Headphones Model A</h3>
                <p>High-quality sound with noise-canceling technology for immersive audio experience.</p>
                <div class="price">$149.99</div>
                <button>Add to Cart</button>
            </div>

            <div class="product">
                <img src="https://example.com/headphones2.jpg" alt="Over-Ear Headphones Model B">
                <h3>Over-Ear Headphones Model B</h3>
                <p>Comfortable over-ear design with deep bass and 20-hour battery life.</p>
                <div class="price">$199.99</div>
                <button>Add to Cart</button>
            </div>

            <div class="product">
                <img src="https://example.com/headphones3.jpg" alt="In-Ear Wireless Model C">
                <h3>In-Ear Wireless Model C</h3>
                <p>Compact and lightweight, perfect for workouts and everyday use.</p>
                <div class="price">$89.99</div>
                <button>Add to Cart</button>
            </div>

            <div class="product">
                <img src="https://example.com/headphones4.jpg" alt="Studio Headphones Model D">
                <h3>Studio Headphones Model D</h3>
                <p>Professional-grade sound quality, ideal for music producers and DJs.</p>
                <div class="price">$299.99</div>
                <button>Add to Cart</button>
            </div>

            <div class="product">
                <img src="https://example.com/headphones5.jpg" alt="Gaming Headset Model E">
                <h3>Gaming Headset Model E</h3>
                <p>7.1 surround sound with a built-in microphone for clear communication.</p>
                <div class="price">$129.99</div>
                <button>Add to Cart</button>
            </div>

            <div class="product">
                <img src="https://example.com/headphones6.jpg" alt="Noise-Canceling Headphones Model F">
                <h3>Noise-Canceling Model F</h3>
                <p>Block out distractions with superior active noise-canceling technology.</p>
                <div class="price">$249.99</div>
                <button>Add to Cart</button>
            </div>

            <div class="product">
                <img src="https://example.com/headphones7.jpg" alt="Sports Headphones Model G">
                <h3>Sports Headphones Model G</h3>
                <p>Water-resistant and secure fit, perfect for outdoor activities and workouts.</p>
                <div class="price">$79.99</div>
                <button>Add to Cart</button>
            </div>

            <div class="product">
                <img src="https://example.com/headphones8.jpg" alt="Retro Headphones Model H">
                <h3>Retro Headphones Model H</h3>
                <p>Classic design with modern sound technology, a perfect blend of style and quality.</p>
                <div class="price">$159.99</div>
                <button>Add to Cart</button>
            </div>

            <div class="product">
                <img src="https://example.com/headphones9.jpg" alt="Bluetooth Headphones Model I">
                <h3>Bluetooth Headphones Model I</h3>
                <p>Seamless wireless connection with up to 30 hours of playtime.</p>
                <div class="price">$109.99</div>
                <button>Add to Cart</button>
            </div>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Headphones E-Shop. All rights reserved.</p>
    </footer>
</body>
</html>
