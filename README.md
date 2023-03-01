# REST-webbtjänst med Laravel

Det här en REST-webbtjänst som använder CRUD. Den är skapad med Laravel och därefter publicerad med Heroku.
Webbtjänsten hanterar information om böcker där anropen GET, POST, PUT och DELETE kan göras. 
Webbtjänsten returnerar JSON-data. 

Länk till live-version  https://mysterious-woodland-81234.herokuapp.com/

## Hur man når APIet

| Metod    | Ändpunkt | Beskrivning  |
| :---        |    :----:   |          ---: |
| GET      | /api/Book      | Hämtar alla böcker   |
| GET   | /api/Book/ID        | Hämtar bok med id    |
| POST | /api/Book | Lägger till en till bok. Kräver att bok-ojekt skickas med |
| PUT | /api/Book/ID | Uppdaterar en existerande bok. Kräver att bok-ojekt skickas med |
| DELETE | /api/Book/ID | Raderar en existerande bok. Kräver att bok-ojekt skickas med |

## Bok-objektsstruktur

`{
    "title" : "Ängelns lek",
    "author" : "Carlos Ruiz Zafon",
    "published" : "2008",
    "status" : "1"
}`

Status innebär om boken är färdigläst=1 eller inte=0

## Tabellen innehåller följande rader

| Tabellnamn   | Fält | 
| :---        |    :----:   |        
| books     | id (int()), title (string(64), author(string(64), published(int(4)), status (boolean), timestamp()     |
