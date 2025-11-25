# IBOOKR – EUR/HUF Árfolyam Szinkronizáló Szolgáltatás  
*Készítette: Takács Bálint*

Ez a projekt az iBookr Informatikai Kft. felvételi feladatára készült.  
A cél egy olyan **Laravel alapú háttérszolgáltatás** elkészítése volt, amely az **Európai Központi Bank (ECB)** EUR/HUF árfolyamait:

- automatikusan letölti,
- lokális adatbázisban tárolja,
- listázhatóvá teszi CRUD felületen (Backpackkel),
- valamint konzolból időintervallum alapján is futtatható.

## 📌 A feladat kiírása (röviden összefoglalva)

**Feladat:**  
Készíts egy Laravel háttérszolgáltatást, amely:

1. Az **ECB hivatalos forrásából** szinkronizálja az EUR–HUF árfolyamot  
   Forrás: https://www.ecb.europa.eu/

2. A szinkronizálás **naponta háromszor** fusson:
   - 01:00
   - 10:00
   - 13:00

3. Az árfolyamot mindig **forint alapon (EUR → HUF)** kell menteni.

4. Egy adott naphoz mindig **csak egy árfolyam érték legyen tárolva**,  
   a nap *legutolsó* érvényes értéke.

5. A szinkron futtatható legyen **konzolból is**, két dátum között:
php artisan rates:sync 2023-01-01 2023-01-31

6. A szolgáltatás **job-ként fusson**,  
és **ne indulhasson két job egyszerre** (locking).

7. Az eredményadatok megjelenítése **Laravel Backpack CRUD** felületen történjen,  
dátum szerinti szűréssel → PLUSZ pont.

## 📁 Az `apiUrl` mappa (magyarázat)

A projektben található egy külön mappa:

/apiUrl
index.php

Ez egy **kezdeti, különálló teszt script**, amely:

- közvetlenül meghívja az ECB API-t (file_get_contents-szel)
- kiírja az árfolyamot böngészőbe

👉 Ez **nem része** a Laravel alkalmazásnak,  
csak egy *proof-of-concept*, amit fejlesztés közben használtam.

A végleges megoldás már **Laravel szolgáltatásba van integrálva**,  
a logika átemelve a framework struktúrájába.

## 🚀 Indítás

1. Telepítés:
composer install

2. Adatbázis migráció futtatása:
php artisan migrate

3. Szolgáltatás indítása:
php artisan serve

## ✔ Összegzés

A projekt teljesíti a kiírt követelményeket:

- ✔ ECB árfolyam lekérése  
- ✔ napi 3 időzített szinkron  
- ✔ csak egyszer tárolt napi érték  
- ✔ job + lockolás  
- ✔ dátum-intervallumos artisan parancs  
- ✔ Backpack CRUD + keresés  
- ✔ Laravel alapokra épül  
- ✔ külön API minta script dokumentálva  

## 👤 Készítette

**Takács Bálint**  
2023.
