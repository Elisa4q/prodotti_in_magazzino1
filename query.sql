create table prodotti
(
    'codice_prodotto' varchar(12),
    'descrizione' char(20),
    'prezzzo_unitario' integer,
    'quantità' integer
);


insert into prodotti ('codice_prodotto', 'descrizione', 'prezzo_unitario', 'quantità') values 
('001', 'Matita', '1', '10'),
('002', 'Penna', '1,2', '10'),
('003', 'Gomma', '1', '20'),
('004', 'Temperino', '2', '20'),
('005', 'Portapenne', '3', '30'),
('006', 'Quaderno', '1.5', '50'),
('007', 'Quaderno a buchi', '4.5', '55'),
('008', 'Foglio protocollo', '2', '20'),
('009', 'Trattopen', '3', '20'),
('010', 'Agenda', '3', '10');
