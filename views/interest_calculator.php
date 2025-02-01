<!-- View for Compound Interest Calculator -->
<?php
    include "../views/layout/app.php";
?>
        <main class="mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <h3 class="text-center mb-4">Compound Interest Calculator</h3>
                                
                                <div class="mb-3">
                                    <label for="principal_amount" class="form-label">Initial Investment</label>
                                    <input type="number" class="form-control" id="principal_amount" placeholder="Enter principal amount">
                                </div>

                                <div class="mb-3">
                                    <label for="rate" class="form-label">Annual Interest Rate (%)</label>
                                    <input type="number" class="form-control" id="rate" placeholder="Enter rate (e.g., 5, 10)">
                                </div>

                                <div class="mb-3">
                                    <label for="time" class="form-label">Time Period (Years)</label>
                                    <input type="number" class="form-control" id="time" placeholder="Enter years (e.g., 5, 10)">
                                </div>

                                <button type="button" class="btn btn-primary w-100" onclick="calculateInterest()">Calculate</button>

                                <div id="result_section" class="mt-4 d-none">
                                    <div class="alert alert-success text-center">
                                        <h4>Final Amount:</h4>
                                        <h2 id="compounded_result"></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

<?php
    include "../views/layout/app_footer.php";
?>
