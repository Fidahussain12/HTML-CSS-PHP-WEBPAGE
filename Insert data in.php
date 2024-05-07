<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
    /* Nav bar css */
    /* Base styles for the navigation */
    nav {
        background: #333;
        padding: 10px;
        text-align: center;
    }

    nav a {
        color: #fff;
        text-decoration: none;
        padding: 15px 20px;
        display: inline-block;
        position: relative;
        transition: color 0.3s;
    }

    /* Hover effect for links */
    nav a:hover {
        color: #3498db;
    }

    /* Adding pseudo-elements for the hover effect */
    nav a::before,
    nav a::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 2px;
        background: #3498db;
        transition: transform 0.3s;
        transform: scaleX(0);
    }

    nav a::before {
        top: 0;
        left: 0;
        transform-origin: left;
    }

    nav a::after {
        bottom: 0;
        right: 0;
        transform-origin: right;
    }

    /* Transforming pseudo-elements on hover */
    nav a:hover::before,
    nav a:hover::after {
        transform: scaleX(1);
    }

    /* Responsive adjustments */
    @media (max-width: 600px) {
        nav a {
            padding: 10px 15px;
        }
    }
    /* end nav bar */

    /* h1 start css */
    .my-creative-design {
        background: linear-gradient(45deg, rgba(255, 204, 0, 0.8), rgba(255, 102, 153, 0.8)),
            url('path-to-your-background-image.jpg');
        background-blend-mode: multiply;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        color: #ffffff;
        font-family: 'Comic Sans MS', cursive, sans-serif;
        text-transform: uppercase;
        text-shadow: 2px 2px 4px #000000;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 200px;
        overflow: hidden;
        position: relative;
    }

    .my-creative-design::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, transparent, rgba(0, 0, 0, 0.5), transparent);
        transform: rotate(45deg);
    }

    .my-creative-design h1 {
        font-size: 48px;
        z-index: 1;
    }

    /* h1 end css */

    /* p css */
    p.creative-paragraph {
        background: linear-gradient(120deg, #a1c4fd 0%, #000 100%);
        color: transparent;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 20px;
        font-weight: bold;
        text-align: justify;
        line-height: 1.6;
        border-left: 6px solid #a1c4fd;
        padding-left: 14px;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease-in-out;
    }

    p.creative-paragraph:hover {
        transform: scale(1.05);
        border-left: 6px solid #c2e9fb;
    }

    /* p css end */

    /* lable css */
    label {
        display: inline-block;
        background-image: linear-gradient(60deg, #abecd6 0%, #fbed96 100%);
        color: #fff;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: 600;
        border: none;
        border-radius: 30px;
        box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.25);
        text-transform: uppercase;
        transition: all 0.10s ease;
        cursor: pointer;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
        margin-left: 100px;
    }

    label:hover {
        box-shadow: 0 15px 25px -5px rgba(0, 0, 0, 0.3);
        transform:   skewY(1.05);
    }

    /* label css end */
    /* button css */
    .pro-button {
        padding: 15px 30px;
        font-size: 18px;
        font-weight: 600;
        color: #ffffff;
        background-image: linear-gradient(to right, #ff5f6d, #ffc371);
        border: none;
        border-radius: 50px;
        cursor: pointer;
        outline: none;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        margin-left: 670px;
        margin-bottom: 30px;
    }
    .pro-button:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
    }
    /* Footer CSS */
    .creative-footer {
        background-color: #333;
        color: #fff;
        padding: 20px 0;
        font-family: 'Arial', sans-serif;
    }
    .footer-content {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }
    .footer-section {
        margin-bottom: 20px;
    }
    .footer-section h2 {
        font-size: 18px;
        margin-bottom: 10px;
    }
    .footer-section p,
    .footer-section ul,
    .footer-section .social-links {
        font-size: 14px;
        list-style: none;
        padding: 0;
    }
    .footer-section ul li a,
    .footer-section .social-links a {
        color: #fff;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    .footer-section ul li a:hover,
    .footer-section .social-links a:hover {
        color: #ffcc00;
    }
    .footer-bottom {
        text-align: center;
        font-size: 14px;
        margin-top: 20px;
    }
    @media (max-width: 768px) {
        .footer-content {
            flex-direction: column;
            align-items: center;
        }

        .footer-section {
            width: 100%;
            text-align: center;
        }
    }
    </style>

    <!-- HTML START -->
    <nav>
        <a href="">Home <span></span></a>
        <a href="">Services <span></span></a>
        <a href="">AboutUs <span></span></a>
        <a href="">Contact <span></span></a>
        <a href="">Help <span></span></a>
    </nav>
    <!-- HTML END -->
    <!-- PHP START -->
    <?php
    $employee = array("Name" => "Hussain", "Designation" => "Software Engineer", "Phone" => "+923133349759", "Email" => "Hussain@gmail.com", "Address" => "Star gate", "Workplace" => "IBEX");
    ?>
    <h1 class="my-creative-design"><?php echo $employee['Name']; ?></h1>
    <label class="creative-label" for="">Email</label>
    <p class="creative-paragraph"><?php echo $employee['Email']; ?></p>
    <label class="creative-label" for=""></label>
    <p class="creative-paragraph"><?php echo $employee['Phone']; ?></p>
    <label class="creative-label" for="">Phone-Number</label>
    <p class="creative-paragraph"><?php echo $employee['Designation']; ?></p>
    <label class="creative-label" for="">Designation</label>
    <p class="creative-paragraph"><?php echo $employee['Address']; ?></p>
    <label class="creative-label" for="">Address</label>
    <p class="creative-paragraph"><?php echo $employee['Workplace']; ?></p>
    <label class="creative-label" for="">Workplace</label>
    <br>
    <br>
    <br>
    <br>
    <button class="pro-button">Click me</button>

    <!-- PHP END -->
    <footer class="creative-footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h2>About Us</h2>
                <p>We are a team dedicated to providing the best services in our industry. Connect with us to learn
                    more.</p>
            </div>
            <div class="footer-section links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section social">
                <h2>Follow Us</h2>
                <div class="social-links">
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                </div>
            </div>
            <div class="footer-section contact">
                <h2>Contact Us</h2>
                <p>Email: fidahussain26799@Gmail.com</p>
                <p>Phone: +123 456 7890</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2024 Your Company Name. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>