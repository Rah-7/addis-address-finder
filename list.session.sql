CREATE TABLE hotels (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  subcity VARCHAR(255) DEFAULT NULL,
  phone VARCHAR(50) DEFAULT NULL,
  fax VARCHAR(50) DEFAULT NULL,
  email VARCHAR(255) DEFAULT NULL,
  website VARCHAR(255) DEFAULT NULL,
  address VARCHAR(255) DEFAULT NULL
);
```

To insert the data into the "hotels" table, you can use the following code:

```sql
INSERT INTO hotels (name, subcity, phone, fax, email, website, address) VALUES
  ('Sheraton Addis, a Luxury Collection Hotel', NULL, '(25111) 517-1717', NULL, 'reservations.addisethiopia@luxurycollection.com', 'www.luxurycollection.com/addis', 'Taitu Street'),
  ('Hyatt Regency Addis Ababa', NULL, '(25111) 517-1243', NULL, 'addisabab.regency@hyatt.com', NULL, 'Mesqel square'),
  ('Hilton Addis Ababa', NULL, '(251) 517-0000', '(251-11) 5 51 17 18', 'reservations.addisababa@hilton.com', NULL, 'Menelik II Avenue'),
  ('Hayes Hotel', NULL, '(25111) 666-2261', NULL, 'info@hayesaddishotel.com', NULL, '22,On the road to signal,400meters from Lex plaza'),
  ('Ethiopian Skylight Hotel', NULL, '(25111) 681-8181', NULL, 'reservation@ethiopianskylighthotel.com', NULL, 'Airport Road'),
  ('Ramada Addis', NULL, '(25111) 639-3939', NULL, 'info@ramadaaddis.com', 'www.ramadaaddis.com', NULL),
  ('Hotel Loblia', NULL, NULL, NULL, NULL, NULL, NULL),
  ('Golden Tubli', NULL, NULL, NULL, NULL, NULL, NULL),
  ('Raddison Blue', NULL, '(251-11) 5-15 76 00/ 17 04 00', '(251-11) 5-15 76 01', 'reservations.addisababa@radissonblu.com', NULL, NULL),
  ('Capital Hotel and Spa', NULL, '251-11 6-672100 /251-11-6-192000', '251-11-6-672012', 'reservation@capitalhotelandspa.com', 'www.capitalhotelandspa.com', NULL),
  ('Grand Eliana Hotel conference and spa', NULL, NULL, NULL, NULL, NULL, NULL),
  ('Kaleb hotel', NULL, '(251-11) 6-62-22-00', '(251-11) 6-62-80-98', 'reservation@kalebhotel.com', 'www.kalebhotel.com', NULL),
  ('Haile Grand Addis Ababa', NULL, NULL, NULL, NULL, NULL, NULL),
  ('MonarchHotel', NULL, '(251-11) 6 67 24 80/81/82', 'info@monarchaddis.com', 'www.monarchaddis.com', NULL),
  ('Momona Hotel', NULL, NULL, NULL, NULL, NULL, NULL),
  ('Holyday Hotel Addis', NULL, NULL, NULL, NULL, NULL, NULL),
  ('Marriot executive Apartements', NULL, '(251-11) 5 18 46 00', NULL, 'reservation.adder@marriott.com', 'www.marriott.com/adder', NULL),
  ('Sapphire Addis', NULL, NULL, NULL, NULL, NULL, NULL),
  ('The Grand Palac Hotel', NULL, NULL, NULL, NULL, NULL, NULL),
  ('The Hub Hotel', NULL, NULL, NULL, NULL, NULL, NULL),
  ('Jupiter international Hotel', NULL, '(251-11) 5 52 73 33/( 251-11) 5 52 63 70', '(251-11) 5 52 64 18', 'info@jupiterinternationalhotel.com', 'www.jupiterinternationalhotel.com', NULL),
  ('Elilly International Hotel', NULL, '0115- 58 77 77/73/70', '0115 58 52 00', 'info@elillyhotel.com', 'reservation@elillyhotel.com', 'www.elillyhotel.com'),
  ('Azzeman Hotel', NULL, NULL, NULL, NULL, NULL, NULL),
  ('Sabon Hotel', NULL, NULL, NULL, NULL, NULL, NULL),
  ('Magnolia Hotel & Conference Center', NULL, NULL, NULL, NULL, NULL, NULL),
  ('Golden Tulip Addis Ababa', NULL, NULL, NULL, NULL, NULL, NULL),
  ('Swiss Inn Nexus Hotel', NULL, NULL, NULL, NULL, NULL, NULL),
  ('The HUB Hotel', NULL, NULL, NULL, NULL, NULL, NULL),
  ('De Leopol Hotel', NULL, NULL, NULL, NULL, NULL, NULL),
  ('Holyday hotel addis', NULL, NULL, NULL, NULL, NULL, NULL),
  ('The Residence Hotel', NULL, NULL, NULL, NULL, NULL, NULL),
  ('Check Inn Hotel Addis Ababa', NULL, NULL, NULL, NULL, NULL, NULL),
  ('Addissinia Hotel', NULL, NULL, NULL, NULL, NULL, NULL),
  ('Wassamar Hotel', NULL, NULL, NULL, NULL, NULL, NULL),
  ('Keba Guesthouse', NULL, NULL, NULL, NULL, NULL, NULL),
  ('Washington hotel', NULL, NULL, NULL, NULL, NULL, NULL),
  ('Tolip Olympia Hotel', NULL, NULL, NULL, NULL, NULL, NULL),
  ('Yinm Furnished Apartment', NULL, NULL