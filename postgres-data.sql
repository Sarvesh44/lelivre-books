	
--
-- Book Data
--
   
INSERT INTO lelivre_online_book_store_laravel.book(
            isbn, title, edition, pub_year)
    VALUES ('9780316211277', 'Unlucky 13', 'Sixth', 2006);

INSERT INTO lelivre_online_book_store_laravel.book(
            isbn, title, edition, pub_year)
    VALUES ('9780201107159', 'Database Systems', 'Eleventh', 2009);

INSERT INTO lelivre_online_book_store_laravel.book(
            isbn, title, edition, pub_year)
    VALUES ('9781448108534', 'Database Processing', '5th', 2001);

INSERT INTO lelivre_online_book_store_laravel.book(
            isbn, title, edition, pub_year)
    VALUES ('9781780890319', 'Journalism for the 21st century', '', 2011);

INSERT INTO lelivre_online_book_store_laravel.book(
            isbn, title, edition, pub_year)
    VALUES ('9780316211284', 'Thinking in Java', 'Second', 2003);
		
INSERT INTO lelivre_online_book_store_laravel.book(
            isbn, title, edition, pub_year)
    VALUES ('9780314411277', 'Human Brain', 'Sixth', 2006);

INSERT INTO lelivre_online_book_store_laravel.book(
            isbn, title, edition, pub_year)
    VALUES ('9780324561277', 'Mathematics for Classical Information Retrieval', 'First', 2006);

INSERT INTO lelivre_online_book_store_laravel.book(
            isbn, title, edition, pub_year)
    VALUES ('9780316211288', 'Unlucky 13', '3rd', 2006);

INSERT INTO lelivre_online_book_store_laravel.book(
            isbn, title, edition, pub_year)
    VALUES ('4440316211277', 'Foundations of Combinatorics with Applications', 'Eighth', 2006);

INSERT INTO lelivre_online_book_store_laravel.book(
            isbn, title, edition, pub_year)
    VALUES ('9780316876277', 'Manifesting the Quantum World', 'Fourth', 2006);

	
--
-- Author Data
--

INSERT INTO lelivre_online_book_store_laravel.author(
            birth_city, birth_state, birth_country, auth_dob, auth_bio, 
            auth_firstname, auth_lastname)
    VALUES ('Stinsford', 'Dorchester', 'England', '1940-06-14', 'Thomas Hardy, was an English novelist and poet. A Victorian realist in the tradition of George Eliot, he was influenced both in his novels and in his poetry by Romanticism, especially William Wordsworth.', 
            'Thomas', 'Hardy');

INSERT INTO lelivre_online_book_store_laravel.author(
            birth_city, birth_state, birth_country, auth_dob, auth_bio, 
            auth_firstname, auth_lastname)
    VALUES ('Umba', 'Bulawayo', 'Zimbabwe', '1948-08-24', ' poet and essayist, was the eldest of six children born to John Smith (fl. 1800–90) and Christina née Murray (fl. 1810–80), only two of whom outlived them', 
            'Alexander', 'Smith');

INSERT INTO lelivre_online_book_store_laravel.author(
            birth_city, birth_state, birth_country, auth_dob, auth_bio, 
            auth_firstname, auth_lastname)
    VALUES ('Boston', 'New York', 'United States', '1919-01-01', 'Jerome David Salinger was an American writer who won acclaim early in life. He led a very private life for more than a half-century. He published his final original work in 1965 and gave his last interview in 1980.', 
            'Jerome', 'Salinger');

INSERT INTO lelivre_online_book_store_laravel.author(
            birth_city, birth_state, birth_country, auth_dob, auth_bio, 
            auth_firstname, auth_lastname)
    VALUES ('Statesville', 'North Carolina', 'United States', '1921-06-23', 'Theodore Taylor was an American author of more than 50 fiction and non-fiction books for young adult readers, including The Cay, The Weirdo, Ice Drift, Timothy of the Cay, The Bomb, Sniper, and Rogue ...', 
            'Theodore', 'Taylor');

INSERT INTO lelivre_online_book_store_laravel.author(
            birth_city, birth_state, birth_country, auth_dob, auth_bio, 
            auth_firstname, auth_lastname)
    VALUES ('Salinas', 'California', 'United States', '1930-02-02', 'John Ernst Steinbeck, Jr. was an American author of twenty-seven books, including sixteen novels, six non-fiction books, and five collections of short stories.', 
            'John', 'Steinbeck');


