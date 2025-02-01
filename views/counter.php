<!-- View for counter -->
<?php
    include "../views/layout/app.php";
?>
        <main>

        <div class="content">
            <div class="container mt-5 text-center">
                <div class="card shadow-lg p-4">
                    <h2 class="mb-3">Click Counter</h2>
                    <div class="card mx-auto text-bg-dark w-50">
                        <div class="card-body">
                            <h1 class="fs-1"><span id="count-result" class="badge bg-warning">0</span></h1>
                        </div>
                    </div>

                    <div class="my-3 d-flex justify-content-center gap-3">
                        <button class="btn btn-success p-5" onclick="incrementByOne()">
                        <i class="fa-solid fa-plus fs-1"></i>
                        </button>
                        <button class="btn btn-danger p-5" onclick="decrementByOne()">
                            <i class="fa-solid fa-minus fs-1"></i>
                        </button>
                        <button class="btn btn-warning p-5" onclick="clearNumber()">
                            <i class="fa-solid fa-circle-xmark fs-1"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>

        </main>

<?php
    include "../views/layout/app_footer.php";
?>
