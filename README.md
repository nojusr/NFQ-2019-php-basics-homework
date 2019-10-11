# NFQ-2019-php-basics-homework

Kadangi PSR-4 standartas neleidžia importuoti funkcijų iš kitų namespace, turėjau įkelti minėtas funkcijas į klases. Nesu tikras ar tai yra teisingiausias būdas autoloadinti.

Nusprendžiau naudoti paprastą CLI išvesties spalvinimo biblioteką, nes nekilo jokių kitų minčiu (išskyrus PHP-GTK GUI bibliotekos naudojimą, bet pažvelgus gilau, matosi, kad biblioteką paleisti ant bet kokio
kompiuterio nėra lengva, t.y butų sunku dėstytojams tikrinti.).

Dar kilo mintis daryti kažkokį klaidų tikrinimą su try{}catch{}, bet, kviečiant visas funkcijas su pateiktais argumentais nekyla jokių problemų.  

### Funkcijų paaiškinimai:

* calculateHomeWorkSum
   
   Galutinis funkcijos išvesties kintamojo tipas yra galų gale nusakomas 'float' tipo, t.y pridedant 'int' prie 'float' gaunasi 'float', pridedant 'float' prie 'char' irgi gaunasi 'float', todėl ir yra gražinamas 'float' tipo kintamasis.

* NotTyped

   Viskas yra vykdoma taip pat, bet kadangi funkcija yra aprašyta taip, kad ji privalo gražinti 'int' tipo kintamajį, gražinamasis kintamasis yra paverčiamas (casted) į 'int' tipą.
* Soft

   Šiuo atveju pervesti kintamieji yra paverčiami į 'int' tipą funkcijos pradžioje, t.y pavertimas vyksta funkcijos iškvietimo metu.
* Strict

   declare(strict_types=1) nelabai keičia situacijos (lyginant su Soft), nes kviečiant funkciją visi pateikti kintamieji yra paversti į 'int'. 
		
