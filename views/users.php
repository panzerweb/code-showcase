<?php
    include "./layout/app.php";
?>
        <main>

            <div class="content">
                <h2>User Section</h2>
                <p>Manage your registered users here. view them, delete them</p>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Registered Users</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                <th style="width: 2rem">#</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th style="width: 10rem;" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                <!-- /.card-body -->
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="myModal">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>  
            </div>
        </main>

<?php
    include "./layout/app_footer.php";
?>
