<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Sidebar With Bootstrap</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background-image: url("../img/background-image.jpg");
            background-repeat: no-repeat;
            background-position: center bottom;
            background-size: cover;
        }

        h3 {
            font-size: 1.2375rem;
            color: #FFF;
        }

        a {
            cursor: pointer;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
        }

        li {
            list-style: none;
        }

        /* Layout skeleton */
        .wrapper {
            align-items: stretch;
            display: flex;
            width: 100%;
        }

        #sidebar {
            max-width: 264px;
            min-width: 264px;
            transition: all 0.35s ease-in-out;
            box-shadow: 0 0 35px 0 rgba(49, 57, 66, 0.5);
            z-index: 1111;
        }

        /* Sidebar collapse */
        #sidebar.collapsed {
            margin-left: -264px;
        }

        .main {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            width: 100%;
            overflow: hidden;
            transition: all 0.35s ease-in-out;
        }

        .sidebar-logo {
            padding: 1.15rem 1.5rem;
        }

        .sidebar-logo a {
            color: #e9ecef;
            font-size: 1.25rem;
            font-weight: 600;
        }

        .sidebar-nav {
            padding: 0;
        }

        .sidebar-header {
            color: #e9ecef;
            font-size: .75rem;
            padding: 1.5rem 1.5rem .375rem;
        }

        a.sidebar-link {
            padding: .625rem 1.625rem;
            color: #e9ecef;
            position: relative;
            display: block;
            font-size: 1rem;
        }

        .sidebar-link[data-bs-toggle="collapse"]::after {
            border: solid;
            border-width: 0 .075rem .075rem 0;
            content: "";
            display: inline-block;
            padding: 2px;
            position: absolute;
            right: 1.5rem;
            top: 1.4rem;
            transform: rotate(-135deg);
            transition: all .2s ease-out;
        }

        .sidebar-link[data-bs-toggle="collapse"].collapsed::after {
            transform: rotate(45deg);
            transition: all .2s ease-out;
        }

        .content {
            flex: 1;
            max-width: 100vw;
            width: 100vw;
        }

        /* Responsive */
        @media (min-width:768px) {
            .content {
                width: auto;
            }
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="script.js"></script>