--
-- Publisher Data
--

INSERT INTO lelivre_online_book_store_laravel.publisher(
            name, street, city, state, country, zipcode)
    VALUES ('Jaico Publishing House', 'Nariman Point', 'Mumbai', 'Maharashtra', 'India', 400001);


INSERT INTO lelivre_online_book_store_laravel.publisher(
            name, street, city, state, country, zipcode)
    VALUES ('Rodionov Publishing House', '2nd Kumi Street', 'Chinshui', 'Moscow', 'Russia', 107207);


INSERT INTO lelivre_online_book_store_laravel.publisher(
            name, street, city, state, country, zipcode)
    VALUES ('Springer Publishing', '21st Almeda Street', 'Boston', 'New York', 'United States', 76098);


--
-- Book and Its Genre Data
--

INSERT INTO lelivre_online_book_store_laravel.book_genre(
            genre_name)
    VALUES ('Fiction');

INSERT INTO lelivre_online_book_store_laravel.book_genre(
            genre_name)
    VALUES ('Comedy');

INSERT INTO lelivre_online_book_store_laravel.book_genre(
            genre_name)
    VALUES ('Human Sciences');

INSERT INTO lelivre_online_book_store_laravel.book_genre(
            genre_name)
    VALUES ('Non-Fiction');

INSERT INTO lelivre_online_book_store_laravel.book_genre(
            genre_name)
    VALUES ('Poetry Collections');

INSERT INTO lelivre_online_book_store_laravel.book_genre(
            genre_name)
    VALUES ('Cultural');


--
-- Data Mapping of Book to Genre
--

INSERT INTO lelivre_online_book_store_laravel.book_genre_map(
            isbn, genre_name)
    VALUES ('9780316211277', 'Cultural');

INSERT INTO lelivre_online_book_store_laravel.book_genre_map(
            isbn, genre_name)
    VALUES ('9780316211277', 'Non-Fiction');

INSERT INTO lelivre_online_book_store_laravel.book_genre_map(
            isbn, genre_name)
    VALUES ('9780201107159', 'Cultural');

INSERT INTO lelivre_online_book_store_laravel.book_genre_map(
            isbn, genre_name)
    VALUES ('9780201107159', 'Poetry Collections');

INSERT INTO lelivre_online_book_store_laravel.book_genre_map(
            isbn, genre_name)
    VALUES ('9780201107159', 'Comedy');

INSERT INTO lelivre_online_book_store_laravel.book_genre_map(
            isbn, genre_name)
    VALUES ('9781448108534', 'Fiction');

INSERT INTO lelivre_online_book_store_laravel.book_genre_map(
            isbn, genre_name)
    VALUES ('9781780890319', 'Cultural');

INSERT INTO lelivre_online_book_store_laravel.book_genre_map(
            isbn, genre_name)
    VALUES ('9781780890319', 'Poetry Collections');

INSERT INTO lelivre_online_book_store_laravel.book_genre_map(
            isbn, genre_name)
    VALUES ('9781780890319', 'Comedy');

INSERT INTO lelivre_online_book_store_laravel.book_genre_map(
            isbn, genre_name)
    VALUES ('9780316211284', 'Human Sciences');

INSERT INTO lelivre_online_book_store_laravel.book_genre_map(
            isbn, genre_name)
    VALUES ('4440316211277', 'Fiction');

INSERT INTO lelivre_online_book_store_laravel.book_genre_map(
            isbn, genre_name)
    VALUES ('9780314411277', 'Cultural');

INSERT INTO lelivre_online_book_store_laravel.book_genre_map(
            isbn, genre_name)
    VALUES ('9780316211284', 'Poetry Collections');

INSERT INTO lelivre_online_book_store_laravel.book_genre_map(
            isbn, genre_name)
    VALUES ('9780316876277', 'Comedy');

INSERT INTO lelivre_online_book_store_laravel.book_genre_map(
            isbn, genre_name)
    VALUES ('9780324561277', 'Human Sciences');

--
-- Data Mapping of Books to its Authors
--

INSERT INTO lelivre_online_book_store_laravel.book_author(
            isbn, authid)
    VALUES ('9780316211277', 3);

INSERT INTO lelivre_online_book_store_laravel.book_author(
            isbn, authid)
    VALUES ('9780316211277', 2);

