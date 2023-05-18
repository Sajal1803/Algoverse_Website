<!DOCTYPE html>
<html lang="en">

<head>

    <title>LinkedList Data Structure- Algoverse</title>
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
            <h1>What is Linkedlist Data Structure ?</h1><br>A linked list is a linear data structure, in which the
            elements are not stored at contiguous memory locations. The elements in a linked list are linked using
            pointers as shown in the below image:<br><br>
            <img class="centerimage" src="../images/Linkedlist-1.png" alt="MemoryLocation"> <br><br>

            In simple words, a linked list consists of nodes where each node contains a data field and a reference(link)
            to the next node in the list. <br> It is basically chains of nodes, each node contains information such as
            data and a pointer to the next node in the chain. In the linked list there is a head pointer, which points
            to the first element of the linked list, and if the list is empty then it simply points to null or nothing.
            <br><br>

            <h2>Why linked list data structure needed?</h2> <br> 
            Here are a few advantages of a linked list that is listed below, it will help you understand why it is
            necessary to know. <br> <br>
            <b>Dynamic Data structure:</b> The size of memory can be allocated or de-allocated at run time based on the
            operation insertion or deletion. <br> <br>
            <b>Ease of Insertion/Deletion:</b> The insertion and deletion of elements are simpler than arrays since no
            elements need to be shifted after insertion and deletion, Just the address needed to be updated. <br><br>
            <b>Efficient Memory Utilization:</b> As we know Linked List is a dynamic data structure the size increases
            or decreases as per the requirement so this avoids the wastage of memory.<br><br>
            <b>Implementation:</b> Various advanced data structures can be implemented using a linked list like a stack,
            queue, graph, hash maps, etc.<br><br>

            <h2>Types of Linked List: </h2> <br>
            <ul>
                <li class="bp"><b>Single-linked list</b></li>
                <li class="bp"><b>Double-linked list</b></li>
                <li class="bp"><b>Cicular-linked list</b></li>
            </ul> <br> <br>

            <h1>1. Singly-Linked list</h1> <br>
            Traversal of items can be done in the forward direction only due to the linking of every node to its next
            node. <br><br>
            <img class="centerimage" src="../images/Linkedlist-4.png" alt="Linkedlist-4"> <br><br><br>

            <h2>Representation of Single linked list:</h2> <br>
            <h3>A Node Creation:</h3>
            <div class="code2">
                <code>
                    // A Single linked list node <br>
                    class Node { <br>
                    public: <br>
                        int data; <br>
                        Node* next; <br>
                    };<br>
                </code> <br>
            </div> <br> <br>

            <h3>Commonly used operations on Singly Linked List:</h3> <br>
            The following operations are performed on a Single Linked List <br><br>
            <ul>
                <li class="bp"><b>Insertion:</b> The insertion operation can be performed in three ways. They are as follows… <br>
                <li class="bp1">Inserting At the Beginning of the list </li>
                <li class="bp1">Inserting At End of the list</li>
                <li class="bp1">Inserting At Specific location in the list</li></li> <br>

                <li class="bp"><b>Deletion:</b> The deletion operation can be performed in three ways. They are as follows… <br>
                <li class="bp1">Deleting from the Beginning of the list</li>
                <li class="bp1">Deleting from the End of the list</li>
                <li class="bp1">Deleting a Specific Node</li></li> <br>

                <li class="bp"><b>Search:</b> It is a process of determining and retrieving a specific node either from the front, the end or anywhere in the list.</li> <br>

                <li class="bp"><b>Display:</b> This process displays the elements of a Single-linked list.</li> <br>
            </ul> <br><br>

            <h1>2. Doubly-Linked list</h1> <br>
            Traversal of items can be done in both forward and backward directions as every node contains an additional prev pointer that points to the previous node. <br><br>
            <img class="centerimage" src="../images/Linkedlist-5.png" alt="Linkedlist-5"> <br><br><br>

            <h2>Representation of Doubly-Linked list:</h2> <br>
            <h3>A Node Creation:</h3>
            <div class="code2">
                <code>
                    // Node of a Doubly-Linked list <br>
                    class Node { <br>
                        public: <br>
                            int data; <br>
                            Node* next; // Pointer to next node in DLL <br>
                            Node* prev; // Pointer to previous node in DLL <br>
                        }; <br>
                </code> <br>
            </div> <br> <br>

            <h3>Commonly used operations on Doubly-Linked List:</h3> <br>
            The following operations are performed on a Doubly-Linked List <br><br>
            <ul>
                <li class="bp"><b>Insertion:</b> The insertion operation can be performed in three ways. They are as follows… <br>
                <li class="bp1">Inserting at the Beginning of the list </li>
                <li class="bp1">Inserting after a given node </li>
                <li class="bp1">Inserting at End </li>
                <li class="bp1">Inserting before a given node</li></li> <br>

                <li class="bp"><b>Deletion:</b> The deletion operation can be performed in three ways. They are as follows… <br>
                <li class="bp1">Deleting from the Beginning of the list</li>
                <li class="bp1">Deleting from the End of the list</li>
                <li class="bp1">Deleting a Specific Node</li></li> <br>

                <li class="bp"><b>Display:</b> This process displays the elements of a Doubly-linked list.</li> <br>
            </ul> <br><br>

            <h1>3. Circular Linked list</h1> <br>
            A circular linked list is a type of linked list in which the first and the last nodes are also connected to each other to form a circle, there is no NULL at the end.  <br><br>
            <img class="centerimage" src="../images/Linkedlist-2.png" alt="Linkedlist-2"> <br><br><br>

            <h3>Commonly used operations on Circular Linked List:</h3> <br>
            The following operations are performed on a Circular Linked List <br><br>
            <ul>
                <li class="bp"><b>Insertion:</b> The insertion operation can be performed in three ways. They are as follows… <br>
                <li class="bp1">Insertion in an empty list </li>
                <li class="bp1">Insertion at the beginning of the list </li>
                <li class="bp1">Insertion at the end of the list </li>
                <li class="bp1">Insertion in between the nodes</li></li> <br>
                
                <li class="bp"><b>Deletion:</b> The deletion operation can be performed in three ways. They are as follows… <br>
                <li class="bp1">Deleting from the Beginning of the list</li>
                <li class="bp1">Deleting from the End of the list</li>
                <li class="bp1">Deleting a Specific Node</li></li> <br>

                <li class="bp"><b>Display:</b> This process displays the elements of a Circular linked list.</li> <br>
            </ul> <br><br>

            <h1><b>Linked List vs Array :</b></h1> <br><br>
            <img class="centerimage" src="../images/Linkedlist-3.png" alt="Linkedlist-3"> <br><br><br>

            <h1><b>Linked List vs. Array in Time Complexity :</b></h1> <br><br>
            <img class="centerimage" src="../images/Linkedlist-7.png" alt="Linkedlist-7"> <br><br><br>


            <h3>Advantages Of Linked list:</h3> <br>
            <li class="bp"><b>Dynamic nature:</b> Linked lists are used for dynamic memory allocation.</li></li> <br>
            <li class="bp"><b>Memory efficient:</b> Memory consumption of a linked list is efficient as its size can grow or shrink dynamically according to our requirements, which means effective memory utilization hence, no memory wastage.</li></li> <br>
            <li class="bp"><b>Ease of Insertion and Deletion:</b> Insertion and deletion of nodes are easily implemented in a linked list at any position.</li></li> <br>
            <li class="bp"><b>Implementation:</b> For the implementation of stacks and queues and for the representation of trees and graphs.</li></li> <br>
            <li class="bp">The linked list can be expanded in constant time.</li></li> <br> <br>
            
            <h3>Disadvantages Of Linked List:</h3> <br>
            <li class="bp"><b>Memory usage:</b> The use of pointers is more in linked lists hence, complex and requires more memory.</li></li> <br>
            <li class="bp"><b>Accessing a node:</b>  Random access is not possible due to dynamic memory allocation.</li></li> <br>
            <li class="bp"><b>Search operation costly:</b> Searching for an element is costly and requires O(n) time complexity.</li></li> <br>
            <li class="bp"><b>Traversing in reverse order:</b> Traversing is more time-consuming and reverse traversing is not possible in singly linked lists.</li></li> <br> <br>
             
            <h3>Application Of Linked list:</h3> <br>
            <li class="bp">Linear data structures such as stack, queue, and non-linear data structures such as hash maps, and graphs can be implemented using linked lists.</li></li> <br>
            <li class="bp"><b>Dynamic memory allocation:</b>  We use a linked list of free blocks.</li></li> <br>
            <li class="bp"><b>Implementation of graphs:</b> Adjacency list representation of graphs is the most popular in that it uses linked lists to store adjacent vertices.</li></li> <br>
            <li class="bp">In web browsers and editors, doubly linked lists can be used to build a forwards and backward navigation button.</li></li> <br>
            <li class="bp">A circular doubly linked list can also be used for implementing data structures like Fibonacci heaps.</li></li> <br> <br>
            </p><br><br><br><br><br>
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