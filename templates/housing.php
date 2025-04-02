<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>International Student Hub</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script src="jquery-validation-1.19.3/lib/jquery.js"></script>
    <script src="jquery-validation-1.19.3/dist/jquery.validate.js"></script>

    <script>
        /*
        $(function() {
            $("#housingForm").validate({
                rules: {
                    address: {
                        required: true,
                        minlength: 10 
                    },
                    type: {
                        required: true 
                    },
                    area: {
                        required: true,
                        number: true,
                        min: 1 
                    },
                    price: {
                        required: true,
                        number: true,
                        min: 1 
                    },
                    email: {
                        required: true,
                        email: true 
                    }
                },
                messages: {
                    address: {
                        required: "Please provide an address",
                        minlength: "Address must be at least 10 characters long"
                    },
                    type: {
                        required: "Please select a type"
                    },
                    area: {
                        required: "Please provide the area",
                        number: "Area must be a number",
                        min: "Area must be at least 1"
                    },
                    price: {
                        required: "Please provide the price",
                        number: "Price must be a number",
                        min: "Price must be at least 1"
                    },
                    email: {
                        required: "Please provide an email address",
                        email: "Please enter a valid email address"
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
        */
    </script> 
 

    <style>
        /* error message*/
        label.error { 
            color: red; 
            font-size: 14px; 
            margin-top: 5px; 
        }
        .server-side-error {
            display: block;
            color:blue;
        }


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f5f5f5;
        }
        
        /* ===== ANIMATIONS ===== */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideUp {
            from { 
                opacity: 0;
                transform: translateY(20px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        
        header {
            background: #2c3e50;
            color: white;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            animation: fadeIn 1s ease-out;
        }
        
        header h1 {
            margin-bottom: 1rem;
            font-size: 2rem;
        }
        
        header h1 i {
            margin-right: 10px;
            color: #e74c3c;
        }
        
      
        nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
            flex-wrap: wrap;
        }
        
        nav li {
            margin: 0 15px;
        }
        
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 5px 0;
            transition: all 0.3s ease;
        }
        
        nav a:hover {
            color: #e74c3c;
        }
        
        .hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                        url('https://images.unsplash.com/photo-1541178735493-479c1a27ed24?ixlib=rb-1.2.1&auto=format&fit=crop&w=1800&q=80') center/cover;
            height: 70vh;
            min-height: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            padding: 0 20px;
        }
        
        .hero-content {
            animation: slideUp 1s ease-out;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        }
        
        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }
        
        .button {
            display: inline-block;
            background: #e74c3c;
            color: white;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }
        
        .button:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        
        
        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 3rem 2rem;
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            padding: 2rem;
            width: 350px;
            text-align: center;
            transition: all 0.3s ease;
            animation: fadeIn 1s ease-out;
            animation-fill-mode: both;
        }
        
        .card:nth-child(1) { animation-delay: 0.3s; }
        .card:nth-child(2) { animation-delay: 0.6s; }
        .card:nth-child(3) { animation-delay: 0.9s; }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .card-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: #2c3e50;
        }
        
        .card h3 {
            color: #2c3e50;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }
        
        .card p {
            color: #666;
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }
        
      
        footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 2rem;
            animation: fadeIn 1s ease-out;
        }
        
        .social-icons {
            margin: 1.5rem 0;
        }
        
        .social-icons a {
            color: white;
            margin: 0 15px;
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            color: #e74c3c;
            transform: translateY(-3px);
        }
        
        .attribution {
            margin-top: 1.5rem;
            font-size: 0.9rem;
            color: rgba(255,255,255,0.7);
        }
        
        .attribution a {
            color: #e74c3c;
            text-decoration: none;
        }
        
      
        @media (max-width: 768px) {
            .hero {
                height: 60vh;
                min-height: 400px;
            }
            
            .hero h2 {
                font-size: 2rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            nav ul {
                flex-direction: column;
                align-items: center;
            }
            
            nav li {
                margin: 5px 0;
            }
            
            .card {
                width: 100%;
                max-width: 350px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1><i class="fas fa-globe-americas"></i> StudentHub</h1>
        <nav>
            <ul>
                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#"><i class="fas fa-bed"></i> Housing</a></li>
                <li><a href="#"><i class="fas fa-briefcase"></i> Jobs</a></li>
                <li><a href="#"><i class="fas fa-calendar-alt"></i> Events</a></li>
                <li><a href="#"><i class="fas fa-envelope"></i> Contact</a></li>
            </ul>
        </nav>
    </header>

    <section >
    <?php
      the_posts();
     ?>
  </body>
    </section>


    <section class="form">
        <form id="housingForm" action="housing_page.php" method="post">
            <label>
                Address :
                <input type="text" name="address" placeholder="please input address">
                <?php  the_error_message('address');  ?>
            </label>
            <label>
                Type :
                <select name="type">
                    <option value="apartment">Apartment</option>
                    <option value=">villa">Villa</option>
                    <option value="single room">Single room</option>
                </select>
            </label>
            <label>
                Area(m*2) :
                <input type="number" name="area">
                <?php  the_error_message('area');  ?>
            </label>
            <label>
                Price per month :
                <input type="number" name="price">
                <?php  the_error_message('price');  ?>
            </label>
            <label>
                Email :
                <input type="email" name="email">
                <?php  the_error_message('email');  ?>
            </label>
            <button type="submit" name="button">Post</button>
        </form>
    </section>
    


    <footer>
        <p>© 2025 International Student Hub. All rights reserved.</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
        <div class="attribution">
            <p>Hero image: "Students on campus" by <a href="https://unsplash.com/@javotrueba" target="_blank">Javier Trueba</a> on <a href="https://unsplash.com/photos/students-walking-on-campus-MRZlbxZ0KPQ" target="_blank">Unsplash</a></p>
            <p>Icons by <a href="https://fontawesome.com/" target="_blank">Font Awesome</a></p>
        </div>
    </footer>
</body>
</html>
