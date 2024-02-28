<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <script src="script.js"></script>
</head>

<body>
    <nav>
        <div class="logo">
            <img src="./logo.png" alt="logo">
        </div>

        <div class="whole-list">

            <ul class="navlist">
                <li class="main-li" onclick="loadContent('home')">Home</li>
                <li class="main-li" onclick="loadContent('about')">About Us</li>
                <li class="main-li" onclick="loadContent('products')">Products
                    <div>
                        <ul class="catlist">
                            <li class="sub-li"><a href="">ECG Machines</a></li>
                            <li class="sub-li"><a href="">Difibrilators</a></li>
                            <li class="sub-li"><a href="">ICU Patient Monitors</a></li>
                            <li class="sub-li"><a href="">IBP/NIBP Kits</a></li>
                            <li class="sub-li"><a href="">Syringe Pumps</a></li>
                            <li class="sub-li"><a href="">Pulse Oximeter</a></li>
                        </ul>
                    </div>
                </li>
                <li class="main-li">Services</li>
                <li class="main-li" onclick="scrollToBottom()">Contact Us</li>
            </ul>
        </div>


        <div class="searchbar">
            <input type="text" placeholder="Search...">
            <button>Search</button>
        </div>

    </nav>

</body>

</html>