# SmartCollection

A **SmartCollection** egy rugalmas gyűjteménykezelő osztály, amely lehetővé teszi az adatgyűjtemények egyszerű kezelését, valamint számos segédfüggvényt biztosít az adatok kezelésére. Az osztály támogatja az `ArrayAccess` interfészt, így a gyűjteményeket tömbként is lehet használni.

## Telepítés

Adja hozzá az osztályt a projektjéhez a következő módon:

1. Klónozza vagy töltse le a `SmartCollection` osztályt a forráskódtárból.
2. Használja az `autoload` mechanizmust (például Composer) a kód betöltéséhez.

## Használat

```php
use SosoRicsi\Collection\SmartCollection;

// Példa gyűjtemény létrehozása
$collection = new SmartCollection([1, 2, 3]);

// Elem hozzáadása
$collection->add(4);

// Minden elem lekérése
$items = $collection->all();

// Az első elem lekérése
$firstItem = $collection->first();

// Az utolsó elem lekérése
$lastItem = $collection->last();
```

## Funkciók

A **SmartCollection** az alábbi funkciókat biztosítja:

- **add(mix**ed$value, string|int|null $key = null**)**: Hozzáad egy elemet a gyűjteményhez. Ha kulcsot ad meg, az elemet annak a kulcsnak a helyére teszi, különben hozzáfűzi a gyűjtemény végéhez.
- **all()**: Visszaadja az összes elemet a gyűjteményből.
- **first()**: Visszaadja az első elemet a gyűjteményből.
- **last()**: Visszaadja az utolsó elemet a gyűjteményből.
- **count()**: Visszaadja a gyűjteményben található elemek számát.
- **merge(array $array)**: Összefűz egy tömböt a gyűjteményhez.
- **collapse()**: Bontja az összes belső tömböt egyetlen szintű tömbbé.
- **contains(callable $callback)**: Visszaadja azokat az elemeket, amelyek megfelelnek a callback függvény feltételeinek.
- **map(callable $callback)**: A callback függvényt alkalmazza minden egyes elemre a gyűjteményben, és frissíti az elemeket.
- **reject(callable $callback)**: Azokat az elemeket távolítja el, amelyek megfelelnek a callback függvény feltételeinek.

## License

A **SmartCollection** a(z) **CGLJR** licenc alatt érhető el.
