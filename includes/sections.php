    <!-- Sections Starts -->
    <div class="sections">

        <!-- About Section Starts -->
        <div id="flow-about" class="generic-flow" data-flow-id="about" data-triggers="about, about me, about you, who are you, profile, bio, biography, introduction, who, you, me">
            <!-- Content Starts -->
            <p>I'm a Computer Science student passionate about building practical applications with Python, Java, and JavaScript. I work with <strong>Django and the MERN stack</strong> on projects spanning finance, AI/ML, and blockchain.</p>
            <div class="list-with-icons">
                <span><i class="fa-solid fa-graduation-cap"></i>Computer Engineering @ LJ Institute (Sep 2023–present)</span>
                <span><i class="fa-solid fa-code"></i>Full-stack projects with Django &amp; MERN</span>
                <span><i class="fa-solid fa-brain"></i>Focus on AI/ML &amp; Cloud Computing</span>
                <span><i class="fa-regular fa-calendar-check"></i>Open to internships &amp; collaborations</span>
                <span><i class="fa-regular fa-map"></i>Based in <?= h($site['location']) ?></span>
            </div>
            <!-- Content Ends -->
            <!-- Buttons Starts -->
            <ul class="options">
                <li data-action="skills">View My Skills</li>
                <li data-action="projects" data-class="btn-secondary">View My Projects</li>
            </ul>
            <!-- Buttons Ends -->
        </div>
        <!-- About Section Ends -->

        <!-- Skills Section Starts -->
        <div id="flow-skills" class="generic-flow" data-flow-id="skills" data-triggers="skills, technologies, stack, tech, tools, what can you do, capabilities, show me your skills, services, what are you good at">
            <!-- Content Starts -->
            <p>Here are the languages, frameworks, and tools I use to build reliable full-stack applications with a focus on <strong>APIs, data, and performance.</strong></p>
             <!-- Single Category of Skills Starts -->
            <h2 class="category-skills"><i class="fa-solid fa-laptop"></i>Languages</h2>
            <ul class="list-skills">
                <li>Java<span class="stars" data-rating="4"></span></li>
                <li>Python<span class="stars" data-rating="4"></span></li>
                <li>JavaScript (ES6+)<span class="stars" data-rating="4"></span></li>
            </ul>
            <!-- Single Category of Skills Ends -->
            <!-- Single Category of Skills Starts -->
            <h2 class="category-skills"><i class="fa-solid fa-layer-group"></i>Frameworks &amp; Stack</h2>
            <ul class="list-skills">
                <li>MERN Stack<span class="stars" data-rating="4"></span></li>
                <li>Django &amp; REST Framework<span class="stars" data-rating="4"></span></li>
                <li>API Integration<span class="stars" data-rating="4"></span></li>
            </ul>
            <!-- Single Category of Skills Ends -->
            <!-- Single Category of Skills Starts -->
            <h2 class="category-skills"><i class="fa-solid fa-database"></i>Databases &amp; Tools</h2>
            <ul class="list-skills">
                <li>SQL / PL/SQL<span class="stars" data-rating="4"></span></li>
                <li>MongoDB &amp; SQLite<span class="stars" data-rating="4"></span></li>
                <li>Figma<span class="stars" data-rating="3"></span></li>
            </ul>
            <!-- Single Category of Skills Ends -->
            <!-- Content Ends -->
            <!-- Buttons Starts -->
            <ul class="options">
                <li data-action="projects">View My Projects</li>
                <li data-link="<?= url('link-to-cv.php') ?>" data-class="btn-secondary">Download CV</li>
            </ul>
            <!-- Buttons Ends -->
        </div>
        <!-- Skills Section Ends -->

        <!-- Projects Section Starts -->
        <div id="flow-projects" data-triggers="projects, portfolio, work, examples, case studies, show me, builds, apps, websites, creations, show me your work">
        <!-- Intro Starts -->
        <p class="intro">Ready to see my work? I'll walk you through my projects one at a time. Click <strong>Show Next Project</strong> below to keep going.</p>
        <!-- Intro Ends -->
        <!-- Projects Data Starts -->
        <div class="projects-data">
            <!-- Single Project Starts -->
            <div class="project-item"
                data-title="Niftendo — NFT Marketplace"
                data-link="https://niftendo-nine.vercel.app"
                data-image="<?= asset('img/projects/niftendo.png') ?>"
                data-media="image">
                <p class="summary">Full-stack NFT marketplace with Next.js, Express/MongoDB, Django market data scraper, Hardhat smart contracts, and an LSTM-based Ethereum price prediction service — improving accuracy by 18% with real-time CoinMarketCap data.</p>
            </div>
            <!-- Single Project Ends -->
            <!-- Single Project Starts -->
            <div class="project-item"
                data-title="Investify — Stock Market Website"
                data-link="https://github.com/College-projects-by-Tasneem/Investify-Stock-Market-Website"
                data-image="<?= asset('img/projects/investify.png') ?>"
                data-media="image">
                <p class="summary">Educational Flask web app for stock market learning — live charts, portfolio tracking with profit/loss visualization, Monte Carlo simulation (1,000+ runs), Black–Scholes calculator, and candlestick charts with sub-2s refresh rates.</p>
            </div>
            <!-- Single Project Ends -->
        </div>
        <!-- Projects Data Ends -->
        <!-- Buttons Starts -->
        <div class="project-buttons">
            <!-- Repeating Button In Each Project Starts -->
            <ul class="global">
                <li data-action="education" data-class="btn-secondary">View My Education</li>
            </ul>
            <!-- Repeating Button In Each Project Ends -->
            <!-- Final Buttons Starts -->
            <ul class="final">
                <li data-action="education">View My Education</li>
                <li data-action="contact" data-class="btn-secondary">Contact Me</li>
            </ul>
            <!-- Final Buttons Starts -->
        </div>
        <!-- Buttons Ends -->
        </div>
        <!-- Projects Section Ends -->

        <!-- Education Section (nav flow) Starts -->
        <div id="flow-education" class="generic-flow" data-flow-id="education" data-triggers="education, university, degrees, studies, academic, graduation, diploma, school, college">
            <!-- Content Starts -->
            <p>Here's a snapshot of my <strong>academic journey</strong> so far:</p>
            <ul>
                <li><strong>Computer Engineering (UG)</strong> — LJ Institute of Engineering and Technology · Sep 2023 – present</li>
                <li><strong>Class XII</strong> — Utkarsh School of Excellence · 86%</li>
                <li><strong>Class X</strong> — Nirmala Convent School · 95%</li>
            </ul>
            <p>Relevant coursework: Data Structures &amp; Algorithms, OOP, Database Management, Web Development, Software Engineering, API Integration, and Competitive Coding.</p>
            <!-- Content Ends -->
            <!-- Buttons Starts -->
            <ul class="options">
                <li data-link="<?= url('link-to-cv.php') ?>">Download CV</li>
                <li data-action="projects" data-class="btn-secondary">View My Projects</li>
            </ul>
            <!-- Buttons Ends -->
        </div>
        <!-- Education Section Ends -->

        <!-- Contact Section Starts -->
        <div id="flow-contact" data-triggers="contact, touch, reach, message, hire, email, message, reach, call">
            <!-- Intro Starts -->
            <p>I'm always open to new projects, internships, and <strong>opportunities</strong>. Feel free to get in touch through any of the channels below.</p>
            <!-- Intro Ends -->
            <!-- Direct Contact Items Starts -->
            <div class="direct-contact">
                <div class="contact-row" data-label="Email :" data-icon="fa-regular fa-envelope-open"><?= h($site['email']) ?></div>
                <div class="contact-row" data-label="Phone :" data-icon="fa-brands fa-whatsapp"><?= h($site['phone']) ?></div>
            </div>
            <!-- Direct Contact Items Ends -->
            <!-- Social Profiles Starts -->
            <div class="social-links">
                <div class="social-item" data-icon="fa-brands fa-linkedin-in" data-url="<?= h($site['linkedin']) ?>" data-class="linkedin"></div>
                <div class="social-item" data-icon="fa-brands fa-github" data-url="<?= h($site['github']) ?>" data-class="github"></div>
            </div>
            <!-- Social Profiles Ends -->
            <!-- Buttons Starts -->
            <ul class="options">
                <li data-action="open_contact_form">Send Me a Message</li>
                <li data-action="projects" data-class="btn-secondary">View Projects</li>
            </ul>
            <!-- Buttons Ends -->
        </div>
        <!-- Contact Section Ends -->

        <!-- Success Message Starts -->
        <div class="generic-flow" data-flow-id="msg_success">
            <!-- Content Starts -->
            <p><strong>Your message was sent successfully!</strong></p>
            <p>Thanks for reaching out — I'll get back to you as soon as I can.</p>
            <!-- Content Ends -->
            <!-- Buttons Starts -->
            <ul class="options">
                <li data-action="projects">View My Projects</li>
                <li data-action="hobbies" data-class="btn-secondary">See my Hobbies</li>
            </ul>
            <!-- Buttons Ends -->
        </div>
        <!-- Success Message Ends -->

        <!-- Generic Sections Starts -->

        <!-- Greeting Section Starts -->
        <div class="generic-flow" data-flow-id="hello" data-triggers="hi, hello, hey, greeting, yo">
            <!-- Content Starts -->
            <p>Hi there, I'm <strong><?= h($site['name']) ?>!</strong></p>
            <p>Use these commands to learn more about me:</p>
            <p><strong>about</strong>, <strong>skills</strong>, <strong>projects</strong>, <strong>education</strong>, <strong>contact</strong>.</p>
            <!-- Content Ends -->
        </div>
        <!-- Greeting Section Ends -->

        <!-- Hobbies Section Starts -->
        <div id="flow-hobbies" class="generic-flow" data-flow-id="hobbies" data-triggers="hobbies, interests, fun, life, leisure">
            <!-- Content Starts -->
            <p>Beyond coursework, I enjoy staying curious and building things:</p>
            <div class="list-with-icons">
                <span><i class="fas fa-code"></i> <strong>Competitive Coding</strong> — Problem-solving and algorithm practice.</span>
                <span><i class="fas fa-brain"></i> <strong>AI &amp; ML</strong> — Exploring models like LSTM for real-world data.</span>
                <span><i class="fas fa-chart-line"></i> <strong>Finance Tech</strong> — Stock markets, simulations, and dashboards.</span>
                <span><i class="fas fa-link"></i> <strong>Blockchain</strong> — Smart contracts and NFT marketplaces.</span>
                <span><i class="fas fa-cloud"></i> <strong>Cloud Computing</strong> — Always learning new deployment patterns.</span>
                <span><i class="fas fa-palette"></i> <strong>UI Design</strong> — Prototyping interfaces in Figma.</span>
            </div>
            <p>Want to collaborate on something similar?</p>
            <!-- Content Ends -->
            <!-- Buttons Starts -->
            <ul class="options">
                <li data-action="contact">Let's Connect</li>
                <li data-action="about" data-class="btn-secondary">More About Me</li>
            </ul>
            <!-- Buttons Ends -->
        </div>
        <!-- Hobbies Section Ends -->

        <!-- Age Section Starts -->
        <div class="generic-flow" data-flow-id="age" data-triggers="age, old, how old are you, your age, born, birthdate, born">
            <!-- Content Starts -->
            <p>I'm a Computer Engineering undergraduate at <strong>LJ Institute of Engineering and Technology</strong>, enrolled since September 2023 and based in <?= h($site['location']) ?>.</p>
            <!-- Content Ends -->
            <!-- Buttons Starts -->
            <ul class="options">
                <li data-action="about">More About Me</li>
                <li data-link="<?= url('link-to-cv.php') ?>" data-class="btn-secondary">Download CV</li>
            </ul>
            <!-- Buttons Ends -->
        </div>
        <!-- Age Section Ends -->

        <!-- CV Section Starts -->
        <div id="flow-cv" class="generic-flow" data-flow-id="cv" data-triggers="cv, curriculum vitae, resume, your cv">
             <!-- Content Starts -->
            <p>Here's my complete <strong>curriculum vitae</strong> with education, projects, and skills.</p>
            <p>Click below to download the PDF.</p>
            <!-- Content Ends -->
            <!-- Buttons Starts -->
            <ul class="options">
                <li data-link="<?= url('link-to-cv.php') ?>">Download CV</li>
            </ul>
            <!-- Buttons Ends -->
        </div>
        <!-- CV Section Ends -->

        <!-- Experience Section Starts -->
        <div class="generic-flow" data-flow-id="experience" data-triggers="experience, career, work history, jobs">
            <!-- Content Starts -->
            <p>My hands-on experience comes from <strong>academic and personal projects</strong> — including a full-stack NFT marketplace (Niftendo) and the Investify stock market learning platform.</p>
            <p>Both projects combine backend APIs, data visualization, and modern web frameworks. See my GitHub for code and details.</p>
            <!-- Content Ends -->
            <!-- Buttons Starts -->
            <ul class="options">
                <li data-action="projects">View My Projects</li>
                <li data-link="<?= url('link-to-cv.php') ?>" data-class="btn-secondary">Download CV</li>
            </ul>
            <!-- Buttons Ends -->
        </div>
        <!-- Experience Section Ends -->

        <!-- Awards Section Starts -->
        <div class="generic-flow" data-flow-id="awards" data-triggers="awards, certificates, courses, training, certifications, achievements">
            <!-- Content Starts -->
            <p>Academic highlights and areas I'm actively developing:</p>
            <ul>
                <li>Class X — 95% (Nirmala Convent School)</li>
                <li>Class XII — 86% (Utkarsh School of Excellence)</li>
                <li>18% accuracy improvement on LSTM Ethereum price prediction (Niftendo project)</li>
            </ul>
            <!-- Content Ends -->
            <!-- Buttons Starts -->
            <ul class="options">
                <li data-link="<?= url('link-to-cv.php') ?>">Download CV</li>
                <li data-action="projects" data-class="btn-secondary">View My Projects</li>
            </ul>
            <!-- Buttons Ends -->
        </div>
        <!-- Awards Section Ends -->

        <!-- Error Message Starts -->
        <div class="generic-flow" data-flow-id="error">
            <!-- Content Starts -->
            <p>I'm sorry, I didn't quite catch that. Try one of these commands:</p>
            <p><strong>about</strong>, <strong>skills</strong>, <strong>projects</strong>, <strong>education</strong>, <strong>contact</strong>.</p>
            <!-- Content Ends -->
        </div>
        <!-- Error Message Ends -->

        <!-- Generic Sections Ends -->
