// QR CODE FUNCTION
export function generateQr(){
    let qrcodeDiv = document.querySelector(".qrcode");
    let noQrDiv = document.querySelector(".noQrDiv");

    console.log(qrcodeDiv);
    let qrcode = new QRCode(qrcodeDiv); //Instantiate the QRCodeJS

    let inputField = document.getElementById("qrcode_input").value;
    qrcode.makeCode(inputField);
    //Remove the Default Render
    noQrDiv.classList.remove('d-flex');
    noQrDiv.classList.add('d-none');

    console.log(noQrDiv);
    console.log(inputField);
}