INSERT INTO lelivre_online_book_store_laravel.book_author(
            isbn, authid)
    VALUES ('9780201107159', 1);

INSERT INTO lelivre_online_book_store_laravel.book_author(
            isbn, authid)
    VALUES ('9780316211277', 5);

INSERT INTO lelivre_online_book_store_laravel.book_author(
            isbn, authid)
    VALUES ('9781448108534', 4);

INSERT INTO lelivre_online_book_store_laravel.book_author(
            isbn, authid)
    VALUES ('9781448108534', 3);

INSERT INTO lelivre_online_book_store_laravel.book_author(
            isbn, authid)
    VALUES ('9781780890319', 2);

INSERT INTO lelivre_online_book_store_laravel.book_author(
            isbn, authid)
    VALUES ('9780316211284', 1);

INSERT INTO lelivre_online_book_store_laravel.book_author(
            isbn, authid)
    VALUES ('4440316211277', 4);

INSERT INTO lelivre_online_book_store_laravel.book_author(
            isbn, authid)
    VALUES ('9780316211288', 3);

INSERT INTO lelivre_online_book_store_laravel.book_author(
            isbn, authid)
    VALUES ('9780316211288', 5);

INSERT INTO lelivre_online_book_store_laravel.book_author(
            isbn, authid)
    VALUES ('9780316211288', 2);

INSERT INTO lelivre_online_book_store_laravel.book_author(
            isbn, authid)
    VALUES ('9780316876277', 1);

INSERT INTO lelivre_online_book_store_laravel.book_author(
            isbn, authid)
    VALUES ('9780324561277', 2);

INSERT INTO lelivre_online_book_store_laravel.book_author(
            isbn, authid)
    VALUES ('9781780890319', 4);

	
--
-- Data Mapping of Book to its Publishing House
--

INSERT INTO lelivre_online_book_store_laravel.book_publisher(
            pubid, isbn)
    VALUES (1, '9780316211277');

INSERT INTO lelivre_online_book_store_laravel.book_publisher(
            pubid, isbn)
    VALUES (1, '9780201107159');

INSERT INTO lelivre_online_book_store_laravel.book_publisher(
            pubid, isbn)
    VALUES (2, '9781448108534');

INSERT INTO lelivre_online_book_store_laravel.book_publisher(
            pubid, isbn)
    VALUES (2, '9781780890319');

INSERT INTO lelivre_online_book_store_laravel.book_publisher(
            pubid, isbn)
    VALUES (3, '9780316211284');

INSERT INTO lelivre_online_book_store_laravel.book_publisher(
            pubid, isbn)
    VALUES (1, '4440316211277');

INSERT INTO lelivre_online_book_store_laravel.book_publisher(
            pubid, isbn)
    VALUES (1, '9780314411277');

INSERT INTO lelivre_online_book_store_laravel.book_publisher(
            pubid, isbn)
    VALUES (2, '9780316211284');

INSERT INTO lelivre_online_book_store_laravel.book_publisher(
            pubid, isbn)
    VALUES (2, '9780316876277');

INSERT INTO lelivre_online_book_store_laravel.book_publisher(
            pubid, isbn)
    VALUES (3, '9780324561277');


--
-- Data related to favorite Genre of Customers
--

INSERT INTO lelivre_online_book_store_laravel.customer_genre(
            genre_name)
    VALUES ('Fiction');

INSERT INTO lelivre_online_book_store_laravel.customer_genre(
            genre_name)
    VALUES ('Comedy');

INSERT INTO lelivre_online_book_store_laravel.customer_genre(
            genre_name)
    VALUES ('Human Sciences');

INSERT INTO lelivre_online_book_store_laravel.customer_genre(
            genre_name)
    VALUES ('Non-Fiction');

INSERT INTO lelivre_online_book_store_laravel.customer_genre(
            genre_name)
    VALUES ('Poetry Collections');

INSERT INTO lelivre_online_book_store_laravel.customer_genre(
            genre_name)
    VALUES ('Cultural');

INSERT INTO lelivre_online_book_store_laravel.customer_genre(
            genre_name)
    VALUES ('Biology');

INSERT INTO lelivre_online_book_store_laravel.customer_genre(
            genre_name)
    VALUES ('Social Sciences');


--
-- Data related to E-Books
--

INSERT INTO lelivre_online_book_store_laravel.ebook(quantity, price, isbn)
    VALUES (10, 96.70, '9780316211277');

