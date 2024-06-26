@include('admin.includes.header')
<div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    @include('admin.includes.sidebar')

    <!-- Content Start -->
    <div class="content">

        @include('admin.includes.nav')

        <!-- Menu Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row">

                <div class="col-md-12">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">All Sponsors</h6>
                        <div class="table-responsive">
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Logo</th>
                                    <th scope="col">Accepted status</th>
                                    <th scope="col">Date Applied</th>
                                    <th scope="col">Delete</th>
                                    <th scope="col">Approve</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($sponsors as $index => $sponsor)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $sponsor->name }}</td>
                                        <td>{{ $sponsor->email }}</td>
                                        <td>{{ $sponsor->phone }}</td>
                                        <td>{{ $sponsor->company_name }}</td>
                                        <td>
                                            @if ($sponsor->logo)
                                                <a href="{{ asset('images/' . $sponsor->logo) }}" target="_blank" class="btn btn-primary">View</a>
                                            @else
                                                No Logo
                                            @endif
                                        </td>

                                        <td>{{ $sponsor->accepted  === 1 ? "Yes" : "No"}}</td>

                                        <td>{{ $sponsor->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('delete_sponsor', $sponsor->id) }}" class="btn btn-primary">Delete</a>
                                        </td>

                                        <td>
                                            <a href="{{ route('show_sponsor_page', $sponsor->id) }}" class="btn btn-primary">Approve</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        @if($sponsors->count() > 0)
                            <!-- Pagination Section -->
                            <div class="pagination-section">
                                <div class="d-flex justify-content-center">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination justify-content-center flex-wrap">
                                            @if ($sponsors->onFirstPage())
                                                <li class="page-item disabled"><span class="page-link">Prev</span></li>
                                            @else
                                                <li class="page-item"><a class="page-link" href="{{ $sponsors->previousPageUrl() }}">Prev</a></li>
                                            @endif

                                            @foreach ($sponsors->getUrlRange(1, $sponsors->lastPage()) as $page => $url)
                                                <li class="page-item {{ ($page == $sponsors->currentPage()) ? 'active' : '' }}">
                                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                </li>
                                            @endforeach

                                            @if ($sponsors->hasMorePages())
                                                <li class="page-item"><a class="page-link" href="{{ $sponsors->nextPageUrl() }}">Next</a></li>
                                            @else
                                                <li class="page-item disabled"><span class="page-link">Next</span></li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
        <!-- Menu End -->


        <!-- Footer Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary rounded-top p-4">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-start">
                        &copy; <a href="#">Sweettastefd</a>, All Right Reserved.
                    </div>
                    <div class="col-12 col-sm-6 text-center text-sm-end">
                        Designed By <a href="#">Niyi</a>
                        <!-- <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <!-- Content End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/admin/lib/chart/chart.min.js"></script>
<script src="/admin/lib/easing/easing.min.js"></script>
<script src="/admin/lib/waypoints/waypoints.min.js"></script>
<script src="/admin/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/admin/lib/tempusdominus/js/moment.min.js"></script>
<script src="/admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="/admin/js/main.js"></script>
</body>

</html>
