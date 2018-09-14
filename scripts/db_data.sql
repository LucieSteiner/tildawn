USE tildawn;

INSERT INTO Teams(id, name, color)
  VALUES
    (1, "Asile", "bleu"),
	(2, "Usine", "jaune"),
	(3, "Abattoirs", "vert"),
	(4, "Caserne", "rouge"),
	(5, "Zombie", "noir");
	
INSERT INTO Players(lastname, firstname, gender, `group`, teamId)
  VALUES
	("Badan", "Alexandre", "M", "Scout Lavaux", 1),
	("Bartoli", "Jolan", "M", "Covatannaz", 1),
	("Becker", "Sonia", "F", "La Croisée", 3),
	("Bellottj", "Loïc", "M", "La Croisée", 2),
	("Bérard", "Emma", "F", "TDGL", 5),
	("Beyrami", "Zahra", "F", "Roselière", 4),
	("Blauth", "Yolan", "M", "TDGL", 5),
	("Bornand", "Eliot", "M", "La Croisée", 3),
	("Burnier", "Lauriane", "F", "La Croisée", 3),
	("Byrde", "Laura", "F", "Vieux-Mazel", 4),
	("Chappaz", "Jérémie", "M", "Pierre de Griuns", 4),
	("Chevalley", "Garance", "F", "La Roselière", 4),
	("Cisier", "Noah", "M", "La Venoge", 4),
	("Cloux", "Robin", "M", "La Harpe", 3),
	("Buffat", "David", "M", "Noirmont gland", 1),
	("Déglon", "Maya", "F", "Flambeaux Lausanne", 1),
	("Deschamps", "Aliénor", "F", "Gros-de-Vaud", 2),
	("Deschamps", "Eloïse", "F", "Gros-de-Vaud", 2), 
	("Desponds", "Oscar", "M", "Noirmont-Gland", 4),
	("Dogariu", "Sara", "F", "Sacré Coeur", 4),
	("Eglin", "Arthur", "M", "TDGL", 5),
	("Emery", "Thibaud", "M", "Covatannaz", 1),
	("Félix", "Anthony", "M", "Brigade Scoute de Lavaux", 3),
	("Fessler", "Yannick", "M", "Noirmont-Gland", 4),
	("Fluckiger", "Charles", "M", "Brigade de Montbenon", 2),
	("Flückiger", "Léonard", "M", "Montbenon", 2),
	("Fontaine", "Guillaume", "M", "TDGL", 3),
	("Garcia Muller", "Daniel", "M", "TDGL", 5),
	("Gay-Crosier", "Shéridane", "F", "St-Félix saxon", 1),
	("Gerber", "Vannak", "M", "Brigade scout de Lavaux", 3),
	("Gilliard", "Patrick", "M", "La Croisée", 3),
	("Gindroz", "David", "M", "La Croisée", 3),
	("Gollut", "Yeric", "M", "Pierre de Griuns", 4),
	("Goncerut", "Caroline", "F", "Orbe-Union", 5),
	("Greco", "Benjamin", "M", "Noirmont-Gland", 4),
	("Guerry", "Mandy", "F", "Grand chêne", 1),
	("Henry", "Matthieu", "M", "TDGL", 4),
	("Ineichen", "Thalia", "M", "La Roselière", 3),
	("Jaccottet", "Gaspard", "M", "Covatannaz", 1),
	("Jolidon", "Sonia", "F", "La Croisée", 3),
	("Kaeppeli", "Hugo", "M", "TDGL", 4),
	("Kaeppeli", "Zélia", "F", "TDGL", 5),
	("Kapossy", "Solène", "F", "Brigade de Montbenon", 2),
	("Kohli", "Cyril", "M", "Pierre de Griuns", 4),
	("Kolly", "Shélanne", "F", "Orbe-Union", 5),
	("Londero", "Maeva", "F", "Brigade de Montbenon", 1),
	("Maeder", "Eric", "M", "La Venoge", 1),
	("Mamin", "Alexandra", "F", "La Croisée", 3),
	("Maret", "Célien", "M", "Noirmont-Gland", 4),
	("Marques", "André", "M", "Tsalion", 1),
	("Mathey", "Jonas", "M", "Sacré-Coeur", 2),
	("Mattart", "Axel", "M", "Orbe-Union", 5),
	("Montero", "Nicolas", "M", "Brigade de Sauvabelin", 3),
	("Mottier", "Maël", "M", "La Venoge", 1),
	("Muhlethaler", "Aymeric", "M", "La Croisée", 1),
	("Neu", "Sarah", "F", "Grande Ourse", 5),
	("Neuenschwander", "Fabio", "M", "Brigade de Montbenon", 2),
	("Ney", "Lauriane", "F", "Grande Ourse", 5),
	("Novello", "Oriane", "F", "Gros-de-Vaud", 1),
	("Novello", "Mélia", "F", "Gros-de-Vaud", 2),
	("Pafumi", "Nicolas", "M", "Covatannaz", 1),
	("Pasche", "Samuel", "M", "Vieux-Mazel", 4),
	("Pasche", "Estelle", "F", "Gros-de-Vaud", 2),
	("Pasche", "Joddie", "F", "Grande Ourse", 5),
	("Péclard", "Céline", "F", "Covatannaz", 1),
	("Péclard", "Nelma", "F", "Covatannaz", 1),
	("Perez", "Emma", "F", "TDGL", 5),
	("Perriard", "Ysaline", "F", "Henry Dunant", 2),
	("Pieren", "Alyssa", "F", "Gros-de-Vaud", 2),
	("Recher", "Dimitri", "M", "Covatannaz", 1),
	("Robatti", "Auriane", "F", "TDGL", 5),
	("Rochat", "Morgane", "F", "Orbe Union", 5),
	("Rohrbach", "Niels", "M", "Pierre de Griuns", 4),
	("Rossier", "Samuel", "M", "Brigade scout de Lavaux", 3),
	("Rougeron", "Emeline", "F", "Flambeaux Lausanne", 1),
	("Rumpf", "Emmeline", "F", "TDGL", 5),
	("Sandoz", "Valentin", "M", "Vieux-Mazel", 4),
	("Sauge", "Ryan", "M", "Lac-Bleu", 2),
	("Saugy", "Leonard", "M", "La Croisée", 3),
	("Saugy", "Alexandre", "M", "La Croisée", 3),
	("Saugy", "Martin", "M", "La Croisée", 3),
	("Seuret", "Natacha", "F", "Grande Ourse", 5),
	("Séverac", "Damien", "M", "La Roselière", 1),
	("Soumillion", "Matej", "M", "La Croisée", 3),
	("Strefeler", "Michael", "M", "Brigade de Montbenon", 3),
	("Van herle", "Nicolas", "M", "TDGL", 5),
	("Van herle", "Sebastian", "M", "TDGL", 5),
	("Veillon", "Bethsabée", "F", "Brigade de Montbenon", 2),
	("Wettstein", "Maximilian", "M", "Montbenon", 2),
	("Widmann", "Alicia", "F", "Orbe-Union", 5),
	("Zedgitt", "Alessandro", "M", "Lac-Bleu", 2), 
	("Zellweger", "Simon", "M", "Trois Raisses Fleurier", 4),
	("Zürcher", "Kevin", "M", "Noirmont Gland", 4), 
	("Zweifel", "Robin", "M", "Lac-Bleu", 2),
	("Zweifel", "Nathan", "M", "Lac-Bleu", 2),
	("Zweifel", "Alexis", "M", "Lac-Bleu", 2);
	
	
INSERT INTO Objects(name, value, main)
  VALUES 
    ("Rack d''antidote", 210, TRUE),
	("Unité d''ionisation", 210, TRUE),
	("Mélangeur haute pression", 210, TRUE),
	("Objet central 4", 210, TRUE),
	("Objet central 5", 210, TRUE),
	("Cable 1", 90, FALSE),
	("Cable 2", 90, FALSE),
	("Cable 3", 90, FALSE),
	("Cable 4", 90, FALSE),
	("Cable 5", 90, FALSE),
	("Tuyaux 1", 90, FALSE),
	("Tuyaux 2", 90, FALSE),
	("Tuyaux 3", 90, FALSE),
	("Reposoir", 90, FALSE),
	("Barette", 90, FALSE);
	
	
INSERT INTO Alerts(title, text)
  VALUES
    ("Interruption momentanée du jeu", "Tout le monde en zone NEUTRE. Infos à suivre."),
	("ARRET DU JEU", "Tout le monde au point de rassemblement. Restez groupés!");
	
