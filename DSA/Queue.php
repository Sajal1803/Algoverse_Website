<!DOCTYPE html>
<html lang="en">

<head>

    <title>Queue Data Structure- Algoverses</title>
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
            <h1>What is Queue ?</h1><br>A queue is a linear data structure that is open at both ends and the operations
            are performed in First In First Out (FIFO) order. <br>
            We define a queue to be a list in which all additions to the list are made at one end, and all deletions
            from the list are made at the other end. The element which is first pushed into the order, the operation is
            first performed on that.<br><br>

            <h2></h2> <br>
            <h2>FIFO Principle of Queue:</h2> <br>
            <ul>
                <li class="bp0">A Queue is like a line waiting to purchase tickets, where the first person in line is the
                    first person served. (i.e. First come first serve).</li>
                <li class="bp0">Position of the entry in a queue ready to be served, that is, the first entry that will
                    be removed from the queue, is called the front of the queue(sometimes, head of the queue),
                    similarly, the position of the last entry in the queue, that is, the one most recently added, is
                    called the rear (or the tail) of the queue. See the below figure.
                </li>
            </ul> <br> <br>
            <img class="centerimage" src="../images/Queue-1.png" alt="Queue-1"> <br><br>

            <h2><u>Characteristics of Queue:</u></h2><br>
            <ul>
                <li class="bp">Queue can handle multiple data.</li>
                <li class="bp">We can access both ends.</li>
                <li class="bp">They are fast and flexible.</li>
            </ul> <br><br>

            <h1><u>Queue Representation:</u></h1> <br><br>
            <h2><b>1. Array Representation of Queue:</b></h2> <br>
            Like stacks, Queues can also be represented in an array: In this representation, the Queue is implemented
            using the array. Variables used in this case are <br>
            <ul>
                <li><b>Queue:</b> the name of the array storing queue elements.</li>
                <li><b>Front:</b> the index where the first element is stored in the array representing the queue.</li>
                <li><b>Rear:</b> the index where the last element is stored in an array representing the queue.</li>
            </ul> <br><br>

            <h2>Array representation of queue:</h2><br>
            <div class="code2">
                <code>
                // Creating an empty queue <br> <br>
                
                // A structure to represent a queue <br>
                struct Queue { <br>
                    int front, rear, size; <br>
                    unsigned capacity; <br>
                    int* array; <br>
                }; <br><br>
                
                // function to create a queue of given capacity <br>
                // It initializes size of queue as 0 <br>
                struct Queue* createQueue(unsigned capacity) <br>
                { <br>
                    struct Queue* queue = (struct Queue*)malloc(sizeof(struct Queue)); <br>
                    queue->capacity = capacity;<br>
                    queue->front = queue->size = 0;<br>
                    queue->rear = capacity - 1;<br>
                    queue->array = (int*)malloc(queue->capacity * sizeof(int)); <br>
                    return queue;<br>
                }<br>
                </code> <br>
            </div> <br> <br>

            <h2><b>2. Linked List Representation of Queue:</b></h2> <br>
            A queue can also be represented using following entities: <br>
            <ul>
                <li class="bp">Linked-lists,</li>
                <li class="bp">Pointers, and</li>
                <li class="bp">Structures</li>
            </ul> <br><br>

            <h2>Array representation of queue:</h2><br>
            <div class="code2">
                <code>
                    // A C program to demonstrate linked list based <br>
                    // implementation of queue<br><br>
                     
                    // A linked list (LL) node to store a queue entry<br>
                    struct QNode {<br>
                        int key;<br>
                        struct QNode* next;<br>
                    };<br><br>
                     
                    // The queue, front stores the front node of LL and rear<br>
                    // stores the last node of LL<br>
                    struct Queue {<br>
                        struct QNode *front, *rear;<br>
                    };<br>
                     
                    // A utility function to create a new linked list node.<br>
                    struct QNode* newNode(int k)<br>
                    {<br>
                        struct QNode* temp= (struct QNode*)malloc(sizeof(struct QNode));<br>
                        temp->key = k;<br>
                        temp->next = NULL;<br>
                        return temp;<br>
                    }<br><br>
                     
                    // A utility function to create an empty queue<br>
                    struct Queue* createQueue()<br>
                    {<br>
                        struct Queue* q= (struct Queue*)malloc(sizeof(struct Queue));<br>
                        q->front = q->rear = NULL;<br>
                        return q;<br>
                    }<br>
                </code> <br>
            </div> <br> <br>

            <h3><u>Types of Queue:</u></h3> <br>
            There are different types of queues: <br><br>
            <ul>
                <li class="bp0"><b>Input Restricted Queue: </b> This is a simple queue. In this type of queue, the input can be taken from only one end but deletion can be done from any of the ends.<br>
                <li class="bp0"><b>Output Restricted Queue:</b> This is also a simple queue. In this type of queue, the input can be taken from both ends but deletion can be done from only one end.</li>
                <li class="bp0"><b>Circular Queue:</b>This is a special type of queue where the last position is connected back to the first position. Here also the operations are performed in FIFO order.</li>
                <li class="bp0"><b>Double-Ended Queue (Dequeue):</b> In a double-ended queue the insertion and deletion operations, both can be performed from both ends.</li>
                <li class="bp0"><b>Priority Queue:</b> A priority queue is a special queue where the elements are accessed based on the priority assigned to them. </li>
                </li> <br>
            </ul>

            <h2>Basic Operations for Queue in Data Structure:</h2><br>
            Some of the basic operations for Queue in Data Structure are: <br>
            <ul>
                <li class="bp"><b>Enqueue()-</b> Adds (or stores) an element to the end of the queue.. <br>
                <li class="bp"><b>Dequeue()-</b> Removal of elements from the queue.</li>
                <li class="bp"><b>Peek() or front()-</b> Acquires the data element available at the front node of the queue without deleting it.</li>
                <li class="bp"><b>rear()-</b> This operation returns the element at the rear end without removing it.</li>
                <li class="bp"><b>isFull()-</b> Validates if the queue is full.</li>
                <li class="bp"><b>isNull()-</b> Checks if the queue is empty.</li>
                </li> <br>
            </ul> <br><br>
            There are a few supporting operations (auxiliary operations): <br><br>
            <h2>1. Enqueue():</h2> <br>
            Enqueue() operation in Queue adds (or stores) an element to the end of the queue. <br>
            The following steps should be taken to enqueue (insert) data into a queue: <br>
            <ul>
                <li class="bp1"><b>Step 1:</b>Check if the queue is full. <br>
                <li class="bp1"><b>Step 2:</b>If the queue is full, return overflow error and exit.</li>
                <li class="bp1"><b>Step 3:</b>If the queue is not full, increment the rear pointer to point to the next empty space.</li>
                <li class="bp1"><b>Step 4:</b> Add the data element to the queue location, where the rear is pointing.</li>
                <li class="bp1"><b>Step 5:</b>return success.</li>
            </ul> <br><br>
            <img class="centerimage" src="../images/Queue-2.png" alt="Queue-2"> <br><br><br>

            <h2>Implementation of Enqueue:</h2> <br>
            <div class="code2">
                <code>
                    // Function to add an item to the queue.<br>
                    // It changes rear and size <br>
                    void enqueue(struct Queue* queue, int item)<br>
                    {<br>
                        if (isFull(queue))<br>
                            return;<br>
                        queue->rear = (queue->rear + 1) % queue->capacity;<br>
                        queue->array[queue->rear] = item;<br>
                        queue->size = queue->size + 1;<br>
                        printf("%d enqueued to queue\n", item);<br>
                    }<br>
                </code> <br>
            </div> <br> <br>

            <h2>2. Dequeue():</h2> <br>
            Removes (or access) the first element from the queue. <br>
            The following steps are taken to perform the dequeue operation: <br>
            <ul>
                <li class="bp1"><b>Step 1:</b>Check if the queue is full. <br>
                <li class="bp1"><b>Step 2:</b>If the queue is empty, return the underflow error and exit.</li>
                <li class="bp1"><b>Step 3:</b>If the queue is not empty, access the data where the front is pointing.</li>
                <li class="bp1"><b>Step 4:</b>Increment the front pointer to point to the next available data element.</li>
                <li class="bp1"><b>Step 5:</b>The return success.</li>
            </ul> <br><br>
            <img class="centerimage" src="../images/Queue-3.png" alt="Queue-3"> <br><br><br>

            <h2>Implementation of Dequeue:</h2> <br>
            <div class="code2">
                <code>
                    // Function to remove an item from queue. <br>
                    // It changes front and size<br>
                    int dequeue(struct Queue* queue)<br>
                    {<br>
                        if (isEmpty(queue)) {<br>
                            printf("\nQueue is empty\n");<br>
                            return;<br>
                        }<br>
                        int item = queue->array[queue->front];<br>
                        queue->front = (queue->front + 1) % queue->capacity;<br>
                        queue->size = queue->size - 1;<br>
                        return item;<br>
                    }<br>
                </code> <br>
            </div> <br> <br>

            <h2>3. front():</h2> <br>
            This operation returns the element at the front end without removing it. <br>
            <div class="code2">
                <code>
                    // Function to get front of queue <br>
                    int front(struct Queue* queue) <br>
                    { <br>
                        if (isempty(queue)) <br>
                            return INT_MIN; <br>
                        return queue->arr[queue->front]; <br>
                    }<br>
                </code> <br>
            </div> <br> <br>

            <h2>4. rear():</h2> <br>
            This operation returns the element at the rear end without removing it. <br>
            <div class="code2">
                <code>
                    // Function to get front of queue <br>
                    int front(struct Queue* queue)<br>
                    {<br>
                        if (isempty(queue))<br>
                            return INT_MIN;<br>
                        return queue->arr[queue->rear];<br>
                    }<br>
                </code> <br>
            </div> <br> <br>

            <h2>5. isEmpty():</h2> <br>
            This operation returns a boolean value that indicates whether the queue is empty or not. <br>
            <div class="code2">
                <code>
                    // Queue is empty when size is 0<br>
                    bool isEmpty(struct Queue* queue)<br>
                    {<br>
                        return (queue->size == 0);<br>
                    }<br>
                </code> <br>
            </div> <br> <br>

            <h2>5. isFull():</h2> <br>
            This operation returns a boolean value that indicates whether the queue is full or not. <br>
            <div class="code2">
                <code>
                    // Queue is full when size becomes<br>
                    // equal to the capacity<br>
                    bool isFull(struct Queue* queue)<br>
                    {<br>
                        return (queue->size == queue->capacity);<br>
                    }<br>
                </code> <br>
            </div> <br> <br>

            <h1>Implementation of Queue:</h1> <br>
            Queue can be implemented using following data structures: <br><br>
            <ul>
                <li class="bp1">Implementation of Queue using Structure in C/C++</li>
                <li class="bp1">Implementation of Queue using Arrays</li>
                <li class="bp1">Implementation of Queue using Linked List</li>
            </ul> <br><br>
            We have discussed the Structure implementation of Queue below: <br>
            <div class="code2">
                <code>
                    // C program for array implementation of queue<br>
                    #include < limits.h ><br>
                    #include < stdio.h ><br>
                    #include < stdlib.h ><br><br>

                    // A structure to represent a queue<br>
                    struct Queue {<br>
                        int front, rear, size;<br>
                        unsigned capacity;<br>
                        int* array;<br>
                    };<br><br>

                    // function to create a queue<br>
                    // of given capacity.<br>
                    // It initializes size of queue as 0<br>
                    struct Queue* createQueue(unsigned capacity)<br>
                    {<br>
                        struct Queue* queue= (struct Queue*)malloc(sizeof(struct Queue));<br>
                        queue->capacity = capacity;<br>
                        queue->front = queue->size = 0;<br>

                        // This is important, see the enqueue<br>
                        queue->rear = capacity - 1;<br>
                        queue->array= (int*)malloc(queue->capacity * sizeof(int));<br>
                        return queue;<br>
                    }<br><br>

                    // Queue is full when size becomes<br>
                    // equal to the capacity<br>
                    int isFull(struct Queue* queue)<br>
                    {<br>
                        return (queue->size == queue->capacity);<br>
                    }<br><br>

                    // Queue is empty when size is 0<br>
                    int isEmpty(struct Queue* queue)<br>
                    {<br>
                        return (queue->size == 0);<br>
                    }<br><br>

                    // Function to add an item to the queue.<br>
                    // It changes rear and size<br>
                    void enqueue(struct Queue* queue, int item)<br>
                    {<br>
                        if (isFull(queue))<br>
                            return;<br>
                        queue->rear = (queue->rear + 1) % queue->capacity;<br>
                        queue->array[queue->rear] = item;<br>
                        queue->size = queue->size + 1;<br>
                        printf("%d enqueued to queue\n", item);<br>
                    }<br><br>

                    // Function to remove an item from queue.<br>
                    // It changes front and size<br>
                    int dequeue(struct Queue* queue)<br>
                    {<br>
                        if (isEmpty(queue))<br>
                            return INT_MIN;<br>
                        int item = queue->array[queue->front];<br>
                        queue->front = (queue->front + 1) % queue->capacity;<br>
                        queue->size = queue->size - 1;<br>
                        return item;<br>
                    }<br><br>

                    // Function to get front of queue<br>
                    int front(struct Queue* queue)<br>
                    {<br>
                        if (isEmpty(queue))<br>
                            return INT_MIN;<br>
                        return queue->array[queue->front];<br>
                    }<br><br>

                    // Function to get rear of queue<br>
                    int rear(struct Queue* queue)<br>
                    {<br>
                        if (isEmpty(queue))<br>
                            return INT_MIN;<br>
                        return queue->array[queue->rear];<br>
                    }<br><br>

                    // Driver program to test above functions./<br>
                    int main()<br>
                    {<br>
                        struct Queue* queue = createQueue(1000);<br><br>

                        enqueue(queue, 10);<br>
                        enqueue(queue, 20);<br>
                        enqueue(queue, 30);<br>
                        enqueue(queue, 40);<br><br>

                        printf("%d dequeued from queue\n", dequeue(queue));<br>
                        printf("Front item is %d\n", front(queue));<br>
                        printf("Rear item is %d\n", rear(queue));<br><br>

                        return 0;<br>
                    }<br>
                </code> <br>
            </div> <br> <br>

            <h2>Output:</h2>
            <div class="code2">
                10 enqueued to queue <br>
                20 enqueued to queue <br>
                30 enqueued to queue <br>
                40 enqueued to queue <br>
                10 dequeued from queue <br>
                Front item is 20 <br>
                Rear item is 40 <br>
            </div> <br> <br>
            <b>Time complexity:</b> All the operations have O(1) time complexity. <br>
           <b>Auxiliary Space:</b> O(N) <br> <br>

            <h3>Applications Of Queue:</h3> <br>
            Application of queue is common. In a computer system, there may be queues of tasks waiting for the printer, for access to disk storage, or even in a time-sharing system, for use of the CPU. Within a single program, there may be multiple requests to be kept in a queue, or one task may create other tasks, which must be done in turn by keeping them in a queue. <br>
            <li class="bp">It has a single resource and multiple consumers.</li> <br>
            <li class="bp">It synchronizes between slow and fast devices.</li><br>
            <li class="bp">In a network, a queue is used in devices such as a router/switch and mail queue.</li><br>
            <li class="bp"><b>Variations:</b> dequeue, priority queue and double-ended priority queue.</li><br> <br>
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