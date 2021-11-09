<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:100,200,300,400,500,600,700,800" rel="stylesheet">
    <script src="https://kit.fontawesome.com/798eadb371.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/styles.css"> 
    <link rel="stylesheet" href="/css/app.css"> 
</head>
<body class = " w-screen m-0 bg-fixed subpixel-antialiased" >
    <header class="fixed inset-0 w-screen flex flex-row flex-nowrap items-center justify-between max-h-16 px-36 bg-gray-800 ">
        <div id="show-menu">   
            <i class="fas fa-bars fa-lg"></i>
        </div>
        <h1 >
            <a class ="text-yellow-500 no-underline" href="index.html">M & W</a>
        </h1>
        <ul class="inline-flex p-3 space-x-4 text-yellow-300 font-normal text-sm ">
            <li href = '#proDisplay' >Products</li>
            <li>New Arrivals</li>
            <li>Our shops</li>
            <li>Sign in</li>
            <li><a href="http://"><i class="fas fa-shopping-cart fa-lg"></i></a> </li>
        </ul>
       
    </header>
    <main class ="w-screen flex flex-col flex-wrap items-center">

        <ol class="cartAside">
            <h2>My cart's selected items</h2>
            <div class="pricetab">Total items selected are: <span id="itemNumber"></span><br><p> Total amount : $<span id="sumDisplay"></span></p></div>
            
        </ol>

    </main>
    <footer>
        <section class="page four">
        <div class="flex bg-white">
            <div class="card-wrapper">
                <div class="card">
                    <h2 class="title">Books and Journals</h2>
                    <div class="content">
                        <!-- <img src="img/image1.jpg" alt="" style="width: 100%; height: 100px;"> -->
                        <p>
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                            Nam rerum architecto culpa eos
                            ducimus obcaecati consequatur
                            cupiditate sit esse, voluptatem at, 
                            officiis mollitia sint sed? Eius magni
                            labore velit laboriosam.
                        </p>
                    </div>
                    
                </div>
                <div class="card">
                    <h2 class="title">Customized Services</h2>
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                            Nam rerum architecto culpa eos
                            ducimus obcaecati consequatur
                            cupiditate sit esse, voluptatem at, 
                            officiis mollitia sint sed? Eius magni
                            labore velit laboriosam.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <h2 class="title">Fashion & Trends</h2>
                    <div class="content">
                        <p>
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                            Nam rerum architecto culpa eos
                            ducimus obcaecati consequatur
                            cupiditate sit esse, voluptatem at, 
                            officiis mollitia sint sed? Eius magni
                            labore velit laboriosam.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <h2 class="title">Contact Information</h2>
                    <div class="content">
                        <p>
                            <strong>Phone:</strong> +254 7000200
                        </p>
                        <p>
                            <strong>Email:</strong> someone@somebody.com
                        </p>
                        <p>
                            <strong>Physical Location</strong> 12th street,Ruaka
                        </p>
                    </div>
                </div>
            </div>
    
        </div>
        </section>
    
        <p class="copyright">&copy all rights reserved 2020 | designed By: Hannington | Student at Hunters initiative Intl.</p>
    </footer>
    <script src="/myjs/script.js"></script>
    <script src="/myjs/products.js"></script>
</body>
</html>