window.addEventListener('load', function (event) {
    document.querySelector('#btnConverterBin2Dec').onclick = function (event) {
        event.preventDefault();
        let binario = document.querySelector('#binario').value;
        let decimal = 0;
        if(binario != ""){
           decimal =  bin2Dex(binario);
           document.querySelector('#decimal').value = decimal;
        }
    }
    document.querySelector('#btnConverterDec2Bin').onclick = function(event){
        event.preventDefault();
        let decimal = document.querySelector('#decimal');
        let inputBinario = document.querySelector('#binario');
        let binario = Dec2Bin(decimal.value);
        inputBinario.value = binario
    }
});

function bin2Dex(bin) {
    let decimal = 0;

    for (var index = bin.length - 1; index >= 0; index--) {
        decimal += parseInt(bin[index]) * Math.pow(2, bin.length - 1 - index)
    }
    return decimal;
}
function Dec2Bin(dec){
    return Number(dec).toString(2);
}
