<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Online Room Rental Services</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-color: #f4f4f4;
        }

        header {
            width: 100%;
            background: #4CAF50;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        header .logo h1 {
            margin: 0;
        }

        header nav ul {
            list-style: none;
            display: flex;
            gap: 15px;
        }

        header nav ul li {
            display: inline;
        }

        header nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        header nav ul li a:hover {
            text-decoration: underline;
        }

        .card {
            width: 100%;
            max-width: 800px;
            margin: 20px 0;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .card img {
            width: 100%;
            height: auto;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .team-members {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .team-member {
            flex: 1;
            min-width: 200px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        form label {
            text-align: left;
            margin-bottom: 5px;
        }

        form input,
        form textarea,
        form button {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        form button {
            background: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        form button:hover {
            background: #45a049;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            width: 100%;
            background: #333;
            color: white;
            padding: 10px;
        }

        @media (max-width: 600px) {
            header nav ul {
                flex-direction: column;
            }

            .team-members {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1>अब कोठा खोजौ <span>निर्धारक्क</span><br> संग!</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#mission">Our Mission</a></li>
                <li><a href="#team">Our Team</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="mission">
        <div class="card">
            <h2>Our Mission</h2>
            <p>अब कोठा खोजौ <span>निर्धारक्क</span> संग!, our mission is to simplify the process of finding and renting rooms. We strive to connect people with the best rental options that fit their needs and budget. Our platform offers a seamless experience, from browsing listings to finalizing rental agreements.</p>
        </div>
    </section>
    
    <section id="team">
        <h2> Meet Our Team</h2>
        <div class="team-members">
            <div class="card team-member">
                <img src="https://media.licdn.com/dms/image/D4D22AQEkorIzEx02yw/feedshare-shrink_800/0/1705202013561?e=1725494400&v=beta&t=QEaF_7JJCqpoykEZXSvP0CPInLqOisVZrBZRihybbS8" alt="Pawan Panthi">
                <h3>Pawan Panthi</h3>
                <p>CEO & Founder</p>
            </div>
            <div class="card team-member">
                <img src="https://media.licdn.com/dms/image/D5603AQEFvimd5x6HYQ/profile-displayphoto-shrink_200_200/0/1690042591538?e=1728518400&v=beta&t=S9ZZQMzlzu5aceNiJjuO4ptUQ4P8gN_FDS38fLkB1TA" alt="Surya Pokheral">
                <h3>Surya Pokheral</h3>
                <p>CTO&Founder</p>
            </div>
            <div class="card team-member">
                <img src="ravi.jpg" alt="Ravi Thakur">
                <h3>Ravi Thakur</h3>
                <p>COO</p>
            </div>
        </div>
    </section>
    
    <section id="contact">
        <div class="card">
            <h2>Contact Us</h2>
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>
    
    <footer>
        <p>&copy; 2024 अब कोठा खोजौ <span>निर्धारक्क</span> संग!. All rights reserved.</p>
    </footer>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Add any JavaScript you need for interactivity here
            // For example, smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>
</html>
