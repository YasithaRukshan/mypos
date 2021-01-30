@extends('AdminArea.Layouts.app')
@section('content')
    @toastr_css
    @toastr_js
    <!-- content @s -->
    <div class="container">

        <div class="text-center">
            <button class="bg-transparent" onclick="addCat()">
                <em class="icon ni ni-plus-circle fw-bold text-success h5">Add a category</em>
            </button>

        </div>
        <table class="table table-bordered data-table">

            <thead>

                <tr>

                    <th>No</th>

                    <th>Name</th>

                    <th width="100px">Action</th>

                </tr>

            </thead>

            <tbody>

            </tbody>

        </table>

        <!-- Modal Content Code -->
        <div class="modal fade" tabindex="-1" id="add_model">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="/category/add" id="add_form" method="POST">
                        @csrf
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <em class="icon ni ni-cross"></em>
                        </a>
                        <div class="modal-header">
                            <h5 class="modal-title">Add Category</h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="form-label" for="default-01">Category name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="name" required
                                        placeholder="Input placeholder">
                                </div>
                                <div class="form-control-wrap mt-3">
                                    <input type="button" onclick="submit_cat()" class="form-control btn btn-success"
                                        id="default-01" value="Add">
                                </div>
                            </div>

                            <div class="alert alert-danger" id="add_err"></div>
                        </div>
                    </form>
                </div>
                <!-- nk-block -->               <!-- .components-preview -->
            </div>
        </div>

        <!-- Modal Content Code -->
        <div class="modal fade" tabindex="-1" id="edit_model">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="/category/edit" method="POST">
                        @csrf
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <em class="icon ni ni-cross"></em>
                        </a>
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Category</h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="form-label" for="default-01">Category name</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="name" id="category_name" required
                                        placeholder="Input placeholder">
                                </div>
                                <input type="text" name="id" hidden id="edit_id">
                                <div class="form-control-wrap mt-3">
                                    <input type="submit" class="form-control btn btn-success" id="default-01"
                                        value="Update">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" id="delete_model">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="/category/delete" method="POST">
                        @csrf
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <em class="icon ni ni-cross"></em>
                        </a>
                        <div class="modal-header">
                            <h5 class="modal-title">Delete Category</h5>
                        </div>
                        <div class="modal-body">
                            <center>
                                <h2>Are You Sure?</h2>
                            </center>
                            <div class="form-group">
                                <input type="text" name="id" hidden id="delete_id">
                                <div class="form-control-wrap mt-3 row">
                                    <div class="col">
                                        <a href="#" data-dismiss="modal" aria-label="Close">
                                            <input type="button" class="form-control btn btn-dark" aria-label="Close"
                                                id="default-01" value="Cancel">
                                        </a>
                                    </div>
                                    <div class="col"><input type="submit" class="form-control btn btn-danger"
                                            id="default-01" value="Delete">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    @toastr_render
    <!-- content @e -->
@endsection
@section('additional_scripts')
    <script>
        $(function() {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,

                ajax: "{{ route('category.index') }}",
                // method:'GET',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });

        function editCat(id, name) {
            $('#edit_model').modal('show');
            $('#edit_id').val(id);
            $('#category_name').val(name);
        }

        function deleteCat(val) {
            $('#delete_model').modal('show');
            $('#delete_id').val(val);
        }

        function addCat() {
            $('#add_err').hide();
            $('#add_model').modal('show');
            // $('#delete_id').val(val);
        }

        function submit_cat() {
            $.ajax({
                type: "POST",
                url: "{{ route('category.add') }}",
                data: $("#add_form").serialize(), // serializes the form's elements.
                success: function(data) {
                    location.href = "{{ route('category.index') }}";
                },
                error: function(data) {
                    $('#add_err').text(data.responseJSON.errors.name);
                    $('#add_err').show();
                    console.log(data.responseJSON.errors.name);
                }
            });
            // $('#delete_id').val(val);
        }

    </script>
@endsection

