<%
response.expires=-1
dim a(30)
'Dizi adlarla doldurulur...
a(1)="Anna"
a(2)="Brittany"
a(3)="Cinderella"
a(4)="Diana"
a(5)="Eva"
a(6)="Fiona"
a(7)="Gunda"
a(8)="Hege"
a(9)="Inga"
a(10)="Johanna"
a(11)="Kitty"
a(12)="Linda"
a(13)="Nina"
a(14)="Ophelia"
a(15)="Petunia"
a(16)="Amanda"
a(17)="Raquel"
a(18)="Cindy"
a(19)="Doris"
a(20)="Eve"
a(21)="Evita"
a(22)="Sunniva"
a(23)="Tove"
a(24)="Unni"
a(25)="Violet"
a(26)="Liza"
a(27)="Elizabeth"
a(28)="Ellen"
a(29)="Wenche"
a(30)="Vicky"

'Yurel'den q parametresi al�n�r...
q=ucase(request.querystring("q"))

'q uzunlu�u > 0'sa ipucu i�in t�m diziye bak�l�r...
if len(q)>0 then
  hint=""
  for i=1 to 30
    if q=ucase(mid(a(i),1,len(q))) then
      if hint="" then
        hint=a(i)
      else
        hint=hint & " , " & a(i)
      end if
    end if
  next
end if

'�pucu bulunmad�ysa "Tavsiye yok" yaz�lacak...
'veya bulunan do�ru de�er...
if hint="" then
  response.write("Tavsiye yok")
else
  response.write(hint)
end if
%>