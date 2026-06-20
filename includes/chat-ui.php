<body class="<?= h($bodyClass) ?>">

    <?php require __DIR__ . '/side-decor.php'; ?>

    <!-- Chat Wrapper Starts -->
    <main class="chat-wrapper" id="chat-wrapper">
        <section class="chat-container" id="chat-container">
            <div class="chat-area-content">
                <!-- Intro Screen Starts -->
                <div id="intro-screen" class="intro-screen">
                    <div class="intro-content">
                        <!-- Hello Text Starts -->
                        <div class="hello">
                            <span>
                                Hello!
                            </span>
                        </div>
                        <!-- Hello Text Ends -->
                        <!-- Intro Texts Starts -->
                        <div class="intro-text">
                            <h1>
                                I'm <span><?= h($site['short_name']) ?>,</span>
                            </h1>
                            <h2>
                                <?= h($site['tagline']) ?>
                            </h2>
                        </div>
                        <!-- Intro Texts Ends -->
                        <!-- Intro Content Starts -->
                        <div class="intro-bottom-content intro-hero-stack">
                            <!-- Photo Starts -->
                            <div class="image-container pixel-avatar">
                                <img id="intro-image" src="<?= asset('img/avatar-intro.png') ?>" alt="<?= h($site['name']) ?>" class="intro-image">
                            </div>
                            <!-- Photo Ends -->
                            <!-- Quote Starts -->
                            <div class="quote">
                                <p>
                                    <?= h($site['intro_quote']) ?>
                                </p>
                                <span>
                                    <?= h($site['intro_quote_author']) ?>
                                </span>
                            </div>
                            <!-- Quote Ends -->
                            <!-- Call To Actions Starts -->
                            <div id="intro-options-target" class="intro-options">
                                <button class="btn btn-primary" data-action="about">
                                    <span class="button-content">
                                        <span>More About Me</span>
                                    </span>
                                </button>
                                <button class="btn btn-primary btn-secondary" data-action="portfolio">
                                    <span class="button-content">
                                        <span>See My Work</span>
                                    </span>
                                </button>
                            </div>
                            <!-- Call To Actions Ends -->
                        </div>
                         <!-- Intro Content Ends -->
                    </div>
                </div>
                <!-- Intro Screen Ends -->

                <!-- Chat Window Starts -->
                <div id="chat-window" class="chat-window">
                    <!-- Chat Avatar Starts -->
                    <img src="<?= asset('img/chat-avatar.png') ?>" id="chat-avatar" class="chat-avatar-image" alt="<?= h($site['name']) ?>">
                    <!-- Chat Avatar Ends -->
                </div>
                <!-- Chat Window Ends -->

                <!-- Chat Input Starts -->
                <footer id="chat-footer" class="chat-footer">
                    <div id="input-nav-wrapper" class="input-nav-wrapper">
                        <!-- Chat Form Starts -->
                        <div class="input-area-visual">
                            <button class="btn-menu-toggle" id="btn-menu-toggle"><i class="fa-solid fa-plus"></i></button>
                            <input type="text" id="chat-input" placeholder="Try about, skills, or projects...">
                            <button class="send-btn" id="send-button" disabled><i class="fa-solid fa-arrow-up"></i></button>
                        </div>
                         <!-- Chat Form Ends -->
                        <!-- Footer Navigation Starts -->
                        <div id="primary-nav" class="primary-nav">
                            <div class="nav-links-container">
                                <button class="btn btn-primary-nav" data-flow="about"><i class="fa-solid fa-file-lines"></i>About Me</button>
                                <button class="btn btn-primary-nav" data-flow="skills"><i class="fa-solid fa-gear"></i>Skills</button>
                                <button class="btn btn-primary-nav" data-flow="projects"><i class="fa-solid fa-layer-group"></i>Projects</button>
                                <button class="btn btn-primary-nav" data-flow="education"><i class="fa-solid fa-graduation-cap"></i>Education</button>
                                <button class="btn btn-primary-nav" data-flow="contact"><i class="fa-solid fa-envelope"></i>Contact</button>
                            </div>
                        </div>
                        <!-- Footer Navigation Ends -->
                    </div>
                    <!-- Footer Bottom Text Starts -->
                    <p id="chat-footer-text"><i class="fa-regular fa-comment-dots"></i> Only professional questions will be entertained.</p>
                    <!-- Footer Bottom Text Ends -->
                </footer>
                <!-- Chat Input Ends -->
            </div>
        </section>
    </main>