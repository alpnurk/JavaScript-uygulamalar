// js11301x2.js
export let ad ="M.Nihat Yava�";
export let idareci = {ad: "Jale"};
export function selam (kullanici) {console.log (`Merhaba, ${kullanici}; sitemize ho�geldin!`);}

export let idareci2 = {};
export function selam2() {console.log (`Size hizmet sunmaya haz�r�z, say�n ${idareci2.ad}!`); }

let aylar = ['Ocak', '�ubat', 'Mart', 'Nisan', "May�s", "Haziran", "Temmuz", 'A�ustos', 'Eyl�l', 'Ekim', 'Kas�m', 'Aral�k'];
const MODULLERIN_STANDART_OLDUKLARI_YIL = 2015;
class Kullanici {constructor (isim) {this.isim = isim;} }
export {aylar, Kullanici};
export {MODULLERIN_STANDART_OLDUKLARI_YIL as sene};