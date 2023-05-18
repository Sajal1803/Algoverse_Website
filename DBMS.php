<!DOCTYPE html>
<html lang="en">

<head>

    <title>Database Management</title>
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
            <h2 class="subheading">Database Management System</h2>
            <p class="subtopic">
            <h1>What is DBMS ?</h1><br> Database Management System is a software or technology used to manage data from a database. Some popular databases are MySQL, Oracle, MongoDB, etc. DBMS provides many operations e.g. creating a database, Storing in the database, updating an existing database, delete from the database. DBMS is a system that enables you to store, modify and retrieve data in an organized way. It also provides security to the database. <br> <br>
            In this Database Management System tutorial you'll learn basic to advanced topics like ER model, Relational Model, Relation Algebra, Normalization, File Organization, etc.
             <br><br>

            <h2>Need For DBMS</h2> <br><br>
            A Data Base Management System is a system software for easy, efficient and reliable data processing and management. It can be used for: <br>
            Creation of a database. <br>
            Retrieval of information from the database.<br>
            Updating the database.<br>
            Managing a database.<br>
            Multiple User Interface<br>
            Data scalability, expandability and flexibility: We can change schema of the database, all schema will be updated according to it.<br>
            Overall the time for developing an application is reduced.<br>
            Security: Simplifies data storage as it is possible to assign security permissions allowing restricted access to data.<br>
            Data organization: DBMS allow users to organize large amounts of data in a structured and systematic way. Data is organized into tables, fields, and records, making it easy to manage, store, and retrieve information.<br>

            Data scalability: DBMS are designed to handle large amounts of data and are scalable to meet the growing needs of organizations. As organizations grow, DBMS can scale up to handle increasing amounts of data and user traffic.<br>

            we will discuss the need for a DBMS in detail, covering the following points:<br><br>

            1.Data Organization and Management<br><br>

            2.Data Security and Privacy<br><br>

            3.Data Integrity and Consistency<br><br>

            4.Concurrent Data Access<br><br>

            5.Data Analysis and Reporting<br><br>

            6.Scalability and Flexibility<br><br>

            7.Cost-Effectiveness<br><br>

            8.Data Organization and Management:<br>
            One of the primary needs for a DBMS is data organization and management. DBMSs allow data to be stored in a structured manner, which helps in easier retrieval and analysis. A well-designed database schema enables faster access to information, reducing the time required to find relevant data. A DBMS also provides features like indexing and searching, which make it easier to locate specific data within the database. This allows organizations to manage their data more efficiently and effectively.<br><br>

            9.Data Security and Privacy:<br>
            DBMSs provide a robust security framework that ensures the confidentiality, integrity, and availability of data. They offer authentication and authorization features that control access to the database. DBMSs also provide encryption capabilities to protect sensitive data from unauthorized access. Moreover, DBMSs comply with various data privacy regulations such as the GDPR, HIPAA, and CCPA, ensuring that organizations can store and manage their data in compliance with legal requirements.<br><br>

            10.Data Integrity and Consistency:<br>
            Data integrity and consistency are crucial for any database. DBMSs provide mechanisms that ensure the accuracy and consistency of data. These mechanisms include constraints, triggers, and stored procedures that enforce data integrity rules. DBMSs also provide features like transactions that ensure that data changes are atomic, consistent, isolated, and durable (ACID).<br><br>

            11.Concurrent Data Access:<br>
            A DBMS provides a concurrent access mechanism that allows multiple users to access the same data simultaneously. This is especially important for organizations that require real-time data access. DBMSs use locking mechanisms to ensure that multiple users can access the same data without causing conflicts or data corruption.<br><br>

            12.Data Analysis and Reporting:<br>
            DBMSs provide tools that enable data analysis and reporting. These tools allow organizations to extract useful insights from their data, enabling better decision-making. DBMSs support various data analysis techniques such as OLAP, data mining, and machine learning. Moreover, DBMSs provide features like data visualization and reporting, which enable organizations to present their data in a visually appealing and understandable way.<br><br>

            13.Scalability and Flexibility:<br>
            DBMSs provide scalability and flexibility, enabling organizations to handle increasing amounts of data. DBMSs can be scaled horizontally by adding more servers or vertically by increasing the capacity of existing servers. This makes it easier for organizations to handle large amounts of data without compromising performance. Moreover, DBMSs provide flexibility in terms of data modeling, enabling organizations to adapt their databases to changing business requirements.<br><br>

            14.Cost-Effectiveness: <br>
            DBMSs are cost-effective compared to traditional file-based systems. They reduce storage costs by eliminating redundancy and optimizing data storage. They also reduce development costs by providing tools for database design, maintenance, and administration. Moreover, DBMSs reduce operational costs by automating routine tasks and providing self-tuning capabilities. <br><br><br>

            <h3>Advantages Of DBMS:</h3> <br><br>
            1. Organizing and management of data: DBMS helps in managing large amounts of data in an organized manner. It provides features like create, edit, delete, and read. <br>
            2. Data Security: DBMS provides Security to the data from the unauthorized person. <br>
            3. Improved decision-making: From stored data in the database we can generate graphs, reports, and many visualizations which helps in decision-making.<br>
            4. Consistency: In a traditional database model all things are manual or inconsistent, but DBMS enables to automation of the operations by queries. <br><br>

            <h3>What are the ACID properties in DBMS?</h3> <br><br>
            The full form of ACID is Atomicity, Consistency, Isolation, and Durability <br>
            these are the properties of DBMS that ensure a safe and secure way of sharing data among multiple users. <br>
            A - Atomic: All changes to the data must be performed successfully or not at all. <br>
            C - Consistent: Data must be in a consistent state before and after the transaction. <br>
            I - Isolated: No other process can change the data while the transaction is going on. <br>
            D - Durable: The changes made by a transaction must persist. <br><br>

            <h3>What are different languages present in DBMS?</h3> <br><br>
            1. DDL (Data Definition Language): These are the collection of commands which are required to define the database. <br>
            E.g., CREATE, ALTER, RENAME, TRUNCATE, DROP, etc. <br>
            2. DML (Data Manipulation Language): These are the collection of commands which are required to manipulate the data stored in a database.<br>
            E.g., SELECT, UPDATE, INSERT, DELETE, etc.<br>
            3. DCL (Data Control Language): These are the collection of commands which are dealt with the user permissions and controls of the database system.<br>
            E.g, GRANT, and REVOKE.<br>
            4. TCL (Transaction Control Language): These are the collection of commands which are required to deal with the transaction of the database.<br>
            E.g., COMMIT, ROLLBACK, and SAVEPOINT.<br><br>
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