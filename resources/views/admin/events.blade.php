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
                <div class="col-md-12 col-xl-6">
                    <form action="{{ route('save_event') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Input Event Details</h6>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Event Title" required>
                                <label for="title">Enter Event Title</label>
                            </div>



                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="start_time" name="start_time" required>
                                <label for="start_time">Start Time</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="end_time" name="end_time" required>
                                <label for="end_time">End Time</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="location" name="location" placeholder="Location" required>
                                <label for="location">Enter Location</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="type" name="type" placeholder="Type of Activity" required>
                                <label for="type">Enter Type of Activity</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="age_group" name="age_group" placeholder="Age Group" required>
                                <label for="age_group">Enter Age Group</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="file" class="form-control" id="image" name="image" required>
                                <label for="image">Upload Event Image</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="description" name="description" placeholder="Event Description" style="height: 100px;"></textarea>
                                <label for="description">Enter Event Description</label>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>


                </div>
                <div class="col-md-12 col-xl-6">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h6 class="mb-4">Uploaded Event</h6>
                        <div class="table-responsive">
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Start Time</th>
                                    <th scope="col">End Time</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Delete</th>
                                    <th scope="col">View</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($events as $index => $event)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <td>{{ $event->title }}</td>
                                        <td>{{ $event->start_time }}</td>
                                        <td>{{ $event->end_time }}</td>
                                        <td>{{ $event->location }}</td>
                                        <td>{{ $event->type }}</td>
                                        <td>
                                            <a href="{{ route('delete_event',  $event->id) }}" class="btn btn-primary">Delete</a>
                                        </td>
                                        <td>
                                          {{----}}  <a href="{{ url('events/' . $event->id) }}" class="btn btn-primary">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        @if($events->count() > 0 )

                            <!-- Pagination Section -->
                            <div class="pagination-section">
                                <div class="d-flex justify-content-center">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination justify-content-center flex-wrap">
                                            @if ($events->onFirstPage())
                                                <li class="page-item disabled"><span class="page-link">Prev</span></li>
                                            @else
                                                <li class="page-item"><a class="page-link" href="{{ $events->previousPageUrl() }}">Prev</a></li>
                                            @endif

                                            @foreach ($events->getUrlRange(1, $events->lastPage()) as $page => $url)
                                                <li class="page-item {{ ($page == $events->currentPage()) ? 'active' : '' }}">
                                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                                </li>
                                            @endforeach

                                            @if ($events->hasMorePages())
                                                <li class="page-item"><a class="page-link" href="{{ $events->nextPageUrl() }}">Next</a></li>
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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+PmAzLB4v5BT8aHUXElmKUHitfK3I" crossorigin="anonymous"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
    @endif

    @if(Session::has('error'))
    toastr.error("{{ Session::get('error') }}");
    @endif

</script>

</body>

</html>
