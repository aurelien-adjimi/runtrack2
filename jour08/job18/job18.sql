SELECT étage.nom, MAX(salles.capacité), salles.nom AS 'Biggest Room' FROM étage INNER JOIN salles WHERE étage.id = salles.id_étage;