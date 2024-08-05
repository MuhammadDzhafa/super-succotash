<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awan Hosting - Section4</title>

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/css/app.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        /* body {
            background-color: #f5f7fa;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .tabs-wrapper {
            margin-bottom: 2rem;
        }

        .tabs ul {
            justify-content: center;
            border-bottom: none;
        }

        .tabs li {
            margin: 0 0.5rem;
        }

        .tabs li a {
            border-radius: 20px;
            padding: 0.5rem 1.5rem;
            transition: all 0.3s;
            cursor: pointer;
        }

        .tabs li.is-active a {
            background-color: #4a69bd;
            color: white;
            border-bottom-color: transparent;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        h2, h3 {
            text-align: center;
            color: #333;
        }

        .tab {
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            margin: 0 5px;
        }

        .tab.active {
            background: linear-gradient(to right, #7c3aed, #3b82f6);
            color: white;
        }

        .plan-cards {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .plan-card {
            background-color: white;
            border-radius: 8px;
            padding: 2rem;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            text-align: center;
        }

        .plan-card.featured {
            background-color: #4a69bd;
            color: white;
            transform: scale(1.05);
            border: 2px solid #3b82f6;
        }

        .plan-name {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .plan-description {
            color: #666;
            margin-bottom: 1rem;
        }

        .plan-price {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .plan-price span {
            font-size: 1rem;
            font-weight: normal;
        }

        .plan-features {
            list-style-type: none;
            padding: 0;
            margin-bottom: 1.5rem;
        }

        .plan-features li {
            margin-bottom: 0.5rem;
        }

        .plan-features li::before {
            content: "✓";
            margin-right: 0.5rem;
            color: #4a69bd;
        }

        .plan-card.featured .plan-features li::before {
            color: white;
        }

        .order-btn {
            display: block;
            width: 100%;
            padding: 0.75rem;
            background-color: #4a69bd;
            color: white;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-weight: bold;
        }

        .plan-card.featured .order-btn {
            background-color: white;
            color: #4a69bd;
        }

        .order-btn:hover {
            background-color: #3a5a9d;
        }

        .plan-card.featured .order-btn:hover {
            background-color: #f0f0f0;
        }

        .more-detail {
            text-align: center;
            margin-top: 1rem;
            color: #4a69bd;
            cursor: pointer;
        }

        .plan-card.featured .more-detail {
            color: white;
        }

        .tab-content {
            display: none;
        }

        .tab-content.is-active {
            display: block;
        }

        .features {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .slider-container {
            flex: 1;
            padding-right: 40px;
        }

        .slider {
            width: 100%;
            margin-bottom: 20px;
        }

        .slider-label {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        .slider-value {
            background-color: #e0e7ff;
            color: #3b82f6;
            padding: 2px 8px;
            border-radius: 10px;
            font-weight: bold;
        }

        .price {
            color: #6b7280;
            text-align: right;
            font-size: 0.9em;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        li::before {
            content: "✓";
            color: #10b981;
            margin-right: 10px;
            font-weight: bold;
        }

        .total {
            font-size: 1.5em;
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
        }

        .order-button {
            display: block;
            width: 100%;
            padding: 10px;
            background: linear-gradient(to right, #7c3aed, #3b82f6);
            color: white;
            border: none;
            border-radius: 20px;
            font-size: 1em;
            cursor: pointer;
            margin-top: 20px;
        }

        .order-button:hover {
            background: linear-gradient(to right, #6b2fbd, #2b62f6);
        }

        .disclaimer {
            text-align: center;
            color: #6b7280;
            font-size: 0.8em;
            margin-top: 10px;
        } */
    </style>
</head>

