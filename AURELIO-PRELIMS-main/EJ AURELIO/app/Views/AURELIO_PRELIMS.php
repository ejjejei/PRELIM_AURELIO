<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Website</title>
    <style>
        /* Resetting default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin-bottom: 10px;
        }

        nav ul {
            list-style-type: none;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        main {
            padding: 20px;
        }

        .featured, .latest-recipes {
            margin-bottom: 30px;
        }

        .featured article, .latest-recipes article {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .featured h2, .latest-recipes h2 {
            margin-bottom: 15px;
        }

        .featured article h3, .latest-recipes article h3 {
            margin-bottom: 10px;
        }

        .featured article p, .latest-recipes article p {
            margin-bottom: 15px;
        }

        .featured article a, .latest-recipes article a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }

        .featured article a:hover, .latest-recipes article a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <h1>Simple Website</h1>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
</header>

<main>
    <section class="featured">
        <h2>Featured Section</h2>
        <article>
            <h3>Featured Article</h3>
            <p>This is a featured article. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#">Read More</a>
        </article>
    </section>

    <section class="latest-recipes">
        <h2>Latest Recipes</h2>
        <article>
            <h3>Recipe 1</h3>
            <p>This is the first recipe. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#">Read More</a>
        </article>
        <article>
            <h3>Recipe 2</h3>
            <p>This is the second recipe. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#">Read More</a>
        </article>
    </section>
</main>

</body>
</html>
