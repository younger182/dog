<?php
session_start(); // Start the session

// Check if user session is set
$isLoggedIn = isset($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shelter</title>
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li onclick="scrollToHome()">Home</li>
                <li onclick="scrollToAboutus()">About us</li>
                <li><a href="adption.html">Adopt</a></li>
                <li onclick="scrollToGallery()">Gallery</li>
                <li><a href="https://www.facebook.com/animalsinnepal">Pages</a></li>
                <li><a href="../Html file/donation.html">Donation</a></li>
                <li onclick="scrollToContact()">Contact Us</li>
            </ul>

            <!-- Login or User Name with Logout Button -->
            <?php if ($isLoggedIn): ?>
                <div class="user-info">
                    <span>Welcome, <?php echo htmlspecialchars($_SESSION['first_name']); ?>!</span>
                    <button><a href="../php/logout.php" class="fa-solid-fa-user"><i></i>Logout</a></button>
                </div>
            <?php else: ?>
                <button><a href="../Html file/login.php" class="fa-solid-fa-user"><i></i>Login</a></button>
            <?php endif; ?>
        </nav>
    </header>

    <!-- Rest of the page content -->
    <section class="hero" id="home">
        <div class="image">
            <div class="content">
                <div class="text">
                    <h1>Dog Rescue Project</h1>
                    <h2>Adopt Any Dog You Like!</h2>
                </div>
            </div>
        </div>
    </section>



  
  
<br><br>

    <!--main containt or body parts starts from here-->

    <section class="aboutus" id="aboutus">
        <div class="main">
            <div class="main1">
                <h2>About Our Animal Shelter</h2><br>
                <p
                    style="font-size: 16px; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                    An animal shelter is a facility or location dedicated to housing, caring for, and rehabilitating
                    homeless, abandoned, or abused animals, primarily pets like dogs and cats. The primary goal of an
                    animal shelter is to provide temporary refuge for these animals and work towards finding them
                    permanent homes through adoption. Some key aspects of animal shelters include:

                    1. Purpose and Services
                    Rescue and Intake: Shelters take in animals that are stray, lost, abandoned, or surrendered by their
                    owners.
                    Care and Rehabilitation: Animals are provided with food, shelter, medical care, and, in some cases,
                    behavioral rehabilitation.
                    Adoption Services: Shelters work to find suitable, permanent homes for the animals in their care.
                    Spaying/Neutering: Many shelters offer or require spaying and neutering to control the pet
                    population.
                    Education and Advocacy: Some shelters also focus on educating the public about responsible pet
                    ownership and advocating for animal welfare.
                    2. Types of Animal Shelters
                    Municipal Shelters: Government-funded shelters that typically handle large numbers of animals and
                    are often open-admission (accept all animals).
                    Private Shelters: Nonprofit organizations or privately funded shelters that may be selective about
                    the animals they take in, often focusing on specific species or breeds.
                    No-Kill Shelters: These shelters do not euthanize animals for reasons of space or time; they only
                    euthanize for severe medical or behavioral issues.
                    3. Shelter Operations
                    Staffing: Shelters are typically run by a mix of paid staff and volunteers, including veterinarians,
                    animal care technicians, and adoption counselors.
                    Funding: Funding comes from government grants, private donations, adoption fees, and fundraising
                    events.
                    Facilities: The shelter must be equipped with kennels, cages, medical facilities, quarantine areas,
                    and spaces for exercise and socialization.
                    4. Challenges Faced by Shelters
                    Overcrowding: Many shelters struggle with limited space and resources to care for the number of
                    animals they receive.
                    Funding and Resources: Shelters often rely on donations and may face financial challenges.
                </p>
            </div>



            <!-------------------------------------- Google Maps Embed Code -->


            <div class="main2">
                <h2 style="font-style: bold;">Our Location</h2>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3530.6782217765603!2d85.3921607752557!3d27.758069276153442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb172ec0e43591%3A0x92e7b795979e4422!2sShree&#39;s%20Animal%20Rescue!5e0!3m2!1sen!2snp!4v1732543560802!5m2!1sen!2snp" width="400 " height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <br>
        <hr>
        <!--Home to over countless numbers of dog-->

        <div class="home" id="Gallery">
            <div class="homedog">
                <H1> Home to Numbers of Dogs !!!</H1>
            </div>
            <div class="dogcontain">
            </div>
        </div>


                <div class="secound">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQap6qiAxoqKGWgZ68a71w_tSi6nt_6SPNJPQ&s" alt="Image 1">
            <img src="https://english.onlinekhabar.com/wp-content/uploads/2021/08/hart-rescue.jpg" alt="Image 2">
            <img src="https://katcentre-nepal.org/wp-content/uploads/2023/03/IMG_1702.jpeg" alt="Image 3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCN7_IEc8Q3j-l7QVl1QrYq-Bieliacydhng&usqp=CAU" alt="Image 4">
            <img src="https://communitydogwelfarekopan.org/wp-content/uploads/2023/06/Pasang-Community-Dog-Welfare-Centre-Nepal-Dog-Rescue-1.jpg" alt="Image 5">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdbcDCZ1U9UnD1lCoFM7eTpQCOttm0ZkZmnA&s" alt="Image 6">
        </div>
        </div>





    </section>




    <div id="contact" class="section">
        <h2>Contact Information</h2>
        <p>Email: Animaladption@gmail.com</p>
        <p>Phone: +977 9845000001 </p>
        <p>Address: Baneshwor, kathmandu, Nepal</p>
    </div>

    <hr>

  <footer>
        <p>Copyright © 2010-2024 Animal rescue project | All rights reserved</p>
    </footer>
                                    <!--connection to js-->
    <script src="../js/index.js">
        


        
    </script>
</body>

</html>