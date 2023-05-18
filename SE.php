<!DOCTYPE html>
<html lang="en">

<head>

    <title>Software Engineering</title>
    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="../LOGIN/images/logo2.png">

    <!-- BoxIcons v2.1.2 -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">

    <!-- Roboto Font -->
    <link
        href="https://fonts.googleapis.com/css2family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- CSS File -->
    <link rel="stylesheet" href="css/style1.css">

</head>
<body>
    <header>
        <h2 class="logo" style="color: #e77c24;">Algo<span style="color: white;">verse</span></h2>
        <nav>
        <ul class="navbar">
            <li><a href="user_page.php">Home</a></li>
            <li><a href="quizhome.php">Test/Quiz</a></li>
            <li><a href="./contact.php">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        </nav>
    </header>

    <div class="sidebar">
        <div class="toggle">
            <i class="bx bx-chevron-right"></i>
        </div>
        <div class="logo">
            <img src="images/logo1.png" alt="...">
            <h3>Algoverse</h3>
        </div>
        <nav>
            <div class="nav-title">
                Subjects
            </div>
            <ul>
            <li class="nav-item active">
                    <a href="DSA.php" class="sideicon"><i class="bx bxs-dashboard"></i></a>
                    <a href="DSA.php">Data Structures</a>
                </li>
                <li class="nav-item">
                    <a href="DBMS.php" class="sideicon"><i class="bx bxs-bar-chart-alt-2"></i></a>
                    <a href="DBMS.php">DataBase Management System</a>  
                </li>
                <li class="nav-item">
                    <a href="CN.php" class="sideicon"><i class="bx bxs-dashboard"></i></a>
                    <a href="CN.php">Computer Network</a>
                </li>
                <li class="nav-item">
                    <a href="OS.php" class="sideicon"><i class="bx bxs-bar-chart-alt-2"></i></a>
                    <a href="OS.php">Operating System</a>
                </li>
                <li class="nav-item">
                    <a href="SE.php" class="sideicon"><i class="bx bxs-dashboard"></i></a>
                    <a href="SE.php">Software Engineering</a>
                </li>
                <li class="nav-item">
                    <a href="quizhome.php" class="sideicon"><i class="bx bxs-bar-chart-alt-2"></i></a>
                    <a href="quizhome.php">Test/Quiz</a>
                </li>
            </ul>

            <hr>
            <div class="nav-title">
                Supports
            </div>
            <ul>
                <li class="nav-item">
                    <a href="#" class="sideicon sideicon1"><i class="bx bxs-help-circle"></i></a>
                    <a href="#" class="sideicontext">Get Help</a>
                </li>
                <!-- <li class="nav-item">
                    <i class="bx bxs-message-dots"></i>
                    <a href="">Send Feedback</a>
                </li> -->
            </ul>
        </nav>
    </div>

    <section class="container container-open">
        <div class="box1">
            <h2 class="subheading">Software Engineering</h2>
            <p class="subtopic">
            <h1>What is Software Engineering ?</h1><br>Software Engineering is a subdomain of Engineering in which you learn to develop, designing, testing, and maintenance of software using a systematic and structured approach. Software is a collection of programs. And that programs are developed by software engineers. The code of a program is written in any of various programming languages like C++, Java, Python, Django, etc.<br> <br>

            In this Software Engineering Tutorial, you will learn all the basic to advance concepts like Software development life cycle, software project management, software model, etc.<br><br>


            <h2>Classical Waterfall Model</h2> <br><br>
            The classical waterfall model is the basic software development life cycle model. It is very simple but idealistic. Earlier this model was very popular but nowadays it is not used. But it is very important because all the other software development life cycle models are based on the classical waterfall model. <br><br>

            <h3>Why Do We Use the Waterfall Model?</h3> <br><br>
            The waterfall model is a software development model used in the context of large, complex projects, typically in the field of information technology. It is characterized by a structured, sequential approach to project management and software development. <br><br>

            The waterfall model is useful in situations where the project requirements are well-defined and the project goals are clear. It is often used for large-scale projects with long timelines, where there is little room for error and the project stakeholders need to have a high level of confidence in the outcome. <br><br>

            <h3>Features of the Waterfall Model</h3><br><br>
            1. Sequential Approach: The waterfall model involves a sequential approach to software development, where each phase of the project is completed before moving on to the next one.<br>
            2. Document-Driven: The waterfall model relies heavily on documentation to ensure that the project is well-defined and the project team is working towards a clear set of goals.<br>
            3.Quality Control: The waterfall model places a high emphasis on quality control and testing at each phase of the project, to ensure that the final product meets the requirements and expectations of the stakeholders.<br>
            4.Rigorous Planning: The waterfall model involves a rigorous planning process, where the project scope, timelines, and deliverables are carefully defined and monitored throughout the project lifecycle.<br><br>
            Overall, the waterfall model is used in situations where there is a need for a highly structured and systematic approach to software development. It can be effective in ensuring that large, complex projects are completed on time and within budget, with a high level of quality and customer satisfaction.
            <br><br>

            <h3>Classical Waterfall Model life cycle</h3><br><br>
            The classical waterfall model divides the life cycle into a set of phases. This model considers that one phase can be started after the completion of the previous phase. That is the output of one phase will be the input to the next phase. Thus the development process can be considered as a sequential flow in the waterfall. Here the phases do not overlap with each other. The different sequential phases of the classical waterfall model are shown in the below figure. <br><br>

            <img class="centerimage" src="../images/se-img1.png" alt="Software Engineering"> <br><br><br>
            <b>1. Feasibility Study</b><br>
            The main goal of this phase is to determine whether it would be financially and technically feasible to develop the software. 
            The feasibility study involves understanding the problem and then determining the various possible strategies to solve the problem. These different identified solutions are analyzed based on their benefits and drawbacks, The best solution is chosen and all the other phases are carried out as per this solution strategy. <br><br>

            <b>2. Requirements Analysis and Specification</b><br>
            The aim of the requirement analysis and specification phase is to understand the exact requirements of the customer and document them properly. This phase consists of two different activities. <br><br>

            Requirement gathering and analysis: Firstly all the requirements regarding the software are gathered from the customer and then the gathered requirements are analyzed. The goal of the analysis part is to remove incompleteness (an incomplete requirement is one in which some parts of the actual requirements have been omitted) and inconsistencies (an inconsistent requirement is one in which some part of the requirement contradicts some other part).
            Requirement specification: These analyzed requirements are documented in a software requirement specification (SRS) document. SRS document serves as a contract between the development team and customers. Any future dispute between the customers and the developers can be settled by examining the SRS document.<br><br>
            
            <b>3. Design</b><br>
            The goal of this phase is to convert the requirements acquired in the SRS into a format that can be coded in a programming language. It includes high-level and detailed design as well as the overall software architecture. A Software Design Document is used to document all of this effort (SDD)<br><br>

            <b>4. Coding and Unit Testing </b><br>
            In the coding phase software design is translated into source code using any suitable programming language. Thus each designed module is coded. The aim of the unit testing phase is to check whether each module is working properly or not. <br><br>

            <b>5. Integration and System testing</b><br>
            Integration of different modules is undertaken soon after they have been coded and unit tested. Integration of various modules is carried out incrementally over a number of steps. During each integration step, previously planned modules are added to the partially integrated system and the resultant system is tested. Finally, after all the modules have been successfully integrated and tested, the full working system is obtained and system testing is carried out on this. <br>
            System testing consists of three different kinds of testing activities as described below.<br><br>

            Alpha testing: Alpha testing is the system testing performed by the development team.<br>
            Beta testing: Beta testing is the system testing performed by a friendly set of customers.<br>
            Acceptance testing: After the software has been delivered, the customer performed acceptance testing to determine whether to accept the delivered software or reject it.<br><br>

            <b>6. Maintenance</b><br>
            Maintenance is the most important phase of a software life cycle. The effort spent on maintenance is 60% of the total effort spent to develop a full software. There are basically three types of maintenance.<br><br>

            Corrective Maintenance: This type of maintenance is carried out to correct errors that were not discovered during the product development phase.<br>
            Perfective Maintenance: This type of maintenance is carried out to enhance the functionalities of the system based on the customer’s request.<br>
            Adaptive Maintenance: Adaptive maintenance is usually required for porting the software to work in a new environment such as working on a new computer platform or with a new operating system.<br><br>
            </p>
            <br><br><br><br><br><br>
    </div>
    <footer>
        <div class="last-text">
            <p>Copyright 2023-2024 © By Team Sajal  All Rights Reserved.</p>
             <p>Algoverse is Powered by JUET Students</p>
            <p>Algoverse is optimized for learning and training. Examples might be simplified to improve reading and
                learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant
                full correctness of all content. While using Algoverse, you agree to have read and accepted our terms of
                use, cookie and privacy policy.
            <div class="contact-icons center">
                <a href=""><i class='bx bxl-linkedin'></i></a>
                <a href=""><i class='bx bxl-facebook'></i></a>
                <a href=""><i class='bx bxl-instagram'></i></a>
                <a href=""><i class='bx bxl-github'></i></a>
            </div>
            </p>
        </div>
        </footer>
    </section>

    
    
    <!---scroll-top--->
    <a href="#" class="top"><i class='bx bx-up-arrow-alt'></i></a>
    <script src="https://unpkg.com/scrollreveal"></script>

    <!---custom js link--->
    <script type="text/javascript" src="js/script.js"></script>
    <!-- JS File -->
    <script type="text/javascript" src="js/script.js"></script>

</body>

</html>