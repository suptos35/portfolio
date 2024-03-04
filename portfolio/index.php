<?php

include "config.php";

$sql = "SELECT * FROM education";

$result = $conn->query($sql);
session_start();

if(isset($_SESSION['loggedin'])){
    $name = "Edit";
    $link = "update-form.php";
}
else{
    $name = "login";
    $link = "login.php";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sowndhar</title>
    <link rel="icon" href="https://i.ibb.co/zRsTj3p/Frame-1-37.png">


    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" class="stylesheet">
</head>

<body>

    <!-------------------------- Header Area -------------------------->
    <header class="header-area">
        <div class="container">
            <div class="header">

                <a href="" class="logo">
                    <img src="files/signature.png" alt="" class="signature">
                    <i class="fa fa-bolt"></i>
                </a>

                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li></li>
                </ul>

                <a href="<?php echo $link; ?>"><button class="btn   active" style="background-color: #a79325; padding: 0.5em; color: #e5e5e5; font-size: large;border: 2px solid #e5e5e5;"><?php echo $name; ?></button></a>

                <div class="menu_icon">
                    <i class="fa fa-bars"></i>
                </div>

            </div>
        </div>
    </header>

    <!-------------------------- Home Page -------------------------->
    <div class="FirstElement" id="home">
        <div class="profile-photo">
            <img src="files/photo.jpg" alt="profile picture">
        </div>
        <div class="profile-text">
            <h5>Hi I'm </h5>
            <h3>Sifat</h3><br><br>
            <p>Welcome to my portfolio website! I'm a passionate and aspiring cse student with a strong desire to create innovative solutions.With a deep love for coding and problem-solving, I am constantly seeking opportunities to learn and grow</p>

            <div class="btn-group">
                <a href="files/cv.pdf" class="btn   active">Download CV</a>
                <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJqSvWwxjhCKmNKLrpksdRJjsZDJxpLvdfpFNShChHRZTDZlSKnRvLgfgTBWdGRrmZFZFSq" class="btn">Contact</a>
            </div>

            <div class="social">
                <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJqSvWwxjhCKmNKLrpksdRJjsZDJxpLvdfpFNShChHRZTDZlSKnRvLgfgTBWdGRrmZFZFSq"><i class="fa fa-envelope"></i></a>
                <a href="https://github.com/suptos35"><i class="fa-brands fa-github"></i></a>
                <a href="https://toph.co/u/suptos"><i class="fa fa-code"></i></a>
                <a href="https://www.linkedin.com/in/sifatul-s-38b298119/"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </div>

    <!-------------------------- About Section -------------------------->
    <section class="about-area" id="about">
        <div class="container">
            <div class="about">

                <div class="about-content">
                    <h4>About Me</h4>
                    <ul>
                        <li>I am currently pursuing my thired year Bachelor's Degree in Computer Science and Engineering in KUET.I am currently building a solid foundation in software and web development.</li>
                        <li> I am undertaking various projects to ackquire skills and experience.I have a strong belief in the value of continuous learning and staying adaptable in the ever-evolving world of software engineering.</li>
                        <li> I actively seek out opportunities to expand my knowledge and skills, embracing new technologies and approaches.Feel free to explore my work and get in touch if you have any questions or opportunities to collaborate. </li>
                    </ul>
                </div>

                <div class="about-skills">
                    <ul>
                        <li>Name:Sifatul Islam</li>
                        <li>Age:22</li>
                        <li>From:Bangladesh</li>
                        <li>Email:sifatuls36@gmail.com</li>
                        <li>Availabiltiy:Part-time</li>
                        <li>Experience&lt;1yr</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-------------- Education & Internship -------------->

    <?php $a = "2021-2025"; ?>
    <section class="education-content" id="education">
        <div class="container">
            <div class="row">
                <div class="education ">
                    <h3 class="title">Education</h3>
                    <div class="row">
                        <div class="timeline-box">
                            <div class="timeline">

                                <?php

                                if ($result->num_rows > 0) {

                                    while ($row = $result->fetch_assoc()) {

                                ?>


                                        <!-- Timeline-item -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-title">
                                                <?php echo $row['degree']; ?>
                                            </h3>
                                            <h4 class="timeline-title"><?php echo $row['institute']; ?></h4>
                                            <h4 class="timeline-title">
                                                <i class="fa fa-calendar"></i> <?php echo $row['year']; ?>
                                            </h4>
                                        </div>



                                <?php       }
                                }

                                ?>

                                <!-- Timeline-item -->
                                <!-- <div class="timeline-item">
                                    <div class="circle-dot"></div>
                                    <h3 class="timeline-title">
                                        BSC in CSE-50%
                                    </h3>
                                    <h4 class="timeline-title">Khulna university of Engineering and Technology</h4>
                                    <h4 class="timeline-title">
                                        <i class="fa fa-calendar"></i> 2021-2025
                                    </h4>
                                </div>  -->
                                <!-- Timeline-item -->
                                <!-- <div class="timeline-item">
                                    <div class="circle-dot"></div>
                                    <h3 class="timeline-title">HSC</h3>
                                    <h4 class="timeline-title">Saidpur GOVT. Technical School & College</h4>
                                    <h4 class="timeline-title">
                                        <i class="fa fa-calendar"></i> 2018-2020
                                    </h4>
                                </div> -->
                                <!-- Timeline-item -->
                                <!-- <div class="timeline-item">
                                    <div class="circle-dot"></div>
                                    <h3 class="timeline-title">
                                        SSC
                                    </h3>
                                    <h4 class="timeline-title"> Saidpur GOVT. Technical School & College</h4>
                                    <h4 class="timeline-title">
                                        <i class="fa fa-calendar"></i> 2017-2018
                                    </h4>
                                </div> -->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="internship">
                    <h3 class="title">Internship</h3>
                    <div class="row">
                        <div class="timeline-box">
                            <div class="timeline">

                                <!-- Timeline-item -->
                                <div class="timeline-item">
                                    <div class="circle-dot"></div>
                                    <h3 class="timeline-title">
                                        TO be added..
                                    </h3>
                                    <h4 class="timeline-title">Unnamed</h4>
                                    <h4 class="timeline-title">
                                        <i class="fa fa-calendar"></i> March-2024
                                    </h4>
                                    <li class="timeline-text">None yet, will be added in the future.
                                    </li>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-------------------------- Projects -------------------------->
    <section class="project-content" id="projects">
        <div class="container">
            <div class="project-title">
                <h4>My Projects</h4>
                <p>Discover my projects.</p>
            </div>
            <div class="projects">
                <!-- 1st Project -->
                <div class="project">
                    <i class="fa fa-coffee"></i>
                    <h4>Mediascraper Using c++</h4>
                    <p>A simple console app that modifies the url of a selection of websites to find information and download option for different types of media</p>
                </div>
                <!-- 2nd Project -->
                <div class="project">
                    <i class="fa fa-car"></i>
                    <h4>Routine</h4>
                    <p>A task management app for android that can schedule tasks and alert users</p>
                </div>
                <!-- 3rd Project -->
                <div class="project">
                    <i class="fa fa-desktop"></i>
                    <h4>Portfolio Website</h4>
                    <p>Created a portfolio website using HTML, CSS, and JavaScript, It serves as a platform to introduce myself, share my projects, and provide information about my education and internship.</p>
                </div>

            </div>
        </div>
    </section>

    <!-------------------------- Contact Me -------------------------->

    <section class="contact-content" id="contact">
        <div class="container">
            <div class="contact-title">
                <h4>Contact Me</h4>
                <p>Get In Touch</p>
            </div>
            <div class="contact">
                <form name="submitToGoogleSheet" action="register.php" method="POST">
                    <input type="text" name="NAME" placeholder="Name" required>
                    <input type="email" name="EMAIL" placeholder="Email" required>
                    <input type="text" name="SUBJECT" placeholder="Subject">
                    <textarea name="MESSAGE" placeholder="Message"></textarea>
                    <input type="submit" value="Send Message" class="submit">
                </form>
                <span id="msg"></span>
            </div>
        </div>
    </section>

    <!-------------------------- JS -------------------------->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="script.js"></script>

    <!-------------------------- Footer section -------------------------->
    <footer class="footer">
        <small class="message">Thanks for visiting!</small>
    </footer>

</body>

</html>