<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        
        
        .blog-posts-2 article {
  height: 100%;
}

.blog-posts-2 .post-img {
  max-height: 440px;
  overflow: hidden;
}

.blog-posts-2 .title {
  font-size: 20px;
  font-weight: 700;
  padding: 0;
  margin: 5px 0;
}

.blog-posts-2 .title a {
  color: var(--heading-color);
  transition: 0.3s;
}

.blog-posts-2 .title a:hover {
  color: var(--accent-color);
}

.blog-posts-2 .meta-top {
  margin-top: 10px;
  color: color-mix(in srgb, var(--default-color), transparent 40%);
}

.blog-posts-2 .meta-top ul {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  align-items: center;
  padding: 0;
  margin: 0;
}

.blog-posts-2 .meta-top i {
  font-size: 24px;
  line-height: 0;
  color: color-mix(in srgb, var(--default-color), transparent 50%);
}

.blog-posts-2 .meta-top a {
  color: color-mix(in srgb, var(--default-color), transparent 40%);
  font-size: 14px;
  display: inline-block;
  line-height: 1;
}

/*--------------------------------------------------------------
# Blog Pagination Section
--------------------------------------------------------------*/
.blog-pagination {
  padding-top: 0;
  color: color-mix(in srgb, var(--default-color), transparent 40%);
}

.blog-pagination ul {
  display: flex;
  padding: 0;
  margin: 0;
  list-style: none;
}

.blog-pagination li {
  margin: 0 5px;
  transition: 0.3s;
}

.blog-pagination li a {
  color: color-mix(in srgb, var(--default-color), transparent 40%);
  padding: 7px 16px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.blog-pagination li a.active,
.blog-pagination li a:hover {
  background: var(--accent-color);
  color: var(--contrast-color);
}

.blog-pagination li a.active a,
.blog-pagination li a:hover a {
  color: var(--contrast-color);
}

.dropdowncomplaint-content {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border-radius: 6px;
            overflow: hidden;
            z-index: 1;
        }

        .dropdowncomplaint-content a {
            color: #333;
            padding: 10px 15px;
            text-decoration: none;
            display: block;
            font-size: 14px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .dropdowncomplaint-content a:hover {
            background-color: #b39ddb;
            color: white;
        }

        /* Show Dropdown on Hover */
        .dropdowncomplaint:hover .dropdowncomplaint-content {
            display: block;
        }



    </style>

</head>
<body>

        <!-- Blog Posts 2 Section -->
    <main>
        <?= $content ?? ''; ?>
    </main>
    
    
       
        
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
