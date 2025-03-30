<?= $this->include('layouts/header') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Tiffin Service</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }

        /* Top Image Section */
        .top-image {
    position: relative;
    text-align: center;
    background-color: #f8f9fa;
    padding: 20px;
}

.top-image img {
    width: 100vw; /* पूर्ण विंडोची रुंदी */
    max-width: 100%; /* ओव्हरफ्लो टाळण्यासाठी */
    height: 500px; /* निश्चित उंची */
    object-fit: cover; /* योग्य प्रकारे क्रॉप होण्यासाठी */
    border-radius: 0; /* सरळ कोपरे ठेवण्यासाठी */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    display: block;
}

/* About Us मजकूर मध्यभागी आणण्यासाठी */
.overlay-text {
    position: absolute;
    top: 50%; /* मध्यभागी ठेवण्यासाठी */
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 36px;
    font-weight: bold;
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
}

/* Home / About Us मजकूर खाली ठेवण्यासाठी */
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




        .about {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px;
            background-color: #fff;
        }

        .about-container {
            display: flex;
            max-width: 1200px;
            align-items: center;
            flex-wrap: wrap;
        }

        .about-text {
            flex: 1;
            padding: 20px;
        }

        .about-text h2 {
            color: #ff7f00;
            font-size: 32px;
            font-weight: bold;
        }

        .about-text p {
            font-size: 16px;
            color: #333;
            line-height: 1.8;
        }

        .about-text strong {
            color: #1b5e20;
        }

        .about-image {
            flex: 1;
            text-align: center;
            padding: 20px;
        }

        .about-image img {
            width: 100%;
            max-width: 600px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 768px) {
            .about-container {
                flex-direction: column;
                text-align: center;
            }

            .about-image img {
                max-width: 100%;
            }
        }
        
    </style>
</head>
<body>

    <!-- Top Image Section -->
    <div class="top-image">
    <img src="uploads/about3.jpg" alt="About Us Banner">
    <div class="overlay-text">About Us</div>
    <div class="breadcrumb">
        <a href="http://localhost:8080/">Home</a> / <a href="#">About Us</a>
    </div>
</div>


    <section class="about">
        <div class="about-container">
            <div class="about-text">
                <h2>OUR STORY</h2>
                <p>
                    Green Souls Kitchens proudly has a decade of experience in the Food Industry with a Desire & Drive for excellence in rising slowly with a massive Client-ale. We have a state-of-the-art Kitchen which caters to a wide range of customers.
                </p>
                <p>
                    We provide <strong>online tiffin service</strong> in different areas such as <strong>tiffin service in Kothrud, tiffin service in Aundh, tiffin service in Baner, tiffin service in Bavdhan, tiffin service in Karve Nagar, tiffin service in Warje, tiffin service in Balewadi, tiffin service in Deccan, tiffin service in Swargate, tiffin service in Senapati Bapat Road, tiffin service in Model Colony, tiffin service in Shivaji Nagar, tiffin service in Jangali Maharaj Road, tiffin service in Law College Road, tiffin service in Paud Road, tiffin service in All Peth Areas</strong>, etc.
                </p>
                <p>
                    Our ace Chef with a robust experience & best Culinary Qualification provides meals to match the taste buds healthily without burning a hole in the pocket.
                </p>
                <p>
                    We cater not only to Homes & Offices but also a variety of occasions with our Multi-cuisine options to choose from, which help us serve you better.
                </p>
            </div>
            <div class="about-image">
                <img src="uploads/about.png" alt="Tiffin Service Image">
            </div>
        </div>
    </section>

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
                <li><a href="#" style="color: #007bff; text-decoration: none;">Meal Plans</a></li>
                <li><a href="#" style="color: #007bff; text-decoration: none;">Gallery</a></li>
                <li><a href="#" style="color: #007bff; text-decoration: none;">FAQ</a></li>
                <li><a href="#" style="color: #007bff; text-decoration: none;">Blog</a></li>
                <li><a href="#" style="color: #007bff; text-decoration: none;">Privacy Policy</a></li>
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
    </div>

    <div style="margin-top: 20px; padding-top: 10px; border-top: 1px solid #ddd; font-size: 14px; color: #666;">
        <p>&copy; 2025 All rights reserved. Design and Developed by <a href="#" style="color: #007bff; text-decoration: none; font-weight: bold;">Digidicemedia</a></p>
    </div>
</footer>

</body>
</html>
