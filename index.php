<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiona Lista Nivie | Software Engineering Graduate</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <?php include 'includes/navbar.php'; ?>

    <main>
        <section class="hero" id="home" aria-labelledby="hero-title">
            <canvas id="hero-particle-canvas" class="hero-particle-canvas" aria-hidden="true"></canvas>

            <div class="container hero-layout">
                <div class="hero-content">
                    <p class="hero-kicker">Hello, I am</p>
                    <h1 id="hero-title">Fiona Lista Nivie</h1>
                    <p class="hero-title">Software Engineering Graduate | Software Developer | QA & Web Development</p>
                    <p class="hero-description">
                        I build practical web applications and enjoy solving real-world problems through technology.
                    </p>

                    <div class="hero-actions">
                        <a class="button button-primary" href="index.php#projects">View My Projects</a>
                        <a class="button button-secondary" href="resume/Fiona_Lista_Nivie_CV.pdf" download>Download Resume</a>
                    </div>
                </div>

                <div class="hero-visual" aria-hidden="true">
                    <div class="hero-3d-scene" id="hero-3d-scene">
                        <!-- Central 3D Floating Orb -->
                        <div class="hero-orb-wrapper" data-parallax-speed="0.03">
                            <div class="hero-orb-glow"></div>
                            <div class="hero-orb">
                                <div class="orb-core"></div>
                                <div class="orb-ring orb-ring-1"></div>
                                <div class="orb-ring orb-ring-2"></div>
                                <div class="orb-ring orb-ring-3"></div>
                            </div>
                        </div>

                        <!-- Small Floating Technology Elements -->
                        <div class="hero-float-element float-code" data-parallax-speed="0.08" style="--float-delay: 0s; --float-duration: 6s;">
                            <span>&lt; /&gt;</span>
                        </div>
                        <div class="hero-float-element float-brackets" data-parallax-speed="0.06" style="--float-delay: 1.2s; --float-duration: 7s;">
                            <span>{ }</span>
                        </div>
                        <div class="hero-float-element float-badge badge-php" data-parallax-speed="0.09" style="--float-delay: 0.5s; --float-duration: 6.5s;">
                            <span>PHP</span>
                        </div>
                        <div class="hero-float-element float-badge badge-ai" data-parallax-speed="0.07" style="--float-delay: 2s; --float-duration: 7.5s;">
                            <span>AI</span>
                        </div>
                        <div class="hero-float-element float-badge badge-qa" data-parallax-speed="0.1" style="--float-delay: 1.8s; --float-duration: 5.8s;">
                            <span>QA</span>
                        </div>
                        <div class="hero-float-element float-shape shape-cube" data-parallax-speed="0.05" style="--float-delay: 2.5s; --float-duration: 8s;">
                            <div class="mini-cube">
                                <div class="cube-face front"></div>
                                <div class="cube-face back"></div>
                                <div class="cube-face right"></div>
                                <div class="cube-face left"></div>
                                <div class="cube-face top"></div>
                                <div class="cube-face bottom"></div>
                            </div>
                        </div>
                        <div class="hero-float-element float-shape shape-ring" data-parallax-speed="0.08" style="--float-delay: 1s; --float-duration: 6.2s;"></div>
                        <div class="hero-float-element float-shape shape-dots" data-parallax-speed="0.04" style="--float-delay: 3s; --float-duration: 9s;">
                            <span></span><span></span><span></span>
                        </div>
                    </div>

                    <div class="hero-panel" aria-label="Professional focus areas">
                        <p class="hero-panel-label">Professional focus</p>
                        <ul class="hero-focus-list">
                            <li>Software Development</li>
                            <li>Quality Assurance & Testing</li>
                            <li>Web Development</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="about" id="about" aria-labelledby="about-title">
            <div class="container">
                <div class="about-intro">
                    <div class="about-text">
                        <p class="section-kicker">About Me</p>
                        <h2 id="about-title">Building practical solutions with purpose.</h2>
                        <div class="about-copy">
                            <p>
                                I’m a Software Engineering graduate with hands-on experience in web application development, software testing, debugging, and system implementation.
                            </p>
                            <p>
                                During my industrial training at Jabatan Teknologi Digital dan Inovasi Wilayah Pantai Barat Utara, I worked on a web-based Asset Management System for managing government ICT assets, users, agencies, and administrative workflows.
                            </p>
                            <p>
                                I enjoy understanding how systems work, identifying problems, and building practical solutions. I’m particularly interested in software development, web technologies, and quality assurance, while continuously expanding my knowledge in emerging technologies such as AI.
                            </p>
                        </div>
                    </div>

                    <figure class="about-portrait">
                        <div class="about-slideshow">
                            <img class="slideshow-img active" src="assets/images/fiona-1.jpeg" alt="Portrait of Fiona Lista Nivie">
                            <img class="slideshow-img" src="assets/images/fiona-2.jpeg" alt="Portrait of Fiona Lista Nivie">
                            <img class="slideshow-img" src="assets/images/fiona-3.jpeg" alt="Portrait of Fiona Lista Nivie">
                        </div>
                    </figure>
                </div>

                <div class="career-focus" aria-labelledby="career-focus-title">
                    <div class="career-focus-heading">
                        <p class="section-kicker">Career Focus</p>
                        <h3 id="career-focus-title">Areas where I create value</h3>
                    </div>

                    <div class="focus-cards">
                        <article class="focus-card">
                            <h4>Software Development</h4>
                            <p>Building web applications, implementing features, working with databases, and solving technical problems.</p>
                        </article>

                        <article class="focus-card">
                            <h4>Quality Assurance</h4>
                            <p>Testing software functionality, identifying bugs, validating workflows, and improving system reliability.</p>
                        </article>

                        <article class="focus-card">
                            <h4>Web Development</h4>
                            <p>Developing responsive and practical web-based systems using modern web technologies.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="skills" id="skills" aria-labelledby="skills-title">
            <div class="container">
                <div class="skills-header">
                    <p class="section-kicker">Technical Skills</p>
                    <h2 id="skills-title">Tools for building and improving software.</h2>
                    <p>
                        Technologies and tools I have worked with through academic projects, industrial training, and hands-on development.
                    </p>
                </div>

                <div class="skills-grid">
                    <article class="skill-category">
                        <h3>Programming &amp; Web</h3>
                        <ul class="skill-list">
                            <li class="skill-item">PHP</li>
                            <li class="skill-item">HTML5</li>
                            <li class="skill-item">CSS3</li>
                            <li class="skill-item">JavaScript</li>
                            <li class="skill-item">Kotlin</li>
                            <li class="skill-item">Python</li>
                        </ul>
                    </article>

                    <article class="skill-category">
                        <h3>Database &amp; Development Tools</h3>
                        <ul class="skill-list">
                            <li class="skill-item">MySQL</li>
                            <li class="skill-item">XAMPP</li>
                            <li class="skill-item">Git</li>
                            <li class="skill-item">GitHub</li>
                            <li class="skill-item">VS Code</li>
                            <li class="skill-item">Android Studio</li>
                        </ul>
                    </article>

                    <article class="skill-category">
                        <h3>Software Engineering &amp; QA</h3>
                        <ul class="skill-list">
                            <li class="skill-item">Software Development</li>
                            <li class="skill-item">CRUD Development</li>
                            <li class="skill-item">REST/API Integration</li>
                            <li class="skill-item">Role-Based Access Control (RBAC)</li>
                            <li class="skill-item">Server-Side Validation</li>
                            <li class="skill-item">Functional Testing</li>
                            <li class="skill-item">Debugging</li>
                            <li class="skill-item">User Acceptance Testing (UAT)</li>
                        </ul>
                    </article>

                    <article class="skill-category">
                        <h3>AI &amp; Data</h3>
                        <ul class="skill-list">
                            <li class="skill-item">Pandas</li>
                            <li class="skill-item">Scikit-learn</li>
                            <li class="skill-item">SMOTE</li>
                            <li class="skill-item">Decision Tree</li>
                            <li class="skill-item">Agentic AI</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section class="projects" id="projects" aria-labelledby="projects-title">
            <div class="container">
                <div class="projects-header">
                    <p class="section-kicker">Featured Projects</p>
                    <h2 id="projects-title">Selected work and practical applications.</h2>
                    <p>
                        Selected projects that demonstrate my experience in software development, web systems, testing, and data-driven applications.
                    </p>
                </div>

                <div class="projects-grid">
                    <article class="project-card project-featured">
                        <div class="project-card-content">
                            <p class="project-type">Industrial Training Project</p>
                            <h3 class="project-title">JTDIS Asset Management System</h3>
                            <p class="project-description">
                                A web-based system developed to support the collection and management of government ICT asset data, users, agencies, and administrative workflows.
                            </p>

                            <div class="project-tech" aria-label="Technologies used">
                                <span class="project-tech-item">PHP</span>
                                <span class="project-tech-item">MySQL</span>
                                <span class="project-tech-item">HTML5</span>
                                <span class="project-tech-item">CSS3</span>
                                <span class="project-tech-item">JavaScript</span>
                                <span class="project-tech-item">XAMPP</span>
                            </div>

                            <h4 class="project-features-title">Key contributions</h4>
                            <ul class="project-features">
                                <li>Implemented user and asset management workflows.</li>
                                <li>Developed role-based access control.</li>
                                <li>Implemented server-side validation.</li>
                                <li>Built cascading Wilayah &rarr; Daerah &rarr; Agensi user registration flow.</li>
                                <li>Performed functional testing and debugging.</li>
                                <li>Assisted with QA verification and deployment preparation.</li>
                            </ul>
                        </div>

                        <div class="project-actions">
                            <a class="button button-primary" href="projects/jdtis.php">View Case Study</a>
                            <a class="button button-secondary" href="https://github.com/fionalistabi22-cloud" target="_blank" rel="noopener noreferrer">View on GitHub</a>
                        </div>
                    </article>

                    <article class="project-card">
                        <div class="project-card-content">
                            <p class="project-type">Final Year Project</p>
                            <h3 class="project-title">Hidden Paradise Papar Management System</h3>
                            <p class="project-description">
                                A web-based management system designed to support booking, activities, events, gallery, feedback, promotions, and information management for a rural resort and event space.
                            </p>

                            <div class="project-tech" aria-label="Technologies used">
                                <span class="project-tech-item">PHP</span>
                                <span class="project-tech-item">MySQL</span>
                                <span class="project-tech-item">HTML5</span>
                                <span class="project-tech-item">CSS3</span>
                                <span class="project-tech-item">JavaScript</span>
                                <span class="project-tech-item">XAMPP</span>
                            </div>

                            <h4 class="project-features-title">Key features</h4>
                            <ul class="project-features">
                                <li>Customer booking</li>
                                <li>Activity management</li>
                                <li>Event management</li>
                                <li>Gallery</li>
                                <li>Feedback</li>
                                <li>Promotion management</li>
                                <li>Resort information</li>
                                <li>Admin management</li>
                            </ul>
                        </div>

                        <div class="project-actions">
                            <a class="button button-primary" href="projects/hidden-paradise.php">View Case Study</a>
                        </div>
                    </article>


                </div>
            </div>
        </section>

        <section class="experience" id="experience" aria-labelledby="experience-title">
            <div class="container">
                <div class="experience-header">
                    <p class="section-kicker">Experience</p>
                    <h2 id="experience-title">Hands-on experience in software development, system implementation, testing, and technical support.</h2>
                </div>

                <article class="experience-item">
                    <div class="experience-meta">
                        <div>
                            <p class="experience-type">Industrial Training</p>
                            <h3>Software Developer Intern</h3>
                            <p class="experience-company">Jabatan Teknologi Digital dan Inovasi Wilayah Pantai Barat Utara (JTDIS WPBU)</p>
                        </div>
                        <div class="experience-details">
                            <p>Kota Marudu, Sabah</p>
                            <p class="experience-duration">March 2026 &ndash; August 2026</p>
                        </div>
                    </div>

                    <p class="experience-description">
                        During my industrial training at JTDIS WPBU, I gained hands-on experience in web application development, system implementation, functional testing, debugging, and technical activities within a government organization.
                    </p>

                    <div class="experience-content">
                        <div class="experience-responsibilities">
                            <h4>Key Responsibilities</h4>
                            <div class="experience-responsibility-grid">
                                <article class="experience-responsibility">
                                    <h5>Web Application Development</h5>
                                    <ul>
                                        <li>Worked on the development and improvement of the JTDIS Asset Management System.</li>
                                        <li>Implemented and refined system functionality based on project requirements.</li>
                                    </ul>
                                </article>
                                <article class="experience-responsibility">
                                    <h5>User Management &amp; Access Control</h5>
                                    <ul>
                                        <li>Developed user registration workflows.</li>
                                        <li>Implemented cascading Wilayah &rarr; Daerah &rarr; Agensi selection.</li>
                                        <li>Worked with role-based access control.</li>
                                    </ul>
                                </article>
                                <article class="experience-responsibility">
                                    <h5>Validation &amp; Data Handling</h5>
                                    <ul>
                                        <li>Implemented server-side validation.</li>
                                        <li>Worked with PHP and MySQL for system functionality and data handling.</li>
                                    </ul>
                                </article>
                                <article class="experience-responsibility">
                                    <h5>Testing &amp; Debugging</h5>
                                    <ul>
                                        <li>Performed functional testing.</li>
                                        <li>Identified and debugged system issues.</li>
                                        <li>Verified workflows and fixes.</li>
                                        <li>Assisted with QA verification before release preparation.</li>
                                    </ul>
                                </article>
                                <article class="experience-responsibility">
                                    <h5>Website / Technical Support</h5>
                                    <ul>
                                        <li>Assisted with updates to the JTDIS WPBU website.</li>
                                        <li>Participated in technical activities and organizational workshops.</li>
                                    </ul>
                                </article>
                                <article class="experience-responsibility">
                                    <h5>SPDE Workshop</h5>
                                    <ul>
                                        <li>Assisted during the Sistem Pengurusan Dokumen Elektronik (SPDE) workshop.</li>
                                        <li>Supported participants during the technical session.</li>
                                    </ul>
                                </article>
                            </div>
                        </div>

                        <aside class="experience-side">
                            <div class="experience-highlight">
                                <p class="experience-highlight-label">Experience Highlight</p>
                                <h4>Software Development + Quality Assurance</h4>
                                <p>Built practical experience across the development lifecycle, from implementing system functionality to testing, debugging, and verification.</p>
                            </div>

                            <div class="experience-skills">
                                <h4>Skills Developed</h4>
                                <div class="experience-skill-list">
                                    <span class="experience-skill">PHP</span>
                                    <span class="experience-skill">MySQL</span>
                                    <span class="experience-skill">HTML5</span>
                                    <span class="experience-skill">CSS3</span>
                                    <span class="experience-skill">JavaScript</span>
                                    <span class="experience-skill">Role-Based Access Control</span>
                                    <span class="experience-skill">Server-Side Validation</span>
                                    <span class="experience-skill">Functional Testing</span>
                                    <span class="experience-skill">Debugging</span>
                                    <span class="experience-skill">Quality Assurance</span>
                                    <span class="experience-skill">Problem Solving</span>
                                    <span class="experience-skill">Technical Support</span>
                                </div>
                            </div>
                        </aside>
                    </div>
                </article>
            </div>
        </section>

        <section class="education" id="education" aria-labelledby="education-title">
            <div class="container">
                <div class="education-header">
                    <p class="section-kicker">Education</p>
                    <h2 id="education-title">Academic background in Computer Science and Software Engineering.</h2>
                </div>

                <article class="education-card">
                    <div class="education-card-header">
                        <div>
                            <p class="education-type">Undergraduate Degree</p>
                            <h3 class="education-degree">Bachelor of Computer Science (Software Engineering) with Honours</h3>
                            <p class="education-institution">Universiti Malaysia Sabah (UMS)</p>
                        </div>
                        <div class="education-meta">
                            <p>Sabah, Malaysia</p>
                            <p class="education-status">Expected Graduation: 2026</p>
                        </div>
                    </div>

                    <div class="education-details">
                        <div>
                            <span>Programme</span>
                            <strong>Bachelor of Computer Science (Software Engineering) with Honours</strong>
                        </div>
                        <div>
                            <span>Institution</span>
                            <strong>Universiti Malaysia Sabah</strong>
                        </div>
                        <div>
                            <span>Expected Graduation</span>
                            <strong>2026</strong>
                        </div>
                        <div>
                            <span>CGPA:</span>
                            <strong>3.33</strong>
                        </div>
                    </div>

                    <div class="education-content">
                        <div class="education-focus">
                            <h4>Academic Focus</h4>
                            <div class="education-focus-list">
                                <span class="education-focus-item">Software Engineering</span>
                                <span class="education-focus-item">Web Application Development</span>
                                <span class="education-focus-item">Database Systems</span>
                                <span class="education-focus-item">Software Testing</span>
                                <span class="education-focus-item">Object-Oriented Programming</span>
                                <span class="education-focus-item">Mobile Application Development</span>
                                <span class="education-focus-item">Machine Learning</span>
                                <span class="education-focus-item">System Analysis &amp; Design</span>
                            </div>
                        </div>

                        <div class="education-projects">
                            <h4>Relevant Academic Projects</h4>
                            <div class="education-project-grid">
                                <article class="education-project-card">
                                    <h5>Hidden Paradise Papar Resort Management System</h5>
                                    <p class="education-project-type">Final Year Project</p>
                                    <p>PHP, MySQL, HTML5, CSS3, JavaScript, XAMPP</p>
                                </article>

                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="certifications" id="certifications" aria-labelledby="certifications-title">
            <div class="container">
                <div class="certifications-header">
                    <p class="section-kicker">Certifications</p>
                    <h2 id="certifications-title">Additional training and professional development that complement my software engineering background.</h2>
                </div>

                <article class="certification-card">
                    <div class="certification-card-header">
                        <div>
                            <p class="certification-type">Certificate of Achievement</p>
                            <h3 class="certification-title">Professional Agentic AI Engineering</h3>
                            <p class="certification-provider">Nexperts Academy</p>
                        </div>
                        <div class="certification-date">
                            <span>Training Period</span>
                            <strong>03 August 2026 &ndash; 21 August 2026</strong>
                        </div>
                    </div>

                    <div class="certification-content">
                        <p class="certification-description">
                            Completed training in Professional Agentic AI Engineering, providing additional exposure to emerging AI concepts and agentic AI engineering practices.
                        </p>

                        <div class="certification-focus">
                            <h4>Training Focus</h4>
                            <div class="certification-focus-list">
                                <span class="certification-focus-item">Agentic AI</span>
                                <span class="certification-focus-item">AI Engineering</span>
                                <span class="certification-focus-item">Emerging AI Technologies</span>
                                <span class="certification-focus-item">Practical AI Development</span>
                            </div>
                        </div>
                    </div>

                    <figure class="certification-preview">
                        <img src="assets/images/image-1789716759755.png" alt="Certificate of Achievement for Professional Agentic AI Engineering awarded to Fiona Lista Nivie">
                        <figcaption>Certificate of Achievement, Nexperts Academy</figcaption>
                    </figure>
                </article>
            </div>
        </section>

        <section class="contact" id="contact" aria-labelledby="contact-title">
            <div class="container contact-content">
                <div class="contact-header">
                    <p class="section-kicker">Contact</p>
                    <h2 id="contact-title">Let&rsquo;s Connect</h2>
                    <p>I&rsquo;m open to opportunities in software development, web development, and quality assurance.</p>
                    <p class="contact-message">Interested in working together or learning more about my projects? Feel free to reach out.</p>
                    <div class="contact-actions">
                        <a class="button button-primary contact-button" href="mailto:listafiona@gmail.com">Email Me</a>
                        <a class="button button-secondary contact-button" href="https://www.linkedin.com/in/fiona-lista-nivie-2530ba254" target="_blank" rel="noopener noreferrer">LinkedIn</a>
                        <a class="button button-secondary contact-button" href="https://github.com/fionalistabi22-cloud" target="_blank" rel="noopener noreferrer">GitHub</a>
                    </div>
                </div>

                <div class="contact-info" aria-label="Contact information">
                    <a class="contact-item" href="mailto:listafiona@gmail.com">
                        <span class="contact-item-symbol" aria-hidden="true">@</span>
                        <span>
                            <span class="contact-item-title">Email</span>
                            <span class="contact-item-link">listafiona@gmail.com</span>
                        </span>
                    </a>
                    <a class="contact-item" href="https://www.linkedin.com/in/fiona-lista-nivie-2530ba254" target="_blank" rel="noopener noreferrer">
                        <span class="contact-item-symbol" aria-hidden="true">in</span>
                        <span>
                            <span class="contact-item-title">LinkedIn</span>
                            <span class="contact-item-link">Connect on LinkedIn</span>
                        </span>
                    </a>
                    <a class="contact-item" href="https://github.com/fionalistabi22-cloud" target="_blank" rel="noopener noreferrer">
                        <span class="contact-item-symbol" aria-hidden="true">&lt;/&gt;</span>
                        <span>
                            <span class="contact-item-title">GitHub</span>
                            <span class="contact-item-link">View GitHub profile</span>
                        </span>
                    </a>
                    <div class="contact-item">
                        <span class="contact-item-symbol" aria-hidden="true">+</span>
                        <span>
                            <span class="contact-item-title">Location</span>
                            <span class="contact-item-link">Kota Marudu, Sabah, Malaysia</span>
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container footer-content">
            <div class="footer-info">
                <p class="footer-name">Fiona Lista Nivie</p>
                <p>&copy; 2026 Fiona Lista Nivie. All rights reserved.</p>
                <p>Software Engineering | Software Development | QA | Web Development</p>
            </div>

            <div class="footer-links-group">
                <nav class="footer-nav" aria-label="Footer navigation">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#skills">Skills</a>
                    <a href="#projects">Projects</a>
                    <a href="#experience">Experience</a>
                    <a href="#education">Education</a>
                    <a href="#certifications">Certifications</a>
                    <a href="#contact">Contact</a>
                </nav>
                <div class="footer-social">
                    <a href="https://github.com/fionalistabi22-cloud" target="_blank" rel="noopener noreferrer">GitHub</a>
                    <a href="https://www.linkedin.com/in/fiona-lista-nivie-2530ba254" target="_blank" rel="noopener noreferrer">LinkedIn</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>