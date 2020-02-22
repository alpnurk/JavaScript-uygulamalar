// js10305x.js: Yaratt���m�z fonksiyonu do�ru ve yanl�� verilerle test etme alt-�rne�i.
describe ("�s", function() {
    describe ("x �zeri 3'� hesaplar", function() {
        function testEt (x) {
            let umulan = x * x * x;
            it (`${x} �zeri 3 e�ittir ${umulan}`, function() {assert.equal (�s (x, 3), umulan);});
        } // func sonu...
        for (let x = 1; x <= 5; x++) {testEt (x);}
    }); // des.. sonu...
    it ("e�er n negatifse, sonu� NaN'd�r", function() {assert.isNaN (�s (2, -1));});
    it ("e�er n tamsay� de�ilse, sonu� NaN'd�r", function() {assert.isNaN (�s (2, 1.5));});
}); // des.. sonu...