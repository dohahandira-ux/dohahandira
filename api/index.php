<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Your Name — Software Developer Portfolio</title>
<meta name="description" content="Portfolio of [YOUR NAME] — software developer, UML exercises and projects.">

<!-- ============================================================
     REPLACE: page title above and meta description with your own
     ============================================================ -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/style.css">
</head>
<body>

<!-- Skip link for keyboard / screen-reader users -->
<a class="skip-link" href="#main">Skip to content</a>

<!-- =========================== NAVIGATION =========================== -->
<header class="site-header">
  <nav class="navbar" aria-label="Main navigation">
    <a href="#home" class="nav-logo">
      <!-- REPLACE: initials / short logo mark -->
      <span class="nav-logo-mark">DH</span>
      <span class="nav-logo-text">Doha EL Handira</span>
    </a>

    <button class="nav-toggle" id="navToggle" aria-expanded="false" aria-controls="navMenu" aria-label="Toggle navigation menu">
      <span></span><span></span><span></span>
    </button>

    <ul class="nav-menu" id="navMenu">
      <li><a href="#home" class="nav-link">Home</a></li>
      <li><a href="#about" class="nav-link">About Me</a></li>
      <li><a href="#skills" class="nav-link">Skills</a></li>
      <li><a href="#uml" class="nav-link">UML Exercises</a></li>
      <li><a href="#projects" class="nav-link">Projects</a></li>
      <li><a href="#contact" class="nav-link">Contact</a></li>
    </ul>
  </nav>
</header>