<body>
    <div class="container">
        <h1>Choose Our Cloud Hosting Plan Based on Your Needs</h1>
        <div class="tabs-wrapper">
            <div class="tabs">
                <ul>
                    <li class="is-active" data-tab="tab-1"><a href="javascript:void(0)">Custom Plan</a></li>
                    <li data-tab="tab-2"><a href="javascript:void(0)">Corporate</a></li>
                    <li data-tab="tab-3"><a href="javascript:void(0)">Personal</a></li>
                </ul>
            </div>
        </div>
        <div>
            <h2>Fulfill your needs with our</h2>
            <h3>Cumulonimbus Customized Plan</h3>
        </div>
        <div id="tab-1" class="tab-content is-active">
            <div class="features">
                <div class="slider-container">
                    <div class="slider-label">
                        <span>Storage</span>
                        <span id="storageValue" class="slider-value">120 GB</span>
                    </div>
                    <input type="range" class="slider" min="100" max="512" step="1" id="storage" oninput="updateValue('storage')">
                    <div class="price">$20/mon</div>

                    <div class="slider-label">
                        <span>RAM</span>
                        <span id="ramValue" class="slider-value">4 GB</span>
                    </div>
                    <input type="range" class="slider" min="2" max="128" step="1" id="ram" oninput="updateValue('ram')">
                    <div class="price">$20/mon</div>

                    <div class="slider-label">
                        <span>CPU</span>
                        <span id="cpuValue" class="slider-value">4 Core</span>
                    </div>
                    <input type="range" class="slider" min="2" max="24" step="1" id="cpu" oninput="updateValue('cpu')">
                    <div class="price">$20/mon</div>
                </div>
                <div class="feature-list">
                    <ul>
                        <li>Unlimited Domains</li>
                        <li>Unlimited Bandwidth</li>
                        <li>Unlimited Emails</li>
                        <li>Unlimited Inodes</li>
                    </ul>
                    <div class="total">Total: $60/mon</div>
                    <button class="order-button">Order Now</button>
                    <p class="disclaimer">Price does not include tax</p>
                </div>
            </div>
        </div>
        <div id="tab-2" class="tab-content">
            <div class="plan-cards">
                <div class="plan-card">
                    <div class="plan-name">Strato</div>
                    <div class="plan-description">Ideal for small businesses.</div>
                    <div class="plan-price">$1.99<span>/mon</span></div>
                    <ul class="plan-features">
                        <li>2 GB Storage</li>
                        <li>512 MB RAM</li>
                        <li>0.5 Core</li>
                        <li>Unlimited Bandwidth</li>
                        <li>Add on Domains</li>
                    </ul>
                    <button class="order-btn">Order Now</button>
                    <div class="more-detail">More details</div>
                </div>
                <div class="plan-card featured">
                    <div class="plan-name">Alto</div>
                    <div class="plan-description">Best for growing businesses.</div>
                    <div class="plan-price">$3.99<span>/mon</span></div>
                    <ul class="plan-features">
                        <li>6 GB Storage</li>
                        <li>2 GB RAM</li>
                        <li>1 Core</li>
                        <li>Unlimited Bandwidth</li>
                        <li>Unlimited Domain</li>
                    </ul>
                    <button class="order-btn">Order Now</button>
                    <div class="more-detail">More details</div>
                </div>
                <div class="plan-card">
                    <div class="plan-name">Cirrus</div>
                    <div class="plan-description">For large enterprises.</div>
                    <div class="plan-price">$1.99<span>/mon</span></div>
                    <ul class="plan-features">
                        <li>2 GB Storage</li>
                        <li>512 MB RAM</li>
                        <li>0.5 Core</li>
                        <li>Unlimited Bandwidth</li>
                        <li>Add on Domains</li>
                    </ul>
                    <button class="order-btn">Order Now</button>
                    <div class="more-detail">More details</div>
                </div>
            </div>
        </div>
        <div id="tab-3" class="tab-content">
            <div class="plan-cards">
                <div class="plan-card">
                    <div class="plan-name">Strato Lite</div>
                    <div class="plan-description">Perfect for personal projects.</div>
                    <div class="plan-price">$1.99<span>/mon</span></div>
                    <ul class="plan-features">
                        <li>2GB Storage</li>
                        <li>512 MB RAM</li>
                        <li>0.5 Core</li>
                        <li>Unlimited Bandwidth</li>
                        <li>Add on Domain</li>
                    </ul>
                    <button class="order-btn">Order Now</button>
                    <div class="more-detail">More details</div>
                </div>
                <div class="plan-card featured">
                    <div class="plan-name">Alto Lite</div>
                    <div class="plan-description">For hobbyists and small blogs.</div>
                    <div class="plan-price">$3.99<span>/mon</span></div>
                    <ul class="plan-features">
                        <li>6 GB Storage</li>
                        <li>2GB RAM</li>
                        <li>1 Core</li>
                        <li>Unlimited Bandwidth</li>
                        <li>Unlimited Domains</li>
                    </ul>
                    <button class="order-btn">Order Now</button>
                    <div class="more-detail">More details</div>
                </div>
                <div class="plan-card">
                    <div class="plan-name">Cirrus Lite</div>
                    <div class="plan-description">For advanced users and small businesses.</div>
                    <div class="plan-price">$5.99<span>/mon</span></div>
                    <ul class="plan-features">
                        <li>2 GB Storage</li>
                        <li>512 MB RAM</li>
                        <li>0.5 Core</li>
                        <li>Unlimited Bandwidth</li>
                        <li>Add on Domains</li>
                    </ul>
                    <button class="order-btn">Order Now</button>
                    <div class="more-detail">More details</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let tabs = document.querySelectorAll('.tabs ul li');
            let tabContents = document.querySelectorAll('.tab-content');

            tabs.forEach((tab, index) => {
                tab.addEventListener('click', () => {
                    tabs.forEach((tab) => tab.classList.remove('is-active'));
                    tab.classList.add('is-active');

                    tabContents.forEach((content) => content.classList.remove('is-active'));
                    document.getElementById(tab.getAttribute('data-tab')).classList.add('is-active');
                });
            });
        });

        function updateValue(id) {
            const slider = document.getElementById(id);
            const valueElement = document.getElementById(id + 'Value');
            let value;
            switch (id) {
                case 'storage':
                    value = slider.value + ' GB';
                    valueElement.innerText = value;
                    break;
                case 'ram':
                    value = slider.value + ' GB';
                    valueElement.innerText = value;
                    break;
                case 'cpu':
                    value = slider.value + ' Core';
                    valueElement.innerText = value;
                    break;
                default:
                    break;
            }
            updatePrice();
        }

        function updatePrice() {
            const storagePrice = document.getElementById('storage').value / 10;
            const ramPrice = document.getElementById('ram').value / 2;
            const cpuPrice = document.getElementById('cpu').value / 4;
            const totalPrice = storagePrice + ramPrice + cpuPrice;
            const priceElements = document.querySelectorAll('.price');

            priceElements.forEach((element) => {
                element.innerText = `$${totalPrice.toFixed(2)}/mon`;
            });

            document.querySelector('.total').innerText = `Total: $${totalPrice.toFixed(2)}/mon`;
        }

        updatePrice(); // Initialize with default values
    </script>
</body>

</html>