INSERT INTO lelivre_online_book_store_laravel.ebook(quantity, price, isbn)
    VALUES (30, 56.79, '9780201107159');

INSERT INTO lelivre_online_book_store_laravel.ebook(quantity, price, isbn)
    VALUES (29, 192.99, '9781448108534');

INSERT INTO lelivre_online_book_store_laravel.ebook(quantity, price, isbn)
    VALUES (0, 69.99, '9781780890319');

INSERT INTO lelivre_online_book_store_laravel.ebook(quantity, price, isbn)
    VALUES (43, 39.99, '9780316211284');

INSERT INTO lelivre_online_book_store_laravel.ebook(quantity, price, isbn)
    VALUES (4, 196.70, '4440316211277');

INSERT INTO lelivre_online_book_store_laravel.ebook(quantity, price, isbn)
    VALUES (0, 46.99, '9780316876277');

INSERT INTO lelivre_online_book_store_laravel.ebook(quantity, price, isbn)
    VALUES (60, 88.99, '9780316211288');

INSERT INTO lelivre_online_book_store_laravel.ebook(quantity, price, isbn)
    VALUES (10, 24.99, '9780324561277');

INSERT INTO lelivre_online_book_store_laravel.ebook(quantity, price, isbn)
    VALUES (10, 24.99, '9780314411277');


--
-- Data related to Softback
--
 
INSERT INTO lelivre_online_book_store_laravel.softback(quantity, price, isbn)
    VALUES (22, 76.70, '9780316211277');

INSERT INTO lelivre_online_book_store_laravel.softback(quantity, price, isbn)
    VALUES (43, 56.79, '9780201107159');

INSERT INTO lelivre_online_book_store_laravel.softback(quantity, price, isbn)
    VALUES (21, 172.99, '9781448108534');

INSERT INTO lelivre_online_book_store_laravel.softback(quantity, price, isbn)
    VALUES (23, 49.99, '9781780890319');

INSERT INTO lelivre_online_book_store_laravel.softback(quantity, price, isbn)
    VALUES (65, 19.99, '9780316211284');

INSERT INTO lelivre_online_book_store_laravel.softback(quantity, price, isbn)
    VALUES (4, 196.70, '4440316211277');

INSERT INTO lelivre_online_book_store_laravel.softback(quantity, price, isbn)
    VALUES (5, 46.99, '9780316876277');

INSERT INTO lelivre_online_book_store_laravel.softback(quantity, price, isbn)
    VALUES (60, 78.99, '9780316211288');

INSERT INTO lelivre_online_book_store_laravel.softback(quantity, price, isbn)
    VALUES (10, 24.99, '9780324561277');

INSERT INTO lelivre_online_book_store_laravel.softback(quantity, price, isbn)
    VALUES (10, 34.99, '9780314411277');

	
--
-- Data related to Hardback
--

INSERT INTO lelivre_online_book_store_laravel.hardback(quantity, price, isbn)
    VALUES (70, 86.70, '9780316211277');

INSERT INTO lelivre_online_book_store_laravel.hardback(quantity, price, isbn)
    VALUES (20, 46.79, '9780201107159');

INSERT INTO lelivre_online_book_store_laravel.hardback(quantity, price, isbn)
    VALUES (49, 182.99, '9781448108534');

INSERT INTO lelivre_online_book_store_laravel.hardback(quantity, price, isbn)
    VALUES (10, 59.99, '9781780890319');

INSERT INTO lelivre_online_book_store_laravel.hardback(quantity, price, isbn)
    VALUES (21, 29.99, '9780316211284');

INSERT INTO lelivre_online_book_store_laravel.hardback(quantity, price, isbn)
    VALUES (4, 196.70, '4440316211277');

INSERT INTO lelivre_online_book_store_laravel.hardback(quantity, price, isbn)
    VALUES (5, 46.99, '9780316876277');

INSERT INTO lelivre_online_book_store_laravel.hardback(quantity, price, isbn)
    VALUES (60, 78.99, '9780316211288');

INSERT INTO lelivre_online_book_store_laravel.hardback(quantity, price, isbn)
    VALUES (10, 24.99, '9780324561277');

INSERT INTO lelivre_online_book_store_laravel.hardback(quantity, price, isbn)
    VALUES (10, 34.99, '9780314411277');

