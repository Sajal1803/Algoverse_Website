<!DOCTYPE html>
<html lang="en">

<head>

    <title>Heap</title>
    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="../images/logo2.png">

    <!-- BoxIcons v2.1.2 -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">

    <!-- Roboto Font -->
    <link
        href="https://fonts.googleapis.com/css2family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- CSS File -->
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="../css/style2.css">


</head>

<body>
    <header>
        <h2 class="logo" style="color: #e77c24;">Algo<span style="color: white;">verse</span></h2>
        <nav>
            <ul class="navbar">
                <li><a href="../user_page.php">Home</a></li>
                <li><a href="../quiz.php">Test/Quiz</a></li>
                <li><a href="../contact.php">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section class="container1">
        <div class="box1">
            <p class="subtopic">
            <h1>What is Heap Data Structure ? </h1><br> Heap is a special tree-based data structure where the tree is
            always a complete binary tree. <br> Heaps are of two types: Max heap and Min heap. <br>In the case of the max-heap,
            the root node will have a higher value than its subtree, and for the min-heap, the root node will have a
            lower value than its subtree.<br><br><br>
            <img class="centerimage" src="../images/Heap-1.jpg" alt="Array-2"> <br><br><br>
            <h2>Operations of Heap Data Structure:</h2> <br>

            <b>1. Heapify:</b> A process of creating a heap from an array. <br>
            <b>2. Insertion:</b> Process to insert an element in existing heap time complexity O(log N). <br>
            <b>3. Deletion:</b> Deleting the top element of the heap or the highest priority element, and then
            organizing the heap and returning the element with time complexity O(log N). <br>
            <b>4. Peek:</b> To check or find the most prior element in the heap, (max or min element for max and min
            heap).<br> <br> <br>

            <h3>Types Of Heap Data Structure:</h3> <br>
            Generally, Heaps can be of two types: <br>
            <b>1. Max-Heap:</b> In a Max-Heap the key present at the root node must be greatest among the keys present
            at all of it's children. The same property must be recursively true for all sub-trees in that Binary Tree.
            <br>
            <b>2. Min-Heap:</b> In a Min-Heap the key present at the root node must be minimum among the keys present at
            all of it's children. The same property must be recursively true for all sub-trees in that Binary Tree. <br>
            <br> <br>

            <h3>Advantages of Heap Data Structure:</h3> <br>
            <ul>
                <li class="bp"><span>Less time complexity, for inserting or deleting an element in the heap the time complexity is just O(logN).</span></li>
                <li class="bp"><span>It helps to find the minimum number and greatest number.</span></li>
                <li class="bp"><span>To just peek at the most prior element the time complexity is constant O(1).</span></li>
                <li class="bp"><span>Can be implemented using an array, it doesn't need any extra space for pointer.</span></li>
                <li class="bp"><span>Heap can be created with O(N) time.</span></li>
                <li class="bp"><span>A binary heap is a balanced binary tree, and easy to implement.</span></li>
                <li class="bp"><span>Heaps can be used to implement a priority queue.</span></li>
                <li class="bp"><span>Heaps are efficient for large data sets. </span></li>
                <li class="bp"><span>The memory is dynamically allocated. </span></li>
                <li class="bp"><span>Ability to efficiently find the minimum and the maximum element. </span></li>
                <li class="bp"><span>Used in graph algorithms such as Dijkstra and A* search algorithms. </span></li>
            </ul><br><br> <br>

            <h3>Disadvantages Of Heap Data Structure:</h3> <br>
            <ul>
                <li class="bp"><span>The time complexity for searching an element in Heap is O(N).</span></li>
                <li class="bp"><span>To find a successor or predecessor of an element, the heap takes O(N) time, whereas BST takes only O(log N)
                    time.</span></li>
                <li class="bp"><span>To print all elements of the heap in sorted order time complexity is O(N*log N), whereas, for BST, it takes
                    only O(N) time.</span></li>
                <li class="bp"><span>Memory management is more complex in heap memory because it is used globally. Heap memory is divided into
                    two parts-old generations and the young generation etc. at java garbage collection.</span></li>
                <li class="bp"><span>Not suitable for small datasets.</span></li>
                <li class="bp"><span>Complex implementation.</span></li>
                <li class="bp"><span>Traversing is not easy as we need to remove the top element in order to access the rest of the elements. </span></li>
            </ul>  <br><br> <br>

            <h3>Application of Heap Data Structure:</h3> <br>
            <ul>
                <li class="bp"><span>Heap is used to construct a priority queue.</span></li>
                <li class="bp"><span>Heap sort is one of the fastest sorting algorithms with time complexity of O(N* log(N), and it's easy to implement.</span></li>
                <li class="bp"><span>Best First Search (BFS) is an informed search, where unlike the queue in Breadth-First Search, this
                    technique is implemented using a priority queue.</span></li>
                <li class="bp"><span>Heaps can be used to efficiently maintain the median element in a constantly updating data set. </span></li>
                <li class="bp"><span>Heaps can be used in the construction of Huffman coding trees.</span></li>
                <li class="bp"><span>Heap data structures are used in memory management to efficiently allocate and deallocate memory blocks.</span></li>
            </ul>
            <br> <br>

            <h3>Real-Time Application of Heap:</h3> <br>
            1. Patient treatment: In a hospital, an emergency patient, or the patient with more injury is treated first.
            Here the priority is the degree of injury. <br><br>
            2. Systems concerned with security use heap sort, like the Linux kernel. <br><br>

            </p>
            <br><br><br><br><br><br>

        </div>
    </section>

    <footer>
        <div class="last-text">
            <p>Copyright 2023-2024 © By Team Sajal All Rights Reserved.</p>
            <p>Algoverse is Powered by JUET Students</p>
            <p>Algoverse is optimized for learning and training. Examples might be simplified to improve reading and
                learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot
                warrant
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

    <!---scroll-top--->
    <a href="#" class="top"><i class='bx bx-up-arrow-alt'></i></a>
    <script src="https://unpkg.com/scrollreveal"></script>

    <!---custom js link--->
    <script type="text/javascript" src="js/script.js"></script>
    <!-- JS File -->
    <script type="text/javascript" src="js/script.js"></script>

</body>

</html>