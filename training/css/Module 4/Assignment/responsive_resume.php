<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="responsive_resume.css">
</head>

<body>
    <main>
        <aside class="leftside">
            <div id="photo">
                <img src="nensi.jpeg" alt="nensi_img">
            </div>
            <div class="menu">
                <ul>
                    <li class="aside"><a class="menulink" href="#about">About</a></li>
                    <li class="aside"><a class="menulink" href="#objective">Objective</a></li>
                    <li class="aside"><a class="menulink" href="#projects">Projects</a></li>
                    <li class="aside"><a class="menulink" href="#eduction">Education</a></li>
                    <li class="aside"><a class="menulink" href="#skills">Skills</a></li>
                    <li class="aside"><a class="menulink" href="#languages">Languages</a></li>
                    <li class="aside"><a class="menulink" href="#hobbies">Hobbies</a></li>
                </ul>
        </div>
        </aside>
        <section class="sec">
            <div id="about">
                <div class="name">
                    <h1>Nensi Sanjaykumar Darji</h1>
                </div>
                <div class="detail">
                    <h3>About:</h3>
                    <ul id="list">
                        <li><span class="li1">Address: </span>Opp. Rajakawada post office, near Loteswar Mahadev Temple,
                            Patan, Gujarat.</li>
                        <li><span class="li1">Email: </span><a href="ndnensidarji@gmail.com">
                                ndnensidarji@gmail.com</a></li>
                        <li><span class="li1">LinkedIn: </span><a
                                href="https://www.linkedin.com/in/nensi-darji-96571616a">
                                https://www.linkedin.com/in/nensi</a></li>
                    </ul>
                </div>
            </div>
            <div id="objective" class="detail">
                <h3>
                    Objective:
                </h3>
                <p class="desc">To work in an environment which encourage me to succeed and grow professionally
                    <br> where i can utilize my skills and knowledge appropriately.
                </p>
            </div>
            <div id="projects" class="detail">
                <h3>
                    Projects:
                </h3>
                <ul class="desc">
                    <li><strong>foodieAutomationSystem - restaurant table
                            reservation </strong></li>
                    <hr>
                    <ul>
                        <li>I have made the website for table reservation for lunch or dinner. By help of
                            this website <br> you can save your waiting time for table. I have made this website at
                            local host using <br>
                            HTML, CSS, JAVASCRIPT, PHP and DATABASE (PhpMyAdmin).</li>
                        <video width="40%" height="300vh" controls>
                            <source src="project.mp4" type="video/mp4">
                            <track src="project_no.vtt" kind="subtitles" srclang="no" label="English">
                        </video>
                    </ul>
                    <br>
                    <br>
                    <li><strong>healthcare_website - An appointment website</strong></li>
                    <hr>
                    <ul>
                        <li>This project was a group project which was <br> made in design engineering subject. I was a
                            leader of this group. <br> The main aim of this website is to not wait for check-up and save
                            the time.
                            <br> My group partner and I have made this website using <br> HTML CSS and DATABASE at local
                            host
                        </li>
                    </ul>
                </ul>
            </div>

            <div id="eduction" class="detail">
                <h3 class="objective">Education
                </h3>
                <table class="desc">
                    <caption>Education Information</caption>
                    <tr>
                        <th>Course</th>
                        <th>percentages</th>
                        <th>school/college</th>
                        <th>passing year</th>
                    </tr>
                    <tr>
                        <td>Pursuing BE in CSE </td>
                        <td>77.6%</td>
                        <td>Government Engineering College
                            Patan</td>
                        <td>2021</td>
                    </tr>
                    <tr>
                        <td>HSC</td>
                        <td>72%</td>
                        <td>B.M. High Secondary School,
                            Gujarat Board</td>
                        <td>2018</td>
                    </tr>
                    <tr>
                        <td>SSC</td>
                        <td>81%</td>
                        <td>B.M. High School, Gujarat Board</td>
                        <td>2016</td>
                    </tr>
                </table>
            </div>

            <div id="skills" class="detail">
                <h3>
                    Skills
                </h3>
                <div class="desc">
                    <p><span id="sp1"><strong> Technical
                                Languages </strong></span> : C, Python</p>
                    <p><span id="sp2"><strong>Web -
                                Development </strong></span> : HTML, CSS, JAVASCRIPT, jQuery, PHP (basic)</p>
                    <p><span id="sp3"><strong>Other
                                knowledges </strong></span> : Algorithm, Data Structures</p>
                    <p><span id="sp4"><strong>Interpersonal
                                Skills </strong></span> : Presentation Skills, Team Leadership</p>
                </div>
            </div>

            <div id="languages" class="detail">
                <h3>
                    Languages
                </h3>
                <ul class="desc">
                    <li>English <progress value="50" max="100"> </progress></li>
                    <li>Hindi <progress value="80" max="100"> </progress></li>
                    <li>Gujarati<progress value="100" max="100"> </progress></li>
                </ul>
            </div>

            <div id="hobbies" class="detail">
                <h3>
                    Hobbies
                </h3>
                <ul class="desc">
                    <li>Reading </li>
                    <li>Cooking </li>
                    <li>Dance</li>
                    <li>Travelling</li>
                </ul>
            </div>
        </section>
    </main>
</body>

</html>