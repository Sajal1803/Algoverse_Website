<!DOCTYPE html>
<html lang="en">

<head>

    <title>Array Data Structure- Algoverse</title>
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
        </nav>f
    </header>

    <section class="container1">
        <div class="box1">
            <p class="subtopic">
            <h1>What is Array ?</h1><br> An array is a collection of items of same data type stored at contiguous memory
            locations. <br>
            This makes it easier to calculate the position of each element by simply adding an offset to a base value,
            i.e., the memory location of the first element of the array (generally denoted by the name of the array).
            The base value is index 0 and the difference between the two indexes is the offset. <br> <br>
            For simplicity, we can think of an array as a fleet of stairs where on each step is placed a value (let's
            say one of your friends). Here, you can identify the location of any of your friends by simply knowing the
            count of the step they are on.
            Remember: “Location of next index depends on the data type we use”. <br><br>
            <img class="centerimage" src="../images/array-1.png" alt="MemoryLocation"> <br><br><br>
            <h2>Is the array always of a fixed size?</h2> <br>
            In C language, the array has a fixed size meaning once the size is given to it, it cannot be changed i.e.
            you can't shrink it nor can you expand it. The reason was that for expanding if we change the size we can't
            be sure ( it's not possible every time) that we get the next memory location to us for free. The shrinking
            will not work because the array, when declared, gets memory statically allocated, and thus compiler is the
            only one that can destroy it. <br><br>
            <h2>Types of indexing in an array: </h2> <br>
            <ul>
                <li>0 (zero-based indexing): The first element of the array is indexed by a subscript of 0.</li>
                <li>1 (one-based indexing): The first element of the array is indexed by the subscript of 1.</li>
                <li>n (N-based indexing): The base index of an array can be freely chosen. Usually, programming
                    languages allowing n-based indexing also allow negative index values, and other scalar data types
                    like enumerations, or characters may be used as an array index.</li>
            </ul> <br> <br>
            <img class="centerimage" src="../images/Array-2.jpeg" alt="Array-2"> <br><br><br>
            <h2>How an Array is initialized?</h2> <br>By default the array is uninitialized, and no elements of the
            array are set to any value. However, for the proper working of the array, array initialization becomes
            important. Array initialization can be done by the following methods: <br><br>
            <h3 class="h3topics">1. Passing no value within the initializer: </h3> <br> One can initialize the array by
            defining the size of the array and passing no values within the initializer. <br><br>
            <div class="code">
                <h3>Syntax:</h3> <code>int arr[ 5 ] = {  };</code> <br><br>
            </div> <br> <br>
            <h3 class="h3topics">2. By passing specific values within the initializer:</h3> <br> One can initialize the
            array by defining the size of the array and passing specific values within the initializer. <br><br>
            <div class="code">
                <h3>Syntax:</h3> <code>int arr[ 5 ] = { 1, 2, 3, 4, 5 };</code> <br><br>
            </div> <br> <br>
            <h3 class="h3topics">3. By passing specific values within the initializer but not declaring the size:</h3>
            <br> One can initialize the array by passing specific values within the initializer and not particularly
            mentioning the size, the size is interpreted by the compiler. <br><br>
            <div class="code">
                <h3>Syntax:</h3> <code>int arr[  ] = { 1, 2, 3, 4, 5 };</code> <br><br>
            </div> <br> <br>
            <h3 class="h3topics">4. Universal Initialization:</h3> <br> After the adoption of universal initialization
            in C++, one can avoid using the equals sign between the declaration and the initializer. <br><br>
            <div class="code">
                <h3>Syntax:</h3><code>int arr[ ]  { 1, 2, 3, 4, 5 };</code> <br><br>
            </div> <br> <br>

            <h2>What are the different operations on the array?</h2> <br><br>
            Arrays allow random access to elements. This makes accessing elements by position faster. Hence operation
            like searching, insertion, and access becomes really efficient. Array elements can be accessed using the
            loops. <br><br><br>

            <h3>1. Insertion In Array :</h3> <br> We try to insert a value to a particular array index position, as the
            array provides random access it can be done easily using the assignment operator. <br><br>
            <h3>Pseudo Code:</h3> <br>
            <div class="code1"><code>// to insert a value= 10 at index position 2; <br> arr[ 2 ] = 10;</code> <br><br>
            </div> <br> <br>
            <h3>Time Complexity:</h3> <br>
            <ul>
                <li><span>O(1) to insert a single element</span></li>
                <li><span>O(N) to insert all the array elements [where N is the size of the array]</span></li>
            </ul> <br>
            Here is the code for working in an array: <br><br>
            <div class="code2"><code>#include < iostream > <br>
                using namespace std; <br><br>
                int main() <br>
                { <br> 
                    int arr[3] = {}; <br>
                    arr[0] = 1; <br>
                    arr[1] = 2; <br>
                    arr[2] = 3; <br>
                    return 0;<br>
                }<br>
                </code></div> <br><br>

            <h3>2. Access elements In Array :</h3> <br> Accessing array elements become extremely important, in order to
            perform operations on arrays. <br><br>
            <h3>Pseudo Code:</h3> <br>
            <div class="code1"><code>// to access array element at index position 2, we simply can write <br> 
                return arr[ 2 ] ;</code> <br><br></div> <br> <br>
            <h3>Time Complexity: O(1)</h3> <br>
            Here is the code for working in an array: <br><br>
            <div class="code2"><code>#include < iostream > <br>
                    using namespace std; <br><br>
                    int main() <br>
                    { <br> 
                        int arr[] = { 1, 2, 3, 4 }; <br>
                        // accessing element at index 2 <br>
                        cout << arr[2] << endl; <br> <br>
                        return 0;<br>
                    }<br>
                    </code></div> <br><br>

            <h3>Output:</h3> <br>
            <div class="code2"> 3</div> <br><br>

            <h3>3. Searching In Array :</h3> <br> We try to find a particular value in the array, in order to do that we
            need to access all the array elements and look for the particular value. <br><br>
            <h3>Pseudo Code:</h3> <br>
            <div class="code1"><code>// searching for value 2 in the array; <br>
                    Loop from i = 0 to 5: <br>
                        check if  arr[i] = 2: <br>
                            return true; <br> </code> <br><br></div> <br> <br>
            <h3>Time Complexity: O(N)</h3>,, where N is the size of the array. <br>
            Here is the code for working in an array: <br><br>
            <div class="code2"><code>#include < iostream > <br>
                    using namespace std; <br><br>
                    int main() <br>
                    { <br> 
                        int arr[4]; <br><br>
                            arr[0] = 1;<br>
                            arr[1] = 2;<br>
                            arr[2] = 3;<br>
                            arr[3] = 4;<br>
                            for (int i = 0; i < 4; i++) <br>
                            printf("%d\n", arr[i]); <br><br>
                        return 0;
                    }<br>
                    </code></div> <br><br>

            <h3>Output:</h3> <br>
            <div class="code2"> 1 <br>2 <br> 3 <br> 4 <br> </div> <br>Here the value 5 is printed because the first
            element has index zero and at the zeroth index, we already assigned the value 5. <br><br><br>

            <h3>Types Of Array:</h3> <br>
            <h5>1. One-dimensional array (1-D arrays)</h5> <br>
            <h5>2. Multidimensional array</h5> <br> <br>

            <h3>Advantages Of Using Array:</h3> <br><br>
            1. Arrays allow random access to elements. This makes accessing elements by position faster. <br>
            2. Arrays have better cache locality which makes a pretty big difference in performance. <br>
            3. Arrays represent multiple data items of the same type using a single name. <br> <br>

            <h3>Disadvantages Of Using Array:</h3> <br><br>
            You can't change the size i.e. once you have declared the array you can't change its size because of static
            memory allocation. Here Insertion(s) and deletion(s) are difficult as the elements are stored in consecutive
            memory locations and the shifting operation is costly too.
            Now if take an example of the implementation of data structure Stack using array there are some obvious
            flaws. <br>
            Let's take the POP operation of the stack. The algorithm would go something like this. <br><br>

            1. Check for the stack underflow <br>
            2. Decrement the top by 1 <br> <br>
            What we are doing here is, that the pointer to the topmost element is decremented, which means we are just
            bounding our view, and actually that element stays there taking up the memory space. If you have an array
            (as a Stack) of any primitive data type then it might be ok. But in the case of an array of Objects, it
            would take a lot of memory. <br><br>

            <h3>Application On Array:</h3> <br><br>
            1. Array stores data elements of the same data type. <br>
            2. Arrays are used when the size of the data set is known. <br>
            3. Used in solving matrix problems. <br>
            4. Applied as a lookup table in computer. <br>
            5. Databases records are also implemented by the array. <br>
            6. Helps in implementing sorting algorithm. <br>
            7. The different variables of the same type can be saved under one name. <br>
            8. Arrays can be used for CPU scheduling. <br>
            9. Used to Implement other data structures like Stacks, Queues, Heaps, Hash tables, etc. <br>
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