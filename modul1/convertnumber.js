
var convertBase = function () {

    function convertBase(baseFrom, baseTo) {
        return function (num) {
            return parseInt(num, baseFrom).toString(baseTo);

        };
    }

    
    convertBase.bin2dec = convertBase(2, 10);

    
    convertBase.bin2hex = convertBase(2, 16);

    
    convertBase.dec2bin = convertBase(10, 2);

    
    convertBase.dec2hex = convertBase(10, 16);

    // hexadecimal to binary
    convertBase.hex2bin = convertBase(16, 2);

    // hexadecimal to decimal
    convertBase.hex2dec = convertBase(16, 10);

    return convertBase;
}();


console.log(convertBase.bin2dec('111')); // '7'
console.log(convertBase.dec2hex('42')); // '2a'
console.log(convertBase.hex2bin('f8')); // '11111000'
console.log(convertBase.dec2bin('22')); // '10110'