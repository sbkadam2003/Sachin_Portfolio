<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>My Website</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>S</span>achin <span>K</span>adam</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#projects" data-after="Projects">Projects</a></li>
            <li><a href="#skills" data-after="Skills">Skills</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>My Name is <span></span></h1>
        <h1>Sachin<span></span></h1>
        <a href="#projects" type="button" class="cta">Portfolio</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Recent <span>Projects</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Project 1</h1>
            <h2>Home Automation Control System</h2>
            <p>This system uses the Internet of Things (IoT) to remotely control various aspects of a home.
                • By utilizing the Blynk IoT application, users can manage lighting, regulate temperature, monitor water tank levels, and control garden lights.
                • This Project offers convenience, energy efficiency, and enhanced security for homeowners.
                • Tech Stack: C++, Embedded C, Blynk application
            </p>
          </div>
          <div class="project-img">
            <img src="https://myfbuckets.s3.ap-south-1.amazonaws.com/img/IOT.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 2</h1>
            <h2>Swapify - A Classified E-commerce Website</h2>
            <p>A classified e-commerce website for students and teachers is a platform designed to facilitate buying and selling used and new products within the educational community.
                • By promoting the reuse of items, this website aims to reduce waste and provide a cost-effective solution for students and teachers to acquire or sell textbooks, stationery, electronics, and other educational materials.
                • Feature: Affordable pricing
                • Tech Stack: MERN stack
            </p>
          </div>
          <div class="project-img">
            <img src="https://myfbuckets.s3.ap-south-1.amazonaws.com/img/img-1.png" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- Skills Section -->
<section id="skills">
  <div class="skills container">
      <h1 class="section-title">My <span>Skills</span></h1>
      <div class="skill-category">
          <h2>Programming Languages</h2>
          <ul>
              <li>C</li>
              <li>C#</li>
              <li>C++</li>
              <li>DSA</li>
              <li>OOP</li>
          </ul>
      </div>
      <div class="skill-category">
          <h2>Database</h2>
          <ul>
              <li>MySQL</li>
              <li>MongoDB</li>
          </ul>
      </div>
      <div class="skill-category">
          <h2>Version Control</h2>
          <ul>
              <li>Git</li>
              <li>GitHub</li>
          </ul>
      </div>
      <div class="skill-category">
          <h2>Operating Systems</h2>
          <ul>
              <li>Windows</li>
              <li>Linux</li>
          </ul>
      </div>
      <div class="skill-category">
          <h2>Web Technologies</h2>
          <ul>
              <li>HTML</li>
              <li>CSS</li>
              <li>SQL</li>
              <li>JavaScript</li>
              <li>Web Development</li>
          </ul>
      </div>
      <div class="skill-category">
          <h2>Tools</h2>
          <ul>
              <li>VSCode</li>
              <li>ChatGPT</li>
          </ul>
      </div>
      <div class="skill-category">
          <h2>Soft Skills</h2>
          <ul>
              <li>Team Work</li>
              <li>Problem Solving</li>
              <li>Adaptability</li>
              <li>Quick Learner</li>
          </ul>
      </div>
  </div>
</section>
<!-- End Skills Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="https://myfbuckets.s3.ap-south-1.amazonaws.com/img/my_photo-removebg-preview.png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>Me</span></h1>
        <h2>Associate Software Engineer</h2>
        <p>I am recently been selected as an Assistant Software Engineer at Accenture. With a passion for software development, I look forward to contributing to innovative projects and leveraging my skills in this new role.</p>
        <a href="https://myfbuckets.s3.ap-south-1.amazonaws.com/img/Sachin_Kadam_resume_02.pdf" class="cta">Download Resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>Info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h3>For Contact Please fill the form</h3>
            <a href="#contactt" type="button" class="ctaa">Contact</a>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>sachinbkadam2003@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Near Akurdi Railway station, Pune 411044</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Form -->
  <section id="contactt">
    <h2>Contact Me</h2>
    <form action="submit_form.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Send Message</button>
    </form>
  </section>
  <!-- End Contact Form -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>S</span>achin <span>K</span>adam</h1>
      </div>
      <h2>Dream Big</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.facebook.com/profile.php?id=100051717494609"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://www.linkedin.com/in/sachin-kadam-49a135252/"><img src="https://img.icons8.com/bubbles/100/linkedin.png"/></a>
        </div>
        <div class="social-item">
          <a href="https://www.instagram.com/skadam784/?hl=en"><img src="https://img.icons8.com/bubbles/100/instagram-new--v2.png" /></a>
        </div>
      </div>
      <p>Copyright © <?php echo date('Y'); ?> Sachin. All rights reserved.</p>
    </div>
  </section>
  <!-- End Footer -->

  <script src="./app.js"></script>
</body>

</html>
