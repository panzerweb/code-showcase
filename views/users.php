<?php
    include "./layout/app.php";
?>
        <main>

            <div class="content">
                <h2 class="fw-bold">User Section</h2>
                <p>Manage your registered users here. view them, delete them</p>

                <hr>
                
                <div class="user-content">
                    <!-- Rendered By JavaScript -->
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
