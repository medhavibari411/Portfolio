<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Medhavi Bari's portfolio showcasing web development skills and projects.">
    <meta name="keywords" content="Medhavi Bari, Web Developer, Portfolio, HTML, CSS, JavaScript">
    
    <link rel="stylesheet" href="styles.css">
    
    <!-- =====BOX ICONS===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Portfolio Website</title>
</head>
<body>
    <!--===== HEADER =====-->
    <header class="l-header" role="banner">
        <nav class="nav bd-grid" role="navigation">
            <div>
                <a href="#" class="nav__logo" aria-label="Medhavi's logo">Medhavi</a>
            </div>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                    <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                </ul>
            </div>
            <div class="nav__toggle" id="nav-toggle" aria-label="Toggle navigation">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>
    
    <main class="l-main">
        <!--===== HOME =====-->
        <section class="home bd-grid" id="home" role="region" aria-labelledby="home-heading">
            <div class="home__data">
                <h1 id="home-heading" class="home__title">Hi,<br>I'm <span class="home__title-color">Medhavi Bari</span><br> Web Developer</h1>
                <a href="R.jpg" class="button">Learn More</a>
            </div>
            <div class="home__social">
                <a href="https://www.linkedin.com/in/medhavi-bari-1b3a47294" class="home__social-icon" aria-label="LinkedIn"><i class='bx bxl-linkedin'></i></a>
                <a href="https://www.instagram.com/_developer_41/" class="home__social-icon" aria-label="Instagram"><i class='bx bxl-instagram'></i></a>
                <a href="https://github.com/account" class="home__social-icon" aria-label="GitHub"><i class='bx bxl-github'></i></a>
            </div>
            <div class="home__img">
                <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <mask id="mask0" mask-type="alpha">
                        <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                    </mask>
                    <g mask="url(#mask0)">
                        <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                        <image class="home__blob-img" x="50" y="60" href="s.png"/>
                    </g>
                </svg>
            </div>
        </section>
        
        <!--===== ABOUT =====-->
        <section class="about section" id="about" role="region" aria-labelledby="about-heading">
            <h2 id="about-heading" class="section-title">About</h2>
            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="main.png" alt="Medhavi Bari's image">
                </div>
                <div>
                    <h2 class="about__subtitle">Hi, I'm Medhavi.</h2>
                    <p class="about__text">Proficient in HTML, CSS, and JavaScript with a focus on responsive design and accessibility. As a front-end developer, I thrive in collaborative environments, leveraging my communication skills to work effectively with designers, back-end developers, and other team members.</p>           
                </div>                                   
            </div>
        </section>
        
        <!--===== SKILLS =====-->
        <section class="skills section" id="skills" role="region" aria-labelledby="skills-heading">
            <h2 id="skills-heading" class="section-title">Skills</h2>
            <div class="skills__container bd-grid">          
                <div>
                    <h2 class="skills__subtitle">Professional Skills</h2>
                    <p class="skills__text">Ambitious and adaptable graduate with a Masters in Full Stack Web Development With AWS as a Frontend Developer. I am eager to kickstart my career and contribute positively to a forward-thinking organization.</p>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-html5 skills__icon'></i>
                            <span class="skills__name">HTML</span>
                        </div>
                        <div class="skills__bar skills__html"></div>
                        <div>
                            <span class="skills__percentage">95%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-css3 skills__icon'></i>
                            <span class="skills__name">CSS</span>
                        </div>
                        <div class="skills__bar skills__css"></div>
                        <div>
                            <span class="skills__percentage">85%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-javascript skills__icon'></i>
                            <span class="skills__name">JAVASCRIPT</span>
                        </div>
                        <div class="skills__bar skills__js"></div>
                        <div>
                            <span class="skills__percentage">60%</span>
                        </div>
                    </div>
                    <div class="skills__data">
                        <div class="skills__names">
                            <i class='bx bxl-bootstrap skills__icon'></i>
                            <span class="skills__name">Bootstrap</span>
                        </div>
                        <div class="skills__bar skills__css"></div>
                        <div>
                            <span class="skills__percentage">85%</span>
                        </div>
                    </div>
                </div>
                <div>              
                    <img src="1.jpg" alt="" class="skills__img">
                </div>
            </div>
        </section>
        
        <!--===== WORK =====-->
        <section class="work section" id="work" role="region" aria-labelledby="work-heading">
            <h2 id="work-heading" class="section-title">Work</h2>
            <div class="work__container bd-grid">
                <a href="#" class="work__img">
                    <img src="work1.jpg" alt="Work example 1">
                </a>
                <a href="#" class="work__img">
                    <img src="work2.jpg" alt="Work example 2">
                </a>
                <a href="#" class="work__img">
                    <img src="work3.jpg" alt="Work example 3">
                </a>
                <a href="#" class="work__img">
                    <img src="work4.jpg" alt="Work example 4">
                </a>
                <a href="#" class="work__img">
                    <img src="work5.jpg" alt="Work example 5">
                </a>
                <a href="#" class="work__img">
                    <img src="work6.jpg" alt="Work example 6">
                </a>
            </div>
        </section>
        
        <!--===== CONTACT =====-->
        <section class="contact section" id="contact" role="region" aria-labelledby="contact-heading">
            <h2 id="contact-heading" class="section-title">Contact</h2>
            <div class="contact__container bd-grid">
                <form id="contact-form" class="contact__form" method="POST" action="your-server-side-script">
                    <label for="name" class="contact__label">Name</label>
                    <input type="text" id="name" name="name" placeholder="Name" class="contact__input" required>
                    
                    <label for="email" class="contact__label">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" class="contact__input" required>
                    
                    <label for="message" class="contact__label">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Your message" class="contact__input" required></textarea>
                    
                    <!-- Google reCAPTCHA -->
                    <div class="g-recaptcha" data-sitekey="your-site-key"></div>
                    
                    <button type="submit" id="submit" class="contact__button button">Submit</button>
                </form>
            </div>
        </section>
    </main>
    
    <!--===== FOOTER =====-->
    <footer class="footer">
        <p class="footer__title">Medhavi Bari</p>
        <div class="footer__social">
            <a href="https://www.linkedin.com/in/medhavi-bari-1b3a47294" class="footer__icon" aria-label="LinkedIn"><i class='bx bxl-linkedin'></i></a>
            <a href="https://www.instagram.com/_developer_41/" class="footer__icon" aria-label="Instagram"><i class='bx bxl-instagram'></i></a>
            <a href="https://github.com/account" class="footer__icon" aria-label="GitHub"><i class='bx bxl-github'></i></a>
        </div>
        <p class="footer__copy"> All rights reserved</p>
    </footer>
    
    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>
    
    <!--===== MAIN JS =====-->
    <script src="scripts.js"></script>
    
    <!-- Google reCAPTCHA script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>
