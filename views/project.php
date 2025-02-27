<?php
    include "./layout/app.php";
?>
        <main>
            
            <div class="content">
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <!-- Counter App Card -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-lg border border-2 border-dark">
                                <div class="card-header bg-warning fw-bold fs-4">
                                    Featured
                                </div>
                                <img class="card-img-top" src="../public/images/counter.png" alt="Number Counter" style="height: 180px; object-fit: cover;">
                                <div class="card-body text-center">
                                    <h4 class="card-title">Simple Number Counter</h4>
                                    <p class="card-text text-muted">A basic counter that increments or decrements numbers using JavaScript.</p>
                                    <p><strong>Tech:</strong> HTML, CSS, JS, Bootstrap</p>
                                    <a href="./counter.php" class="btn btn-warning border border-2 border-dark w-100">Try Now</a>
                                </div>
                            </div>
                        </div>

                        <!-- Interest Calculator Card -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-lg border border-2 border-dark">
                                <div class="card-header bg-warning fw-bold fs-4">
                                    Featured
                                </div>
                                <img class="card-img-top" src="../public/images/c_interest.png" alt="Interest Calculator" style="height: 180px; object-fit: cover;">
                                <div class="card-body text-center">
                                    <h4 class="card-title">Interest Calculator</h4>
                                    <p class="card-text text-muted">Calculate compound interest effortlessly with this tool.</p>
                                    <p><strong>Tech:</strong> HTML, CSS, JS, Bootstrap</p>
                                    <a href="./interest_calculator.php" class="btn btn-warning border border-2 border-dark w-100">Calculate</a>
                                </div>
                            </div>
                        </div>

                        <!-- Third Card - You can customize -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card shadow-lg border border-2 border-dark">
                                <div class="card-header bg-warning fw-bold fs-4">
                                    Featured
                                </div>
                                <img class="card-img-top" src="../public/images/qrcode.png" alt="Project Image" style="height: 180px; object-fit: cover;">
                                <div class="card-body text-center">
                                    <h4 class="card-title">QR Code Generator</h4>
                                    <p class="card-text text-muted">Paste your links and have your very own QR Code.</p>
                                    <p><strong>Tech:</strong> HTML, CSS, JS, Bootstrap</p>
                                    <a href="./qr_code.php" class="btn btn-warning border border-2 border-dark w-100">Try Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </main>

<?php
    include "./layout/app_footer.php";
?>
