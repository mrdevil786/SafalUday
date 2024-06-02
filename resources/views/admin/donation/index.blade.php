@extends('layout.main')

@section('page-title', 'Donations')

@section('main-section')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">Manage Donations</h1>
            @if (auth()->user()->user_role == 1)
                <form action="{{ route('admin.donations.flush') }}" method="POST"
                    onsubmit="return confirm('Are you sure you want to delete all pending payments older than 1 hour?');">
                    @csrf
                    <button class="btn btn-primary off-canvas" type="submit">Flush Payments</button>
                </form>
            @endif
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Donations</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottomm" id="file-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    <th class="wd-15p border-bottom-0">Email</th>
                                    <th class="wd-15p border-bottom-0">Amount</th>
                                    <th class="wd-15p border-bottom-0">Payment Id</th>
                                    <th class="wd-15p border-bottom-0">status</th>
                                    <th class="wd-25p border-bottom-0">Created At</th>
                                    <th class="wd-25p border-bottom-0">Updated At</th>
                                    @if (auth()->user()->user_role == 1)
                                        <th class="wd-25p border-bottom-0">Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($donations as $donation)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $donation->name }}</td>
                                        <td>{{ $donation->email }}</td>
                                        <td>₹ {{ $donation->amount }}</td>
                                        <td>{{ $donation->payment_id ?? 'Waiting...!' }}</td>
                                        <td>
                                            @if ($donation->status == 'success')
                                                <span class="badge rounded-pill bg-success badge-sm me-1 mb-1 mt-1">Success</span>
                                            @elseif ($donation->status == 'pending')
                                                <span class="badge rounded-pill bg-warning badge-sm me-1 mb-1 mt-1">Pending</span>
                                            @else
                                                <span class="badge rounded-pill bg-danger badge-sm me-1 mb-1 mt-1">{{ $donation->status }}</span>
                                            @endif
                                        </td>                                        
                                        <td>{{ $donation->created_at }}</td>
                                        <td>{{ $donation->updated_at }}</td>
                                        <td class="text-center">
                                            @if (auth()->user()->user_role == 1)
                                                <x-buttons.action-pill-button
                                                    href="{{ route('admin.donations.destroy', $donation->id) }}"
                                                    iconClass="fa fa-trash" iconColor="danger" />
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

@endsection

@section('custom-script')
    <!-- DATA TABLE JS-->
    <script src="{{ asset('../assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('../assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('../assets/js/table-data.js') }}"></script>

    <!-- INTERNAL Notifications js -->
    <script src="../assets/plugins/notify/js/jquery.growl.js"></script>

@endsection
