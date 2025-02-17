import { incrementByOne, decrementByOne, clearNumber } from "../utility/counter.js";
import { calculateInterest, formatCurrency } from "../utility/interest.js";
import { fetchData } from "../utility/fetchUser.js";
import { deleteUser } from "../utility/deleteUser.js";
import { generateQr } from "../utility/qrcode.js";

window.fetchData = fetchData;
window.deleteUser = deleteUser;

//CounterJS -- not a library
window.incrementByOne = incrementByOne;
window.decrementByOne = decrementByOne;
window.clearNumber = clearNumber;

// Compound Interest Calculator
window.calculateInterest = calculateInterest;
window.formatCurrency = formatCurrency;

//QRCODE JS
window.generateQr = generateQr;