<main id="main">

  <!-- =========================== HERO =========================== -->
  <section id="home" class="hero">
    <div class="hero-grid" aria-hidden="true"></div>
    <div class="hero-inner container">
      <p class="hero-kicker">Software Developer &amp; CS Student</p>
      <!-- REPLACE: your name -->
      <h1 class="hero-name">Your Name</h1>
      <!-- REPLACE: short introduction, 1-2 sentences -->
      <p class="hero-intro">
        I design and build software systems, and document how they're structured
        before I write a line of code. This is a running log of my UML modelling
        exercises and the projects I've built alongside them.
      </p>
      <div class="hero-actions">
        <a href="#uml" class="btn btn-primary">View My Work</a>
        <!-- REPLACE: your GitHub profile URL -->
        <a href="https://github.com" class="btn btn-secondary" target="_blank" rel="noopener noreferrer">
          <svg class="icon" viewBox="0 0 16 16" aria-hidden="true"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8Z"/></svg>
          <span>GitHub Profile</span>
        </a>
      </div>
    </div>
  </section>

  <!-- =========================== ABOUT =========================== -->
  <section id="about" class="section">
    <div class="container">
      <div class="section-head">
        <h2>About Me</h2>
      </div>
      <div class="about-grid">
        <div class="about-text">
          <!--
            REPLACE: the three paragraphs below with your own bio —
            who you are, what you're studying, and what you're aiming for.
          -->
          <p>
            I'm a student software developer working towards a career building
            reliable, well-structured systems. Most of my coursework centers on
            object-oriented design, and I spend a good part of it translating
            requirements into diagrams before any implementation starts.
          </p>
          <p>
            I'm currently studying computer science, with a focus on software
            engineering practices — design patterns, database modelling, and
            the UML notation used throughout this site's exercise section.
          </p>
          <p>
            Longer term, I want to work on backend systems and developer tools,
            in a team that treats design and documentation as part of the
            engineering process, not an afterthought.
          </p>
        </div>
        <dl class="about-facts">
          <div class="about-fact">
            <dt>Focus</dt>
            <!-- REPLACE -->
            <dd>Object-oriented software design</dd>
          </div>
          <div class="about-fact">
            <dt>Studying</dt>
            <!-- REPLACE -->
            <dd>B.Sc. Computer Science</dd>
          </div>
          <div class="about-fact">
            <dt>Based in</dt>
            <!-- REPLACE -->
            <dd>Your City, Country</dd>
          </div>
          <div class="about-fact">
            <dt>Looking for</dt>
            <!-- REPLACE -->
            <dd>Internships &amp; junior dev roles</dd>
          </div>
        </dl>
      </div>
    </div>
  </section>

  <!-- =========================== SKILLS =========================== -->
  <section id="skills" class="section section-alt">
    <div class="container">
      <div class="section-head">
        <h2>Skills</h2>
      </div>

      <!--
        Skills list — to edit: copy or remove a <li class="skill-badge">
        block. The "data-group" attribute only controls grouping/order,
        it isn't displayed.
      -->
      <ul class="skills-grid">
        <li class="skill-badge" data-group="language">Java</li>
        <li class="skill-badge" data-group="language">Python</li>
        <li class="skill-badge" data-group="web">HTML / CSS</li>
        <li class="skill-badge" data-group="web">JavaScript</li>
        <li class="skill-badge" data-group="data">SQL</li>
        <li class="skill-badge" data-group="tooling">Git &amp; GitHub</li>
        <li class="skill-badge" data-group="design">UML</li>
        <li class="skill-badge" data-group="design">Object-Oriented Programming</li>
        <!-- REPLACE / ADD: more <li class="skill-badge">Skill Name</li> as needed -->
      </ul>
    </div>
  </section>

  <!-- =========================== UML EXERCISES =========================== -->
  <section id="uml" class="section">
    <div class="container">
      <div class="section-head">
        <h2>UML Exercises</h2>
        <p class="section-sub">Modelling exercises from coursework. Each card links to the exercise's write-up and diagram files on GitHub.</p>
      </div>

      <!--
        ===============================================================
        UML EXERCISE CARDS
        To add a new exercise: duplicate one <article class="uml-card">
        block and edit its text + href. The href is the ONLY thing that
        needs to point at the real GitHub location.
        ===============================================================
      -->
      <div class="uml-grid">

        <article class="uml-card">
          <a class="uml-card-link"
             href="https://github.com/YOUR_USERNAME/YOUR_REPOSITORY/tree/main/UML/Exercise-01"
             target="_blank" rel="noopener noreferrer"
             aria-label="View UML Exercise 01: Library Management System on GitHub">

            <div class="uml-card-header">
              <span class="uml-card-index">01</span>
              <span class="uml-card-stereotype">«Simple Diagram»</span>
            </div>

            <div class="uml-card-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="18" height="6" rx="1"/><rect x="3" y="9" width="18" height="6" rx="0"/><rect x="3" y="15" width="18" height="6" rx="1"/></svg>
            </div>

            <div class="uml-card-body">
              <h3>Library Management System</h3>
              <p>Class relationships for book lending: members, loans, and catalogue items.</p>
            </div>

            <div class="uml-card-footer">
              <span><a href="TD UML.mdj"> View Exercise</a></span>
              <span class="uml-card-arrow" aria-hidden="true">→</span>
            </div>
          </a>
        </article>



  

   

      </div>
    </div>
  </section>

  <!-- =========================== PROJECTS =========================== -->
  <section id="projects" class="section section-alt">
    <div class="container">
      <div class="section-head">
        <h2>Projects</h2>
        <p class="section-sub">Other things I've built, from coursework and on my own.</p>
      </div>

 
      <div class="projects-grid">

        <article class="project-card">
          <!-- REPLACE: project preview image -->
          <div class="project-image">
            <img src="https://via.placeholder.com/640x360/171D27/4FA8FF?text=Project+Preview" alt="Preview of Project One" loading="lazy">
          </div>
          <div class="project-body">
            <h3>Project Name One</h3>
            <p>One or two sentences describing what this project does and the problem it solves.</p>
            <ul class="project-tech">
              <li>Java</li>
              <li>MySQL</li>
              <li>HTML</li>
            </ul>
            <div class="project-links">
              <a href="https://github.com/YOUR_USERNAME/PROJECT_ONE" class="btn btn-small" target="_blank" rel="noopener noreferrer">
                <svg class="icon" viewBox="0 0 16 16" aria-hidden="true"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8Z"/></svg>
                Code
              </a>
              <!-- OPTIONAL: remove this link if there's no live demo -->
              <a href="#" class="btn btn-small btn-ghost" target="_blank" rel="noopener noreferrer">Live Demo</a>
            </div>
          </div>
        </article>

        <article class="project-card">
          <!-- REPLACE: project preview image -->
          <div class="project-image">
            <img src="https://via.placeholder.com/640x360/171D27/F2A65A?text=Project+Preview" alt="Preview of Project Two" loading="lazy">
          </div>
          <div class="project-body">
            <h3>Project Name Two</h3>
            <p>One or two sentences describing what this project does and the problem it solves.</p>
            <ul class="project-tech">
              <li>Python</li>
              <li>OOP</li>
              <li>SQL</li>
            </ul>
            <div class="project-links">
              <a href="https://github.com/YOUR_USERNAME/PROJECT_TWO" class="btn btn-small" target="_blank" rel="noopener noreferrer">
                <svg class="icon" viewBox="0 0 16 16" aria-hidden="true"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8Z"/></svg>
                Code
              </a>
            </div>
          </div>
        </article>

        <!-- REPLACE / ADD MORE PROJECT CARDS HERE -->

      </div>
    </div>
  </section>

  <!-- =========================== CONTACT =========================== -->
  <section id="contact" class="section">
    <div class="container">
      <div class="section-head">
        <h2>Contact</h2>
        <p class="section-sub">Feel free to reach out — I'm open to internships, collaboration, or just talking about software design.</p>
      </div>

      <div class="contact-grid">
        <ul class="contact-list">
          <li>
            <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m2 7 10 6 10-6"/></svg>
            <!-- REPLACE: your email -->
            <a href="dohahandira@gmail.com">dohahandira@gmail.com</a>
          </li>
          <li>
            <svg class="icon" viewBox="0 0 16 16" aria-hidden="true"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8Z"/></svg>
            <!-- REPLACE: your GitHub profile URL -->
            <a href="https://github.com" target="_blank" rel="noopener noreferrer">github.com</a>
          </li>
          <li>
            <svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="3"/><path d="M7 10v7M7 7v.01M12 17v-4.5a2.5 2.5 0 0 1 5 0V17M12 10v7"/></svg>
            <!-- REPLACE: your LinkedIn profile URL -->
            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer">linkedin.com</a>
          </li>
        </ul>

        <!--
          OPTIONAL CONTACT FORM
          This form has no backend attached (a static GitHub Pages site
          can't send email by itself). It's wired to open the visitor's
          email client with the message pre-filled via a mailto: link,
          so it works with zero configuration. If you'd rather use a
          form service (e.g. Formspree), replace the <form> action and
          remove the mailto handling in script.js.
        -->
        <form class="contact-form" id="contactForm">
          <div class="form-row">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-row">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-row">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
      </div>
    </div>
  </section>

</main>

<!-- =========================== FOOTER =========================== -->
<footer class="site-footer">
  <div class="container footer-inner">
    <!-- REPLACE: your name -->
    <p>&copy; <span id="year"></span> Your Name.</p>
    <a href="https://github.com/YOUR_USERNAME" target="_blank" rel="noopener noreferrer" class="footer-github">
      <svg class="icon" viewBox="0 0 16 16" aria-hidden="true"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8Z"/></svg>
      <span>GitHub</span>
    </a>
  </div>
</footer>

<script src="script.js"></script>
</body>
</html>
