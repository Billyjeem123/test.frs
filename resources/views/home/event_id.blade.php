@include('home.includes.header')
<style>
    .blog-post img {
        width: 100%;
        height: auto;
        margin-bottom: 20px;
    }

    .blog-post h2 {
        font-size: 2rem;
        margin-bottom: 15px;
    }

    .sidebar .widget-title {
        font-size: 1.25rem;
        margin-bottom: 15px;
    }

    .sidebar ul {
        list-style: none;
        padding: 0;
    }

    .sidebar ul li a {
        text-decoration: none;
        color: #333;
    }

    .sidebar ul li a:hover {
        text-decoration: underline;
    }

</style>
<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    @include('home.includes.nav')

    <!-- Page Header Start -->
    <div class="container-xxl py-5 page-header position-relative mb-5">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">Blog</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Blog Title Here</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Blog Content Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-post mb-5">
                        <img src="path/to/image.jpg" alt="Blog Title Here" class="img-fluid rounded mb-4">
                        <h2 class="mb-3">Blog Title Here</h2>
                        <p class="text-muted mb-3">By Author Name | Jan 1, 2024</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Sidebar Start -->
                    <div class="sidebar">
                        <!-- Recent Posts Widget -->
                        <div class="widget mb-5">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3"><a href="#">Recent Post Title 1</a></li>
                                <li class="mb-3"><a href="#">Recent Post Title 2</a></li>
                                <li class="mb-3"><a href="#">Recent Post Title 3</a></li>
                                <li class="mb-3"><a href="#">Recent Post Title 4</a></li>
                                <li class="mb-3"><a href="#">Recent Post Title 5</a></li>
                            </ul>
                        </div>
                        <!-- Categories Widget -->
                        <div class="widget mb-5">
                            <h3 class="widget-title">Categories</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3"><a href="#">Category 1</a></li>
                                <li class="mb-3"><a href="#">Category 2</a></li>
                                <li class="mb-3"><a href="#">Category 3</a></li>
                                <li class="mb-3"><a href="#">Category 4</a></li>
                                <li class="mb-3"><a href="#">Category 5</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Sidebar End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Content End -->

    @include('home.includes.footer')
</div>
</body>
