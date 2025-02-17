<!-- View for counter -->
<?php
    include "../views/layout/app.php";
?>
        <main>
            <div class="content">
                <div class="container mt-5">
                    <div class="card shadow-lg">
                        <div class="card-header bg-primary text-white text-center">
                            <h1 class="mb-0">QR Code Generator</h1>
                        </div>
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <input type="text" 
                                    name="qrcode" 
                                    id="qrcode_input" 
                                    placeholder="Paste a URL or enter text..."
                                    class="form-control text-center p-3 fs-5"
                                    aria-label="QR Code Input"
                                >
                            </div>
                            
                            <button class="btn btn-success px-4 py-2" onclick="generateQr()">Generate QR</button>

                            <!-- Placeholder before QR is generated -->
                            <div class="noQrDiv d-flex align-items-center justify-content-center gap-3 p-5 my-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-qr-code text-secondary" viewBox="0 0 16 16">
                                    <path d="M2 2h2v2H2z"/>
                                    <path d="M6 0v6H0V0zM5 1H1v4h4zM4 12H2v2h2z"/>
                                    <path d="M6 10v6H0v-6zm-5 1v4h4v-4zm11-9h2v2h-2z"/>
                                    <path d="M10 0v6h6V0zm5 1v4h-4V1zM8 1V0h1v2H8v2H7V1zm0 5V4h1v2zM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8zm0 0v1H2V8H1v1H0V7h3v1zm10 1h-1V7h1zm-1 0h-1v2h2v-1h-1zm-4 0h2v1h-1v1h-1zm2 3v-1h-1v1h-1v1H9v1h3v-2zm0 0h3v1h-2v1h-1zm-4-1v1h1v-2H7v1z"/>
                                    <path d="M7 12h1v3h4v1H7zm9 2v2h-3v-1h2v-1z"/>
                                </svg>
                                <h2 class="text-secondary">Paste Link</h2>
                            </div>

                            <!-- QR Code Container -->
                            <div id="qrcode" class="qrcode d-flex justify-content-center align-items-center my-4"></div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php
    include "../views/layout/app_footer.php";
?>
