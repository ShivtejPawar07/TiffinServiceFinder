<?= $this->include('layouts/header') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Tiffin Service</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }

        .top-image {
            position: relative;
            text-align: center;
            background-color: #f8f9fa;
            padding: 20px;
        }

        .top-image img {
            width: 100vw;
            max-width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: block;
        }

        .overlay-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 36px;
            font-weight: bold;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }
        .breadcrumb {
    position: absolute;
    bottom: 200px; /* अंतर कमी करण्यासाठी */
    left: 50%;
    transform: translateX(-50%);
    background: rgba(0, 0, 0, 0.5);
    padding: 5px 10px; /* padding कमी केला */
    border-radius: 3px; /* कोपरे थोडे गुळगुळीत */
}

.breadcrumb a {
    color: white;
    text-decoration: none;
    font-size: 16px; /* टेक्स्ट लहान केला */
}

.breadcrumb a:hover {
    text-decoration: underline;
}

        .contact {
            padding: 50px;
            text-align: center;
        }

        .contact h2 {
            color: #ff7f00;
            font-size: 32px;
            font-weight: bold;
        }

        .contact p {
            font-size: 16px;
            color: #333;
            line-height: 1.8;
        }

        .contact-info {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .info-box {
            background: #d4edda;;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: left;
            width: 300px;
        }

        .info-box h3 {
            color: #333;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .info-box p {
            font-size: 14px;
            color: #666;
        }

        .map-container {
            text-align: center;
            margin: 40px 0;
        }

        iframe {
    width: 80%;
    height: 400px;
    border: 0;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    display: block; /* ब्लॉक लेव्हल करण्यासाठी */
    margin: auto;  /* मध्यभागी ठेवण्यासाठी */
}

        /* .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 14px;
        } */
      
        @media (max-width: 768px) {
            .contact-info {
                flex-direction: column;
                align-items: center;
            }

            iframe {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<div class="top-image">
    <img src="uploads/about3.jpg" alt="About Us Banner">
    <div class="overlay-text">Contact Us</div>
    <div class="breadcrumb">
        <a href="http://localhost:8080/">Home</a> / <a href="#">Contact Us</a>
    </div>
</div>

    <section class="contact">
        <h2>Get in Touch</h2>
        <p>Have questions or need assistance? Reach out to us using the details below.</p>
        <div class="contact-info">      
        <div class="info-box">
    <h3 style="color:red;">📞 Phone</h3>
    <p><a href="tel:+917757949545">+91 7757949545</a></p>
    <p><a href="tel:+918177899851">+91 8177899851</a></p>
</div>

            <div class="info-box">
    <h3 style="color:red;">📧 Email</h3>
    <p><a href="mailto:shivtejpawar8@gmail.com">shivtejpawar8@gmail.com</a></p>
    <p><a href="mailto:satputev308@gmail.com">satputev308@gmail.com</a></p>
</div>

            <div class="info-box" >
            <h3 style="color:red";>📍 Address</h3>
                <p>Green Soul Kitchens Pvt Ltd.<br> Shop No 5 A Wing, Rajashree Apartment,<br> Vitthalwadi Road, Hingne Khurd, Pune 411051</p>
            </div>
        </div>
    </section>

    <div class="map-container">
    <h1 style="color: blue;">Location</h1>

    <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.973525872196!2d74.21148531489448!3d19.567980087808514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcfb4a9a8f8ff1%3A0x6b4f73b8916c8c9a!2sSangamner%2C%20Maharashtra%20422405!5e0!3m2!1sen!2sin!4v1710770123456!5m2!1sen!2sin" 
    width="600" height="450" style="border:2px solid red;" allowfullscreen="" loading="lazy">
</iframe>
    </div>

    <footer style="background-color: #d4edda; padding: 40px 20px; text-align: center; border-top: 1px solid #ddd;">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: space-between; text-align: left;">
        
        <!-- Left Section (Logo & Description) -->
        <div style="flex: 1; min-width: 250px; padding: 10px;">
            <img src="uploads/logo.png" alt="Company Logo" style="height: 60px; margin-bottom: 10px;">
            <p style="color: #333; font-size: 14px;">
                Green Souls Kitchens is the best tiffin service in Pune. 
                We cater not only to Homes & Offices but also a variety of 
                occasions with our multi-cuisine options.
            </p>
        </div>

        <!-- Middle Section (Useful Links) -->
        <div style="flex: 1; min-width: 250px; padding: 10px;">
            <h3 style="color: #333; font-size: 16px; font-weight: bold; margin-bottom: 10px;">USEFUL LINKS</h3>
            <ul style="list-style: none; padding: 0; color: #666; font-size: 14px;">
                <li><a href="#" style="color: #007bff; text-decoration: none;">Home</a></li>
                <li><a href="http://localhost:8080/about" style="color: #007bff; text-decoration: none;">About Us</a></li>
               
                <li><a href="#" style="color: #007bff; text-decoration: none;">Gallery</a></li>
                <li><a href="#" style="color: #007bff; text-decoration: none;">FAQ</a></li>
          
                <li><a href="#" style="color: #007bff; text-decoration: none;">Terms & Conditions</a></li>
                <li><a href="#" style="color: #007bff; text-decoration: none;">Contact Us</a></li>
            </ul>
        </div>

        <!-- Right Section (Contact Info) -->
        <div style="flex: 1; min-width: 250px; padding: 10px;">
            <h3 style="color: #333; font-size: 16px; font-weight: bold; margin-bottom: 10px;">CONTACT US</h3>
            <p style="color: #666; font-size: 14px;"><strong>📞</strong> +91 7757949545</p>
            <p style="color: #666; font-size: 14px;"><strong>📧</strong> shivtejpawar8@gmail.com</p>
            <p style="color: #666; font-size: 14px;">
                <strong>📍</strong> Green Soul Kitchens Pvt Ltd. <br>
                Shop No 5 A Wing, Rajashree Apartment, <br> Vitthalwadi Road, Hingne Khurd, Pune 411051
            </p>
        </div>
        <div>
            <h3 class="text-lg font-bold mb-3">FOLLOW US</h3>
            <ul class="space-y-2">
                <li><a href="#" class="hover:underline">📘 Facebook</a></li>
                <li><a href="#" class="hover:underline">🐦 Twitter</a></li>
                <li><a href="#" class="hover:underline">📸 Instagram</a></li>
                <li><a href="#" class="hover:underline">🔗 LinkedIn</a></li>
            </ul>
        </div>
    </div>
   
    <div style="margin-top: 20px; padding-top: 10px; border-top: 1px solid #ddd; font-size: 14px; color: #666;">
        <p>&copy; 2025 All rights reserved. Design and Developed by <a href="#" style="color: #007bff; text-decoration: none; font-weight: bold;">Digidicemedia</a></p>
    </div>
</footer>

</body>
</html>
