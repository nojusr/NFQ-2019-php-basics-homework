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
   Jeigu šiame faile calculateHomeWorkSum metodas yra aprašomas taip: `public function calculateHomeWorkSum(int ...$numbers): int`, tai kviečiant šį metodą iš bet kokio failo be `declare(strict_types=1);` deklaracijos, pervedami kintamieji visada bus automatiškai paversti į 'int' (jeigu tai įmanoma), t.y deklaracija šiuo atveju bus tenkinama. 
   Jeigu metodas yra aprašytas taip: `public function calculateHomeWorkSum(... $numbers): int`, tai metodo argumentai bus perteikti be jokio tipo pakeitimo, ir bus privaloma sumos kintamąjį paversti (cast) į int tipą.   
		
