<!DOCTYPE html>
<html lang="en">

<head>

    <title>Operating System</title>
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
        <h2 class="subheading">Operating System</h2>
            <p class="subtopic">
            <h1>What is Operating System ?</h1><br>An Operating System(OS) is software that manages and handles the hardware and software resources of a computer system. It provides interaction between users of computers and computer hardware. An operating system is responsible for managing and controlling all the activities and sharing of computer resources. An operating system is a low-level Software that includes all the basic functions like processor management, memory management, Error detection, etc. <br> <br>

            This Operating System tutorial will cover all the basic to advance operating system concepts like System Structure, CPU Scheduling, Deadlock, file and disk management, and many more.<br><br>

            <h3>Types of real-time systems based on timing constraints:</h3><br><br>
            1. <b>Hard real-time system:</b> This type of system can never miss its deadline. Missing the deadline may have disastrous consequences. The usefulness of results produced by a hard real-time system decreases abruptly and may become negative if tardiness increases. Tardiness means how late a real-time system completes its task with respect to its deadline. Example: Flight controller system. <br><br>
            2. <b>Soft real-time system:</b> This type of system can miss its deadline occasionally with some acceptably low probability. Missing the deadline have no disastrous consequences. The usefulness of results produced by a soft real-time system decreases gradually with an increase in tardiness. Example: Telephone switches. <br><br>
            3. <b>Firm Real-Time Systems:</b> These are systems that lie between hard and soft real-time systems. In firm real-time systems, missing a deadline is tolerable, but the usefulness of the output decreases with time. Examples of firm real-time systems include online trading systems, online auction systems, and reservation systems.<br><br>

            <h3>Reference model of the real-time system: </h3><br><br>
            Our reference model is characterized by three elements:<br><br>
            1. A workload model: It specifies the application supported by the system. <br>
            2. A resource model: It specifies the resources available to the application. <br>
            3. Algorithms: It specifies how the application system will use resources. <br><br><br>

            <h3>Terms related to real-time system:</h3><br><br>
            1. Job: A job is a small piece of work that can be assigned to a processor and may or may not require resources. <br>
            2. Task: A set of related jobs that jointly provide some system functionality. <br>
            3. Release time of a job: It is the time at which the job becomes ready for execution. <br>
            4. Execution time of a job: It is the time taken by the job to finish its execution. <br>
            5. Deadline of a job: It is the time by which a job should finish its execution. Deadline is of two types: absolute deadline and relative deadline. <br>
            6. Response time of a job: It is the length of time from the release time of a job to the instant when it finishes. <br>
            7. The maximum allowable response time of a job is called its relative deadline. <br>
            8. The absolute deadline of a job is equal to its relative deadline plus its release time. <br>
            9.Processors are also known as active resources. They are essential for the execution of a job. A job must have one or more processors in order to execute and proceed towards completion. Example: computer, transmission links. <br>
            10. Resources are also known as passive resources. A job may or may not require a resource during its execution. Example: memory, mutex. <br>
            11. Two resources are identical if they can be used interchangeably else they are heterogeneous. 
             <br><br><br>

            <h3>Advantages:</h3> <br><br>
            1. Real-time systems provide immediate and accurate responses to external events, making them suitable for critical applications such as air traffic control, medical equipment, and industrial automation.<br>
            2. They can automate complex tasks that would otherwise be impossible to perform manually, thus improving productivity and efficiency.<br>
            3. Real-time systems can reduce human error by automating tasks that require precision, accuracy, and consistency.<br>
            4. They can help to reduce costs by minimizing the need for human intervention and reducing the risk of errors.<br>
            5. Real-time systems can be customized to meet specific requirements, making them ideal for a wide range of applications.<br><br>

            <h3>Disadvantages:</h3> <br><br>
            1. Real-time systems can be complex and difficult to design, implement, and test, requiring specialized skills and expertise.
            2. They can be expensive to develop, as they require specialized hardware and software components.
            3. Real-time systems are typically less flexible than other types of computer systems, as they must adhere to strict timing requirements and cannot be easily modified or adapted to changing circumstances.
            4. They can be vulnerable to failures and malfunctions, which can have serious consequences in critical applications.
            5. Real-time systems require careful planning and management, as they must be continually monitored and maintained to ensure they operate correctly. <br><br>

            <h3>Operating System Functions</h3> <br><br>
            1. Memory and processor Management <br>
            2. Network Management<br>
            3. Security Management<br>
            4. File Management<br>
            5. Error Detection<br>
            6. Job Accounting<br><br>

            <h3>Why learn Operating Systems?</h3> <br><br>
            OS is the most important part of a computer. Through OS users can interact with computer software. It provides an interface between Hardware and CPU. It also provides a platform for the program to run on it and services to users. It performs all the basic tasks required in an application.<br><br>

            <h3>Top 10 Operating System Examples?</h3> <br><br>
            1. Windows<br>
            2. Linux <br>
            3. MacOS <br>
            4. Ios <br>
            5. Android <br>
            6. Ubuntu<br>
            7. CentOS<br>
            8. Solaris<br>
            9. Chrome OS<br>
            10. Fedora<br><br>
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