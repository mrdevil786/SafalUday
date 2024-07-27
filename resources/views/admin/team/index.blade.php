@extends('layout.main')

@section('page-title', 'Teams')

@section('main-section')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="page-title">Manage Teams</h1>
            @if (auth()->user()->user_role == 1)
                <button class="btn btn-primary off-canvas" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Add Team</button>
            @endif
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Teams</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottomm" id="file-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">Image</th>
                                    <th class="wd-20p border-bottom-0">Name</th>
                                    <th class="wd-15p border-bottom-0">Designation</th>
                                    <th class="wd-15p border-bottom-0">Link</th>
                                    <th class="wd-15p border-bottom-0">Section</th>
                                    @if (auth()->user()->user_role == 1)
                                        <th class="wd-25p border-bottom-0">Status</th>
                                    @endif
                                    <th class="wd-25p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teams as $team)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $team->image }}</td>
                                        <td>{{ $team->name }}</td>
                                        <td>{{ $team->designation }}</td>
                                        <td>
                                            <button type="button" class="btn btn-outline-secondary btn-pill btn-sm"
                                                onclick="copyToClipboard('{{ $team->profile_link }}')">
                                                <i class="fa fa-copy"></i>
                                            </button>
                                        </td>
                                        <td>{{ $team->section }}</td>
                                        @if (auth()->user()->user_role == 1)
                                            <td class="text-center">
                                                <label class="custom-switch form-switch mb-0">
                                                    <input type="checkbox" name="custom-switch-radio"
                                                        class="custom-switch-input" data-team-id="{{ $team->id }}"
                                                        {{ $team->status == 'active' ? 'checked' : '' }}>
                                                    <span class="custom-switch-indicator"></span>
                                                </label>
                                            </td>
                                        @endif
                                        <td class="text-center">
                                            <x-buttons.action-pill-button iconClass="fa fa-eye" iconColor="secondary"
                                                href="{{ route('admin.teams.view', $team->id) }}" />

                                            @if (auth()->user()->user_role != 3)
                                                <x-buttons.action-pill-button
                                                    href="{{ route('admin.teams.edit', $team->id) }}"
                                                    iconClass="fa fa-pencil" iconColor="warning"
                                                    modalTarget="editUserModal" />
                                            @endif
                                            @if (auth()->user()->user_role == 1)
                                                <x-buttons.action-pill-button
                                                    href="{{ route('admin.teams.destroy', $team->id) }}"
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

    <!--Add Modal - Right Offcanvas-->
    <x-modal.right-offcanvas title="Add New Team" action="{{ route('admin.teams.store') }}" method="POST">

        <x-fields.input-field label="Image" name="image" type="file" />
        <x-fields.input-field label="Full Name" name="name" />
        <x-fields.input-field label="Designation" name="designation" />
        <x-fields.input-field label="LinkedIn Profile Link" name="profile_link" />
        <x-fields.input-field label="Section" name="section" />
        {{-- <x-fields.dropdown-field label="User Role" name="role" :options="[1 => 'Administrator', 2 => 'Editor', 3 => 'Viewer']" /> --}}

    </x-modal.right-offcanvas>
    <!--/Right Offcanvas-->

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

    <script>
        $(document).ready(function() {
            $('input[name="custom-switch-radio"]').change(function() {
                var teamId = $(this).data('team-id');
                var status = $(this).prop('checked') ? 'active' : 'blocked';

                $.ajax({
                    url: "{{ route('admin.teams.status') }}",
                    method: "PUT",
                    data: {
                        id: teamId,
                        status: status,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.warning) {
                            $.growl.warning1({
                                title: 'Warning',
                                message: response.warning
                            });
                        } else {
                            $.growl.notice1({
                                title: 'Success',
                                message: response.message
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        $.growl.error1({
                            title: 'Error',
                            message: 'An error occurred while updating team status.'
                        });
                    }
                });
            });
        });

        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                $.growl.notice1({
                    title: 'Success',
                    message: 'Link copied to clipboard'
                });
            }, function(err) {
                $.growl.error1({
                    title: 'Error',
                    message: 'Failed to copy link'
                });
            });
        }
    </script>
@endsection
